/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

import Search from './components/Search.vue';
import DarkModeToggle from './components/DarkModeToggle.vue';
import ArticleSearch from './components/ArticleSearch.vue';

import { createApp, onMounted, ref } from 'vue'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

createApp({
    setup() {
        const mobileMenu = ref(false)
        const isDark = ref(false)

        const toggleMobileMenu = () => {
            mobileMenu.value = !mobileMenu.value
        }

        const toggleDark = () => {
            isDark.value = !isDark.value
            if (isDark.value) {
                document.documentElement.classList.add('dark')
                localStorage.theme = 'dark'
            } else {
                document.documentElement.classList.remove('dark')
                localStorage.theme = 'light'
            }
        }

        onMounted(() => {
            if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                isDark.value = true
                document.documentElement.classList.add('dark')
            } else {
                isDark.value = false
                document.documentElement.classList.remove('dark')
            }
        })

        return {
            mobileMenu,
            toggleMobileMenu,
            isDark,
            toggleDark
        }
    }
})
    .component('cirrhose-search', Search)
    .component('dark-mode-toggle', DarkModeToggle)
    .component('article-search', ArticleSearch)
    .mount('#app')
