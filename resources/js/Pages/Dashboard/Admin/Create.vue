<script type="text/javascript">
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
import axios from "axios";
import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";
import { router } from "@inertiajs/vue3";
import Swal from "@/sweetalert2/src/sweetalert2";
import IError from "@/Components/IError.vue";
import { Head } from "@inertiajs/vue3";

export default {
    components: {
        DashboardLayout,
        vSelect,
        IError,
        Head,
    },
    data() {
        return {
            item: {
                name: "",
                email: "",
                password: "",
                role: "moderator",
            },
            errors: [],
        };
    },
    mounted() {},

    methods: {
        changeImage($event, type) {
            if ($event.target.files.length > 0) {
                var input = $event.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = (e) => {
                        this.item.image = e.target.result;
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        },

        submit() {
            axios
                .post(route("admins.store"), this.item)
                .then((res) => {
                    Swal.fire({
                        title: `Администратор успешно создан`,
                        timer: 3000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        icon: "success",
                        toast: true,
                        position: "top-end",
                    });
                    router.visit(route("admins.index"), { replace: true });
                })
                .catch((err) => {
                    console.log(err.response.data);
                    this.errors = err.response.data.errors;
                });
        },
    },
};
</script>

<template>
    <Head title="Добавить администратор" />
    <DashboardLayout>
        <div class="mb-6">
            <h2 class="font-bold text-xl">Добавить администратор</h2>
        </div>
        <form class="sm:grid sm:grid-cols-2 gap-6" @submit.prevent="submit()">
            <div class="">
                <label class="block" for=""
                    >Имя: <span class="font-bold text-red-600">*</span></label
                >
                <input
                    type="text"
                    class="form-controls"
                    required
                    v-model="item.name"
                />
                <IError name="name" :errors="errors" />
            </div>
            <div class="">
                <label class="block" for=""
                    >E-mail:<span class="font-bold text-red-600">*</span></label
                >
                <input
                    type="email"
                    class="form-controls"
                    required
                    v-model="item.email"
                />
                <IError name="email" :errors="errors" />
            </div>

            <div class="">
                <label class="block" for=""
                    >Доступ:<span class="font-bold text-red-600">*</span></label
                >
                <select class="form-controls" required v-model="item.role">
                    <option value="moderator">Модератор</option>
                    <option value="admin">Админ</option>
                </select>

                <IError name="role" :errors="errors" />
            </div>

            <div class="">
                <label class="block" for=""
                    >Пароль:<span class="font-bold text-red-600">*</span></label
                >
                <input
                    type="password"
                    class="form-controls"
                    required
                    v-model="item.password"
                    minlength="8"
                    @click="($event) => ($event.target.type = 'text')"
                    @blur="($event) => ($event.target.type = 'password')"
                />
                <IError name="password" :errors="errors" />
            </div>

            <div class="col-span-2 border-t-2 pt-3">
                <div class="flex items-center justify-end gap-x-3">
                    <Link
                        class="dash-btn !bg-gray-300 !text-gray-800"
                        :href="route('admins.index')"
                        >Назад</Link
                    >
                    <button class="dash-btn" :href="route('admins.index')">
                        Сохранить
                    </button>
                </div>
            </div>
        </form>
    </DashboardLayout>
</template>
