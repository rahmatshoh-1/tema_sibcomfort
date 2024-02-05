<template>
    <div
        class="group transition-all rounded ease-out duration-700 relative flex w-full max-w-full flex-col overflow-hidden border border-gray-100 bg-white">
        <Link :href="route('project.single', project.id)" class="relative mx-3 mt-3 flex h-52 overflow-hidden">
        <img v-tilt="{ speed: 500, perspective: 1200 }"
            class="object-cover w-full transition-all rounded group-hover:scale-110" :src="project.image_top"
            alt="project image" />
        </Link>
        <div class="!mt-4 !px-5 !pb-5">
            <Link :href="route('project.single', project.id)">
            <h5 class="h-[80px] text-ellipsis sm:text-[16px] md:text-[25px] tracking-tight text-slate-900 line-clamp-2">
                {{ project.name }}
            </h5>
            </Link>
            <div class="mb-5 text-base">
                <p class="mb-1">
                    Тип стройки:
                    {{ project.build_type?.name }}
                </p>

                <p class="mb-1">
                    Материал:
                    {{ project.category?.name }}
                </p>

                <p class="mb-1">
                    Размер: от
                    {{ project.size_from }}
                    до {{ project.size_to }}<b>м<sup>2</sup></b>
                </p>
                <p>Этаж: {{ project.floor }}</p>
            </div>
            <div class="flex-col items-center justify-between gap-x-4">
                <button id="order_projectBTN" @click="showModal = true" type="button"
                    class="w-full rounded flex items-center mb-2 justify-center transition duration-300 bg-[#16A34A] px-5 py-2.5 text-center text-base font-bold text-white hover:bg-[#178e43] focus:outline-none">
                    Оставить заявку
                </button>
                <Link :href="route('project.single', project.id)"
                    class="flex rounded items-center justify-center w-full transition duration-300 hover:text-[#16A34A] hover:border-[#16A34A] text-gray-600 !px-5 !py-2.5 text-center text-base font-bold border border-black"
                    id="cardProject_morebtn">
                Подробно</Link>
            </div>
        </div>
        <!-- Второй блок, первый дочерний блок -->
        <template v-if="showModal">
            <div
                class="flex justify-center items-center fixed left-0 right-0 top-0 bottom-0 bg-gray-300 bg-opacity-75 z-[1000]">
                <div class="p-8 mb-4 bg-[#434343] text-white rounded relative z-[1001] mx-4">
                    <button type="button" @click="showModal = false"
                        class="w-7 h-7 rounded-full bg-[#434343] border-2 border-white absolute -right-3 -top-2 text-lg text-center leading-6 cursor-pointer">
                        x
                    </button>
                    <h2 class="text-xl md:text-2xl text text-center">
                        Хотите такой же проект?
                    </h2>
                    <p class="text-center text-sm mb-5">
                        Наш менеджер перезвонит вам в течении 30 минут
                    </p>
                    <form @submit.prevent="submit" class="group">
                        <label for="#" class="text-sm">Введите имя:<br />
                            <input type="text"
                                class="p-2 my-2 rounded bg-gray-200 text-black w-full focus:outline-none focus:ring focus:ring-[#16A34A]"
                                placeholder="Михаил" name="nameClient" v-model="item.name" />
                        </label>
                        <label for="#" class="text-sm">Номер телефон<br />
                            <input v-maska data-maska="+7 (###)-###-##-##" type="text"
                                class="rounded p-2 my-2 bg-gray-200 text-black w-full focus:outline-none focus:ring focus:ring-[#16A34A]"
                                placeholder="+7 (xxx)-xxx-xx-xx" required name="phoneClient" v-model="item.phone" />
                        </label>
                        <button @click="showModal = true"
                            class="rounded w-full mt-6 flex items-center justify-center bg-[#16A34A] !px-5 !py-2.5 text-center text-base font-medium text-white hover:bg-[#178e43] focus:outline-none focus:ring-4 focus:ring-[#d3ffc4]">
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
    </div>
</template>

<script setup>
import { vMaska } from "maska";
</script>

<script>
import axios from "axios";
import "@/sweetalert2/dist/sweetalert2.min.css";
import Swal from "@/sweetalert2/src/sweetalert2";

export default {
    props: {
        project: {
            type: Object,
            default: {},
        },
        projectType: {
            type: String,
            default: "Каталог",
        },
    },
    data() {
        return {
            showModal: false,
            item: {
                name: "",
                phone: "",
            },
        };
    },
    mounted() {
        this.item.type = this.projectType;
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
};
</script>
