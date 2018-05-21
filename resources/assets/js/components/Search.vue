<template>
    <transition name="bounce">
        <slot :show="show"></slot>
    </transition>
</template>

<style>
    .bounce-enter-active {
        animation: bounce-in .5s;
    }
    .bounce-leave-active {
        animation: bounce-in .5s reverse;
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
    export default {
        mounted() {
            this.$root.$on('toggleSearch', boolean => {
                this.show = ! this.show;
            });
        },

        data() {
            return {
                show: false
            }
        }
    }
</script>