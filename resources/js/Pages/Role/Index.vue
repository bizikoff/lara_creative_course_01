<script>
import AdminLayout from '@/Layouts/AdminLayout.vue';
export default {
    name: "Index",
    components: {
        AdminLayout,
    },
    props: {
        roles: Array,
    }
}
</script>

<template>
    <AdminLayout>
        <div>
            <ul v-for="(role, index) in roles">
                <li class="p-2 mb-2 bg-white rounded-md shadow-sm text-md font-bold">
                    <span class="font-light">{{index + 1}}.</span>
                    {{role.title}}
                </li>
            </ul>
        </div>
    </AdminLayout>
</template>

<style scoped>

</style>
