<script setup>
import PageLayout from '../Layouts/Page.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';
import BreezeButton from '@/Components/Button.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';

const networks = ref([
    { id: 1, name: 'Datify' },
    { id: 2, name: 'losPollos' },
    { id: 3, name: 'iMonetizeIt' },
    { id: 4, name: 'Trafee' },
    { id: 5, name: 'ClickDealer' },
    { id: 6, name: 'CpaFull' },
]);

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
    phone: '',
    address: '',
    network_id: null,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="CPA" />
    <PageLayout>
        <section class="container max-w-screen-xl py-20">
            <h1 class="mb-5 text-center font-heading text-4xl font-bold leading-tight text-gray-600 md:leading-normal xl:text-5xl">
                Join the network <br />
                <span class="text-sky-500">grow</span> faster.
            </h1>

            <form class="container max-w-screen-md space-y-3 py-10" @submit.prevent="submit">
                <div>
                    <label class="text-xl">Choose a network</label>
                    <div class="mt-3 flex flex-wrap gap-y-3 gap-x-5">
                        <template v-for="(network, index) in networks" :key="index">
                            <div class="flex flex-1 items-center gap-x-2 rounded-md border border-gray-300 px-3 py-2 text-lg">
                                <input
                                    name="network"
                                    class="text-sky-500 focus:text-sky-500 focus:ring-sky-400"
                                    type="radio"
                                    :id="network.id"
                                    :value="network.id"
                                    v-model="form.network_id"
                                />
                                <label class="w-full select-none" :for="network.id">{{ network.name }}</label>
                            </div>
                        </template>
                    </div>
                </div>
                <div>
                    <BreezeLabel for="name" value="Name" />
                    <BreezeInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <BreezeLabel for="email" value="Email" />
                    <BreezeInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autocomplete="email" />
                </div>
                <div class="mt-4">
                    <BreezeLabel for="phone" value="Phone" />
                    <BreezeInput id="phone" type="tel" class="mt-1 block w-full" v-model="form.phone" required autocomplete="tel" />
                </div>

                <div class="mt-4">
                    <BreezeLabel for="address" value="Address" />
                    <BreezeInput id="address" type="text" class="mt-1 block w-full" v-model="form.address" required autocomplete="address" />
                </div>

                <div class="mt-4">
                    <BreezeLabel for="password" value="Password" />
                    <BreezeInput
                        id="password"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password"
                        required
                        autocomplete="new-password"
                    />
                </div>

                <div class="mt-4">
                    <BreezeLabel for="password_confirmation" value="Confirm Password" />
                    <BreezeInput
                        id="password_confirmation"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password_confirmation"
                        required
                        autocomplete="new-password"
                    />
                </div>
                <div class="mt-4 flex items-center justify-end">
                    <Link :href="route('login')" class="text-sm text-gray-600 underline hover:text-gray-900"> Already registered? </Link>

                    <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Register </BreezeButton>
                </div>
            </form>
        </section>
    </PageLayout>
</template>
