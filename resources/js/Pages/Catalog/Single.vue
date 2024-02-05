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
                        class="text-[#16A34A] text-[36px] md:text-[56px] px-4 text-right relative"
                    >
                        Строим Дом и Баня
                    </h2>

                    <div class="pb-16 px-4 relative z-10">
                        <div class="grid grid-cols-12 gap-4 my-16">
                            <div class="col-span-12 md:col-span-9">
                                <img
                                    :src="selectedImage"
                                    id="mainImage"
                                    alt="cardHouse"
                                    class="w-full object-cover h-[600px] transition-opacity duration-500 rounded"
                                />
                            </div>
                            <div class="col-span-12 md:col-span-3">
                                <div class="grid grid-cols-12 md:grid-cols-3">
                                    <div class="col-span-4 md:col-span-3">
                                        <img
                                            @click="
                                                selectedImage =
                                                    project.image_top
                                            "
                                            :src="project.image_top"
                                            alt="cardHouse"
                                            class="sliderThumb cursor-pointer object-cover h-[192px] w-full mb-3 rounded"
                                            :class="{
                                                'border-2 border-green-500 rounded':
                                                    selectedImage ==
                                                    project.image_top,
                                            }"
                                        />
                                    </div>
                                    <div class="col-span-4 md:col-span-3">
                                        <img
                                            @click="
                                                selectedImage =
                                                    project.image_middle
                                            "
                                            :src="project.image_middle"
                                            alt="cardHouse"
                                            class="sliderThumb cursor-pointer object-cover h-[192px] w-full mb-3 rounded"
                                            :class="{
                                                'border-2 border-green-500':
                                                    selectedImage ==
                                                    project.image_middle,
                                            }"
                                        />
                                    </div>
                                    <div class="col-span-4 md:col-span-3">
                                        <img
                                            @click="
                                                selectedImage =
                                                    project.image_bottom
                                            "
                                            :src="project.image_bottom"
                                            alt="cardHouse"
                                            class="sliderThumb cursor-pointer object-cover h-[192px] w-full mb-3 rounded"
                                            :class="{
                                                'border-2 border-green-500':
                                                    selectedImage ==
                                                    project.image_bottom,
                                            }"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-12 md:col-span-9 mb-8 order-2 md:order-1">
                                <div class="my-8 text-white">
                                    <span class="text-lg">Описание</span>
                                    <h2 class="text-[#16A34A] text-[25px] my-4">
                                        {{ project.name }}
                                    </h2>
                                    <p v-html="project.body"></p>
                                </div>
                                <button
                                    @click="showModal = true"
                                    class="flex rounded items-center relative z-10 transition duration-300 justify-center hover:bg-[#16A34A] border-2 border-[#16a34a] !px-10 !py-2.5 text-center text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-[#d3ffc4]"
                                >
                                    Оставить заявку
                                </button>
                            </div>
                            <div
                                class="col-span-12 md:col-span-3 order-1  md:order-2 h-fit my-8 p-8 bg-white text-black text-lg rounded"
                            >
                                <h2 class="text-[25px] font-medium my-4">
                                    {{ project.name }}
                                </h2>
                                <p class="mb-2">
                                    Тип стройки: {{ project.build_type?.name }}
                                </p>
                                <p class="mb-2">
                                    Материал: {{ project.category?.name }}
                                </p>
                                <p class="mb-2">
                                    Размер: от {{ project.size_from }} до
                                    {{ project.size_to }} м<sup>2</sup>
                                </p>
                                <p class="mb-2">Этаж: {{ project.floor }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                id="moreProjectIpoteka"
                class="mt-6 py-14 bg-gray-900 relative bg-[url('/image/BGcatalogProject.webp')] bg-cover"
            >
                <div class="container mx-auto px-4">
                    <h2
                        class="text-[#16A34A] text-[25px] mt-10 md:text-[56px] text-center md:text-left relative"
                    >
                        Нужно больше проектов для выбора?<br />
                        скачайте наш полный каталог!
                    </h2>
                    <div class="grid grid-cols-12 gap-4">
                        <CatalogForm />
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
    <Head title="Главная страница" />
    <template v-if="showModal">
        <div
            class="flex justify-center items-center fixed left-0 right-0 top-0 bottom-0 bg-gray-300 bg-opacity-75 z-[1000]"
        >
            <div class="p-8 bg-[#434343] rounded text-white relative mx-4">
                <button
                    type="button"
                    @click="showModal = false"
                    class="w-7 h-7 rounded-full bg-[#434343] border-2 border-white absolute -right-3 -top-2 text-lg text-center leading-6 cursor-pointer"
                >
                    x
                </button>
                <h2 class="text-xl md:text-2xl mb-4 text text-center">
                    Хотите такой же проект?
                </h2>
                <p class="text-center text-sm mb-5">
                    Наш менеджер перезвонит вам в течении 30 минут
                </p>
                <form @submit.prevent="submit" class="group">
                    <label for="#" class="text-sm"
                        >Введите имя:<br />
                        <input
                            type="text"
                            class="p-2 my-2 rounded bg-gray-200 text-black w-full border-2 outline-none hover:border-[#16A34A] focus:border-[16A34A]"
                            placeholder="Михаил"
                            name="nameClient"
                            v-model="item.name"
                        />
                    </label>
                    <label for="#" class="text-sm"
                        >Номер телефон<br />
                        <input
                            v-maska
                            data-maska="+7 (###)-###-##-##"
                            type="text"
                            class="p-2 my-2 bg-gray-200 text-black w-full rounded border-2 outline-none hover:border-[#16A34A] focus:border-[16A34A]"
                            placeholder="+7 (xxx)-xxx-xx-xx"
                            required
                            name="phoneClient"
                            v-model="item.phone"
                        />
                    </label>
                    <button
                        @click="showModal = true"
                        class="rounded w-full mt-6 flex items-center justify-center bg-[#16A34A] !px-5 !py-2.5 text-center text-base font-medium text-white hover:bg-[#178e43] focus:outline-none focus:ring-4 focus:ring-[#d3ffc4]"
                    >
                        Позвоните мне
                    </button>
                    <p class="text-center max-w-xs mx-auto mt-4 text-gray-300">
                        Нажимая на кнопку, вы принимаете условия
                        <a href="#">передачи информации</a>
                    </p>
                </form>
                <slot />
                <button class="popup-close"></button>
            </div>
        </div>
    </template>
</template>

<script setup>
import { vMaska } from "maska";
</script>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
import axios from "axios";
import "@/sweetalert2/dist/sweetalert2.min.css";
import Swal from "@/sweetalert2/src/sweetalert2";
import CatalogForm from "@/Components/CatalogForm.vue";

export default {
    components: {
        AppLayout,
        Head,
        CatalogForm,
    },
    props: {
        project: { type: Object, default: {} },
        projectType: { type: String, default: "Каталог" },
    },
    data() {
        return {
            selectedImage: "",
            showModal: false,
            bid: {
                name: "",
                phone: "",
                email: "",
            },
            item: {
                name: "",
                phone: "",
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
        this.selectedImage = this.project?.image_top;
        this.item.type = this.projectType;
    },
};
</script>
