<script setup lang="ts">
import MainLayout from '@/Layouts/MainLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Card from '../Components/Card.vue';
</script>

<template>
    <Head title="Dashboard" />

    <MainLayout>

        <div class="row">
            <div class="main">
                <Card img="care.png" title="Dan" content=" Click Aqui Para Saber Mais">
                    <img class="card-img" src="/storage/asserts/bele.jpeg" />
                </Card>

                <Card img="care.png" title="Dan" content=" Click Aqui Para Saber Mais">
                    <img class="card-img" src="/storage/asserts/dali.jpeg" />
                </Card>


            </div>
            <div class="column">
                <h2>Encontre um parceiro para você!</h2>
            </div>
        </div>  
    </MainLayout>
</template>



<style src="../../css/home.css">
</style>