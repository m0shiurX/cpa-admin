<template>
    <Head title="Manufacturers" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Members</h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <form class="bg-white/30 py-4" @submit.prevent="">
                    <div class="w-2xl mx-auto max-w-xl">
                        <h2 class="text-2xl font-bold"></h2>
                        <p class="mt-2 text-lg">Member Information:</p>
                        <div class="flex items-center py-3">
                            <div class="p-5">
                                <img class="-h-48 w-48 rounded-lg" :src="props.member.avatar" alt="" />
                            </div>
                            <table class="w-full table-auto whitespace-nowrap">
                                <tbody>
                                    <InfoRowVue label="Name" :value="props.member.name" />
                                    <InfoRowVue label="Designation" :value="props.member.designation" />
                                    <InfoRowVue label="Skype" :value="props.member.skype" />
                                    <InfoRowVue label="Whatsapp" :value="props.member.whatsapp" />
                                    <InfoRowVue label="Email" :value="props.member.email" />
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-6">
                            <div class="flex items-center justify-end space-x-5">
                                <Link as="button" :href="route('members.edit', member.id)" class="rounded-md bg-orange-500 px-8 py-2 text-white"
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
import InfoRowVue from '@/Shared/InfoRow.vue';

const props = defineProps({
    member: Object,
});

const destroyItem = () => {
    if (confirm('Are you sure you want to delete this organization?')) {
        Inertia.delete(route('members.destroy', props.member.id));
    }
};
</script>
