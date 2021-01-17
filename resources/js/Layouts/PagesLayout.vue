<template>
    <div>
        <header class="bg-gray-200 shadow border-8 border-b border-red-900">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 align-items-center">
                <slot name="header"></slot>
                <ul class="inline-flex absolute right-0 top top-0 mt-7">
                    <li class="mx-3">
                        <a :href="route('home')">Home</a>
                    </li>
                    <li class="mx-3">
                        <a :href="route('galery')">Galeria</a>
                    </li>
                    <li id="dropdown-assin" class="mx-3">
                        <a href="#">Assinatura</a>
                        <ul id="dropdown-ul">
                            <li class="my-2 px-2">
                                <a href="#">Atual:</a>
                            </li>
                            <li class="my-2 px-2">
                                <a :href="route('assinaturas')">Visualizar Pacotes</a>
                            </li>
                        </ul>
                    </li>
                    <template>
                        <li class="mx-3">
                            <a :href="route('login')">Entrar</a>
                        </li>
                    </template>
                </ul>
            </div>

        </header>
            <main>
                <slot></slot>
            </main>

            <footer class="w-full">
                <div class="bg-gray-300 pt-5 pb-10 h-10 text-center align-middle">
                    <h2 class="font-mono">Copyright {{now}} - Kevin Smith</h2>
                </div>
            </footer>
    </div>
</template>

<script>

    export default {

        data(){
            return{
                now: new Date().getFullYear(),
            }
        },
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
        }
    }
</script>

<style>
/*  Reset */

* {
  padding: 0;
  margin: 0;
  vertical-align: baseline;
  list-style: none;
  border: 0;
}

html {
  height: 100%;
  min-height: 100%;
}

body {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  min-height: 100%;
}

footer {
  margin-top: auto;
}

/* Reset Até aqui*/

    #dropdown-ul{
        position: absolute;
        display:none;
        z-index: 1;
        background-color: black;
        color: white;
    }
    #dropdown-ul li a:hover, #dropdown-ul li:hover{
        color: black;
        background-color: white;
    }
    #dropdown-assin:hover #dropdown-ul{
        display: block;
    }
</style>
