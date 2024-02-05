<script setup>
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
import CRUD from "@/Components/CRUD.vue";

const props = defineProps({ categories: Object });
</script>

<template>
    <DashboardLayout>
        <CRUD
            title="Категории"
            meta="Категория"
            name="categories"
            :items="props.categories"
            :fields="[
                { label: '№', value: 'id' },
                { label: 'Название', value: 'name' },
            ]"
        />
    </DashboardLayout>
</template>
