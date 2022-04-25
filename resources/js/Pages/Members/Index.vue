<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { watch, ref, computed } from 'vue';
import { Head, useForm, usePage, Link } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';
import Pagination from '@/Shared/Pagination';
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';

const roles = computed(() => usePage().props.value.auth.role);

const props = defineProps({
    members: Object,
});

const destroyItem = (item) => {
    Inertia.delete(route('members.destroy', item));
};
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Members</h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-screen-xl px-0">
                <div class="px-4 md:px-8 xl:px-10">
                    <FlashMessages />
                </div>
                <div class="px-4 md:px-8 xl:px-10">
                    <div class="flex items-center justify-between">
                        <Link
                            :href="route('members.create')"
                            class="mt-4 inline-flex items-start justify-start rounded bg-green-700 px-6 py-3 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 sm:mt-0"
                            ><span class="text-sm font-medium leading-none text-white">Add member</span>
                        </Link>
                    </div>
                </div>
                <div class="rounded-lg px-4 md:px-8 xl:px-10">
                    <div class="py-8">
                        <table class="w-full table-auto whitespace-nowrap">
                            <thead>
                                <tr tabindex="0" class="h-16 rounded-lg border border-gray-100 bg-white text-lg text-gray-500 focus:outline-none">
                                    <th class="border-r border-gray-100 pl-5 text-left">Member</th>
                                    <th class="border-x border-gray-100 pl-5 text-left">Designation</th>
                                    <th class="border-l border-gray-100">Action</th>
                                </tr>
                                <tr class="h-3"></tr>
                            </thead>
                            <tbody class="">
                                <template v-for="member in props.members.data" :key="member.id">
                                    <tr
                                        tabindex="0"
                                        class="group h-14 rounded border border-gray-100 bg-gray-50 transition-colors duration-200 ease-in hover:bg-gray-300"
                                    >
                                        <td class="border-r border-gray-100">
                                            <div class="flex items-center py-3 pl-5">
                                                <img class="h-16 w-16 rounded-full" :src="member.avatar" alt="" />

                                                <p class="mx-2 text-lg font-medium leading-none text-gray-700">{{ member.name }}</p>
                                            </div>
                                        </td>
                                        <td class="border-r border-gray-100">
                                            <div class="flex items-center pt-2 pb-3 pl-5">
                                                <p class="ml-1 truncate text-base leading-none text-gray-400">{{ member.designation }}</p>
                                            </div>
                                        </td>
                                        <td class="w-48">
                                            <div class="flex items-center pt-2 pb-3 pl-5">
                                                <Link
                                                    :href="route('members.show', member.id)"
                                                    class="rounded bg-green-100 py-2 px-5 text-sm leading-none text-green-900 hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-green-300 focus:ring-offset-2"
                                                >
                                                    See Details
                                                </Link>
                                                <div class="relative px-5 pt-2">
                                                    <Menu as="div">
                                                        <MenuButton>
                                                            <svg
                                                                class="fill-transparent"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="20"
                                                                height="20"
                                                                viewBox="0 0 20 20"
                                                            >
                                                                <path
                                                                    d="M4.16667 10.8332C4.62691 10.8332 5 10.4601 5 9.99984C5 9.5396 4.62691 9.1665 4.16667 9.1665C3.70643 9.1665 3.33334 9.5396 3.33334 9.99984C3.33334 10.4601 3.70643 10.8332 4.16667 10.8332Z"
                                                                    stroke="#9CA3AF"
                                                                    stroke-width="1.25"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    d="M10 10.8332C10.4602 10.8332 10.8333 10.4601 10.8333 9.99984C10.8333 9.5396 10.4602 9.1665 10 9.1665C9.53976 9.1665 9.16666 9.5396 9.16666 9.99984C9.16666 10.4601 9.53976 10.8332 10 10.8332Z"
                                                                    stroke="#9CA3AF"
                                                                    stroke-width="1.25"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    d="M15.8333 10.8332C16.2936 10.8332 16.6667 10.4601 16.6667 9.99984C16.6667 9.5396 16.2936 9.1665 15.8333 9.1665C15.3731 9.1665 15 9.5396 15 9.99984C15 10.4601 15.3731 10.8332 15.8333 10.8332Z"
                                                                    stroke="#9CA3AF"
                                                                    stroke-width="1.25"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                        </MenuButton>

                                                        <MenuItems class="absolute right-0 z-30 mr-2 flex w-24 flex-col rounded-md bg-white shadow">
                                                            <MenuItem v-slot="{ active }">
                                                                <Link
                                                                    class="w-full cursor-pointer rounded-t-md py-4 px-4 text-xs hover:bg-green-600 hover:text-white focus:text-green-200 focus:outline-none"
                                                                    :class="{ 'bg-green-600 text-white': active }"
                                                                    as="button"
                                                                    :href="route('members.edit', member.id)"
                                                                >
                                                                    Edit
                                                                </Link>
                                                            </MenuItem>
                                                            <MenuItem v-slot="{ active }">
                                                                <button
                                                                    class="w-full cursor-pointer rounded-b-md py-4 px-4 text-xs hover:bg-green-600 hover:text-white focus:text-green-200 focus:outline-none"
                                                                    :class="{ 'bg-green-600 text-white': active }"
                                                                    @click="destroyItem(member.id)"
                                                                >
                                                                    Delete
                                                                </button>
                                                            </MenuItem>
                                                        </MenuItems>
                                                    </Menu>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="h-1"></tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                    <Pagination class="mt-5" :links="props.members.links" />
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
