<template>
  <input type="button" value="envoyer" @click="testAxios">
  <div id="response"></div>
  <div>{{ dataget }}</div>
</template>

<script>
export default {
  name: 'login',
  data() {
    return {
      data: {
        table: 'utilisateurs',
        nom: 'Blanc',
        prenom: 'Cyril',
        genre: 'Homme',
      },
      delete: {
        table: 'utilisateurs',
        id: '1',
      },
      dataget: null,
    };
  },
  // methods: {
  //   create () {
  //     this.axios.post('', this.data).then((response) => (document.querySelector('#response').innerHTML = response.data ))
  //   },
  //   read () {
  //     this.axios.get('', this.data).then((response) => (this.dataget = response))
  //   }
  // },
  // update () {
  //   this.axios.get('', this.data).then((response) => (document.querySelector('#response').innerHTML = response.data ))
  // },
  // delete () {
  //   this.axios.delete('', {data:{id:13,table:'utilisateurs'}}).then((response) => (document.querySelector('#response').innerHTML = response.data))
  // }
};
</script>
