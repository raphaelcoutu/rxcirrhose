<script>
import { ref, computed } from 'vue';

export default {
    props: {
        articles: {
            type: Array,
            required: true
        }
    },
    setup(props) {
        const searchQuery = ref('');

        const filteredArticles = computed(() => {
            if (!searchQuery.value.trim()) {
                return props.articles;
            }
            const query = searchQuery.value.toLowerCase().trim();
            return props.articles.filter(article =>
                article.title.toLowerCase().includes(query) ||
                (article.keywords && article.keywords.toLowerCase().includes(query))
            );
        });

        const groupedArticles = computed(() => {
            const groups = {};
            filteredArticles.value.forEach(article => {
                const letter = article.firstLetter;
                if (!groups[letter]) {
                    groups[letter] = [];
                }
                groups[letter].push(article);
            });
            return groups;
        });

        const sortedLetters = computed(() => {
            return Object.keys(groupedArticles.value).sort();
        });

        return {
            searchQuery,
            filteredArticles,
            groupedArticles,
            sortedLetters
        };
    }
}
</script>

<template>
    <div>
        <div class="relative mb-8">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <i class="fas fa-search text-gray-400"></i>
            </div>
            <input
                v-model="searchQuery"
                type="text"
                placeholder="Rechercher un médicament..."
                class="w-full pl-12 pr-4 py-4 rounded-xl border border-gray-200 shadow-sm focus:ring-2 focus:ring-red-500 focus:border-transparent dark:bg-slate-800 dark:border-slate-600 dark:text-white dark:placeholder-gray-500 transition-all duration-200"
            />
            <button
                v-if="searchQuery"
                @click="searchQuery = ''"
                class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600 dark:hover:text-gray-300"
            >
                <i class="fas fa-times"></i>
            </button>
        </div>

        <p class="text-sm text-gray-500 mb-6 dark:text-gray-400">
            {{ filteredArticles.length }} résultat{{ filteredArticles.length !== 1 ? 's' : '' }}
            <span v-if="searchQuery" class="ml-1">
                pour "<span class="font-medium">{{ searchQuery }}</span>"
            </span>
        </p>

        <div v-if="filteredArticles.length > 0">
            <div v-for="letter in sortedLetters" :key="letter" class="mb-8">
                <div class="flex items-center mb-4">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-red-100 text-red-600 font-bold text-lg dark:bg-red-900/30 dark:text-red-400">
                        {{ letter }}
                    </span>
                    <div class="flex-1 ml-4 h-px bg-gray-200 dark:bg-slate-700"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <a
                        v-for="article in groupedArticles[letter]"
                        :key="article.id"
                        :href="`/articles/${article.slug}`"
                        class="group bg-white rounded-xl border border-gray-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 dark:bg-slate-800 dark:border-slate-700 overflow-hidden"
                    >
                        <div class="h-1 bg-gradient-to-r from-red-500 to-red-600 group-hover:from-red-400 group-hover:to-red-500 transition-all duration-300"></div>

                        <div class="p-5">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-3 group-hover:text-red-600 dark:group-hover:text-red-400 transition-colors">
                                {{ article.title }}
                            </h3>

                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-50 text-red-700 dark:bg-red-900/30 dark:text-red-400">
                                <i class="fas fa-pills mr-1.5"></i>
                                {{ article.drugCount }} {{ article.drugCount === 1 ? 'médicament' : 'médicaments' }}
                            </span>

                            <div class="mt-3 flex justify-end text-gray-400 group-hover:text-red-500 transition-colors">
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div v-else class="text-center py-16">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gray-100 dark:bg-slate-800 mb-4">
                <i class="fas fa-search text-3xl text-gray-400 dark:text-slate-600"></i>
            </div>
            <h3 class="text-lg font-medium text-gray-600 dark:text-gray-400 mb-2">
                Aucun médicament trouvé
            </h3>
            <p class="text-gray-500 dark:text-gray-500">
                Essayez avec un autre terme de recherche
            </p>
        </div>
    </div>
</template>
