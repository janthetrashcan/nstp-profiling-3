<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import { NAV_STRUCTURE } from '../../constants/navigation';

const navStructure = ref(NAV_STRUCTURE);
</script>

<template>
    <div class="test">
        <aside
            id="default-sidebar"
            class="fixed top-0 left-0 z-40 h-full w-64 -translate-x-full transition-transform sm:translate-x-0"
        >
            <div
                class="bg-primary-soft h-full overflow-y-auto border-e border-default px-3 py-4"
            >
                <Link href="/" class="mt-2 mb-5 flex items-center ps-2.5">
                    <span
                        class="self-center text-lg font-semibold whitespace-nowrap text-heading"
                        >NSTP Profiling System
                    </span>
                </Link>
                <div v-for="section in navStructure" :key="section.header">
                    <ul
                        class="mt-4 space-y-2 border-t border-default pt-4 font-medium"
                    >
                        <li v-for="link in section.links" :key="link.title">
                            <Link
                                :href="link.href"
                                class="group flex items-center rounded-base px-2 py-1.5 text-body transition duration-75 hover:bg-neutral-tertiary hover:text-fg-brand"
                            >
                                <component
                                    :is="link.icon"
                                    class="h-5 w-5 shrink-0 transition duration-75 group-hover:text-fg-brand"
                                    :size="20"
                                />
                                <span class="ms-3 flex-1 whitespace-nowrap">{{
                                    link.text
                                }}</span>
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>

        <main class="p-4 sm:ml-64">
            <slot />
        </main>
    </div>
</template>
