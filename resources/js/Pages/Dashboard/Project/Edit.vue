<script type="text/javascript">
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
import axios from "axios";
import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";
import { router } from "@inertiajs/vue3";
import Swal from "@/sweetalert2/src/sweetalert2";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

export default {
    components: {
        DashboardLayout,
        vSelect,
    },
    props: {
        project: { type: Object, default: {} },
        categories: { type: Array, default: [] },
        buildTypes: { type: Array, default: [] },
    },
    data() {
        return {
            item: {
                name: "",
                image_top: "",
                image_middle: "",
                image_bottom: "",
                body: "",
                status: "",
                size_from: "",
                size_to: "",
                floor: "",
                category_id: "",
                build_type_id: "",
                type: "building",
            },
            types: [
                {
                    label: "Проекты",
                    value: "building",
                },
                {
                    label: "Готовые объекты",
                    value: "ready",
                },
            ],
            editor: ClassicEditor,
            editorConfig: {
                ckfinder: {
                    uploadUrl: `/dashboard/editor/upload`,
                    name: "upload",
                    url: "url",
                },
                mediaEmbed: {
                    previewsInData: true,
                },
            },
            floors: [],
        };
    },
    mounted() {
        this.item = this.project;
        for (var i = 1; i <= 3; i++) {
            this.floors.push(i);
        }
    },

    methods: {
        changeImage($event, type) {
            if ($event.target.files.length > 0) {
                var input = $event.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = (e) => {
                        this.item[type] = e.target.result;
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        },

        submit() {
            axios
                .put(route("projects.update", this.item.id), this.item)
                .then((res) => {
                    Swal.fire({
                        title: `Проект успешно обновлен`,
                        timer: 3000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        icon: "success",
                        toast: true,
                        position: "top-end",
                    });
                    router.visit(route("projects.index"), { replace: true });
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
            <h2 class="font-bold text-xl">Редактировать проект</h2>
        </div>
        <form class="sm:grid sm:grid-cols-2 gap-6" @submit.prevent="submit()">
            <div class="">
                <label class="block" for="">Название :</label>
                <input
                    type="text"
                    class="form-controls"
                    required
                    v-model="item.name"
                />
            </div>
            <div class="">
                <label class="block" for="">Материал:</label>
                <v-select
                    :options="categories"
                    label="name"
                    :searchable="true"
                    :reduce="(option) => option.id"
                    :clearable="false"
                    v-model="item.category_id"
                >
                    <template #search="{ attributes, events }">
                        <input
                            class="vs__search"
                            :required="!item.category_id"
                            v-bind="attributes"
                            v-on="events"
                        />
                    </template>
                </v-select>
            </div>
            <div class="">
                <label class="block" for="">Тип стройки:</label>
                <v-select
                    :options="buildTypes"
                    label="name"
                    :searchable="true"
                    :reduce="(option) => option.id"
                    :clearable="false"
                    v-model="item.build_type_id"
                >
                    <template #search="{ attributes, events }">
                        <input
                            class="vs__search"
                            :required="!item.build_type_id"
                            v-bind="attributes"
                            v-on="events"
                        />
                    </template>
                </v-select>
            </div>

            <div class="">
                <label class="block" for="">Этаж:</label>
                <v-select
                    :options="floors"
                    :searchable="true"
                    :clearable="false"
                    v-model="item.floor"
                >
                    <template #search="{ attributes, events }">
                        <input
                            class="vs__search"
                            :required="!item.floor"
                            v-bind="attributes"
                            v-on="events"
                        />
                    </template>
                </v-select>
            </div>

            <div class="">
                <label class="block" for="">Тип:</label>
                <select
                    id="type"
                    name="type"
                    class="form-controls"
                    required
                    v-model="item.type"
                >
                    <option
                        v-for="item in types"
                        :key="item.value"
                        :value="item.value"
                    >
                        {{ item.label }}
                    </option>
                </select>
            </div>

            <div class="grid sm:grid-cols-2 items-center gap-x-4">
                <div class="">
                    <label class="block" for="">Размер с:</label>
                    <input
                        type="number"
                        step="0.1"
                        class="form-controls"
                        required
                        v-model="item.size_from"
                        min="1"
                    />
                </div>
                <div class="">
                    <label class="block" for="">Размер до:</label>
                    <input
                        type="number"
                        step="0.1"
                        class="form-controls"
                        required
                        v-model="item.size_to"
                        min="1"
                    />
                </div>
            </div>
            <div class="col-span-2 border-t-2 pt-3">
                <label class="block" for="">Описание:</label>
                <ckeditor
                    v-model="item.body"
                    :editor="editor"
                    :config="editorConfig"
                ></ckeditor>
                <!-- <textarea
                    type="number"
                    step="0.02"
                    class="form-controls"
                    required
                    v-model="item.width"
                /> -->
            </div>

            <div class="col-span-2 border-t-2 pt-3">
                <label class="block" for="image_top"> Изображение: </label>
                <input
                    id="image_top"
                    @change="changeImage($event, 'image_top')"
                    type="file"
                    accept="image/*"
                    :required="item.image_top == ''"
                    class="w-[1px] h-[1px] opacity-0"
                />
                <label for="image_top" class="cursor-pointer">
                    <div v-if="item.image_top" class="relative group">
                        <img
                            class="object-cover h-[270px] rounded-lg border border-dashed border-gray-900/25 w-full"
                            :src="item.image_top"
                            alt=""
                        />
                        <div
                            class="group-hover:flex hidden absolute right-0 left-0 bottom-0 top-0 bg-black bg-opacity-50 z-20 items-center justify-center rounded-lg"
                        >
                            <span
                                class="inline-block border-2 rounded-lg px-4 py-3 font-bold text-sm text-white"
                                >Изменить</span
                            >
                        </div>
                    </div>
                    <div
                        v-else
                        class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10"
                    >
                        <div class="text-center">
                            <svg
                                class="mx-auto h-12 w-12 text-gray-300"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <div
                                class="mt-4 flex text-sm leading-6 text-indigo-600 tex"
                            >
                                <p class="pl-1">
                                    Upload a file. PNG, JPG, GIF up to 10MB
                                </p>
                            </div>
                        </div>
                    </div>
                </label>
            </div>

            <div class="col-span-2 border-t-2 pt-3">
                <label class="block" for="image_middle"> Изображение: </label>
                <input
                    id="image_middle"
                    @change="changeImage($event, 'image_middle')"
                    type="file"
                    accept="image/*"
                    :required="item.image_middle == ''"
                    class="w-[1px] h-[1px] opacity-0"
                />
                <label for="image_middle" class="cursor-pointer">
                    <div v-if="item.image_middle" class="relative group">
                        <img
                            class="object-cover h-[270px] rounded-lg border border-dashed border-gray-900/25 w-full"
                            :src="item.image_middle"
                            alt=""
                        />
                        <div
                            class="group-hover:flex hidden absolute right-0 left-0 bottom-0 top-0 bg-black bg-opacity-50 z-20 items-center justify-center rounded-lg"
                        >
                            <span
                                class="inline-block border-2 rounded-lg px-4 py-3 font-bold text-sm text-white"
                                >Изменить</span
                            >
                        </div>
                    </div>
                    <div
                        v-else
                        class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10"
                    >
                        <div class="text-center">
                            <svg
                                class="mx-auto h-12 w-12 text-gray-300"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <div
                                class="mt-4 flex text-sm leading-6 text-indigo-600 tex"
                            >
                                <p class="pl-1">
                                    Upload a file. PNG, JPG, GIF up to 10MB
                                </p>
                            </div>
                        </div>
                    </div>
                </label>
            </div>

            <div class="col-span-2 border-t-2 pt-3">
                <label class="block" for="image_bottom"> Изображение: </label>
                <input
                    id="image_bottom"
                    @change="changeImage($event, 'image_bottom')"
                    type="file"
                    accept="image/*"
                    :required="item.image_bottom == ''"
                    class="w-[1px] h-[1px] opacity-0"
                />
                <label for="image_bottom" class="cursor-pointer">
                    <div v-if="item.image_bottom" class="relative group">
                        <img
                            class="object-cover h-[270px] rounded-lg border border-dashed border-gray-900/25 w-full"
                            :src="item.image_bottom"
                            alt=""
                        />
                        <div
                            class="group-hover:flex hidden absolute right-0 left-0 bottom-0 top-0 bg-black bg-opacity-50 z-20 items-center justify-center rounded-lg"
                        >
                            <span
                                class="inline-block border-2 rounded-lg px-4 py-3 font-bold text-sm text-white"
                                >Изменить</span
                            >
                        </div>
                    </div>
                    <div
                        v-else
                        class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10"
                    >
                        <div class="text-center">
                            <svg
                                class="mx-auto h-12 w-12 text-gray-300"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <div
                                class="mt-4 flex text-sm leading-6 text-indigo-600 tex"
                            >
                                <p class="pl-1">
                                    Upload a file. PNG, JPG, GIF up to 10MB
                                </p>
                            </div>
                        </div>
                    </div>
                </label>
            </div>

            <div class="lg:col-span-2 flex items-center gap-x-3">
                <input
                    id="is_show"
                    name="is_show"
                    type="checkbox"
                    @change="
                        item.status =
                            item.status == 'active' ? 'deactive' : 'active'
                    "
                    :checked="item.status == 'active'"
                    :value="item.status"
                    class="h-4 w-4 rounded border-white/10 bg-white/5 text-[#16A34A] focus:ring-[#16A34A] focus:ring-offset-gray-900 ring ring-[#16A34A]"
                />
                <label class="block" for="is_show"> Отображать?</label>
            </div>
            <div class="col-span-2 border-t-2 pt-3">
                Последнее изменение: {{ item.admin?.name }}
                <div class="flex items-center justify-end gap-x-3">
                    <Link
                        class="dash-btn !bg-gray-300 !text-gray-800"
                        :href="route('projects.index')"
                        >Назад</Link
                    >
                    <button class="dash-btn" :href="route('projects.index')">
                        Сохранить
                    </button>
                </div>
            </div>
        </form>
    </DashboardLayout>
</template>
