<template>
    <div class="container">
        {{title}}
    </div>
</template>

<script>
    export default {
        data() {
            return {
                title: "Bootstrap & Vuejs",
                subtitle: "Component with Vuejs"
            }
        },
        mounted() {
            console.log('Title Component mounted.');
        }
    }
</script>
