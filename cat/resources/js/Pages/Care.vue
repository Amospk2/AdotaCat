<script setup lang="ts">
import AlertBanner from '../Components/AlertBanner.vue';
import Card from '../Components/Card.vue';
import Header from '../Components/Header.vue';
import Sugestao from '../Components/Sugestao.vue';
import SimpleCard from '../Components/SimpleCard.vue';

defineProps({ user: Object, cats: Object })

</script>

<template>
    <main>
        <Header />
        <AlertBanner img="/storage/asserts/care.png" :align-end="true" title="Você pode ajuda-los!" />

        <div class="row">
            <div class="main">

                <Card img="care.png" title="Dan" simple-header>
                    <img class="card-img" src="/storage/asserts/bele.jpeg" />
                </Card>

                <Card img="care.png" title="Dicas para filhotes" simple-header>
                    <img class="card-img" src="/storage/asserts/dali.jpeg" />
                </Card>


            </div>
            <div class="column">
                <h2>Encontre um parceiro para você!</h2>
            </div>
        </div>
        <Sugestao />
        <div class="simple-row ">

            <SimpleCard card-color="color-g">
                <h2>
                    Veterinarios proximos
                </h2>

                <h3>Encontre uma clinica proxima a você!</h3>
                <div>
                    <input type="search" name="buscar" placeholder="Digite seu endereço">
                    <input type="button" value="Search">
                </div>
            </SimpleCard>

            <SimpleCard card-color="color-y">
                <h2>
                    Abrigos proximos
                </h2>

                <div class="simple-column">
                    <a href="">CatHelper</a>
                    <a href="">Lar Anjos</a>
                    <a href="">Jequié Cats</a>
                </div>

                <div style="width: 100%;">
                    <input type="search" name="buscar" placeholder="Digite seu endereço">
                    <input type="button" value="Search">
                </div>
            </SimpleCard>

            <SimpleCard card-color="color-r">
                <h2>
                    Dicas Pet
                </h2>
                <div class="simple-column ">
                    <a href="">Banho em gatos</a>
                    <a href="">Gravidez e filhotes</a>
                    <a href="">Alimentações</a>
                </div>
                <input type="button" value="Ver Mais">
            </SimpleCard>

        </div>

        <div class="footer">
            © Made With ♡ by AmósCruz
        </div>
    </main>
</template>


<style src="../../css/home.css"></style>
