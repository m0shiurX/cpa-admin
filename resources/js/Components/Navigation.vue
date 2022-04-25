<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import Logo from './Logo.vue';
</script>

<template>
    <nav class="flex items-center justify-between">
        <!-- Brand Logo -->
        <Link :href="route('home')" class="flex items-center gap-x-5">
            <Logo class="w-48" />
        </Link>
        <!-- Navigation menu items-->
        <div class="hidden items-center space-x-8 md:flex">
            <a href="#" class="bg-gradient-to-t from-green-200 via-white px-2 uppercase hover:bg-gradient-to-t hover:from-green-200 hover:via-white"
                >Home</a
            >
            <a href="#" class="uppercase hover:bg-gradient-to-t hover:from-green-200 hover:via-white">Services</a>
            <a href="#" class="uppercase hover:bg-gradient-to-t hover:from-green-200 hover:via-white">About</a>
            <a href="#" class="uppercase hover:bg-gradient-to-t hover:from-green-200 hover:via-white">Contact</a>
            <Link
                :href="route('dashboard')"
                class="rounded-lg border border-sky-600 py-3 px-3 font-semibold uppercase text-sky-600 hover:bg-sky-600 hover:text-white"
                >Member Area</Link
            >
        </div>
    </nav>
</template>
