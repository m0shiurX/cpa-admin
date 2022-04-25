<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
import Logo from './Logo.vue';
const showingNavigationDropdown = ref(false);
</script>

<template>
    <nav class="relative flex items-center justify-between">
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
        <!-- Hamburger -->
        <div class="-mr-2 flex items-center sm:hidden">
            <button
                @click="showingNavigationDropdown = !showingNavigationDropdown"
                class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none"
            >
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path
                        :class="{
                            hidden: showingNavigationDropdown,
                            'inline-flex': !showingNavigationDropdown,
                        }"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                    <path
                        :class="{
                            hidden: !showingNavigationDropdown,
                            'inline-flex': showingNavigationDropdown,
                        }"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>
            </button>
        </div>
        <!-- Responsive Navigation Menu -->
        <div
            :class="{
                block: showingNavigationDropdown,
                hidden: !showingNavigationDropdown,
            }"
            class="absolute top-16 w-full bg-white shadow-lg sm:hidden"
        >
            <div class="flex w-full flex-col gap-y-1 p-2 pb-3">
                <a href="#" class="bg-gray-100 p-2 uppercase">Home</a>
                <a href="#" class="bg-gray-100 p-2 uppercase">Services</a>
                <a href="#" class="bg-gray-100 p-2 uppercase">About</a>
                <a href="#" class="bg-gray-100 p-2 uppercase">Contact</a>
                <Link
                    :href="route('dashboard')"
                    class="inline-block w-full rounded-md border border-sky-600 p-2 font-semibold uppercase text-sky-600 hover:bg-sky-600 hover:text-white"
                    >Member Area</Link
                >
            </div>
        </div>
    </nav>
</template>
