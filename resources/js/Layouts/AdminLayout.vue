<script>

import Header from "../Components/Admin/Header.vue"
import Sidebar from "../Components/Admin/Sidebar.vue"
import Footer from "../Components/Admin/Footer.vue"

export default {
    name: "AdminLayout",
    components: {
        Header,
        Sidebar,
        Footer
    }
}

</script>

<template>
    <div class="flex flex-col min-h-screen">
        <Header/>
        <div class="flex flex-grow">
            <Sidebar/>
            <main class="flex-[1_1_80%] p-4 bg-gray-200 text-black">
                <slot></slot>
            </main>
        </div>
        <Footer/>
    </div>
</template>

<style scoped>

</style>
