<script setup>
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
</script>
<script>
export default {
    props: {
        reviews: {
            type: Number,
            default: 0,
        },
        posts: {
            type: Number,
            default: 0,
        },
        projects: {
            type: Number,
            default: 0,
        },
      
        readyProject:{
            type: Number,
            default:0,
        },
        sliders:{
            type: Number,
            default:0,
        }
    },
};
</script>
<template>
    <DashboardLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
        <div
                    class="bg-white overflow-hidden shadow-md sm:rounded-lg"
                >
                    <div class="items-center px-4 py-8 m-auto mt-5">
                        <div class="flex flex-wrap pb-3 mx-4 md:mx-24 lg:mx-0">

                                <div class="w-full p-2 lg:w-1/4 md:w-1/2">
                                <div
                                    class="flex flex-col px-6 py-10 overflow-hidden bg-white hover:bg-[#16A34A] rounded-xl shadow-lg duration-300 hover:shadow-2xl group">
                                    <div class="flex flex-row justify-between items-center">
                                    <div class="px-4 py-4 bg-gray-300  rounded-xl bg-opacity-30">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:text-gray-50"  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                        </svg>
                                    </div>
                                    </div>
                                    <h1 class="text-2xl sm:text-4xl xl:text-3xl font-bold text-gray-700 mt-12 group-hover:text-gray-50">{{projects}}</h1>
                                    <div class="flex flex-row justify-between group-hover:text-gray-200">
                                    <p>Проекты</p>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 group-hover:text-gray-200"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    </div>
                                </div>
                                </div>
                                <div class="w-full p-2 lg:w-1/4 md:w-1/2">
                                <div
                                    class="flex flex-col px-6 py-10 overflow-hidden bg-white hover:bg-[#16A34A] rounded-xl shadow-lg duration-300 hover:shadow-2xl group">
                                    <div class="flex flex-row justify-between items-center">
                                    <div class="px-4 py-4 bg-gray-300  rounded-xl bg-opacity-30">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-gray-50">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                                        </svg>
                                    </div>
                            
                                    </div>
                                    <h1 class="text-2xl sm:text-4xl xl:text-3xl font-bold text-gray-700 mt-12 group-hover:text-gray-50">{{posts}}</h1>
                                    <div class="flex flex-row justify-between group-hover:text-gray-200">
                                    <p>Полезный контент</p>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 group-hover:text-gray-200"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    </div>
                                </div>
                                </div>
                                <div class="w-full p-2 lg:w-1/4 md:w-1/2">
                                <div
                                    class="flex flex-col px-6 py-10 overflow-hidden bg-white hover:bg-[#16A34A] rounded-xl shadow-lg duration-300 hover:shadow-2xl group">
                                    <div class="flex flex-row justify-between items-center">
                                    <div class="px-4 py-4 bg-gray-300  rounded-xl bg-opacity-30">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:text-gray-50" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                        <path fill-rule="evenodd"
                                            d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                            clip-rule="evenodd" />
                                        </svg>
                                    </div>
                
                                    </div>
                                    <h1 class="text-3xl sm:text-4xl xl:text-3xl font-bold text-gray-700 mt-12 group-hover:text-gray-50">{{ readyProject }}</h1>
                                    <div class="flex flex-row justify-between group-hover:text-gray-200">
                                    <p>Готовые обекты</p>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 group-hover:text-gray-200"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    </div>
                                </div>
                                </div>
                                <div class="w-full p-2 lg:w-1/4 md:w-1/2">
                                <div
                                    class="flex flex-col px-6 py-10 overflow-hidden bg-white hover:bg-[#16A34A] rounded-xl shadow-lg duration-300 hover:shadow-2xl group">
                                    <div class="flex flex-row justify-between items-center">
                                    <div class="px-4 py-4 bg-gray-300  rounded-xl bg-opacity-30">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-gray-50">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                        </svg>
                                    </div>
                                 
                                    </div>
                                    <h1 class="text-2xl sm:text-4xl xl:text-3xl font-bold text-gray-700 mt-12 group-hover:text-gray-50">{{ reviews }}
                                    </h1>
                                    <div class="flex flex-row justify-between group-hover:text-gray-200">
                                    <p>Отзывы</p>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 group-hover:text-gray-200"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    </div>
                                </div>
                                </div>
                                <div class="w-full p-2 lg:w-1/4 md:w-1/2">
                                <div
                                    class="flex flex-col px-6 py-10 overflow-hidden bg-white hover:bg-[#16A34A] rounded-xl shadow-lg duration-300 hover:shadow-2xl group">
                                    <div class="flex flex-row justify-between items-center">
                                    <div class="px-4 py-4 bg-gray-300  rounded-xl bg-opacity-30">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-gray-50">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 4.5v15m6-15v15m-10.875 0h15.75c.621 0 1.125-.504 1.125-1.125V5.625c0-.621-.504-1.125-1.125-1.125H4.125C3.504 4.5 3 5.004 3 5.625v12.75c0 .621.504 1.125 1.125 1.125z" />
                                        </svg>
                                    </div>
                                 
                                    </div>
                                    <h1 class="text-2xl sm:text-4xl xl:text-3xl font-bold text-gray-700 mt-12 group-hover:text-gray-50">{{ sliders }}
                                    </h1>
                                    <div class="flex flex-row justify-between group-hover:text-gray-200">
                                    <p>Слайдер</p>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 group-hover:text-gray-200"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
    </DashboardLayout>
</template>
