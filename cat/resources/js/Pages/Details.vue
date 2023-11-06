<script setup lang="ts">
import AlertBanner from '../Components/AlertBanner.vue';
import Card from '../Components/Card.vue';
import Header from '../Components/Header.vue';
import MainBanner from '../Components/MainBanner.vue';
import Sugestao from '../Components/Sugestao.vue';

defineProps({ id: String })

</script>

<template>
    <main>
        <Header />
        <AlertBanner img="/storage/asserts/preg.jpeg" />
        <MainBanner>
            <h1>Conheça mais sobre Preguiça!</h1>

            <p>Permita-nos apresentar Preguiça. Ele é um macho de pêlo curto doméstico de 2 meses.</p>

            <p>Nasceu em nosso abrigo e agora deseja ir pra sua familia.
            </p>
            <input type="button" value="Adotar">
        </MainBanner>


        <Sugestao />
        <div class="main">

            <Card img="care.png" title="Dan" content=" Click Aqui Para Saber Mais">
                <img class="card-img" src="/storage/asserts/bele.jpeg" />
            </Card>

            <Card img="care.png" title="Dan" content=" Click Aqui Para Saber Mais">
                <img class="card-img" src="/storage/asserts/dali.jpeg" />
            </Card>

            <Card img="care.png" title="Dan" content=" Click Aqui Para Saber Mais">
                <img class="card-img" src="/storage/asserts/dali.jpeg" />
            </Card>
        </div>

        <div class="footer">
            © Made With ♡ by AmósCruz
        </div>
    </main>
</template>


<style src="../../css/home.css"></style>