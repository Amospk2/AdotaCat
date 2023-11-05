<script setup lang="ts">
import AlertBanner from '../Components/AlertBanner.vue';
import Card from '../Components/Card.vue';
import Header from '../Components/Header.vue';
import MainBanner from '../Components/MainBanner.vue';
import SimpleCard from '../Components/SimpleCard.vue';

defineProps({ user: Object, cats: Object })

</script>

<template>
    <main>
        <Header />
        <AlertBanner img="/storage/asserts/sobre.jpg" />
        <MainBanner>

            <div class="main-banner">
                <h2 class="text-xl mb-2">Quem Somos?</h2>
                Missão:
                AdotaCat é uma organização não governamental dedicada ao bem-estar dos felinos desabrigados e à promoção
                da adoção responsável de gatos. Nossa missão é fornecer um lar amoroso e permanente para gatos
                abandonados, resgatados de situações precárias, ou que foram vítimas de maus-tratos. Além disso,
                buscamos educar a comunidade sobre a importância do cuidado adequado de gatos e promover a esterilização
                como meio de controle populacional.
                História:
                Fundada em 2008 por um grupo de amantes de gatos apaixonados, AdotaCat nasceu da necessidade de criar um
                refúgio seguro para gatos em situações de risco. Inicialmente, a organização consistia em voluntários
                que cuidavam de gatos em suas próprias casas, mas ao longo dos anos, expandimos nossas operações e
                estabelecemos um abrigo para gatos.

                <h2 class="mt-5 mb-2 text-xl ">
                    Atividades Principais:
                </h2>

                <p>
                    Resgate e Reabilitação: Trabalhamos incansavelmente para resgatar gatos em situações de abandono,
                    negligência ou maus-tratos. Após o resgate, proporcionamos tratamento médico, socialização e cuidados
                    veterinários para preparar os gatos para a adoção.

                    Adoção Responsável: Nosso objetivo principal é encontrar lares amorosos e permanentes para os gatos
                    resgatados. Realizamos rigorosos processos de seleção de adotantes para garantir que os gatos sejam
                    entregues a famílias que ofereçam o melhor cuidado possível.

                    Educação e Conscientização: Promovemos a conscientização sobre a importância da esterilização, vacinação
                    e cuidados adequados com os gatos. Organizamos eventos, seminários e disponibilizamos recursos
                    educacionais para a comunidade.

                    Programas de Estímulo à Esterilização: Trabalhamos em parceria com clínicas veterinárias para fornecer
                    serviços de esterilização a preços acessíveis, ajudando a controlar a população de gatos de rua.
                </p>


                <h2 class="mt-5 mb-2 text-xl">Nossos Valores:</h2>
                <p>
                    Amor e respeito por todos os gatos.
                    Compromisso com a adoção responsável.
                    Promoção da conscientização sobre o bem-estar felino.
                    Trabalho árduo e dedicação de nossa equipe de voluntários.

                    Como Você Pode Ajudar:
                    Há muitas maneiras de apoiar a missão de AdotaCat. Você pode se tornar um voluntário, fazer uma doação,
                    adotar um gato, ou simplesmente ajudar a difundir nossa mensagem de amor e cuidado com os felinos.
                    Juntos, podemos fazer a diferença na vida de gatos necessitados.

                    Se você compartilha de nossa paixão por gatos e deseja se envolver ou saber mais sobre AdotaCat, entre
                    em contato conosco. Juntos, podemos continuar a fornecer um lar seguro e amoroso para gatos em situações
                    de vulnerabilidade e promover a adoção responsável.
                </p>
            </div>

            <div class="redes mt-4">
                <input type="button" value="instagram">
                <input type="button" value="twitter">
                <input type="button" value="facebook">
                <input type="button" value="whatsapp">
            </div>
        </MainBanner>



        <div class="footer">
            © Made With ♡ by AmósCruz
        </div>
    </main>
</template>


<style src="../../css/home.css"></style>
