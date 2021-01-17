<template>
    <pagesLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               <a :href="route('home')"> Home</a>
            </h2>
        </template>
            <template>
                <h1>Acesse a Pagina da Galeria para ver as nossas novidades!</h1>
                <p>Para mais conteudo, acesse nossa pagina de assinatura, e vire um membro.</p>
                <p>Estamos com ótimos descontos para voce!</p>
                <p>Venha Conferir <a href="#">Assine Já!</a></p>
            </template>
    </pagesLayout>
</template>

<style>

</style>

<script>
    import pagesLayout from '@/Layouts/PagesLayout'

    export default {
        components: {
            pagesLayout,
        }
    }
</script>
