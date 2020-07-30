<template>
    <div class="col-8 offset-2">
        <div class="card">
            <div class="card-header">
                <img class="logo_200 d-block mx-auto"  src="/images/1592672021.jpeg">
            </div>
            <div class="card-body">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Nombre</span>
                    </div>
                    <input type="text" class="form-control" v-model="name">
                </div><!-- input-group -->
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Apellido</span>
                    </div>
                    <input type="text" class="form-control"  v-model="surname">
                </div><!-- input-group -->
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Email</span>
                    </div>
                    <input type="email" class="form-control"  v-model="email">
                </div><!-- input-group -->
                <div class="input-group mt-3">
                    <textarea  class="form-control" placeholder="Comentario"  v-model="content"></textarea>
                </div><!-- input-group -->

                <button @click="saveContact"  class="btn btn-primary float-right mt-3 btn-lg">Enviar</button>
            </div><!-- card-body -->
        </div>
    </div>
</template>

<script>
export default {

    created(){

    },

    methods: {
        saveContact: function() {
            console.log(this.name+" "+this.surname+" "+this.email+" "+this.content)
            return;
           /*  fetch('/api/post/'+ this.$route.params.id)
             .then(response => response.json())
             .then( json => this.post = json.data); */
        }
    },

    data: function () {
      return {
        name: '',
        surname: '',
        email: '',
        content: '',
      }
    },
}
</script>