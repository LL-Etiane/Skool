<script setup>
const props = defineProps({
    name: String,
    year: String,
    user: String,
    downloadUrl: String,
});
</script>

<template>
    <div class="py-2 px-4 bg-white border rounded-sm mt-2">
        <h1 class="font-bold text-2xl">{{ name }}</h1>
        <h4 class="text-sm">
            <span class="text-blue-400">Year: </span>{{ year }}
            <span class="text-blue-400">Uploaded by: </span> {{ user }}
        </h4>
        <div class="flex justify-end">
            <button class="bg-blue-400 text-white py-1 px-2 rounded-sm">
                Download
            </button>
        </div>
    </div>
</template>
