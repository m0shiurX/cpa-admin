<template>
    <Head title="Manufacturers" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Networks</h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <form class="bg-white/30 py-4" @submit.prevent="">
                    <div class="w-2xl mx-auto max-w-lg">
                        <h2 class="text-2xl font-bold"></h2>
                        <p class="mt-2 text-lg">Network Information:</p>
                        <div class="">
                            <pre>
                                    {{ network }}
                            </pre>
                        </div>
                        <div class="mt-6">
                            <div class="flex items-center justify-end space-x-5">
                                <Link as="button" :href="route('networks.edit', network.id)" class="rounded-md bg-orange-500 px-8 py-2 text-white"
                                    >EDIT</Link
                                >
                                <button @click.prevent="destroyItem" class="rounded-md bg-orange-500 px-8 py-2 text-white">Delete</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';

const props = defineProps({
    network: Object,
});

const destroyItem = () => {
    if (confirm('Are you sure you want to delete this organization?')) {
        // Inertia.delete(route('manufacturers.destroy', props.manufacturer.id));
    }
};
</script>
