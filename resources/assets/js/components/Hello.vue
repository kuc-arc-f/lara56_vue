<template>
    <h2>Hello <span class="name">{{name}}</span>!</h2>
</template>

<script>
    export default {
        props: ['name']
    }
</script>

<style scoped>
    .name {
        font-weight: bold;
    }
</style>

