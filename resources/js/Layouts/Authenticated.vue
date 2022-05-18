<script setup>
import { ref } from "vue";
import TopNav from "@/components/TopNav.vue";

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <TopNav />

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
