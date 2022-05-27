<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
import TopNav from "@/components/TopNav.vue";
import DashboardNavLink from "@/Components/DashboardNav.vue";

const dashboardNavLinkStyle = "rounded bg-blue-400 text-white px-2 transition";
const dashboardHoverLinkCssStyle =
    "hover:rounded-2xl hover:bg-blue-400 hover:text-white px-2 transition";

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <TopNav />
            <div
                class="bg-white max-w-7xl mt-4 mx-auto py-2 px-4 flex space-x-2 rounded-4xl"
            >
                <DashboardNavLink name="Home" url="/dashboard" />
                <DashboardNavLink
                    name="Subjects"
                    url="/dashboard/subjects"
                    v-if="$page['props'].isAdmin"
                />
            </div>
            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
