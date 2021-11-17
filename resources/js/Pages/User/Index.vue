<template>
    <app-layout title="Users">
        <div>
            <div class="mb-10 bg-white shadow-md p-10">
                <span class="font-bold">Totale utenti</span>: {{users.total}}
            </div>
            <div v-for="user in users.data">
                {{user.name}}
            </div>
            <div>
                <Link :href="users.prev_page_url" class="mr-20">PREV</Link>
                <Link :href="users.next_page_url">NEXT</Link>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/inertia-vue3';

export default {
    name: "Index",
    components: {AppLayout, Link},
    props: {
        users: Object
    }
}
</script>

<style scoped>

</style>
