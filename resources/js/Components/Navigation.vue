<script setup>
import Logo from './Logo.vue';
</script>

<template>
    <nav class="flex items-center justify-between">
        <!-- Brand Logo -->
        <a class="flex items-center gap-x-5" href="#">
            <Logo />
            <span class="text-2xl font-black text-slate-600">MONDOL IT</span>
        </a>
        <!-- Navigation menu items-->
        <div class="hidden items-center space-x-8 md:flex">
            <a href="#" class="bg-gradient-to-t from-green-200 via-white px-2 uppercase hover:bg-gradient-to-t hover:from-green-200 hover:via-white"
                >Home</a
            >
            <a href="#" class="uppercase hover:bg-gradient-to-t hover:from-green-200 hover:via-white">Services</a>
            <a href="#" class="uppercase hover:bg-gradient-to-t hover:from-green-200 hover:via-white">About</a>
            <a href="#" class="uppercase hover:bg-gradient-to-t hover:from-green-200 hover:via-white">Contact</a>
            <a href="#" class="rounded-lg border border-sky-600 py-3 px-3 font-semibold uppercase text-sky-600 hover:bg-sky-600 hover:text-white"
                >Start a Project</a
            >
        </div>
    </nav>
</template>
