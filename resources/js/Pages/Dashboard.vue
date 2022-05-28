<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, useForm } from "@inertiajs/inertia-vue3";
import BreezeValidationErrors from "@/Components/ValidationErrors.vue";

const props = defineProps({
    isAdmin: Boolean,
    subjects: Array,
});

const form = useForm({
    name: "",
    year: "",
    description: "",
    subject: "",
    file: "",
});

const upload = () => {
    form.post(route("pastQuestion.store"));
    form.reset6y;
};
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1 class="text-2xl font-bold text-center mb-2">
                            Upload a past question
                        </h1>
                        <BreezeValidationErrors class="mb-4" />
                        <div
                            class="p-4 text-green-400 font-bold"
                            v-if="$page.props.flash"
                        >
                            {{ $page.props.flash.message }}
                        </div>
                        <form
                            @submit.prevent="upload"
                            class="w-full border-2 border-blue-400 rounded-sm p-4"
                        >
                            <progress v-if="form.progress">
                                {{ form.progress.percentage }}%
                            </progress>
                            <div class="mb-2">
                                <label for="name">Question name</label> <br />
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    required
                                    class="p-1 w-full border-gray-300 rounded-md shadow-sm"
                                    v-model="form.name"
                                />
                            </div>
                            <div class="mb-2">
                                <label for="year"> Year </label> <br />
                                <input
                                    type="month"
                                    name="year"
                                    id="year"
                                    required
                                    class="p-1 w-full border-gray-300 rounded-md shadow-sm"
                                    v-model="form.year"
                                />
                            </div>
                            <div class="mb-2">
                                <label for="description"
                                    >Description (optional)</label
                                >
                                <textarea
                                    name=""
                                    id="description"
                                    class="p-1 w-full border-gray-300 rounded-md shadow-sm"
                                    v-model="form.description"
                                ></textarea>
                            </div>
                            <div class="mb-2">
                                <label for="subject">Subject</label> <br />
                                <select
                                    name="subject"
                                    id="subject"
                                    required
                                    class="p-1 w-full border-gray-300 rounded-md shadow-sm"
                                    v-model="form.subject"
                                >
                                    <option value="">
                                        --Select a subject--
                                    </option>
                                    <option
                                        v-for="subject in subjects"
                                        :key="subject.id"
                                        :value="subject.id"
                                    >
                                        {{ subject.name }}
                                    </option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="questionfile"
                                    >Question
                                    <span class="text-tiny"
                                        >(pdf,word only)</span
                                    >
                                </label>
                                <br />
                                <input
                                    type="file"
                                    name="questionfile"
                                    id="questionfile"
                                    @input="form.file = $event.target.files[0]"
                                    required
                                    class="p-1 w-full border-gray-300 rounded-md shadow-sm"
                                />
                            </div>

                            <input
                                type="submit"
                                value="Upload"
                                class="bg-blue-400 text-center px-2 text-white rounded-md pb-1 hover:cursor-pointer"
                            />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
