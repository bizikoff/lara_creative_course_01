<script>
export default {
    name: "Create",
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
    <div class="w-2/3 mx-auto">
        <div class="my-2">
            <input class="w-full shadow-sm border-0 border-b border-gray-300"
                   type="text"
                   v-model="post.title"
                   placeholder="Title...">
        </div>
        <div class="my-4">
            <a href="#"
               @click.prevent="storePost"
               class="py-2 px-4 bg-indigo-600 rounded shadow-sm uppercase text-white cursor-pointer">
                Add
            </a>
        </div>
    </div>
</template>

<style scoped>

</style>
