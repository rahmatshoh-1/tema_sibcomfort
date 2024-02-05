<script setup>
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
import CRUD from "@/Components/CRUD.vue";

const props = defineProps({ products: Object });
</script>

<template>
    <DashboardLayout>
        <CRUD
            title="Продукты"
            meta="Продукт"
            name="products"
            :items="props.products"
            :fields="[
                { label: '№', value: 'id' },
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
