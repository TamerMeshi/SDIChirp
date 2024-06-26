<template>
    <div>
        <h1 class="text-2xl font-bold mb-4">Users</h1>
        <table class="table-auto w-full">
            <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Registered At</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="user in users.data" :key="user.id">
                <td class="border px-4 py-2">{{ user.id }}</td>
                <td class="border px-4 py-2">{{ user.name }}</td>
                <td class="border px-4 py-2">{{ user.email }}</td>
                <td class="border px-4 py-2">{{ new Date(user.created_at).toLocaleString() }}</td>
            </tr>
            </tbody>
        </table>
        <div class="mt-4">
            <Pagination :links="users.links" />
        </div>
    </div>
</template>

<script>
import Pagination from '@/Components/Pagination.vue';// Импортируйте компонент пагинации

export default {

    props: {
        users: Object, // Прием данных о пользователях и их пагинации
    },
    components: {
        Pagination, // Регистрация компонента пагинации
    },
};


</script>

<style scoped>
.table-auto {
    width: 100%;
    border-collapse: collapse;
}
.table-auto th,
.table-auto td {
    border: 1px solid #ddd;
    padding: 8px;
}
.table-auto th {
    background-color: #f2f2f2;
    text-align: left;
}
</style>
