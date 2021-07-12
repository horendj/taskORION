<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <router-link :to="{name: 'home'}"><h4>Home</h4></router-link>
        <router-link :to="{name: 'people'}"><h4>Rich person</h4></router-link>
      </div>
    </nav>
    <div>
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
  export default {

  }
</script>
