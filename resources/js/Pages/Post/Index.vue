<script>
import {Link} from "@inertiajs/vue3";
import AdminLayout from "../../Layouts/AdminLayout.vue";

export default {
    name: "Index",
    components: {
        Link,
        AdminLayout
    },
    props: {
        posts: Array
    },
    data() {
        return {
            person: {
                name: "vladymir",
                age: 24
            }
        }
    },
    methods: {
        changeName() {
            this.person.name = 'Vitalik'
        }
    }
}
</script>

<template>
    <AdminLayout>
        <section>
            <div class="mb-4">
                <Link :href="route('posts.create')" class="btn">Create new post</Link>
            </div>
            <div v-for="post in posts">
                <div class="mb-2 bg-white shadow p-2 rounded-md">
                    <h3 class="text-lg font-bold">{{post.title}}</h3>
                    <p class="text-sm font-light">{{post.published_at}}</p>
                </div>
            </div>
        </section>
    </AdminLayout>
</template>

<style scoped>

</style>
