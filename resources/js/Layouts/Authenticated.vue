<script setup>
import { ref, computed } from 'vue';
import { Link, usePage } from '@inertiajs/inertia-vue3';
import Logo from '@/Components/Logo.vue';
import BreezeDropdown from '@/Components/Dropdown.vue';
import BreezeDropdownLink from '@/Components/DropdownLink.vue';
import BreezeNavLink from '@/Components/NavLink.vue';
import BreezeResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
const showingNavigationDropdown = ref(false);

// defineProps({
//     auth: Object,
// });

const is_admin = computed(() => {
    return usePage().props.value.auth.role[0] === 'admin';
});
const is_member = computed(() => {
    return usePage().props.value.auth.role[0] === 'member';
});
const is_manager = computed(() => {
    return usePage().props.value.auth.role[0] === 'manager';
});
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav class="border-b border-gray-100 bg-white">
                <!-- Primary Navigation Menu -->
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 justify-between">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="flex shrink-0 items-center">
                                <Link :href="route('dashboard')">
                                    <Logo class="w-44" />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <template v-if="is_admin || is_manager">
                                    <BreezeNavLink :href="route('dashboard')" :active="route().current('dashboard')"> Dashboard </BreezeNavLink>
                                    <BreezeNavLink :href="route('networks.index')" :active="route().current('networks.index')">
                                        Networks
                                    </BreezeNavLink>
                                    <BreezeNavLink :href="route('users.index')" :active="route().current('users.index')"> Users </BreezeNavLink>
                                    <BreezeNavLink :href="route('members.index')" :active="route().current('members.index')">
                                        Team Members
                                    </BreezeNavLink>
                                </template>
                                <template v-if="is_member">
                                    <BreezeNavLink :href="route('dashboard')" :active="route().current('dashboard')"> Dashboard </BreezeNavLink>
                                    <BreezeNavLink :href="route('reports.index')" :active="route().current('reports.index')"> Reports </BreezeNavLink>
                                </template>
                            </div>
                        </div>
                        <div class="hidden sm:ml-6 sm:flex sm:items-center">
                            <!-- Settings Dropdown -->
                            <div class="relative ml-3">
                                <BreezeDropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                class="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none"
                                            >
                                                {{ $page.props.auth.user.name }}

                                                <svg
                                                    class="ml-2 -mr-0.5 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <BreezeDropdownLink :href="route('profile')"> My Profile </BreezeDropdownLink>
                                        <BreezeDropdownLink :href="route('logout')" method="post" as="button"> Log Out </BreezeDropdownLink>
                                    </template>
                                </BreezeDropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button
                                @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none"
                            >
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{
                        block: showingNavigationDropdown,
                        hidden: !showingNavigationDropdown,
                    }"
                    class="sm:hidden"
                >
                    <div class="space-y-1 pt-2 pb-3">
                        <template v-if="is_admin || is_manager">
                            <BreezeResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                Dashboard
                            </BreezeResponsiveNavLink>
                            <BreezeResponsiveNavLink :href="route('users.index')" :active="route().current('users.index')">
                                Users
                            </BreezeResponsiveNavLink>
                            <BreezeResponsiveNavLink :href="route('networks.index')" :active="route().current('networks.index')">
                                Networks
                            </BreezeResponsiveNavLink>
                            <BreezeResponsiveNavLink :href="route('members.index')" :active="route().current('members.index')">
                                Team Members
                            </BreezeResponsiveNavLink>
                        </template>
                        <template v-if="is_member">
                            <BreezeResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                Dashboard
                            </BreezeResponsiveNavLink>
                            <BreezeResponsiveNavLink :href="route('reports.index')" :active="route().current('reports.index')">
                                Reports
                            </BreezeResponsiveNavLink>
                        </template>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="border-t border-gray-200 pt-4 pb-1">
                        <div class="px-4">
                            <div class="text-base font-medium text-gray-800">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="text-sm font-medium text-gray-500">
                                {{ $page.props.auth.user.email }}
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <BreezeDropdownLink :href="route('profile')"> My Profile </BreezeDropdownLink>
                            <BreezeDropdownLink :href="route('logout')" method="post" as="button"> Log Out </BreezeDropdownLink>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
