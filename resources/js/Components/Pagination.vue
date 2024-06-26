<template>
    <nav>
        <ul class="inline-flex -space-x-px">
            <li v-for="link in links" :key="link.url" :class="{ 'text-gray-500': !link.url, 'font-bold': link.active }">
                <inertia-link
                    v-if="link.url"
                    :href="link.url"
                    class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700"
                    v-html="link.label"
                ></inertia-link>
                <span v-else v-html="link.label" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg"></span>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    props: {
        links: Array, // Свойство, которое будет принимать массив ссылок на страницы от Inertia.js
    },
};

</script>

<style scoped>
.inertia-link {
    text-decoration: none;
}
.inertia-link:hover {
    text-decoration: underline;
}
</style>
