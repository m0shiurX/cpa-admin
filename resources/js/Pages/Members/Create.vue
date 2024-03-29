<template>
    <Head title="Team Members" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Team Members</h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <form class="bg-white/30 py-5" @submit.prevent="saveItem">
                    <div class="w-2xl mx-auto max-w-lg">
                        <h2 class="text-2xl font-bold text-gray-600">Adding a member!</h2>
                        <div class="mt-6">
                            <BaseInput label="Name" v-model="form.name" :error="form.errors.name" class="" />
                            <div>
                                <label class="text-xl">Select the designation</label>
                                <div class="mt-3 flex flex-wrap gap-y-3 gap-x-5">
                                    <template v-for="(designation, index) in designations" :key="index">
                                        <div class="flex flex-1 items-center gap-x-2 rounded-md border border-green-300 px-3 py-2 text-lg">
                                            <input
                                                class="text-sky-500 focus:text-sky-500 focus:ring-sky-400"
                                                type="radio"
                                                :id="designation.id"
                                                :value="designation.value"
                                                v-model="form.designation"
                                                required
                                            />
                                            <label class="w-full select-none" :for="designation.id">{{ designation.name }}</label>
                                        </div>
                                    </template>
                                    <div v-if="form.errors?.designation" class="text-sm text-red-500">{{ form.errors.designation }}</div>
                                </div>
                            </div>
                            <BaseInput label="Skype" v-model="form.skype" :error="form.errors.skype" class="" />
                            <BaseInput label="Whatsapp" v-model="form.whatsapp" :error="form.errors.whatsapp" class="" />
                            <BaseInput label="Email" v-model="form.email" :error="form.errors.email" class="" />
                            <div class="mt-3 py-3">
                                <label class="mb-3 block text-xl">Choose a photo </label>
                                <input
                                    @input="form.avatar = $event.target.files[0]"
                                    type="file"
                                    accept="image/png, image/jpeg"
                                    class="mb-3 block w-full rounded-lg text-sm text-slate-500 outline outline-1 outline-green-400 file:mr-4 file:rounded-l-lg file:border-0 file:bg-green-200 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-green-700 hover:file:bg-green-100 focus:outline-green-500"
                                />
                                <p class="mb-2 text-sm text-gray-400">Please upload photo smaller than 1 Mb.</p>

                                <div v-if="form.errors?.avatar" class="text-xs text-red-400">
                                    {{ form.errors.avatar }}
                                </div>
                            </div>

                            <div class="mt-8 flex items-center justify-end space-x-5">
                                <Link @click="reset" :href="route('members.index')" class="rounded-md bg-slate-400 px-8 py-2 text-white">Cancel</Link>
                                <button @click="saveItem" class="rounded-md bg-green-500 px-8 py-2 text-white" :disabled="form.processing">
                                    Save Team Member
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
import { ref } from 'vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import BaseInput from '@/Shared/BaseInput.vue';
import Icon from '@/Shared/Icon.vue';

const form = useForm({
    name: '',
    designation: '',
    avatar: null,
    skype: '',
    whatsapp: '',
    email: '',
});

const designations = ref([
    {
        id: 1,
        name: 'CEO',
        value: 'CEO',
    },
    {
        id: 2,
        name: 'HR Manager',
        value: 'HR Manager',
    },
    {
        id: 3,
        name: 'Manager',
        value: 'Manager',
    },
]);

const saveItem = () => {
    form.post(route('members.store'), {
        onSuccess: () => form.reset('avatar'),
    });
};

const reset = () => {
    form.reset();
};
</script>
