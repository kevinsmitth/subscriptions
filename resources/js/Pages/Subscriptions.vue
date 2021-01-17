<template>
    <pagesLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a :href="route('assinaturas')"> Assinaturas</a>
            </h2>
        </template>
        <template>
            <h1 class="text-center mt-5">Nossos Pacotes</h1>
            <div class="flex flex-wrap align-middle text-center my-5">
                <!-- Column -->
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 mx-auto"
                    v-for="assinatura in assinaturas" :key="assinatura.id">

                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-xl">

                        <a href="#">
                            <div class="flex flex-wrap content-around h-52 w-full bg-green-600">
                                <h1 class="mx-auto text-white text-5xl font-serif capitalize">
                                    {{assinatura.name}}
                                </h1>
                            </div>
                        </a>

                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg mx-auto">
                                <span class="no-underline text-black">
                                    Preço: R$ {{ assinatura.price.replace(".", ",") }}
                                </span>
                            </h1>
                            <!-- <p class="text-grey-darker text-sm">
                                14/4/19
                            </p> -->
                        </header>

                        <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                            <p class="text-sm" >
                                <label class="flex items-center mt-3" v-for="beneficio in beneficios" :key="beneficio.id">
                                        <i class="text-xl"
                                        v-bind:class=
                                        "{'far fa-check-square text-green-500' : check.check === 1 && check.benefits_id === beneficio.id
                                        && check.subscription_id === assinatura.id ,
                                        'fas fa-times text-red-500' : check.check === 0
                                        && check.benefits_id === beneficio.id
                                        && check.subscription_id === assinatura.id}"
                                        v-for="check in subscriptionBenefits" :key="check.id"></i>
                                <span class="ml-3">{{ beneficio.name }}</span>

                                </label>
                            </p>


                        </footer>
                    <div class="my-5">
                        <a href="#" class="bg-green-500 text-white px-5 rounded text-3xl
                         hover:bg-yellow-500">Comprar</a>
                    </div>
                    </article>
                    <!-- END Article -->

                </div>
                <!-- END Column -->
            </div>
        </template>
    </pagesLayout>
</template>

<style>

</style>

<script>
    import pagesLayout from '@/Layouts/PagesLayout'

    export default {
        components: {
            pagesLayout

        },
        props: {
            assinaturas: Array,
            beneficios: Array,
            subscriptionBenefits: Array,
        },


    }

</script>
