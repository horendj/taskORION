<template>
  <div id ='app' class="container mt-6">
  <br>
    <h1>Data selection page</h1>
    <br>
    <h5 >Select nubmer of records about people</h5>
    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" v-model="pers" @change="ShowPeople">
      <option v-for="person in people">{{ person.id }}</option>
    </select>

    <div class="row">
      <div class="col-lg-4" v-for="p in NumOfPeople">
        <div class="card mt-3">
          <router-link class="card-body" :to="{name: 'showPerson', params: {personName: p.name}}">
            <h4 class="card-title">{{p.name}} <img src="/icon/car.svg" v-if="p.car[0].brand != ''"></h4>
          </router-link>

        </div>
      </div>
    </div>
    <div class="alert alert-danger" role="alert" v-if="errored">
      Ошибка загрузки данных!
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      people:[],
      pers: '',
      NumOfPeople: [],
      errored: false,
      loading: true
    }
  },

  methods:{
    ShowPeople(){
    axios.get('/api/allPeople/'+this.pers)
    .then(response => {
      this.NumOfPeople = response.data.data

    })
    .catch(error=>{
      console.log(error)
      this.errored = true
    })
    .finally(() => {
      this.loading = false
    })
    }
  },

  mounted(){
    axios.get('/api/allPeople')
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
