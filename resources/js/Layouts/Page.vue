<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
//components
import TopNav from "@/Components/TopNav.vue";
</script>
<template>
    <Head>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </Head>
    <TopNav />
    <div class="container mx-auto mt-6">
        <slot />
    </div>
</template>
