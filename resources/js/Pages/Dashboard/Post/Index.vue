<script setup>
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
import CRUD from "@/Components/CRUD.vue";

const props = defineProps({ posts: Object });
</script>

<template>
    <DashboardLayout>
        <CRUD
            title="Записи"
            meta="Запись"
            name="posts"
            :items="props.posts"
            :fields="[{ label: '№', value: 'id' },{ label: 'Название', value: 'title' },{ label: 'Статус отображения', value: 'status' },{ label: 'Последние изменение', value: 'last_updated_at' }]"
            :show-add-button="false"
            :show-custom-add-button="true"
            :show-custom-edit-button="true"
        />
    </DashboardLayout>
</template>
