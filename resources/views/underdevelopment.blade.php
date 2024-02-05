<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
</head>
<body>
<div class="bg-[#434343] min-h-screen flex items-center justify-center">    
        <div class="container mx-auto">
            <div class="grid grid-cols-12 gap-3">
                <div class="col-span-12 md:col-span-6 order-2 md:order-1">
                    <div  class="mt-10 font-medium text-white lg:text-[56px] text-[32px] text-center relative">К сожалению, страница находится в разработке.</div>
                    <a href="/" class="flex justify-center">
                                <button
                                    class="border-bottom rounded relative z-10 border border-[#16A34A] text-white px-16 py-4 my-10 text-lg transition ease-out duration-300 hover:shadow-inner hover:bg-[#16A34A]"
                                >
                                Главная
                                </button>
                            </a>
                </div>
                <div class="col-span-12 md:col-span-6 order-1 md:order-2">
                    <div class="flex justify-center">
                    <img src="/image/underDev.png" class="text-center" alt="Страница в разработке сибкомфорт">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html