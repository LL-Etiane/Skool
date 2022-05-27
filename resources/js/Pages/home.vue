<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import PageLayout from "@/Layouts/Page.vue";
import PastQuestion from "@/Components/PastQuestion.vue";

const props = defineProps({
    subjects: Array,
});
</script>
<template>
    <Head title="Skool" />
    <PageLayout>
        <div
            class="flex flex-col md:flex-row md:justify-between space-x-4 space-y-4"
        >
            <div class="w-full md:w-3/5">
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
            <div class="w-full md:w-2/5 my-4 md:my-0">
                <div class="searform bg-white rounded-md py-0 mx-4 md:mx-0">
                    <input
                        type="text"
                        name="searchbook"
                        id="searchbook"
                        class="outline-none selection:outline-none border-none w-3/4"
                    />
                    <button class="w-1/4 text-white text-sm bg-blue-400 p-2">
                        Search
                    </button>
                </div>
                <div class="mt-2">
                    <h1>Browse by Subject</h1>
                    <div class="flex flex-wrap mt-2">
                        <Link
                            href="#"
                            class="bg-white text-blue-400 px-2 py-1 rounded-md mr-2 mt-2"
                            v-for="subject in subjects"
                            :key="subject.id"
                            >{{ subject.name }}</Link
                        >
                    </div>
                </div>
            </div>
        </div>
    </PageLayout>
</template>
