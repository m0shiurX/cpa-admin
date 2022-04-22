<template>
    <Head title="Users" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">User</h2>
        </template>
        <FlashMessages />
        <div class="py-12">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <form class="bg-white/30 py-4" @submit.prevent="">
                    <div class="w-2xl mx-auto max-w-lg">
                        <h2 class="text-xl">User Information:</h2>
                        <div class="py-3">
                            <table class="w-full table-auto whitespace-nowrap">
                                <tbody class="">
                                    <InfoRowVue label="Name" :value="props.user.name" />
                                    <InfoRowVue label="Email" :value="props.user.email" />
                                    <InfoRowVue label="Phone" :value="props.user.phone" />
                                    <InfoRowVue label="Address" :value="props.user.address" />
                                    <InfoRowVue label="Network" :value="props.user.network_name" />
                                    <InfoRowVue label="Facebook Link" :value="props.user.fb_link" />
                                    <InfoRowVue label="Smartlink Code" :value="props.user.smartlink_code" />
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-6">
                            <div class="flex items-center justify-end space-x-5">
                                <Link as="button" :href="route('users.edit', user.id)" class="rounded-md bg-green-500 px-8 py-2 text-white"
                                    >EDIT</Link
                                >
                                <button @click.prevent="destroyItem" class="rounded-md bg-orange-400 px-8 py-2 text-white">Delete</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="w-2xl mx-auto max-w-lg py-12">
                    <h2 class="text-xl">Verification Information:</h2>
                    <div class="py-3">
                        <table class="w-full table-auto whitespace-nowrap">
                            <tbody class="">
                                <InfoRowVue label="NID No" :value="props.user.nid_no" />
                                <tr class="h-14 rounded border border-slate-100 bg-slate-50 hover:bg-slate-300">
                                    <td class="w-48 border-r border-slate-100">
                                        <div class="flex items-center pl-5">
                                            <p class="mr-2 text-lg font-medium leading-none text-slate-700">NID FRONT</p>
                                        </div>
                                    </td>
                                    <td class="">
                                        <div class="flex items-center pl-5">
                                            <p class="ml-1">
                                                <a :href="props.user.nid_front" target="_blank">
                                                    <img :src="props.user.nid_front" alt="" />
                                                </a>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="h-14 rounded border border-slate-100 bg-slate-50 hover:bg-slate-300">
                                    <td class="w-48 border-r border-slate-100">
                                        <div class="flex items-center pl-5">
                                            <p class="mr-2 text-lg font-medium leading-none text-slate-700">NID BACK</p>
                                        </div>
                                    </td>
                                    <td class="">
                                        <div class="flex items-center pl-5">
                                            <p class="ml-1">
                                                <a :href="props.user.nid_back" target="_blank">
                                                    <img :src="props.user.nid_back" alt="" />
                                                </a>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-6" v-if="props.user.is_approved === 0 && props.user.nid_verified === 0">
                        <div class="flex items-center justify-end space-x-5">
                            <button @click.prevent="approveUser" class="rounded-md bg-green-500 px-8 py-2 text-white">Approve</button>
                            <button @click.prevent="disApproveUser" class="rounded-md bg-orange-400 px-8 py-2 text-white">Disapprove</button>
                        </div>
                    </div>
                    <div class="mt-6" v-else-if="props.user.is_approved === 1 && props.user.nid_verified === 1">
                        <div class="flex items-center justify-center space-x-5">
                            <p class="text-2xl text-green-500">Already Verified</p>
                        </div>
                    </div>
                    <div class="mt-6" v-else>
                        <div class="flex items-center justify-center space-x-5">
                            <p class="text-2xl text-gray-500">Incomplete submission</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import InfoRowVue from '@/Shared/InfoRow.vue';
import FlashMessages from '@/Shared/FlashMessages.vue';

const props = defineProps({
    user: Object,
});

const approvalForm = useForm({
    _method: 'put',
    token: null,
});

const approveUser = () => {
    approvalForm.post(route('users.verification', props.user.id));
};

const disApproveUser = () => {
    // approvalForm.put(route('users.verification', props.user.id));
};

const destroyItem = () => {
    if (confirm('Are you sure you want to delete this organization?')) {
        Inertia.delete(route('users.destroy', props.user.id));
    }
};
</script>
