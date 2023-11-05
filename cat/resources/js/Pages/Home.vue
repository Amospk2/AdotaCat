<script setup lang="ts">
import AlertBanner from '../Components/AlertBanner.vue';
import Card from '../Components/Card.vue';
import Header from '../Components/Header.vue';
import MainBanner from '../Components/MainBanner.vue';

defineProps({ user: Object, cats: Object })

</script>

<template>
   <main>
    <Header />
    <AlertBanner img="/storage/asserts/indexbanner.jpg" title="O novo começo para eles." />
    <MainBanner>
        <h1>Aceite um felino em sua vida!</h1>
        <p>
            Gatos são animais de estimação carinhosos e podem oferecer companhia e conforto aos seus proprietários. Muitas pessoas encontram consolo na presença silenciosa e relaxante de um gato.
            A interação com um gato, como acariciá-lo ou simplesmente passar tempo com ele, pode reduzir o estresse e promover o relaxamento. A liberação de hormônios, como a oxitocina, durante a interação com gatos pode melhorar o humor.
        </p>
        <input type="button" value="Começar">
    </MainBanner>                                                                                                                                                                                                                       

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

    <div class="footer">
        © Made With ♡ by AmósCruz
    </div>
   </main>
</template>


<style src="../../css/home.css">
</style>