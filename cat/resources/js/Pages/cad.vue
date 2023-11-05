<script setup>
import { useForm } from '@inertiajs/inertia-vue3'


defineProps({cats:Object})

const form = useForm({
  name: null,
  avatar: null,
})

function submit() {
  console.log(form.post('/create'));
}
</script>

<template>
    {{ cats }}
  <form @submit.prevent="submit">
    <input type="text" v-model="form.name" />
    <input type="file" @input="form.avatar = $event.target.files[0]" />
    <progress v-if="form.progress" :value="form.progress.percentage" max="100">
      {{ form.progress.percentage }}%
    </progress>
    <button type="submit">Submit</button>
  </form>

  <img :src="'/storage/' + cats.photo" alt="aa">
</template>