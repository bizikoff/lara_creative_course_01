<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: "Sidebar",
    components: {Link},
}
</script>

<template>
    <aside class="flex-[1_1_20%] p-4 pr-1 bg-gray-700 text-white">
        <ul>
            <li class="mb-0.5">
                <Link class="sidebar-link"
                      :class="{'active-link' : $page.url.startsWith('/admin')}"
                      :href="route('admin.index')">
                    Home
                </Link>
            </li>
            <li class="mb-0.5">
                <Link class="sidebar-link"
                      :class="{'active-link' : $page.url.startsWith('/posts')}"
                      :href="route('posts.index')">
                    Posts
                </Link>
            </li>
            <li class="mb-0.5">
                <Link class="sidebar-link"
                      :class="{'active-link' : $page.url.startsWith('/comments')}"
                      :href="route('comments.index')">
                    Comments
                </Link>
            </li>
            <li class="mb-0.5">
                <Link class="sidebar-link"
                      :class="{'active-link' : $page.url.startsWith('/tags')}"
                      :href="route('tags.index')">
                    Tags
                </Link>
            </li>
            <li class="mb-0.5">
                <Link class="sidebar-link"
                      :class="{'active-link' : $page.url.startsWith('/categories')}"
                      :href="route('categories.index')">
                    Categories
                </Link>
            </li>
            <li class="mb-0.5">
                <Link class="sidebar-link"
                      :class="{'active-link' : $page.url.startsWith('/roles')}"
                      :href="route('roles.index')">
                    Roles
                </Link>
            </li>
        </ul>
    </aside>
</template>

<style scoped>

</style>
