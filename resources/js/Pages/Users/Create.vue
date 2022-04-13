<template>
    <Head title="Manufacturers" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Users</h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <form class="bg-white/30 py-5" @submit.prevent="saveItem">
                    <div class="w-2xl mx-auto max-w-lg">
                        <!-- Form steps goes here -->
                        <div class="mb-6 hidden rounded-xl border border-green-100 py-3 px-5">
                            <div class="flex items-center justify-start divide-x-2">
                                <div class="flex items-center pr-2">
                                    <Icon icon="location" class="h-8 w-8 stroke-green-300" />
                                    <div class="ml-2 flex flex-col">
                                        <span class="text-xs text-slate-400">Step 1/3</span>
                                        <span class="text-sm text-slate-500"> Updating a user </span>
                                    </div>
                                </div>
                                <div class="flex items-center px-2">
                                    <Icon icon="location" class="h-8 w-8 stroke-green-300" />
                                    <div class="ml-2 flex hidden flex-col">
                                        <span class="text-xs text-slate-400">Step 2/3</span>
                                        <span class="text-sm text-slate-500"> Updating a manufacturer </span>
                                    </div>
                                </div>
                                <div class="flex items-center pl-2">
                                    <Icon icon="location" class="h-8 w-8 stroke-green-300" />
                                    <div class="ml-2 flex hidden flex-col">
                                        <span class="text-xs text-slate-400">Step 3/</span>
                                        <span class="text-sm text-slate-500"> Updating a manufacturer </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-600">Adding a user!</h2>
                        <div class="mt-6">
                            <BaseInput label="Name" v-model="form.name" :error="form.errors.name" class="" />
                            <BaseInput label="Description" v-model="form.description" :error="form.errors.description" class="" />

                            <div class="mt-8 flex items-center justify-end space-x-5">
                                <Link @click="reset" :href="route('users.index')" class="rounded-md bg-slate-400 px-8 py-2 text-white">Cancel</Link>
                                <button @click="saveItem" class="rounded-md bg-green-500 px-8 py-2 text-white" :disabled="form.processing">
                                    Save user
                                </button>
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
import BaseInput from '@/Shared/BaseInput.vue';
import Icon from '@/Shared/Icon.vue';

const form = useForm({
    name: '',
    description: '',
});

const saveItem = () => {
    form.post(route('users.store'));
};
const reset = () => {
    form.reset();
};
</script>
