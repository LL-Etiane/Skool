<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import PageLayout from "@/Layouts/Page.vue";
import PastQuestion from "@/Components/PastQuestion.vue";
</script>
<template>
    <Head title="Skool" />
    <PageLayout>
        <div class="md:flex md:justify-between space-x-4">
            <div class="w-3/5">
                <div class="py-2 px-4 bg-white border rounded-sm">
                    <h1 class="font-bold">
                        Welcome to Skool. We help you get and share the past
                        questions you have
                    </h1>
                </div>

                <PastQuestion
                    name="Financial accounting"
                    year="2022"
                    user="etiand"
                    downloaad-url="4"
                />
            </div>
            <div class="w-2/5">
                <div class="searform bg-white rounded-md py-0">
                    <input
                        type="text"
                        name="searchbook"
                        id="searchbook"
                        class="outline-none selection:outline-none border-none w-3/4"
                    />
                    <button class="w-1/4 text-white bg-blue-400 p-2">
                        Search
                    </button>
                </div>
                <div class="mt-2">
                    <h1>Browse by Subject</h1>
                    <div class="flex space-x-2 space-y-2 flex-wrap mt-2">
                        <Link
                            href="#"
                            class="bg-white text-blue-400 px-2 py-1 rounded-md"
                            >Accounting</Link
                        >
                        <Link
                            href="#"
                            class="bg-white text-blue-400 px-2 py-1 rounded-md"
                            >Accounting</Link
                        >
                        <Link
                            href="#"
                            class="bg-white text-blue-400 px-2 py-1 rounded-md"
                            >Accounting</Link
                        >
                        <Link
                            href="#"
                            class="bg-white text-blue-400 px-2 py-1 rounded-md"
                            >Accounting</Link
                        >
                        <Link
                            href="#"
                            class="bg-white text-blue-400 px-2 py-1 rounded-md"
                            >Accounting</Link
                        >
                        <Link
                            href="#"
                            class="bg-white text-blue-400 px-2 py-1 rounded-md"
                            >Accounting</Link
                        >
                    </div>
                </div>
            </div>
        </div>
    </PageLayout>
</template>
