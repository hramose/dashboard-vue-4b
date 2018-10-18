<template>
    <nav class="navbar sticky-top navbar-expand-md navbar-light bg-light" id="navbar-wrapper">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" @click="showMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand text-left title-dashboard" href="" v-text="title"></a>
    </nav>
</template>

<script>
    import { EventBus } from '../EventBus.js';

    export default {
        name: 'Navbar',
        data() {
            return {
                title: 'Dashboard',
                menu: false
            }
        },
        methods: {
            showMenu() {
                EventBus.$emit('showMenu');
            }
        },
        mounted() {
            EventBus.$on('changeView', data => {
                this.title = data;
            });
        }
    }
</script>
