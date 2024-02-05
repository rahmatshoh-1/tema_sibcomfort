<script type="text/javascript">
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
import axios from "axios";
import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";
import { router } from "@inertiajs/vue3";
import Swal from "@/sweetalert2/src/sweetalert2";

export default {
    components: {
        DashboardLayout,
        vSelect,
    },
    props: {
        contact: { type: Object, default: {} },
    },
    data() {
        return {
            item: {
                phone: "",
                email: "",
                adress: "",
            },
        };
    },
    mounted() {
        this.item = this.contact.data;
    },

    methods: {
        submit() {
            axios
                .put(route("contacts.update", 1), this.item)
                .then((res) => {
                    Swal.fire({
                        title: `Контакты успешно обновлени`,
                        timer: 3000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        icon: "success",
                        toast: true,
                        position: "top-end",
                    });
                    router.visit(route("dashboard"), { replace: true });
                })
                .catch((err) => {
                    console.log(err.response.data);
                });
        },
    },
};
</script>

<template>
    <DashboardLayout>
        <div class="mb-6">
            <h2 class="font-bold text-xl">Контакты</h2>
        </div>
        <form class="gap-6" @submit.prevent="submit()">
            <div class="flex flex-col">
                <div class="sm:grid sm:grid-cols-2 gap-6">
                    <div class="">
                        <label class="block" for="">Номер телефон :</label>
                        <input
                            type="text"
                            class="form-controls"
                            required
                            v-model="item.phone"
                        />
                    </div>

                    <div class="">
                        <label class="block" for="">E-mail :</label>
                        <input
                            type="text"
                            class="form-controls"
                            required
                            v-model="item.email"
                        />
                    </div>

                    <div class="">
                        <label class="block" for="">Адрес :</label>
                        <input
                            type="text"
                            class="form-controls"
                            required
                            v-model="item.adress"
                        />
                    </div>
                </div>
            </div>
            <div class="col-span-2 border-t-2 pt-3 mt-6">
                Последнее изменение: {{ contact.admin?.name }}
                <div class="flex items-center justify-end gap-x-3">
                    <button class="dash-btn">Сохранить</button>
                </div>
            </div>
        </form>
    </DashboardLayout>
</template>
