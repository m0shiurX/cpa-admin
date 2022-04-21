<script setup>
const props = defineProps({
    label: String,
    value: String,
});
</script>
<template>
    <tr class="h-14 rounded border border-slate-100 bg-slate-50 hover:bg-slate-300">
        <td class="w-48 border-r border-slate-100">
            <div class="flex items-center pl-5">
                <p class="mr-2 text-lg font-medium leading-none text-slate-700">{{ props.label }}</p>
            </div>
        </td>
        <td class="">
            <div class="flex items-center pl-5">
                <p class="ml-1 truncate text-base leading-none text-slate-400">{{ props.value }}</p>
            </div>
        </td>
    </tr>
    <tr class="h-1"></tr>
</template>
