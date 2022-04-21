<script setup>
import { computed } from 'vue';

const props = defineProps({
    modelValue: {
        required: false,
        type: String,
        default: '',
    },
    label: {
        required: true,
        type: String,
    },
    inputType: String,
    error: String,
});

const emit = defineEmits(['update:modelValue']);

const textInput = computed({
    get() {
        return props.modelValue;
    },
    set(textInputString) {
        emit('update:modelValue', textInputString);
    },
});
</script>
<template>
    <div class="mb-5 border-0">
        <label class="mb-2 block" :for="props.label"> {{ props.label }} </label>
        <input
            :id="props.label"
            class="h-10 w-full rounded-md border px-2"
            :class="{
                'border-green-400 bg-green-50 focus:border focus:border-green-400 focus:ring-green-600': !error,
                'border-red-400 bg-red-50 focus:border focus:border-red-400 focus:ring-red-600': error,
            }"
            :type="props.inputType"
            v-model="textInput"
        />
        <div v-if="error" class="text-sm text-red-500">{{ error }}</div>
    </div>
</template>
