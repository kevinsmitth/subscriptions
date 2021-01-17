<template>
    <pagesLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               <a :href="route('galery')"> Galeria</a>
            </h2>
        </template>
            <template>
                <div class="row-auto flex content-center place-content-center align-middle text-center p-10">
                    <div class="sm:w-12/12 lg:w-6/12">
                        <a href="#">
                            <img class="mx-auto" :src="'/images/1.jpg'" alt="" width="500" height="400">
                            <p>Sempre bem!</p>
                        </a>
                    </div>
                    <div class="sm:w-12/12 lg:w-6/12">
                        <a href="#">
                            <img class="mx-auto" :src="'/images/2.png'" alt="" width="500" height="400">
                            <p>Sempre bem!</p>
                        </a>
                    </div>
                </div>
                <div class="row-auto flex content-center place-content-center align-middle text-center p-10">
                    <div class="sm:w-12/12 lg:w-6/12">
                        <a class="mx-auto" href="#">
                            <img class="mx-auto" :src="'/images/3.jpg'" alt="" width="500" height="400">
                            <p>Sempre bem!</p>
                        </a>
                    </div>
                    <div class="sm:w-12/12 lg:w-6/12">
                        <a class="mx-auto" href="#">
                            <img class="mx-auto" :src="'/images/4.jpg'" alt="" width="500">
                            <p>Sempre bem!</p>
                        </a>
                    </div>
                </div>
            </template>
    </pagesLayout>
</template>

<style>
    a:hover img{
        opacity: 0.9;
    }
</style>

<script>
    import pagesLayout from '@/Layouts/PagesLayout'

    export default {
        components: {
            pagesLayout,
        }
    }
</script>
