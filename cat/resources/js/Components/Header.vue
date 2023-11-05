<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import route from 'ziggy-js';

const props = defineProps({auth: {}})
</script>

<template>
    <div class="header">
        <div class="banner">
            <h1 class="text-3xl">AdotaCat</h1>
        </div>
        <div class="menu">
            <a href="/"><input type="button" value="Inicio"></a>
            <a href="care"><input type="button" value="CatCare"></a>
            <a href="sobre"><input type="button" value="Sobre"></a>

            <span v-if="route().current() !== 'login'">
                <Link v-if="$page.props.auth?.user" :href="route('logout')" method="POST"><input type="button" value="Sair"></Link>
                <a v-else href="login"><input type="button" value="Login"></a>
            </span>
        </div>  
    </div>
</template>


<style>


.menu {
    place-self: center;
}


.header {
    display: grid;
    grid-template-columns: 1fr 3fr;
    background-color: #F5F5F5;
    padding: 10px;
    margin-top: 20px;
}

.banner {
    font-size: 19px;
    justify-self: center;
    color: #F99417;
}

.banner h1 {
    display: inline;
    text-align: center;
}
</style>