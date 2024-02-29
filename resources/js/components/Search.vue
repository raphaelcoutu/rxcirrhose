<template>
    <transition name="bounce">
        <section class="absolute z-10" v-show="show">
            <div class="mx-auto container h-auto bg-red-100 rounded-b shadow-md">
                <div class=" flex w-full">
                    <div class="mx-auto w-2/5 relative flex">
                        <input type="search" ref="query" class="py-2 pl-10 my-2 w-full rounded" placeholder="Rechercher ...." v-model="query" @keyup="getArticles()" @keyup.esc="clear()">
                        <svg class="absolute pin-l pin-t mt-3 ml-2 h-6 w-6 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M112 32C50.1 32 0 82.1 0 144v224c0 61.9 50.1 112 112 112s112-50.1 112-112V144c0-61.9-50.1-112-112-112zm48 224H64V144c0-26.5 21.5-48 48-48s48 21.5 48 48v112zm139.7-29.7c-3.5-3.5-9.4-3.1-12.3.8-45.3 62.5-40.4 150.1 15.9 206.4 56.3 56.3 143.9 61.2 206.4 15.9 4-2.9 4.3-8.8.8-12.3L299.7 226.3zm229.8-19c-56.3-56.3-143.9-61.2-206.4-15.9-4 2.9-4.3 8.8-.8 12.3l210.8 210.8c3.5 3.5 9.4 3.1 12.3-.8 45.3-62.6 40.5-150.1-15.9-206.4z"/></svg>
                        <button @click="clear()" tabindex="1" class="bg-transparent border border-transparent hover:border-gray-400 rounded text-gray-600 font-semibold p-1 self-center ml-4 text-2xl">&times;</button>
                    </div>
                </div>
                <div class="py-4 flex flex-col">
                    <a :href="`/articles/${item.locale}/${item.slug}`" class="search-item" tabindex="0" v-for="item in results" :key="item.id">{{ item.title }}</a>
                    <div class="mx-auto w-2/5">
                        <p class="search-not-found" v-if="dirty &&!results.length">Aucun résultat trouvé.</p>
                    </div>
                </div>
            </div>
        </section>
    </transition>
</template>

<style>
    .bounce-enter-active {
        animation: bounce-in .3s;
    }
    .bounce-leave-active {
        animation: bounce-in .1s reverse;
    }
    @keyframes bounce-in {
        0% {
            transform: translateY(-20px);
            opacity: 0;
        }
        100% {
            transform: translateY(0px);
            opacity: 100;
        }
    }
</style>

<script>
    import { EventBus } from './../event-bus';
    import axios from 'axios';
    import _ from 'lodash';
    import Vue from 'vue'

    export default {
        mounted() {
            EventBus.$on('toggleSearch', boolean => {
                this.show = !this.show;
                if (this.show){
                    let self = this
                    Vue.nextTick().then(() => self.$refs.query.focus());
                }
            });
        },

        data() {
            return {
                query: null,
                show: false,
                results: [],
                appUrl: import.meta.env.VITE_APP_URL
            }
        },

        methods: {
            getArticles: _.debounce(function() {
                if(!this.query || this.query == "" || this.query.length < 3) return;

                axios.get(`${this.appUrl}/search?q=${this.query}`)
                    .then((response) => {
                        if (response.data) {
                            this.results = response.data;
                        }
                    });
            }, 300),

            clear() {
                this.query = null;
                this.show = false;
                this.results = []
            }
        },

        computed: {
            dirty() {
                return this.query !== null;
            }
        }
    }
</script>
