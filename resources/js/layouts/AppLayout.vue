<script setup lang="ts">
import AppMenuBar from '@/components/AppMenuBar.vue';
</script>

<template>
    <div class="bg-surface-50 text-surface-900 flex min-h-screen">
        <aside class="w-70 p-2">
            <AppMenuBar />
        </aside>

        <main class="flex-1 overflow-y-auto p-6">
            <slot />
        </main>
    </div>
</template>
