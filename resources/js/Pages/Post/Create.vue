<script>
import {Link} from "@inertiajs/vue3";
import AdminLayout from '@/Layouts/AdminLayout.vue'
export default {
    name: "Create",
    components: {
        AdminLayout,
        Link
    },
    data() {
        return {
            post: {}
        }
    },

    methods: {
        storePost() {
            axios.post('/posts', this.post)
                .then(res => {
                    console.log(res);
                })
        }
    }
}
</script>

<template>
    <AdminLayout>

        <div class="w-[75%] mx-auto">
            <div class="mb-2">
                <input class="w-full shadow-sm border-0 border-b border-gray-300 rounded"
                       type="text"
                       v-model="post.title"
                       placeholder="Title...">
            </div>
            <div class="">
                <a href="#"
                   @click.prevent="storePost"
                   class="btn">
                    Add
                </a>
                <Link
                    class="btn-red inline-block ml-4"
                    :href="route('posts.index')">
                    Back
                </Link>
            </div>
        </div>
    </AdminLayout>
</template>

<style scoped>

</style>
