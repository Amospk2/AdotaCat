
<script setup lang="ts">
import Header from '../Components/Header.vue';

</script>


<template>
    <main>
        <Header />
        <slot />
        <div class="footer">
            © Made With ♡ by AmósCruz
        </div>
    </main>
</template>
 
 
<style src="../../css/home.css"></style>