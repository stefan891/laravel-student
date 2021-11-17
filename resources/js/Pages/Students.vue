<template>
    <div>
        <app-layout title="Dashboard">
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Students
                </h2>
            </template>
            <Table></Table>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    </div>
                </div>
            </div>
        </app-layout>
    </div>
</template>

<script>
import {defineComponent} from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import Welcome from '@/Jetstream/Welcome.vue'
import Table from "./Components/Table";

export default defineComponent({
    components: {
        Table,
        AppLayout,
        Welcome,
    },
})
</script>
