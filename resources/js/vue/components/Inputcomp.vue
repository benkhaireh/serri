<template>
    <div class="relative w-full mb-3">
        <label
            class="block uppercase text-slate-600 text-xs font-bold mb-2"
            :for="label"
            v-text="label_txt"
        ></label>
            <input
                v-bind="$attrs"
                class="border-0 px-3 py-3 placeholder-slate-300 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                :class="[
                    subclass,
                    error ? 'focus:ring-red-700' : ' text-slate-600 bg-white',
                ]"
                :id="label"
                :placeholder="placeholder"
                :value="modelValue"
                @input="$emit('update:modelValue', $event.target.value)"
            />
        <small
            class="block mt-2 px-2 text-sm text-gray-500 bold"
            v-text="small"
        ></small>
        <small class="flex items-start text-red-500 mt-2" v-if="error !== ''">
            <i class="ri-alert-fill mr-2"></i>
            <span v-text="error"></span>
        </small>
    </div>
</template>
<script>
export default {
    name: "inputcomp",
    props: {
        label: {
            type: String,
            default: "",
        },
        label_txt: {
            type: String,
            default: "",
        },
        placeholder: {
            type: String,
            default: "",
        },
        small: {
            type: String,
            default: "",
        },
        subclass: {
            type: String,
            default: "",
        },
        error: {
            type: [String, Number],
            default: "",
        },
        modelValue: {
            type: [String, Number],
            default: "",
        },
    },
}
</script>