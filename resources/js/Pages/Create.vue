<!-- resources/js/Pages/News/Create.vue -->

<template>
    <div>
        <h1>Create News</h1>
        <form @submit.prevent="submitForm">
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" v-model="form.title" required>
            </div>
            <div>
                <label for="content">Content:</label>
                <textarea id="content" v-model="form.content" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { usePage } from '@inertiajs/inertia-vue3';

const form = ref({
    title: '',
    content: ''
});

const submitForm = async () => {
    await post(route('news.store'), form.value);
    form.value.title = '';
    form.value.content = '';
};

const { route } = usePage();
</script>

