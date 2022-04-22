<script setup>
import PageLayout from '../Layouts/Page.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';
import BreezeButton from '@/Components/Button.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import FlashMessages from '@/Shared/FlashMessages';
import BaseInput from '@/Shared/BaseInput.vue';

const props = defineProps({
    networks: Array,
});

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
    phone: '',
    address: '',
    network_id: null,
    smartlink_code: '',
    fb_link: '',
    nid_no: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Join us" />
    <PageLayout>
        <section class="container max-w-screen-xl py-20">
            <h1 class="mb-5 text-center font-heading text-4xl font-bold leading-tight text-gray-600 md:leading-normal xl:text-5xl">
                Join the network <br />
                <span class="text-sky-500">grow</span> faster.
            </h1>

            <form class="container max-w-screen-md space-y-3 py-10" @submit.prevent="submit">
                <div class="">
                    <FlashMessages />
                </div>

                <div>
                    <label class="text-xl">Choose a network</label>
                    <div class="mt-3 flex flex-wrap gap-y-3 gap-x-5">
                        <template v-for="(network, index) in props.networks.data" :key="index">
                            <div class="flex flex-1 items-center gap-x-2 rounded-md border border-gray-300 px-3 py-2 text-lg">
                                <input
                                    name="network"
                                    class="text-sky-500 focus:text-sky-500 focus:ring-sky-400"
                                    type="radio"
                                    :id="network.id"
                                    :value="network.id"
                                    v-model="form.network_id"
                                    required
                                />
                                <label class="w-full select-none" :for="network.id">{{ network.name }}</label>
                            </div>
                        </template>
                    </div>
                </div>
                <div>
                    <BaseInput label="Name" inputType="text" v-model="form.name" :error="form.errors.name" required autocomplete="name" />
                </div>
                <div class="mt-4">
                    <BaseInput label="Email" inputType="email" v-model="form.email" :error="form.errors.email" required autocomplete="email" />
                </div>
                <div class="mt-4">
                    <BaseInput label="Phone" inputType="tel" v-model="form.phone" :error="form.errors.phone" required autocomplete="tel" />
                </div>

                <div class="mt-4">
                    <BaseInput label="Address" inputType="text" v-model="form.address" :error="form.errors.address" required autocomplete="address" />
                </div>
                <div class="mt-4">
                    <BaseInput label="NID No." inputType="text" v-model="form.nid_no" :error="form.errors.nid_no" required />
                </div>
                <div class="mt-4">
                    <BaseInput label="Smartlink Code" inputType="text" v-model="form.smartlink_code" :error="form.errors.smartlink_code" required />
                </div>
                <div class="mt-4">
                    <BaseInput label="Facebook Profile Link" inputType="text" v-model="form.fb_link" :error="form.errors.fb_link" required />
                </div>

                <div class="mt-4">
                    <BaseInput
                        label="Password"
                        inputType="password"
                        v-model="form.password"
                        :error="form.errors.password"
                        required
                        autocomplete="new-password"
                    />
                </div>

                <div class="mt-4">
                    <BaseInput
                        label="Confirm Password"
                        inputType="password"
                        v-model="form.password_confirmation"
                        :error="form.errors.password_confirmation"
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
        <section class="container mt-10 max-w-screen-xl py-20">
            <div class="group flex flex-col items-center gap-y-10 gap-x-10 xl:flex-row">
                <div class="grid h-64 w-64 place-items-center p-5 ring-2 ring-slate-50 ring-offset-2 md:w-96">
                    <img src="@/assets/why.svg" alt="" class="h-auto w-full object-cover" />
                </div>
                <div class="w-auto pl-8">
                    <h3
                        class="relative max-w-screen-sm font-medium uppercase underline decoration-green-50 decoration-4 underline-offset-2 transition-all duration-300 group-hover:decoration-green-200"
                    >
                        Why work with us?
                    </h3>
                    <h2 class="mt-3 font-heading text-5xl leading-normal text-gray-700">Profitable and fast</h2>
                    <p class="mt-3 text-base font-normal text-gray-500">
                        We are giving the highest payout in the country and We have fast payment system. We have wise managers, Who will serve you all
                        the time. We invite you. Join with us, and be more profitable.
                    </p>
                    <p class="mt-3 text-lg font-normal text-gray-500">
                        <span class="font-semibold"> Our Payment System:</span> Bank, Bkash, Nagad, Rocket
                    </p>
                    <p class="mt-3 text-lg font-normal text-gray-500">
                        <span class="font-semibold">Payment Frequency:</span> Daily, Net-7, Net-15, Net-30
                    </p>
                    <p class="mt-3 text-lg font-normal text-red-400">
                        <span class="font-bold">Note:</span> Never try to cheat. If we detect it, we will take the legal action, so be careful &amp;
                        don't try to cheat.
                    </p>
                </div>
            </div>
        </section>
        <section class="container mt-10 max-w-screen-xl py-20">
            <div class="flex flex-col items-start gap-y-10 gap-x-10 xl:flex-row">
                <div class="grid h-64 w-64 place-items-start p-5 ring-2 ring-slate-50 ring-offset-2 md:w-64">
                    <img src="@/assets/terms.svg" alt="" class="h-auto w-48" />
                </div>
                <div class="w-auto pl-8">
                    <h3 class="relative max-w-screen-sm text-lg font-medium uppercase underline decoration-green-200 decoration-4 underline-offset-2">
                        Terms &amp; Conditions
                    </h3>
                    <ul class="mt-5 list-inside list-decimal text-base">
                        <li>You must use code and use the same code as a token.</li>
                        <li>If you have a $1 fraud on a smartlink, then the payment will be deducted for the last 7 days of that smartlink.</li>
                        <li>You can use maximum of 10 smartlinks.</li>
                        <li>You have to must push 60% traffic from USA.</li>
                        <li>You must avoid from working in Germany, Norway, Switzerland, Sweden, Denmark, Austria.</li>
                        <li>We have to pay 0.80% of your income as maintenance fee. ($100 = $0.80)</li>
                    </ul>
                </div>
            </div>
        </section>
    </PageLayout>
</template>
