<template>
    <div>
        <div v-if="post">
            <div class="card mt-3">
                <div class=" card-header">
                    <img :src=" '/images/' + post.image " class="card-img-top">
                </div>
                <div class="card-body">
                    <h1 class="card-title">{{ post.title }}</h1>
                    <p class="card-text">{{ post.content }}</p>
                </div>
            </div>
        </div>
        <div v-else>
            <h1>El post no existe</h1>
        </div>
    </div>
</template>

<script>
export default {

    created(){
        console.log('creado');
    },

    methods: {
        getPost: function() {
        }
    },

    data: function () {
      return {
        postSelected: '',
        post: 
            {
                title: 'titulo 1',
                image: '1592672021.jpeg',
                content: '/** * Next, we will create a fresh Vue application instance and attach it to * the page. Then, you may begin adding components to this application * or customize the JavaScript scaffolding to fit your unique needs. */'
            },
      }
    },
}
</script>