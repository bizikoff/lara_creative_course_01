<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
export default {
    name: "Index",
    props: {
        categories: Array,
    },
    components: {
        AdminLayout
    }

}
</script>

<template>
    <AdminLayout>
        <div>
            <ul v-for="(category, index) in categories">
                <li class="p-2 mb-2 bg-white rounded-md shadow-sm text-md font-bold">
                    <span class="font-light">{{index + 1}}.</span>
                    {{category.title}}
                </li>
            </ul>
        </div>
    </AdminLayout>
</template>

<style scoped>

</style>
