<template>
    <a href="#" @click="toggle()"><i class="fa fa-search"></i></a>
</template>

<script>
    export default {
        methods: {
            toggle() {
                this.$root.$emit('toggleSearch');
            }
        }
    }
</script>