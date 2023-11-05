<script setup lang="ts">

defineProps({
    alignEnd: {type: Boolean, required: false},
    img: { type: String, required: true }, 
    title: {type: String},
})
</script>


<template>
    <div class="alert-banner">
        <img :src="img">
        <h1 :class='`${alignEnd ? "align-end" : "align-start"}`'> {{ title }}
        </h1>
    </div>
</template>

<style>
.alert-banner {
    display: grid;
    grid-template-columns: 1fr;
    margin: 10px auto;
}

.alert-banner img {
    width: 100%;
    height: 350px;
    object-fit: cover;
    opacity: 0.5;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;

}

.alert-banner h1 {
    text-align: center;
    margin-top: -200px;
    z-index: 1;
    color: white;
    font-weight: 700;
    font-size: 2.5rem;
}


.align-start {
    margin-right: 40%;
}

.align-end {
    margin-left: 40%;
}
</style>