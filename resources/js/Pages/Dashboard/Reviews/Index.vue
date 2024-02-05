<script setup>
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
import CRUD from "@/Components/CRUD.vue";

const props = defineProps({ reviews: Object });
</script>

<template>
    <DashboardLayout>
        <CRUD
            title = "Отзывы"
            meta = "Отзывы"
            name = "reviews"
            body = "body"
            :items="props.reviews"
            :fields="[{ label: '№', value: 'id'},{ label: 'Автор', value: 'name'},{ label: 'Текст', value: 'body'},{ label: 'Создано', value: 'last_updated_at'}]"
            :show-add-button="false"
            :show-custom-add-button="true"
            :show-custom-edit-button="true"
        />
    </DashboardLayout>
</template>
