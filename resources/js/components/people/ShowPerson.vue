<template>
  <div class="container mt-6">
  <input type="button" class="btn btn-outline-primary" onclick="history.back();" value="Назад"/>
  <div class="col-lg-6" v-for="pers in person">
    <div class="card mt-3">
        <ul type="circle" class="list-group-item" style="font-size: 1.4em;">
          <li><b>Name:</b> {{pers.name}}</li>
          <li><b>E-mail:</b> {{pers.email}}</li>
          <li><b>Salary:</b> {{pers.salary}}</li>
          <li v-if="pers.car[0].brand != ''"><b>Car:</b>  {{pers.car[0].brand}} <img src="/icon/car.svg"></li>
          <li><b>Address:</b> {{pers.address.street}} {{pers.address.suite}}, {{pers.address.street}}</li>
          <li><b>Company:</b> {{pers.company[0].name}}</li>
        </ul>
      </a>
    </div>
  </div>
  </div>
</template>

<script>
  export default {
    props: [
      'personName'
    ],
    data(){
      return{
        person: null
      }
    },
    mounted(){
      axios.get('/api/onePerson/'+this.personName)
      .then(response => {
        this.person = response.data.data;
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
