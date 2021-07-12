<template>
  <div class="container mt-6">
    <h1>Information about all people</h1>
    <div class="row">
      <div class="col-lg-4" v-for="person in people">
        <div class="card mt-3">
          <router-link class="card-body" :to="{name: 'showPerson', params: {personName: person.name}}">
            <h4 class="card-title">{{person.name}} <img src="/icon/car.svg" v-if="person.car[0].brand != ''"></h4>
          </router-link>
        </div>
      </div>
    </div>
    <div class="alert alert-danger" role="alert" v-if="errored">
      Ошибка загрузки данных!
    </div>
    <br><br>
    <div class="text-center" v-if="loading">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data(){
      return{
        people:[],
        errored: false,
        loading: true
      }
    },
    mounted(){
      axios.get('/api/richPerson')
      .then(response => {
        this.people = response.data.data

      })
      .catch(error=>{
        console.log(error)
        this.errored = true
      })
      .finally(() => {
        this.loading = false
      })
    }
  }
</script>
