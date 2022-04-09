<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import Logo from "../Components/Logo.vue";
defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template>
    <Head title="Mondol IT Limited" />

    <header id="top__header" class="container mt-9 h-screen max-w-screen-xl">
        <!-- Main Navigation -->
        <nav class="flex items-center justify-between">
            <!-- Brand Logo -->
            <a class="" href="#">
                <Logo />
            </a>
            <!-- Navigation menu items-->
            <div class="hidden items-center space-x-8 md:flex">
                <a
                    href="#"
                    class="px-2) bg-gradient-to-t from-green-200 via-white px-2 uppercase hover:bg-gradient-to-t hover:from-green-200 hover:via-white"
                    >Home</a
                >
                <a
                    href="#"
                    class="px-2) uppercase hover:bg-gradient-to-t hover:from-green-200 hover:via-white"
                    >Services</a
                >
                <a
                    href="#"
                    class="px-2) uppercase hover:bg-gradient-to-t hover:from-green-200 hover:via-white"
                    >About</a
                >
                <a
                    href="#"
                    class="px-2) uppercase hover:bg-gradient-to-t hover:from-green-200 hover:via-white"
                    >Contact</a
                >
                <a
                    href="#"
                    class="rounded-lg border border-sky-600 py-3 px-6 font-semibold uppercase text-sky-600 hover:bg-sky-600 hover:text-white"
                    >Start a Project</a
                >
            </div>
        </nav>
        <!-- hero content -->
        <div
            id="hero__content"
            class="mx-auto mt-56 flex max-w-3xl flex-col items-center space-y-4 text-center"
        >
            <h1 class="text-5xl font-bold leading-snug text-gray-800">
                We make remarkable <br />
                digital products
            </h1>
            <p class="text-base text-gray-500">
                We design and build beautiful websites, apps and branding
            </p>
            <Link
                v-if="canRegister"
                :href="route('register')"
                class="inline-block rounded-lg bg-green-400 px-6 py-3 uppercase text-white"
            >
                Join our Network
            </Link>
        </div>
    </header>

    <!-- Clients/Brands -->
    <div class="min-h-40 bg-sky-500 py-20">
        <section class="container max-w-screen-xl text-center">
            <h3 class="text-gray-200">
                Trusted by <span class="text-gray-50">35+</span> biggest brands
            </h3>
            <div class="mt-20 flex justify-around gap-5">
                <div>
                    <dt class="sr-only">logo of Adverus</dt>
                    <dd>
                        <img src="@/assets/adverus_logo.png" alt="Adverus" />
                    </dd>
                </div>
                <div>
                    <dt class="sr-only">logo of Adverus</dt>
                    <dd>
                        <img src="@/assets/manter_logo.png" alt="Adverus" />
                    </dd>
                </div>
                <div>
                    <dt class="sr-only">logo of Adverus</dt>
                    <dd>
                        <img src="@/assets/spaced_logo.png" alt="Adverus" />
                    </dd>
                </div>
                <div>
                    <dt class="sr-only">logo of Adverus</dt>
                    <dd>
                        <img src="@/assets/stamps_logo.png" alt="Adverus" />
                    </dd>
                </div>
                <div>
                    <dt class="sr-only">logo of Adverus</dt>
                    <dd>
                        <img src="@/assets/vanuer_logo.png" alt="Adverus" />
                    </dd>
                </div>
            </div>
        </section>
    </div>

    <section class="container min-h-screen max-w-screen-xl py-20">
        <h3
            class="relative max-w-screen-sm font-medium uppercase before:absolute before:left-0 before:bottom-1 before:-z-1 before:h-2 before:w-[105px] before:bg-green-500/40"
        >
            What we do
        </h3>

        <div
            class="flex w-full flex-col items-end justify-between space-y-10 md:flex-row"
        >
            <h2
                class="mt-5 text-5xl font-semibold leading-normal text-gray-800"
            >
                Delivering quality products
            </h2>
            <div class="flex max-w-screen-sm space-x-5">
                <div class="flex w-1/2 items-center">
                    <span class="text-6xl font-medium text-green-500">13</span>
                    <span class="w-1/2 px-2 normal-case"
                        >Years in business</span
                    >
                </div>
                <div class="flex w-1/2 items-center">
                    <span class="text-6xl font-medium text-green-500">28</span>
                    <span class="w-1/2 px-2 normal-case"
                        >Designers & developers</span
                    >
                </div>
            </div>
        </div>

        <div
            class="mt-12 flex flex-col space-y-8 md:mt-32 md:flex-row md:gap-x-10 md:space-y-0"
        >
            <div
                class="group rounded-lg bg-white px-8 pt-16 pb-8 shadow-sm hover:shadow-xl md:w-1/3"
            >
                <img
                    class="mb-16"
                    src="@/assets/instagram.png"
                    alt="instagram"
                />
                <h4 class="text-2xl font-semibold text-gray-700">
                    CPA/Affiliate
                </h4>
                <p class="mt-4 font-light text-gray-500">
                    Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis laboris nisi
                </p>
                <a class="mt-8 inline-block" href="#">
                    <svg
                        class="h-8 w-8 rounded-full bg-green-200 p-1.5 text-green-700 group-hover:bg-green-500 group-hover:text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                        ></path>
                    </svg>
                </a>
            </div>
            <div
                class="group rounded-lg bg-white px-8 pt-16 pb-8 shadow-sm hover:shadow-xl md:w-1/3"
            >
                <img class="mb-16" src="@/assets/web.png" alt="instagram" />
                <h4 class="text-2xl font-semibold text-gray-700">
                    Web Design & Development
                </h4>
                <p class="mt-4 font-light text-gray-500">
                    Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis laboris nisi
                </p>
                <a class="mt-8 inline-block" href="#">
                    <svg
                        class="h-8 w-8 rounded-full bg-green-200 p-1.5 text-green-700 group-hover:bg-green-500 group-hover:text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                        ></path>
                    </svg>
                </a>
            </div>
            <div
                class="group rounded-lg bg-white px-8 pt-16 pb-8 shadow-sm hover:shadow-xl md:w-1/3"
            >
                <img
                    class="mb-16"
                    src="@/assets/graphic-designer.png"
                    alt="instagram"
                />
                <h4 class="text-2xl font-semibold text-gray-700">
                    Graphics Design
                </h4>
                <p class="mt-4 font-light text-gray-500">
                    Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis laboris nisi
                </p>
                <a class="mt-8 inline-block" href="#">
                    <svg
                        class="h-8 w-8 rounded-full bg-green-200 p-1.5 text-green-700 group-hover:bg-green-500 group-hover:text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                        ></path>
                    </svg>
                </a>
            </div>
        </div>
        <div
            class="mt-4 flex flex-col space-y-8 md:mt-6 md:flex-row md:gap-x-10 md:space-y-0"
        >
            <div
                class="group rounded-lg bg-white px-8 pt-16 pb-8 shadow-sm hover:shadow-xl md:w-1/3"
            >
                <img
                    class="mb-16"
                    src="@/assets/instagram.png"
                    alt="instagram"
                />
                <h4 class="text-2xl font-semibold text-gray-700">
                    Digital Marketing
                </h4>
                <p class="mt-4 font-light text-gray-500">
                    Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis laboris nisi
                </p>
                <a class="mt-8 inline-block" href="#">
                    <svg
                        class="h-8 w-8 rounded-full bg-green-200 p-1.5 text-green-700 group-hover:bg-green-500 group-hover:text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                        ></path>
                    </svg>
                </a>
            </div>
            <div
                class="group rounded-lg bg-white px-8 pt-16 pb-8 shadow-sm hover:shadow-xl md:w-1/3"
            >
                <img class="mb-16" src="@/assets/web.png" alt="instagram" />
                <h4 class="text-2xl font-semibold text-gray-700">
                    App Development
                </h4>
                <p class="mt-4 font-light text-gray-500">
                    Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis laboris nisi
                </p>
                <a class="mt-8 inline-block" href="#">
                    <svg
                        class="h-8 w-8 rounded-full bg-green-200 p-1.5 text-green-700 group-hover:bg-green-500 group-hover:text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                        ></path>
                    </svg>
                </a>
            </div>
            <div
                class="group rounded-lg bg-white px-8 pt-16 pb-8 shadow-sm hover:shadow-xl md:w-1/3"
            >
                <img
                    class="mb-16"
                    src="@/assets/graphic-designer.png"
                    alt="instagram"
                />
                <h4 class="text-2xl font-semibold text-gray-700">
                    Social Media Management
                </h4>
                <p class="mt-4 font-light text-gray-500">
                    Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis laboris nisi
                </p>
                <a class="mt-8 inline-block" href="#">
                    <svg
                        class="h-8 w-8 rounded-full bg-green-200 p-1.5 text-green-700 group-hover:bg-green-500 group-hover:text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                        ></path>
                    </svg>
                </a>
            </div>
        </div>

        <hr class="mt-20 h-2" />
    </section>

    <section class="container max-w-screen-xl py-20">
        <div
            class="flex flex-col items-center justify-between gap-y-10 gap-x-10 xl:flex-row"
        >
            <div class="rounded-full border-2 p-8">
                <Logo class="h-96 w-96 object-cover p-5" />
            </div>
            <div>
                <h3
                    class="relative max-w-screen-sm font-medium uppercase before:absolute before:left-0 before:bottom-1 before:-z-1 before:h-2 before:w-[105px] before:bg-green-500/40"
                >
                    Why work with us?
                </h3>
                <h2
                    class="mt-5 text-5xl font-semibold leading-normal text-gray-800"
                >
                    Profitable and fast!
                </h2>
                <p class="my-8 text-base font-normal text-gray-500">
                    We are giving the highest payout in the country and We have
                    fast payment system. We have wise managers, Who will serve
                    you all the time. We invite you. Join with us, and be more
                    profitable.
                </p>
                <Link
                    class="inline-block rounded-lg bg-green-400 px-9 py-4 text-sm uppercase text-white"
                    v-if="canRegister"
                    :href="route('register')"
                >
                    Join our Network
                </Link>
                <button class=""></button>
            </div>
        </div>
    </section>

    <footer class="h-96 w-full bg-slate-700 py-20">
        <div
            class="container flex h-full flex-col items-start justify-start gap-y-10 gap-x-10 xl:flex-row"
        >
            <div class="h-full max-w-md border-r pr-16">
                <div class="mb-5 flex items-center gap-x-5">
                    <Logo class="fill-gray-100" />
                    <span class="text-2xl text-gray-50">
                        Mondol IT Limited
                    </span>
                </div>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Repudiandae, a veritatis recusandae, minima excepturi
                    perferendis cupiditate dolorum harum consequuntur ex quas
                    temporibus quisquam iusto ea corrupti illum quaerat,
                    architecto quo.
                </p>
            </div>
            <div class="flex h-full w-full gap-x-20 pl-6 text-slate-400">
                <div>
                    <h2 class="mb-3 text-xl text-white">Navigation</h2>
                    <ul>
                        <li>Home</li>
                        <li>About</li>
                        <li>Projects</li>
                        <li>Home</li>
                        <li>About</li>
                        <li>Projects</li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-3 text-xl text-white">Navigation</h2>
                    <ul>
                        <li>Home</li>
                        <li>About</li>
                        <li>Projects</li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-3 text-xl text-white">Find Us</h2>
                    <p>Greenwich Village & Soho, 10012 New York, USA</p>
                    <p>
                        800 123-456 <br />
                        digity@example.com
                    </p>
                </div>
            </div>
        </div>
    </footer>
</template>
