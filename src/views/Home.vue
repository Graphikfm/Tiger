<template>
    <body class=" bg-black h-auto w-screen flex justify-center content-center  ">
    <section class=" flex-row bg-black w-screen">
      <p class="text-white text-center text-4xl mt-11" >ERACLES</p>
      <h1 class="text-white text-center text-2xl mt-11 mr-8 ml-8">Mon programme sportif</h1>
      <div class="flex items-center flex-col">
        <router-link class="bouton w-2/3 mt-8" to="/cours">Mes cours</router-link>
        <router-link class="bouton w-2/3 mt-2" to="/evolution">Mon évolution</router-link>
        <a class="bouton w-2/3 mt-2" href="courses.html">Mes courses</a>
        <a class="bouton w-2/3 mt-2" href="#">Recettes</a>
      </div>
    </section>
  </body>
</template>
<style>
.bouton{
    --tw-text-opacity: 1;
    color: rgba(255, 255, 255, var(--tw-text-opacity));
    font-weight: 700;
    font-size: 1.5rem/* 24px */;
    line-height: 2rem/* 32px */;
    text-align: center;
    padding: 1rem/* 16px */;
    border-width: 2px;
    --tw-border-opacity: 1;
    border-color: rgba(255, 255, 255, var(--tw-border-opacity));
    border-radius: 0.375rem/* 6px */;
}

.bouton:hover{
  --tw-bg-opacity: 1;
  background-color: rgba(17, 24, 39, var(--tw-bg-opacity));
}

.bouton1{
  --tw-text-opacity: 1;
    color: rgba(255, 255, 255, var(--tw-text-opacity));
    font-size: 0.8rem/* 24px */;
    line-height: 2rem/* 32px */;
    text-align: center;
    padding: 0.2rem/* 16px */;
    border-width: 2px;
    --tw-border-opacity: 1;
    border-color: rgba(255, 255, 255, var(--tw-border-opacity));
    border-radius: 0.375rem/* 6px */;

}

.bouton1:hover{
  --tw-bg-opacity: 1;
  background-color: rgba(17, 24, 39, var(--tw-bg-opacity));
}
</style>
<script>
// @ is an alias to /src
// import HelloWorld from '@/components/HelloWorld.vue';

export default {
  name: 'Home',
  components: {
    // HelloWorld,
  },
};
</script>
