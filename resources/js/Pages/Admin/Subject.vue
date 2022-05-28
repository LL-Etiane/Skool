<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeValidationErrors from "@/Components/ValidationErrors.vue";
import { Head, useForm } from "@inertiajs/inertia-vue3";

const props = defineProps({
    subjects: Array,
    etiane: String,
});

const form = useForm({
    name: "",
});

const submit = () => {
    form.post(route("subjects.store"));
    form.reset();
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
                        <div
                            class="flex flex-col md:flex-row justify-between space-x-2 space-y-2"
                        >
                            <div
                                class="w-full md:w-2/5 border p-2 border-blue-400"
                            >
                                <BreezeValidationErrors class="mb-4" />
                                <form @submit.prevent="submit">
                                    <BreezeLabel for="name" value="name" />
                                    <input
                                        type="hidden"
                                        name="_token"
                                        id="token"
                                        value="{{csrf_token}}"
                                    />
                                    <BreezeInput
                                        id="name"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.name"
                                        required
                                        autofocus
                                    />
                                    <input
                                        type="submit"
                                        value="Add"
                                        class="bg-blue-400 text-white rounded text-center my-2 px-2 pb-2"
                                    />
                                </form>
                            </div>
                            <div class="w-full md:w-3/5">
                                <h1 class="text-center text-2xl">Subjects</h1>
                                <table class="w-full">
                                    <thead
                                        class="bg-gray-50 border-b-2 border-gray-200"
                                    >
                                        <tr>
                                            <th
                                                class="p-3 text-smm font-semibold tracking-whide text-left"
                                            >
                                                #
                                            </th>
                                            <th
                                                class="p-3 text-smm font-semibold tracking-whide text-left"
                                            >
                                                Name
                                            </th>
                                            <th
                                                class="p-3 text-smm font-semibold tracking-whide text-left"
                                                colspan="2"
                                            >
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="(
                                                subject, itemKey
                                            ) in subjects"
                                            :key="subject.id"
                                        >
                                            <td
                                                class="p-3 text-sm text-gray-700"
                                            >
                                                {{ itemKey + 1 }}
                                            </td>
                                            <td
                                                class="p-3 text-sm text-gray-700"
                                            >
                                                {{ subject.name }}
                                            </td>
                                            <td
                                                class="p-3 text-sm text-gray-700 flex space-x-2"
                                            >
                                                <button
                                                    class="bg-blue-400 text-white text-center px-2"
                                                >
                                                    Edit
                                                </button>
                                                <button
                                                    class="bg-red-400 text-white text-center px-2"
                                                >
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
