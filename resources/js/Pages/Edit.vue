<!-- resources/js/Pages/News/Edit.vue -->

<template>
    <div>
        <h1>Edit News</h1>
        <form @submit.prevent="submitForm">
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" v-model="form.title" required>
            </div>
            <div>
                <label for="content">Content:</label>
                <textarea id="content" v-model="form.content" required></textarea>
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { usePage } from '@inertiajs/inertia-vue3';

const { props } = usePage();
const form = ref({
    title: props.news.title,
    content: props.news.content
});

const submitForm = async () => {
    await put(route('news.update', props.news.id), form.value);
};

const { route, put } = usePage();
</script>
