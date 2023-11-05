<script setup lang="ts">

</script>

<template>
    <div class="main-banner">
        <slot />
    </div>
</template>


<style>
.main-banner {
    display: flex;
    flex-direction: column;
    margin: 10px 0 0 0;
    padding: 10px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    background-color: #F5F5F5;

}

.main-banner h1 {
    font-family: monospace;
    color: #F99417;
    font-size: 25px;

}

.main-banner p {
    overflow: hidden;
    text-overflow: ellipsis; 
}

.main-banner input[type=button] 
{
    align-self: center;
    width: 15%;
}
</style>