<script setup>
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
import CRUD from "@/Components/CRUD.vue";

const props = defineProps({ sliders: Object });
</script>

<template>
    <DashboardLayout>
        <CRUD
            title="Слайды"
            meta="Слайд"
            name="sliders"
            :items="props.sliders"
            :fields="[
                { label: '№', value: 'id' },
                { label: 'Заголовок', value: 'title' },
                { label: 'Статус отображения', value: 'status' },
                { label: 'Последние изменение', value: 'last_updated_at' },
                {
                    label: 'Страница показа',
                    value: 'page',
                    items: {
                        home: 'Главная страница',
                        posts: 'Полезный контент',
                        'post.single': 'Подробно \'Полезный контент\'',
                        production: 'Собственное производство',
                        'ready.project': 'Готовые объекты',
                        projects: 'Проекты',
                        ipoteka: 'Ипотека',
                        'project.single': 'Подробно \'Проекты\'',
                        contacts: 'Контакты',
                        'frame.house': 'Каркасные дома',
                        'molded.house': 'Погонаж',
                        brus: 'Строительство из бруса',
                        module: 'Модульное строительство',
                        'manual.cutting': 'Ручная рубка',
                        lumber: 'Пиломатериал',
                    },
                },
            ]"
            :show-add-button="false"
            :show-custom-add-button="true"
            :show-custom-edit-button="true"
        />
    </DashboardLayout>
</template>
