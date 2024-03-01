<script>
import { Dialog, DialogOverlay, TransitionRoot, TransitionChild, DialogPanel } from '@headlessui/vue';
import {nextTick, onMounted, onUnmounted, ref} from "vue";
import axios from "axios";

export default {
    components: {
        TransitionChild,
        TransitionRoot,
        Dialog,
        DialogPanel
    },
    setup() {
        let appUrl = import.meta.env.VITE_APP_URL;
        const dirty = ref(false)

        const isAppleOs = () => {
            const platform = navigator?.userAgent?.platform || navigator?.platform || "unknown"
            return /(Mac|iPhone|iPod|iPad)/i.test(platform);
        }
        const keyboardShortcut = isAppleOs() ? "⌘+K" : "Ctrl+K"
        const isOpen = ref(false)

        const onKeyDown = (event) => {
            if ((event.metaKey || event.ctrlKey) && event.key === 'k') {
                event.preventDefault()

                if (isOpen.value) return

                isOpen.value = true
            }
        };

        const results = ref([]);
        const resultsRefs = ref([])
        const selectedIndex = ref(0)

        const search = _.debounce(async (term) => {
            if (term.length === 0) {
                results.value = []
                return
            }

            let {data} = await axios.get(`${appUrl}/search?q=${term}`)
            results.value = data;
            dirty.value = true
            selectedIndex.value = 0

            await nextTick();
            resultsRefs.value = [];
        }, 250)

        const navigateResults = (event) => {
            if (event.code === 'ArrowDown') {
                if (selectedIndex.value === results.value.length - 1) {
                    selectedIndex.value = 0;
                } else {
                    selectedIndex.value++
                }
            } else if (event.code === 'ArrowUp') {
                if (selectedIndex.value === 0) {
                    selectedIndex.value = results.value.length - 1
                } else {
                    selectedIndex.value--;
                }
            }

            resultsRefs.value[selectedIndex.value]?.scrollIntoView(false)
        }

        const onTermKeydown = (event) => {
            if (['ArrowUp', 'ArrowDown'].includes(event.code)) {
                navigateResults(event)
                event.preventDefault()
            }
        }

        const onSubmit = (event) => {
            if (results.value[selectedIndex.value]) {
                let selected = results.value[selectedIndex.value]
                window.location = `/articles/${selected.locale}/${selected.slug}`
            }

            event.preventDefault()
        }

        onMounted(() => window.addEventListener('keydown', onKeyDown));
        onUnmounted(() => window.removeEventListener('keydown', onKeyDown));

        return {
            dirty,
            resultsRefs,
            selectedIndex,
            results,
            search,
            isOpen,
            keyboardShortcut,
            onTermKeydown,
            onSubmit,
            navigateResults
        }
    }
}
</script>

<template>
    <button
        @click="isOpen = true"
        v-bind="$attrs"
        class="flex items-center space-x-2 border border-red-900/15 shadow-sm px-3 py-1.5 hover:border-red-400 focus:outline-none focus:border-red-400 rounded-lg bg-white dark:bg-slate-800 dark:border-red-300">
        <span class="fa fa-search text-gray-400 -ml-1"></span>
        <span class="text-gray-400 flex-1 text-left text-sm">Recherche...</span>
        <span class="flex-none font-bold text-xs text-gray-400">{{ keyboardShortcut }}</span>
    </button>
    <TransitionRoot :show="isOpen" as="template">
        <Dialog
            as="div"
            @keydown="navigateResults"
            class="fixed inset-0 z-50 flex justify-center items-start"
            @close="isOpen = false">
            <TransitionChild
                enter="duration-200 ease-out"
                enter-from="opacity-0"
                enter-to="opacity-100"
                leave="duration-200 ease-in"
                leave-from="opacity-100"
                leave-to="opacity-0"
                as="template">
                <div class="fixed inset-0 bg-black bg-opacity-70" />
            </TransitionChild>
            <TransitionChild
                enter="duration-200 ease-out"
                enter-from="opacity-0 scale-95 -translate-y-20"
                enter-to="opacity-100 scale-100"
                leave="duration-200 ease-in"
                leave-from="opacity-100 scale-100"
                leave-to="opacity-0 scale-95 -translate-y-20"
                as="template">
                <DialogPanel
                    class="flex flex-col overflow-hidden w-full max-w-2xl bg-white rounded-lg mx-4 max-h-[80vh] mt-[10vh] relative dark:bg-slate-800">
                    <form
                        @submit="onSubmit"
                        class="relative flex items-center"
                        action="#">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <i class="fa fa-search text-gray-700"></i>
                        </div>


                        <input
                            @keydown="onTermKeydown"
                            @input="(e) => search(e.target.value)"
                            class="w-full py-4 pl-12 border-b border-gray-100 outline-none placeholder-gray-400 dark:bg-slate-800 dark:border-slate-700"
                            type="text"
                            placeholder="Recherche...">

                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <button
                                @click="isOpen = false"
                                class="flex items-center p-1.5 uppercase font-semibold tracking-wider text-gray-700 rounded-md border border-gray-200 focus:outline-none focus:border-gray-300 text-xxs dark:text-slate-400 dark:border-slate-400"
                                type="button">
                                Esc
                            </button>
                        </div>
                    </form>

                    <div class="overflow-auto">
                        <ul v-if="results.length > 0" class="divide-y divide-gray-100 dark:divide-slate-700">
                            <li
                                v-for="(item, index) in results"
                                :key="index"
                                :ref="el => {resultsRefs[index] = el}"
                                :class="selectedIndex === index ? 'bg-gray-100 dark:bg-gray-700': null"
                                @mousemove="selectedIndex = index">
                                <a
                                    class="flex flex-col justify-center px-4 py-2.5"
                                    :href="`/articles/${item.locale}/${item.slug}`">
                                    <p class="font-semibold text-gray-600 mt-1 dark:text-slate-500">{{ item.title }}</p>
                                    <p class="text-sm text-gray-400">{{ item.drugs.join(', ') }}</p>
                                </a>
                            </li>
                        </ul>

                        <p v-if="results.length === 0  && dirty" class="p-10 text-lg text-center text-gray-400">
                            Aucun résultat
                        </p>
                    </div>
                </DialogPanel>
            </TransitionChild>
        </Dialog>
    </TransitionRoot>
</template>
