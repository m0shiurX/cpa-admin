<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import Footer from '../Components/Footer.vue';
import Navigation from '../Components/Navigation.vue';
</script>

<template>
    <header class="container max-w-screen-xl pt-8">
        <Navigation />
    </header>

    <slot />
    <Footer />
</template>
