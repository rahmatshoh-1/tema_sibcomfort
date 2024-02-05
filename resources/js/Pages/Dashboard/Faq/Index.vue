<script setup>
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
import CRUD from "@/Components/CRUD.vue";

const props = defineProps({ faqs: Object });
</script>

<template>
    <DashboardLayout>
        <CRUD
            title="ЧАВО"
            meta="ЧАВО"
            name="faqs"
            :items="props.faqs"
            :show-add-button="false"
            :show-custom-add-button="true"
            :show-custom-edit-button="true"
            :fields="[
                { label: '№', value: 'id' },
                { label: 'Вопрос', value: 'label' },
                { label: 'Ответь', value: 'body' },
                {
                    label: 'Страница показа',
                    value: 'page',
                    items: {
                        'frame.house': 'Каркасные дома',
                        'molded.house': 'Погонаж',
                        brus: 'Строительство из бруса',
                        module: 'Модульное строительство',
                        'manual.cutting': 'Ручная рубка',
                        lumber: 'Пиломатериал',
                    },
                },
            ]"
        />
    </DashboardLayout>
</template>
