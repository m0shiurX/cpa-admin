<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Footer from '../Components/Footer.vue';
import Navigation from '../Components/Navigation.vue';
import Icon from '@/Shared/Icon.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    teamMembers: Object,
});
</script>

<template>
    <Head title="Mondol IT Limited" />
    <div class="h-screen bg-hero bg-contain bg-bottom bg-no-repeat pt-8">
        <header id="top__header" class="container h-full max-w-screen-xl">
            <!-- Main Navigation -->
            <Navigation />
            <!-- hero content -->
            <div class="mx-auto mt-56 flex max-w-3xl flex-col items-center space-y-4 text-center">
                <h1 class="mb-5 font-heading text-3xl font-medium leading-10 text-gray-800 md:leading-10 xl:text-4xl xl:leading-normal">
                    We are giving <span class="font-semibold text-sky-500">the highest payout</span> in the country with
                    <span class="underline decoration-sky-500 underline-offset-2"> the fastest payment</span> system. <br />
                    <span class="text-2xl font-normal"> We have wise managers to serve you <span class="text-sky-500">24x7</span>. </span>
                </h1>
                <Link v-if="canRegister" :href="route('join')" class="block rounded-lg bg-green-600 px-8 py-4 uppercase text-white">
                    Join our Network
                </Link>
            </div>
        </header>
    </div>
    <!-- Clients/Brands -->
    <div class="min-h-40 bg-sky-400 py-20">
        <section class="container max-w-screen-xl text-center">
            <h3 class="text-xl text-slate-50">We are working with <span class="text-2xl font-bold text-green-700">5+</span> biggest CPA Networks</h3>
            <div class="mt-20 flex flex-wrap items-center justify-around gap-5 md:flex-nowrap">
                <div>
                    <dt class="sr-only">logo of Datify</dt>
                    <dd>
                        <img class="w-48 grayscale hover:grayscale-0" src="@/assets/datify.png" alt="Datify" />
                    </dd>
                </div>

                <div>
                    <dt class="sr-only">logo of LosPollos</dt>
                    <dd>
                        <img class="w-48 grayscale hover:grayscale-0" src="@/assets/lospollos.png" alt="LosPollos" />
                    </dd>
                </div>
                <!-- <div>
                    <dt class="sr-only">logo of CPAFULL</dt>
                    <dd>
                        <img class="w-24" src="@/assets/cpafull.png" alt="CPAFULL" />
                    </dd>
                </div> -->
                <div>
                    <dt class="sr-only">logo of iMonetizeIt</dt>
                    <dd>
                        <img class="w-64" src="@/assets/imonetizeit.svg" alt="iMonetizeIt" />
                    </dd>
                </div>
                <div>
                    <dt class="sr-only">logo of Trafee</dt>
                    <dd>
                        <img class="w-36 grayscale hover:grayscale-0" src="@/assets/trafee.svg" alt="Trafee" />
                    </dd>
                </div>
                <div>
                    <dt class="sr-only">logo of ClickDealer</dt>
                    <dd>
                        <img class="w-32 grayscale hover:grayscale-0" src="@/assets/ClickDealer.png" alt="ClickDealer" />
                    </dd>
                </div>
            </div>
        </section>
    </div>
    <section class="container min-h-screen max-w-screen-xl py-10">
        <div class="mt-4 flex flex-col space-y-8 md:mt-20 md:flex-row md:gap-x-10 md:space-y-0">
            <div class="group rounded-lg border border-slate-100 bg-white px-8 pt-16 pb-8 shadow-sm hover:shadow-xl md:w-1/3">
                <img class="mb-16" src="@/assets/cpa.png" alt="instagram" />
                <h4 class="text-2xl font-semibold text-gray-700">CPA/Affiliate</h4>
                <p class="mt-4 font-light text-gray-500">
                    Affiliate marketing is one of our the strongest expertise since we are doing it for a decade.
                </p>
                <a class="mt-8 inline-block" href="#">
                    <svg
                        class="h-8 w-8 rounded-full bg-green-200 p-1.5 text-green-700 group-hover:bg-green-500 group-hover:text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <div class="group rounded-lg border border-slate-100 bg-white px-8 pt-16 pb-8 shadow-sm hover:shadow-xl md:w-1/3">
                <img class="mb-16" src="@/assets/web.png" alt="instagram" />
                <h4 class="text-2xl font-semibold text-gray-700">Web Design</h4>
                <p class="mt-4 font-light text-gray-500">
                    We turn your business into web not for typical digital existence but profitable and accessible to customers.
                </p>
                <a class="mt-8 inline-block" href="#">
                    <svg
                        class="h-8 w-8 rounded-full bg-green-200 p-1.5 text-green-700 group-hover:bg-green-500 group-hover:text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <div class="group rounded-lg border border-slate-100 bg-white px-8 pt-16 pb-8 shadow-sm hover:shadow-xl md:w-1/3">
                <img class="mb-16" src="@/assets/graphic.png" alt="instagram" />
                <h4 class="text-2xl font-semibold text-gray-700">Graphics Design</h4>
                <p class="mt-4 font-light text-gray-500">Design sells! We don't create just catchy design but the design that boosts your sells.</p>
                <a class="mt-8 inline-block" href="#">
                    <svg
                        class="h-8 w-8 rounded-full bg-green-200 p-1.5 text-green-700 group-hover:bg-green-500 group-hover:text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="mt-4 flex flex-col space-y-8 md:mt-8 md:flex-row md:gap-x-10 md:space-y-0">
            <div class="group rounded-lg border border-slate-100 bg-white px-8 pt-16 pb-8 shadow-sm hover:shadow-xl md:w-1/3">
                <img class="mb-16" src="@/assets/digital_marketing.png" alt="instagram" />
                <h4 class="text-2xl font-semibold text-gray-700">Digital Marketing</h4>
                <!-- <p class="mt-4 font-light text-gray-500">
                    Digital marketing, also called online marketing, This includes not only email, social media, and web-based advertising, but also
                    text and multimedia messages as a marketing channel. Do you have experience? Join us
                </p> -->
                <a class="mt-8 inline-block" href="#">
                    <svg
                        class="h-8 w-8 rounded-full bg-green-200 p-1.5 text-green-700 group-hover:bg-green-500 group-hover:text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <div class="group rounded-lg border border-slate-100 bg-white px-8 pt-16 pb-8 shadow-sm hover:shadow-xl md:w-1/3">
                <img class="mb-16" src="@/assets/app_dev.png" alt="instagram" />
                <h4 class="text-2xl font-semibold text-gray-700">App Development</h4>
                <!-- <p class="mt-4 font-light text-gray-500">
                    Mobile app development is the act or process by which a mobile app is developed for mobile devices, such as personal digital
                    assistants, enterprise digital assistants or mobile phones. These software applications are designed to run on mobile devices,
                    such as a smartphone or tablet computer. Do you have experience? Join us
                </p> -->
                <a class="mt-8 inline-block" href="#">
                    <svg
                        class="h-8 w-8 rounded-full bg-green-200 p-1.5 text-green-700 group-hover:bg-green-500 group-hover:text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <div class="group rounded-lg border border-slate-100 bg-white px-8 pt-16 pb-8 shadow-sm hover:shadow-xl md:w-1/3">
                <img class="mb-16" src="@/assets/social.png" alt="instagram" />
                <h4 class="text-2xl font-semibold text-gray-700">Social Media Management</h4>
                <!-- <p class="mt-4 font-light text-gray-500">
                    Social media marketing is the use of social media platforms and websites to promote a product or service. Although the terms
                    e-marketing and digital marketing are still dominant in academia, social media marketing is becoming more popular for both
                    practitioners and researchers. Do you have experience? Join us
                </p> -->
                <a class="mt-8 inline-block" href="#">
                    <svg
                        class="h-8 w-8 rounded-full bg-green-200 p-1.5 text-green-700 group-hover:bg-green-500 group-hover:text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
        <h3
            class="relative mt-12 max-w-screen-sm font-medium uppercase before:absolute before:left-0 before:bottom-1 before:-z-1 before:h-2 before:w-[105px] before:bg-green-500/40"
        >
            What we do
        </h3>

        <div class="flex w-full flex-col items-end justify-between space-y-10 md:flex-row">
            <h2 class="mt-5 text-5xl font-semibold leading-normal text-gray-800">Delivering quality products</h2>
            <div class="flex max-w-screen-sm space-x-5">
                <div class="flex w-1/2 items-center">
                    <span class="text-6xl font-medium text-green-500">5</span>
                    <span class="w-1/2 px-2 normal-case">Years in business</span>
                </div>
                <div class="flex w-1/2 items-center">
                    <span class="text-6xl font-medium text-green-500">200+</span>
                    <span class="w-1/2 px-2 normal-case">Workers</span>
                </div>
            </div>
        </div>
    </section>

    <section class="container mt-10 max-w-screen-xl py-20">
        <div class="group flex flex-col items-center gap-y-10 gap-x-10 xl:flex-row">
            <div class="grid h-64 w-64 place-items-center rounded-full p-5 ring-4 ring-slate-100 ring-offset-2 md:w-96">
                <img src="@/assets/profitable.jpg" alt="" class="h-auto w-full rounded-full object-cover" />
            </div>
            <div class="w-auto pl-8">
                <h3
                    class="relative max-w-screen-sm font-medium uppercase underline decoration-green-50 decoration-4 underline-offset-2 transition-all duration-300 group-hover:decoration-green-200"
                >
                    Why work with us?
                </h3>
                <h2 class="mt-3 font-heading text-5xl leading-normal text-gray-700">Profitable and fast</h2>
                <p class="mb-5 mt-3 text-base font-normal text-gray-500">
                    We are giving the highest payout in the country and We have fast payment system. We have wise managers, Who will serve you all the
                    time. We invite you. Join with us, and be more profitable.
                </p>
                <Link
                    class="inline-block rounded-lg border border-green-400 px-9 py-4 font-heading text-sm font-semibold uppercase text-green-500 transition-all delay-100 duration-500 group-hover:bg-green-400 group-hover:text-white"
                    v-if="canRegister"
                    :href="route('join')"
                >
                    Join our Network
                </Link>
            </div>
        </div>
    </section>

    <section class="container mt-10 max-w-screen-xl py-20">
        <div class="text-center">
            <h3 class="font-medium uppercase underline decoration-green-200 decoration-4 underline-offset-2">Meet The Team</h3>
            <h2 class="mt-5 font-heading text-5xl leading-snug text-gray-700">
                We work hard for <br />
                your success
            </h2>

            <div v-if="teamMembers.hasOwnProperty('Manager')" class="mt-8 flex flex-col space-y-8 md:mt-10 md:flex-row md:gap-x-4 md:space-y-0">
                <template v-for="(manager, index) in teamMembers.Manager" :key="index">
                    <div
                        class="group flex flex-1 flex-col items-center justify-center space-y-2 rounded-lg border border-slate-100 bg-white p-5 shadow-sm hover:shadow-xl"
                    >
                        <img
                            :src="manager.data.avatar"
                            class="h-32 w-32 rounded-full object-cover object-left ring-4 ring-green-50 ring-offset-4 group-hover:ring-green-300"
                        />
                        <h2 class="text-xl font-semibold text-gray-700">{{ manager.data.name }}</h2>
                        <p class="text-sm">{{ manager.data.designation }}</p>
                        <div class="flex items-center justify-around gap-x-5">
                            <div>
                                <a :href="manager.data.whatsapp">
                                    <Icon icon="whatsapp" class="fill-gray-400" />
                                </a>
                            </div>
                            <div>
                                <a :href="manager.data.email">
                                    <Icon icon="email" class="stroke-gray-400" />
                                </a>
                            </div>
                            <div>
                                <a :href="manager.data.skype">
                                    <Icon icon="skype" class="fill-gray-400" />
                                </a>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            <div
                v-if="teamMembers.hasOwnProperty('HR Manager')"
                class="mt-6 flex flex-col space-y-8 md:mt-8 md:flex-row md:justify-center md:gap-x-8 md:space-y-0"
            >
                <template v-for="(hr_manager, index) in teamMembers['HR Manager']" :key="index">
                    <div
                        class="group flex max-w-sm flex-1 flex-col items-center justify-center space-y-2 rounded-lg border border-slate-100 bg-white p-5 shadow-sm hover:shadow-xl"
                    >
                        <img
                            :src="hr_manager.data.avatar"
                            class="h-32 w-32 rounded-full object-cover object-left ring-4 ring-green-50 ring-offset-4 group-hover:ring-green-300"
                        />
                        <h2 class="text-xl font-semibold text-gray-700">{{ hr_manager.data.name }}</h2>
                        <p class="text-sm">{{ hr_manager.data.designation }}</p>
                        <div class="flex items-center justify-around gap-x-5">
                            <div>
                                <a :href="hr_manager.data.whatsapp">
                                    <Icon icon="whatsapp" class="fill-gray-400" />
                                </a>
                            </div>
                            <div>
                                <a :href="hr_manager.data.email">
                                    <Icon icon="email" class="stroke-gray-400" />
                                </a>
                            </div>
                            <div>
                                <a :href="hr_manager.data.skype">
                                    <Icon icon="skype" class="fill-gray-400" />
                                </a>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            <div
                v-if="teamMembers.hasOwnProperty('CEO')"
                class="mt-6 flex flex-col space-y-8 md:mt-8 md:flex-row md:justify-center md:gap-x-8 md:space-y-0"
            >
                <template v-for="(ceo, index) in teamMembers.CEO" :key="index">
                    <div
                        class="group flex max-w-sm flex-1 flex-col items-center justify-center space-y-2 rounded-lg border border-slate-100 bg-white p-5 shadow-sm hover:shadow-xl"
                    >
                        <img
                            :src="ceo.data.avatar"
                            class="h-32 w-32 rounded-full object-cover object-left ring-4 ring-green-200 ring-offset-4 group-hover:ring-green-300"
                        />
                        <h2 class="text-xl font-semibold text-gray-700">{{ ceo.data.name }}</h2>
                        <p class="text-sm">{{ ceo.data.designation }}</p>
                        <div class="flex items-center justify-around gap-x-5">
                            <div>
                                <a :href="ceo.data.whatsapp">
                                    <Icon icon="whatsapp" class="fill-gray-400" />
                                </a>
                            </div>
                            <div>
                                <a :href="ceo.data.email">
                                    <Icon icon="email" class="stroke-gray-400" />
                                </a>
                            </div>
                            <div>
                                <a :href="ceo.data.skype">
                                    <Icon icon="skype" class="fill-gray-400" />
                                </a>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
        <hr class="mt-20 h-2" />
    </section>
    <section class="container max-w-screen-xl pb-20">
        <div class="text-center">
            <h2 class="font-heading text-3xl leading-snug text-gray-700 md:text-5xl">
                Turn your online career <br />
                <span class="text-sky-500">succeeded</span> with us.
            </h2>
            <p class="my-3 text-base font-normal text-gray-500">
                Join today to get into the highest paying affiliate networks with trustworthy and fast payment system.
            </p>
            <Link v-if="canRegister" :href="route('join')" class="mt-5 inline-block rounded-lg bg-green-400 px-6 py-3 uppercase text-white">
                Join our Networks
            </Link>
        </div>
    </section>
    <Footer />
</template>
