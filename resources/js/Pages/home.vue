<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
//components
import TopNav from "@/Components/TopNav.vue";
</script>
<template>
    <Head title="Skool" />
    <TopNav />
    <div
        class="container mx-auto mt-6 md:flex md:justify-between space-x-4 w-screen"
    >
        <div class="w-3/5">
            <div class="py-2 px-4 bg-white border rounded-sm">
                <h1 class="font-bold">
                    Welcome to Skool. We help you get and share the past
                    questions you have
                </h1>
            </div>
        </div>
        <div class="w-2/5">
            <div class="searform bg-white rounded-md py-0">
                <input
                    type="text"
                    name="searchbook"
                    id="searchbook"
                    class="outline-none selection:outline-none border-none w-3/4"
                />
                <button class="w-1/4 text-white bg-blue-400 p-2">Search</button>
            </div>
            <h1>Browse by Subject</h1>
        </div>
    </div>
</template>
