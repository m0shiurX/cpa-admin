<template>
    <div v-if="canLogin" class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
        <Link
            v-if="$page.props.auth.user"
            :href="route('dashboard')"
            class="text-sm text-gray-700 underline"
        >
            Dashboard
        </Link>

        <template v-else>
            <Link
                :href="route('login')"
                class="text-sm text-gray-700 underline"
            >
                Log in
            </Link>

            <Link
                v-if="canRegister"
                :href="route('register')"
                class="ml-4 text-sm text-gray-700 underline"
            >
                Register
            </Link>
        </template>
    </div>
</template>
