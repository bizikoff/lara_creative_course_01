<script>
import {Link} from "@inertiajs/vue3";
export default {
    name: "Index",
    components: {
        Link
    },
    props: {
        posts: Array
    },
    data() {
        return {
            person: {
                name: "vasya",
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
    <div class="w-2/3 mx-auto">
        <div class="my-4">
            <Link class="py-2 px-4 bg-indigo-600 rounded shadow-sm uppercase text-white"
               :href="route('posts.create')">
                Create a new post
            </Link>
        </div>
        <div>
            <div v-for="post in posts" class="pt-2 mb-4 border-b border-gray-300 shadow-sm">
                <h3>{{ post.title }}</h3>
                <p>{{ post.published_at }}</p>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
