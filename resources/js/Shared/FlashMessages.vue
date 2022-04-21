<template>
    <div>
        <div v-if="$page.props.flash?.success && show" class="mb-8 flex w-full items-center justify-between rounded bg-green-500">
            <div class="flex items-center">
                <svg class="ml-4 mr-2 h-4 w-4 flex-shrink-0 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <polygon points="0 11 2 9 7 14 18 3 20 5 7 18" />
                </svg>
                <div class="py-4 text-sm font-medium text-white">
                    {{ $page.props.flash.success }}
                </div>
            </div>
            <button type="button" class="group mr-2 p-2" @click="show = false">
                <svg
                    class="block h-2 w-2 fill-green-800 group-hover:fill-white"
                    xmlns="http://www.w3.org/2000/svg"
                    width="235.908"
                    height="235.908"
                    viewBox="278.046 126.846 235.908 235.908"
                >
                    <path
                        d="M506.784 134.017c-9.56-9.56-25.06-9.56-34.62 0L396 210.18l-76.164-76.164c-9.56-9.56-25.06-9.56-34.62 0-9.56 9.56-9.56 25.06 0 34.62L361.38 244.8l-76.164 76.165c-9.56 9.56-9.56 25.06 0 34.62 9.56 9.56 25.06 9.56 34.62 0L396 279.42l76.164 76.165c9.56 9.56 25.06 9.56 34.62 0 9.56-9.56 9.56-25.06 0-34.62L430.62 244.8l76.164-76.163c9.56-9.56 9.56-25.06 0-34.62z"
                    />
                </svg>
            </button>
        </div>
        <div
            v-if="($page.props.flash?.error || Object.keys($page.props.errors).length > 0) && show"
            class="mb-8 flex max-w-3xl items-center justify-between rounded bg-red-400 pl-5"
        >
            <div class="flex items-center">
                <div v-if="$page.props.flash?.error" class="py-4 text-sm font-medium text-white">
                    {{ $page.props.flash.error }}
                </div>
                <div v-else class="py-4 text-sm font-medium text-white">
                    <span v-if="Object.keys($page.props.errors).length === 1">Please check the following error.</span>
                    <span v-else>Please check the following {{ Object.keys($page.props.errors).length }} errors.</span>
                </div>
            </div>
            <button type="button" class="group mr-2 p-2" @click="show = false">
                <svg
                    class="block h-2 w-2 fill-red-800 group-hover:fill-white"
                    xmlns="http://www.w3.org/2000/svg"
                    width="235.908"
                    height="235.908"
                    viewBox="278.046 126.846 235.908 235.908"
                >
                    <path
                        d="M506.784 134.017c-9.56-9.56-25.06-9.56-34.62 0L396 210.18l-76.164-76.164c-9.56-9.56-25.06-9.56-34.62 0-9.56 9.56-9.56 25.06 0 34.62L361.38 244.8l-76.164 76.165c-9.56 9.56-9.56 25.06 0 34.62 9.56 9.56 25.06 9.56 34.62 0L396 279.42l76.164 76.165c9.56 9.56 25.06 9.56 34.62 0 9.56-9.56 9.56-25.06 0-34.62L430.62 244.8l76.164-76.163c9.56-9.56 9.56-25.06 0-34.62z"
                    />
                </svg>
            </button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            show: true,
        };
    },
    watch: {
        '$page.props.flash': {
            handler() {
                this.show = true;
            },
            deep: true,
        },
    },
};
</script>
