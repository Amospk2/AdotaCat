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
            <h1>Medidas para Prevenir Doenças em Gatos</h1>
            <br>
            <p>
                Prevenir doenças em gatos é fundamental para garantir que eles levem vidas saudáveis e felizes. Aqui estão algumas medidas importantes que você pode adotar para ajudar a manter seu gato saudável:
            </p>
            <ul>
                <li>
                    <p>Vacinação: Certifique-se de que seu gato esteja em dia com as vacinas recomendadas pelo seu
                        veterinário.</p>
                </li>
                <br>
                <li>
                    <p>Alimentação saudável: Forneça uma dieta balanceada e adequada para a idade do seu gato.</p>
                </li>
                <br>
                <li>
                    <p>Controle de peso: Mantenha seu gato em um peso saudável para evitar problemas de saúde.</p>
                </li>
                <br>
                <li>
                    <p>Desparasitação: Mantenha seu gato livre de parasitas internos e externos.</p>
                </li>
                <br>
                <li>
                    <p>Esterilização/Castração: A esterilização/castração ajuda a prevenir doenças e controlar a população
                        de gatos.</p>
                </li>
                <br>
            </ul>

    
            <p>
                Lembre-se de que cada gato é único, e as necessidades de cuidados de saúde podem variar. Consulte sempre um veterinário para orientações específicas com base na idade, histórico médico e necessidades individuais do seu gato. A prevenção é a chave para manter seu felino feliz e saudável por muitos anos.
            </p>
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