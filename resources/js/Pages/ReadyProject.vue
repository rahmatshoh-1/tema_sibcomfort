<template>
    <AppLayout
        :info="{
            title: 'Посмотрите на построенные нами наши дома, база отдыха и баня',
            body: 'СибКомфорт уже более 12 лет занимается строительством домов и\
                бань',
        }"
    >
        <CustomModal> </CustomModal>
        <main id="catalogSection" class="bg-[#393939] relative">
            <section>
                <div class="container mx-auto">
                    <div
                        class="px-4 text-[24px] md:text-[36px] text-white text-right flex flex-col md:flex-row justify-end gap-x-6 relative"
                    >
                        <Link
                            v-for="category in categories"
                            :key="category.id"
                            class="cursor-pointer"
                            :class="{ 'text-[#16A34A]': cid == category.id }"
                            :href="route('ready.project', { cid: category.id })"
                        >
                            {{ category.name }}
                        </Link>
                    </div>

                    <div class="pb-16 px-4">
                    <div id="tab-1" class="tabsContent">
                            <div class="col-span-12 my-10 md:my-16">
                                <div
                                    class="grid md:grid-cols-2 lg:grid-cols-4 gap-6"
                                >
                                    <ProjectCard
                                        v-for="project in projects"
                                        :key="project.id"
                                        :project="project" projectType="ГотовыеОбъекты"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </AppLayout>
    <Head title="Главная страница" />
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import ProjectCard from "@/Components/ProjectCard.vue";
import { Head } from "@inertiajs/vue3";
import CustomModal from "@/Components/CustomModal.vue";

export default {
    components: {
        Head,
        AppLayout,
        ProjectCard,
        CustomModal,
    },

    props: {
        categories: {
            type: Array,
            default: [],
        },
        projects: {
            type: Array,
            default: [],
        },
        cid: {
            type: Number,
            default: 1,
        },
    },

    data() {
        return {};
    },
};
</script>
