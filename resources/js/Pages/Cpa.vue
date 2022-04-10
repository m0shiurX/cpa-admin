<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Footer from '../Components/Footer.vue';
import Navigation from '../Components/Navigation.vue';
</script>

<template>
    <Head title="CPA" />
    <header class="container mt-9 h-screen max-w-screen-xl">
        <Navigation />
    </header>

    <Footer />
</template>
