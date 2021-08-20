<template>
  <div id="app">
    <p>
      Nom <input v-model="nom">
      Prénom <input v-model="prenom">
    </p>
    <p>
      <button @click="insertData">Sauver</button>
    </p>
  </div>
</template>

<script>
export default defineComponent({
  name: 'test_add',
  data() {
    return {
      data: {
        
      }
    }
    
  },
})
</script>


