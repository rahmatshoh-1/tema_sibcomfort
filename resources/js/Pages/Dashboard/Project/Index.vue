<script setup>
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
import CRUD from "@/Components/CRUD.vue";

const props = defineProps({ projects: Object });
</script>

<template>
    <DashboardLayout>
        <CRUD
            title="Проекты"
            meta="Проект"
            name="projects"
            :items="props.projects"
            :fields="[
                { label: '№', value: 'id'},
                { label: 'Название', value: 'name' },
                { label: 'Статус отображения', value: 'status' },
                { label: 'Последние изменение', value: 'last_updated_at' },
                {
                    label: 'Тип',
                    value: 'type',
                    items: { building: 'Проекты', ready: 'Готовые объекты' },
                },
            ]"
            :show-add-button="false"
            :show-custom-add-button="true"
            :show-custom-edit-button="true"
        />
    </DashboardLayout>
</template>
