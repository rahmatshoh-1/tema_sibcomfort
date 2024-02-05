<template>
    <div v-if="showModal"
        class="group transition-all rounded ease-out duration-700 relative flex w-full max-w-full flex-col overflow-hidden border border-gray-100 bg-white">
        <div class="!mt-4 !px-5 !pb-5">
            <a href="http://localhost:8000/catalog/16">
                <h5 class="h-[80px] text-ellipsis sm:text-[16px] md:text-[25px] tracking-tight text-slate-900 line-clamp-2">
                    Vel aut commodi facere ut dolore culpa aut harum beatae
                    accusantium asperiores cumque architecto ipsa est.
                </h5>
            </a>
        </div>
        <!-- Второй блок, первый дочерний блок -->
        <div
            class="flex justify-center items-center fixed left-0 right-0 top-0 bottom-0 bg-gray-300 bg-opacity-75 z-[1000]">
            <div class="p-8 mb-4 bg-[#434343] text-white rounded relative z-[1001] mx-4">
                <button type="button" @click="showModal = false"
                    class="w-7 h-7 rounded-full bg-[#434343] border-2 border-white absolute -right-3 -top-2 text-lg text-center leading-6 cursor-pointer">
                    x
                </button>
                <form @submit.prevent="submit">
                    <div class="flex justify-center">
                        <img src="/image/logo_light.svg" alt="logo" />
                    </div>
                    <h2 class="text-xl md:text-xl my-4 text text-center">
                        Оставьте свой номер и наши менеджеры<br> свяжутся с Вами в ближайшее время
                    </h2>
                    <label for="#" class="text-lg">Введите имя:<br />
                        <input type="text"
                            class="p-2 my-2 rounded bg-gray-200 w-full text-black focus:outline-none focus:ring-2 focus:ring-[#16A34A]"
                            placeholder="Михаил" required v-model="bid.name" />
                    </label>
                    <label for="#" class="text-lg">Введите ваш номер:<br />
                        <input v-maska data-maska="+7 (###)-###-##-##" type="text"
                            class="p-2 my-2 rounded bg-gray-200 w-full focus:outline-none text-black focus:ring-2 focus:ring-[#16A34A] [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                            placeholder="+7 (xxx)-xxx-xx-xx" required v-model="bid.phone" />
                    </label>
                    <button
                        class="w-full mt-6 rounded flex items-center justify-center transition duration-300 bg-[#16A34A] !px-5 !py-2.5 text-center text-base font-medium text-white hover:bg-[#178e43] focus:outline-none focus:ring-4 focus:ring-[#d3ffc4]">
                        Жду звонка
                    </button>
                </form>
                <button class="popup-close"></button>
            </div>
        </div>
    </div>
</template>
<script setup>
import { vMaska } from "maska";
import axios from "axios";
import "@/sweetalert2/dist/sweetalert2.min.css";
import Swal from "@/sweetalert2/src/sweetalert2";
</script>
<script>
export default {
    data() {
        return {
            showModal: false,
            bid: {
                name: "",
                phone: "",
                email: "",
                type: "",
            },
        };
    },

    methods: {
        showModalEvent() {
            setTimeout(() => {
                if (!this.showModal) this.showModal = true;

            }, 240000);

        },
        submit() {
            this.bid.type = "НужнаКонсультация";
            axios
                .get(
                    "https://test-widget-9417.website/prod_projects/sib_project_siteleadmaker/create_lead.php",
                    { params: this.bid }
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
        this.showModalEvent();
        this.bid.type = this.type;
    },
};
</script>
