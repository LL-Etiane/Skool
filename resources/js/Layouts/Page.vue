<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
//components
import TopNav from "@/Components/TopNav.vue";
</script>
<template>
    <TopNav />
    <div class="container mx-auto mt-6">
        <slot />
    </div>
</template>
