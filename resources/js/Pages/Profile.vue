<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';
const props = defineProps({
    info: Object,
});

const verification_form = useForm({
    _method: 'put',
    nid_front: null,
    nid_back: null,
});

const uploadNID = () => {
    verification_form.post(`/profile/verification`, {
        onSuccess: () => verification_form.reset('nid_front', 'nid_back'),
    });
};
</script>

<template>
    <Head title="Profile" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Profile</h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="border-b border-gray-200 bg-white p-6">
                        <h2 class="text-xl">General</h2>
                        <div class="py-3">
                            <table class="w-full table-auto whitespace-nowrap">
                                <tbody class="">
                                    <tr class="h-14 rounded border border-slate-100 bg-slate-50 hover:bg-slate-300">
                                        <td class="w-48 border-r border-slate-100">
                                            <div class="flex items-center pl-5">
                                                <p class="mr-2 text-lg font-medium leading-none text-slate-700">Name</p>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="flex items-center pl-5">
                                                <p class="ml-1 truncate text-base leading-none text-slate-400">{{ props.info.name }}</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="h-1"></tr>

                                    <tr class="h-14 rounded border border-slate-100 bg-slate-50 hover:bg-slate-300">
                                        <td class="w-48 border-r border-slate-100">
                                            <div class="flex items-center pl-5">
                                                <p class="mr-2 text-lg font-medium leading-none text-slate-700">Email</p>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="flex items-center pl-5">
                                                <p class="ml-1 truncate text-base leading-none text-slate-400">{{ props.info.email }}</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="h-1"></tr>

                                    <tr class="h-14 rounded border border-slate-100 bg-slate-50 hover:bg-slate-300">
                                        <td class="w-48 border-r border-slate-100">
                                            <div class="flex items-center pl-5">
                                                <p class="mr-2 text-lg font-medium leading-none text-slate-700">Phone</p>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="flex items-center pl-5">
                                                <p class="ml-1 truncate text-base leading-none text-slate-400">{{ props.info.phone }}</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="h-1"></tr>

                                    <tr class="h-14 rounded border border-slate-100 bg-slate-50 hover:bg-slate-300">
                                        <td class="w-48 border-r border-slate-100">
                                            <div class="flex items-center pl-5">
                                                <p class="mr-2 text-lg font-medium leading-none text-slate-700">Address</p>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="flex items-center pl-5">
                                                <p class="ml-1 truncate text-base leading-none text-slate-700">{{ props.info.address }}</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="h-1"></tr>

                                    <tr class="h-14 rounded border border-slate-100 bg-slate-50 hover:bg-slate-300">
                                        <td class="w-48 border-r border-slate-100">
                                            <div class="flex items-center pl-5">
                                                <p class="mr-2 text-lg font-medium leading-none text-slate-700">NID Number</p>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="flex items-center pl-5">
                                                <p class="ml-1 truncate text-base leading-none text-slate-700">{{ props.info.n_id_no }}</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="h-1"></tr>

                                    <tr class="h-14 rounded border border-slate-100 bg-slate-50 hover:bg-slate-300">
                                        <td class="w-48 border-r border-slate-100">
                                            <div class="flex items-center pl-5">
                                                <p class="mr-2 text-lg font-medium leading-none text-slate-700">Facebook Profile</p>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="flex items-center pl-5">
                                                <p class="ml-1 truncate text-base leading-none text-slate-700">{{ props.info.fb_link }}</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="h-1"></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="border-b border-gray-200 bg-white p-6">
                        <h2 class="text-xl">Network</h2>
                        <div class="py-3">
                            <table class="w-full table-auto whitespace-nowrap">
                                <tbody class="">
                                    <tr class="h-14 rounded border border-slate-100 bg-slate-50 hover:bg-slate-300">
                                        <td class="w-48 border-r border-slate-100">
                                            <div class="flex items-center pl-5">
                                                <p class="mr-2 text-lg font-medium leading-none text-slate-700">Selected Network</p>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="flex items-center pl-5">
                                                <p class="ml-1 truncate text-base leading-none text-slate-400">{{ props.info.network_id }}</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="h-1"></tr>
                                    <tr class="h-14 rounded border border-slate-100 bg-slate-50 hover:bg-slate-300">
                                        <td class="w-48 border-r border-slate-100">
                                            <div class="flex items-center pl-5">
                                                <p class="mr-2 text-lg font-medium leading-none text-slate-700">Smartlink Code</p>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="flex items-center pl-5">
                                                <p class="ml-1 truncate text-base leading-none text-slate-400">{{ props.info.smartlink_code }}</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="h-1"></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="border-b border-gray-200 bg-white p-6">
                        <h2 class="text-xl">Verification</h2>
                        <div class="mt-3 rounded border border-slate-100 bg-slate-50 p-3">
                            <template v-if="props.info.is_approved === 1 && props.info.is_n_id_verified === 1">
                                <p>Congratulations! You are verified member!</p>
                            </template>
                            <template v-else>
                                <div v-if="props.info.n_id_front_path === null || props.info.n_id_back_path === null">
                                    <p class="text-lg text-orange-500">Please complete the following verification process.</p>
                                    <form @submit.prevent="uploadNID" class="flex flex-col gap-6">
                                        <div class="mt-3 rounded border px-5 py-3">
                                            <label class="mb-3 block text-gray-600">NID front side</label>
                                            <input
                                                @input="verification_form.nid_front = $event.target.files[0]"
                                                type="file"
                                                accept="image/png, image/jpeg"
                                                class="mb-3 block w-full text-sm text-slate-500 file:mr-4 file:rounded-full file:border-0 file:bg-green-200 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-green-700 hover:file:bg-green-100"
                                                required
                                            />
                                            <p class="mb-2 text-sm text-gray-400">
                                                Upload a clear photo of your NID card's front side where every corner is visible and readable.
                                            </p>
                                            <div v-if="verification_form.errors?.nid_front" class="text-xs text-red-400">
                                                {{ verification_form.errors.nid_front }}
                                            </div>
                                        </div>

                                        <div class="mt-3 rounded border px-5 py-3">
                                            <label class="mb-3 block text-gray-600">NID back side </label>
                                            <input
                                                @input="verification_form.nid_back = $event.target.files[0]"
                                                type="file"
                                                accept="image/png, image/jpeg"
                                                class="mb-3 block w-full text-sm text-slate-500 file:mr-4 file:rounded-full file:border-0 file:bg-green-200 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-green-700 hover:file:bg-green-100"
                                                required
                                            />
                                            <p class="mb-2 text-sm text-gray-400">
                                                Upload a clear photo of your NID card's back side where every corner is visible and readable.
                                            </p>
                                            <div v-if="verification_form.errors?.nid_back" class="text-xs text-red-400">
                                                {{ verification_form.errors.nid_back }}
                                            </div>
                                        </div>

                                        <div class="flex items-center justify-end">
                                            <button
                                                type="submit"
                                                class="w-full rounded-md bg-slate-700 px-8 py-2.5 text-center text-sm font-medium text-white hover:bg-slate-800 focus:ring-4 focus:ring-slate-300 dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800 sm:w-auto"
                                            >
                                                SUBMIT FOR VERIFICATION
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div v-else>
                                    <p>Thank you for uploading your NID, we will check and let you know the approval status soon.</p>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
