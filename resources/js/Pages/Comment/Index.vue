<script>
import AdminLayout from "@/Layouts/AdminLayout.vue"
export default {
    name: "Index",
    props: {
        comments: Array
    },
    components: {
        AdminLayout,
    }
}
</script>

<template>
    <AdminLayout>
        <div v-for="comment in comments">
            <div class="p-2 mb-2 bg-white rounded-md shadow-sm">
                <h5 class="font-bold text-md">
                    {{comment.author}}
                    <span class="font-normal ">
                        commented post
                    </span>
                    "{{comment.comment_to}}"
                </h5>
                <p class="text-md italic">
                    {{comment.content}}
                </p>
                <p>
                    {{comment.created_at}}
                </p>
            </div>
        </div>
    </AdminLayout>
</template>

<style scoped>

</style>
