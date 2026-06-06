<script setup lang="ts">
import type { NavSection } from '../types';

const props = defineProps<{
    content?: NavSection[];
}>();
</script>

<template>
    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64">
        <div
            class="bg-primary-soft h-full overflow-y-auto border-e border-default px-3 py-4"
        >
            <div v-for="section in props.content" :key="section.header">
                <h3 class="nav-header">
                    {{ section.header }}
                </h3>

                <ul class="nav-links">
                    <li v-for="link in section.links" :key="link.title">
                        <a :href="link.url">{{ link.text </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
</template>
