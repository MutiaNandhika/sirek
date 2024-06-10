<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'rounded-lg inline-flex items-center w-full px-4 pt-4 pb-4 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out active'
        : 'rounded-lg inline-flex items-center w-full px-4 pt-4 pb-4 text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:bg-blue-100 focus:outline-none focus:text-gray-700 focus:bg-blue-100 transition duration-150 ease-in-out';
});
</script>

<template>
    <div class="w-full">
        <Link :href="href" :class="classes">
            <slot />
        </Link>
    </div>
</template>

<style scoped>
.active, .hover:hover {
    background-color: rgb(25, 77, 145);
    color:white;
}
</style>
