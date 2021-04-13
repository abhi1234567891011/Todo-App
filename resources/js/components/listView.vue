<template>
    <div class="container-view">
        <div v-for="(item , index) in items" :key="index">

            <listItem :item="item" class="item" v-on:itemchanged="$emit('reloadlist')" />
        </div>
    </div>
</template>

<script>
import listItem from "./listItem";

    export default {
        props: ['items'],
        components: {
            listItem
        }
    }
</script>

<style scoped>
    .container-view{
        margin-top: 2rem;
        background-color: rgba(0,0,0,0.1);
    }
</style>