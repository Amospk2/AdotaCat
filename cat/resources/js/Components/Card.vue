<script setup lang="ts">

const props = defineProps({
    redirectTo: {default: '#', type: String},
    title: {default: '', type: String},
    content: {default: '', type: String},
    img: {default: '', type: String},
    simpleHeader: {type: Boolean}
})

</script>
<template>
    <div class="card">
        <slot />
        <a :href=props.redirectTo class="card-link">
            <h2 v-if="simpleHeader" class="text-3xl" >
                <b>{{props.title}}</b>
            </h2>

            <p v-else>
                <b>{{props.title}}</b>
                <br>
                {{props.content}}
            </p>
        </a>
    </div>
</template>


<style>
.card {
    width: 100%;
    background-color: #F5F5F5;
    margin-bottom: 20px;
    overflow: hidden;
    color: black;
    border-radius: 10px;
    border: 1px solid rgb(255, 247, 247, 0);
    transition: scale 250ms ease, opacity 250ms linear;
    text-align: center;

}

.card:hover .card-img {
    height: 29vh;
}

.card-img {
    height:30vh;
    width: 100%;
    object-fit: cover;
    transition: height 500ms ease;
}

.card-link {
    display: grid;
    grid-template-columns: 1fr;
    width: 100%;
    margin-top: 10px;
    text-decoration: none;
    color: #4D4C7D;
    background-color: #F5F5F5;
    cursor: pointer;
    transition: font-size 500ms ease;
}
</style>