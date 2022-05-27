<script setup>
import { Link } from "@inertiajs/inertia-vue3";
const props = defineProps({
    name: String,
    url: String,
});
</script>

<template>
    <Link
        class="hover:rounded hover:bg-blue-400 hover:text-white px-2 pb-1 transition text-center items-center"
        :class="{
            'rounded bg-blue-400 text-white px-2 transition': $page.url === url,
        }"
        :href="url"
        >{{ name }}</Link
    >
</template>
