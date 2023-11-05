<script setup lang="ts">

defineProps({
    cardColor: String,
})

</script>
<template>
    <div :class='`${cardColor} simple-card`'>
        <slot/>
    </div>
</template>


<style>
.simple-card {
    display: grid;
    grid-template-rows: 1fr 1fr;
    min-height: 200px;
    padding: 10px;
    border-radius: 10px;
    color: #F5F5F5;
    justify-content: center;

}

.color-y {
    background-color: rgb(166, 182, 98);
}


.color-r {
    background-color: rgb(211, 111, 149);
}

.color-g {
    background-color: rgb(108, 184, 90);
}
</style>