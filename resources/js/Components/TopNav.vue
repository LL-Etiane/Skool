<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <div class="shadow-md py-2 bg-white">
        <div class="container mx-auto flex justify-between items-center">
            <Link href="/" class="font-bold text-4xl">Skool</Link>
            <div class="links flex space-x-2">
                <Link
                    href="/dashboard"
                    class="font-bold"
                    :class="{ 'text-blue-400': $page.url === '/dashboard' }"
                    v-if="$page.props.auth.user"
                >
                    Dashboard
                </Link>
                <Link
                    :href="route('logout')"
                    method="post"
                    as="button"
                    class="font-bold"
                    v-if="$page.props.auth.user"
                >
                    Logout
                </Link>
                <Link
                    href="/login"
                    class="font-bold"
                    :class="{ 'text-blue-400': $page.url === '/login' }"
                    v-if="!$page.props.auth.user"
                >
                    Login
                </Link>
                <Link
                    href="/register"
                    class="font-bold"
                    :class="{ 'text-blue-400': $page.url === '/register' }"
                    v-if="!$page.props.auth.user"
                >
                    Register
                </Link>
            </div>
        </div>
    </div>
</template>
