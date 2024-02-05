<template>
    <AppLayout
        :info="{
            title: 'Превращаем мечты в недвижимость',
            body: 'Строим дома из сибирской сосны. Дизайн и производство.',
        }"
    >
        <main id="catalogSection" class="bg-[#393939] relative">
            <section>
                <div class="container mx-auto">
                    <h2
                        class="text-[#16A34A] px-4 text-[25px] md:text-[56px] text-right relative"
                    >
                        Строим Дом и Баня
                    </h2>

                    <div class="pb-0 px-4">
                        <div class="grid md:grid-cols-12 gap-4 md:my-16 mt-8">
                            <div class="md:col-span-3 relative z-10">
                                <!-- Первый блок -->
                                <form
                                    action=""
                                    class="md:col-span-3 col-span-12 space-y-4 border-r-2 max-w-full overflow-hidden p-3 pt-0"
                                >
                                    <div
                                        class="flex items-center gap-x-3 p-3 pt-0 border-b"
                                    >
                                        <span
                                            class="text-white text-[25px] md:text-3xl"
                                            >Фильтр</span
                                        >
                                    </div>
                                    <div class="">
                                        <label
                                            class="block text-white pb-2 text-xl"
                                            for="product_house_type"
                                        >
                                            Выберите цель построики
                                        </label>
                                        <select
                                            class="px-3 py-2 rounded border-2 w-full outline-none hover:border-[#16A34A] bg-white focus:border-[#16A34A]"
                                            type="number"
                                            name="build_type_id"
                                            v-model="filters.build_type_id"
                                            id="product_house_type"
                                        >
                                            <option value="" disabled selected>
                                                Выберите тип стройки
                                            </option>
                                            <option
                                                :value="buildType.id"
                                                v-for="buildType in build_types"
                                            >
                                                {{ buildType.name }}
                                            </option>
                                        </select>
                                    </div>

                                    <div class="">
                                        <label
                                            class="block text-white pb-2 text-xl"
                                            for="product_material"
                                        >
                                            Материал
                                        </label>
                                        <select
                                            class="px-3 rounded py-2 border-2 w-full outline-none hover:border-[#16A34A] bg-white focus:border-[#16A34A]"
                                            type="number"
                                            name="category_id"
                                            v-model="filters.category_id"
                                            id="product_material"
                                        >
                                            <option value="" disabled selected>
                                                Виберите материал
                                            </option>
                                            <option
                                                :value="category.id"
                                                v-for="category in categories"
                                            >
                                                {{ category.name }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <label
                                            class="block text-white pb-2 text-xl"
                                            for="product_floor"
                                        >
                                            Этаж
                                        </label>
                                        <select
                                            class="px-3 py-2 rounded border-2 w-full outline-none hover:border-[#16A34A] bg-white focus:border-[#16A34A]"
                                            type="number"
                                            v-model="filters.floor"
                                            name="floor"
                                            id="product_floor"
                                        >
                                            <option value="" disabled selected>
                                                Выберите этаж
                                            </option>
                                            <option
                                                :value="floor"
                                                v-for="floor in 3"
                                            >
                                                {{ floor }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <label
                                            class="block text-white pb-2 text-xl"
                                            for="product_size"
                                        >
                                            Выберите квадратуру дома
                                        </label>
                                        <!-- <select
                                            class="px-3 py-2 border-2 w-full outline-none hover:border-[#16A34A] bg-white"
                                            type="number"
                                            name="product_size"
                                            id="product_size"
                                        >
                                            <option value="" disabled selected>
                                                Выберите квадратуру дома
                                            </option>
                                        </select> -->

                                        <div class="flex items-center">
                                            <input
                                                class="px-3 py-2 rounded border-2 w-full outline-none hover:border-[#16A34A] bg-white focus:border-[#16A34A]"
                                                type="text"
                                                name="size_from"
                                                v-model="filters.size_from"
                                                placeholder="с"
                                            />
                                            <span
                                                class="w-12 text-center text-white font-bold"
                                                >-</span
                                            >
                                            <input
                                                class="px-3 rounded py-2 border-2 w-full outline-none hover:border-[#16A34A] bg-white focus:border-[#16A34A]"
                                                type="text"
                                                name="size_to"
                                                v-model="filters.size_to"
                                                placeholder="до"
                                            />
                                        </div>
                                    </div>
                                    <button
                                        id="search_filterBTN"
                                        class="w-full rounded flex items-center justify-center transition duration-300 bg-[#16A34A] !px-5 !py-2.5 text-center text-base font-medium text-white hover:bg-[#178e43] focus:outline-none focus:ring-4 focus:ring-[#d3ffc4]"
                                    >
                                        Поиск
                                    </button>
                                </form>
                            </div>
                            <div class="md:col-span-9">
                                <div
                                    class="grid md:grid-cols-3 gap-4 relative z-10"
                                >
                                    <ProjectCard
                                        v-for="project in projects"
                                        :key="project.id"
                                        :project="project"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                id="moreProject"
                class="mt-6 py-14 bg-gray-900 relative bg-[url('/image/BGcatalogProject.webp')] bg-no-repeat bg-center bg-cover"
            >
                <div class="container mx-auto px-4">
                    <h2
                        class="text-[#16A34A] text-[25px] mt-10 md:text-[56px] text-center md:text-left relative"
                    >
                        Нужно больше проектов для выбора?<br />
                        скачайте наш полный каталог!
                    </h2>
                    <div class="grid grid-cols-12 gap-4">
                        <CatalogForm type="catalog" />
                        <div
                            class="col-span-12 md:col-span-6 lg:col-span-7 order-1 md:order-none"
                        >
                            <img
                                v-tilt="{ speed: 500, perspective: 1200 }"
                                src="/image/catalog.webp"
                                alt="catalog.webp"
                            />
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </AppLayout>
    <Head title="Страница Каталога" />
</template>

<script setup>
import { vMaska } from "maska";
</script>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import ProjectCard from "@/Components/ProjectCard.vue";
import { Head } from "@inertiajs/vue3";
import "@/sweetalert2/dist/sweetalert2.min.css";
import Swal from "@/sweetalert2/src/sweetalert2";
import CatalogForm from "@/Components/CatalogForm.vue";

export default {
    components: {
        Head,
        AppLayout,
        ProjectCard,
    },

    props: {
        projects: {
            type: Array,
            default: [],
        },
        categories: {
            type: Array,
            default: [],
        },
        build_types: {
            type: Array,
            default: [],
        },
        params: {
            type: Object,
            default: {},
        },
    },

    data() {
        return {
            filters: {
                build_type_id: "",
                category_id: "",
                size_from: "",
                size_to: "",
                floor: "",
            },
            bid: {
                name: "",
                phone: "",
                email: "",
            },
        };
    },
    methods: {
        submit() {
            this.item.type = this.item.type;
            this.item.nameProject = this.project.name;
            this.item.typeBuild = this.project.build_type?.name;
            this.item.material = this.project.category?.name;
            this.item.size = `${this.project.size_from}x${this.project.size_to}m2`;
            this.item.floor = this.project.floor;

            console.log(this.item);
            axios
                .get(
                    "https://test-widget-9417.website/prod_projects/sib_project_siteleadmaker/create_lead.php",
                    { params: this.item }
                )
                .then((res) => {
                    this.showModal = false;
                    Swal.fire({
                        title: `Ваш запрос принят в работу`,
                        timer: 3000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        icon: "success",
                    });
                })
                .catch((err) => {
                    this.showModal = false;
                    Swal.fire({
                        title: `Ошибка при отправки запроса`,
                        timer: 3000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        icon: "error",
                    });
                });
        },
    },

    mounted() {
        Object.keys(this.filters).forEach((f) => {
            if (f in this.params) {
                this.filters[f] = this.params[f];
            }
        });
        console.log("data", this.project);
        this.selectedImage = this.project?.image_top;
    },
};
</script>
