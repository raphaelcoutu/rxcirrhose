<template>
    <a href="#" @click="toggle()"><i class="fa fa-search"></i></a>
</template>

<script>
    import { EventBus } from './../event-bus';

    export default {
        methods: {
            toggle() {
                EventBus.$emit('toggleSearch');
            }
        }
    }
</script>
