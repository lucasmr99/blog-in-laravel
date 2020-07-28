<template>
    <div>
        <div class="card" v-for="post in posts" :key="post.title">
            <img :src=" '/images/' + post.image" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ post.title }}</h5>
                <p class="card-text">{{ post.content }}</p>
                <button class="btn btn-primary" v-on:click="postClick(post)">Ver Resumen</button>
                <router-link class="btn btn-success" :to=" {name: 'detail', params: { id: post.id} } ">Ver</router-link>
            </div>
        </div>
        <modal-posts :post="postSelected"></modal-posts>
   </div>
</template>

<script>
export default {

    methods: {
        postClick: function(p) {
            this.postSelected = p;
        }
    },

    data: function () {
      return {
        postSelected: '',
        posts: [
            {
                id:1,
                title: 'titulo 1',
                image: '1592672021.jpeg',
                content: '/** * Next, we will create a fresh Vue application instance and attach it to * the page. Then, you may begin adding components to this application * or customize the JavaScript scaffolding to fit your unique needs. */'
            },
            {
                id:2,               
                title: 'titulo 2',
                image: '1592672021.jpeg',
                content: '/** * Next, we will create a fresh Vue application instance and attach it to * the page. Then, you may begin adding components to this application * or customize the JavaScript scaffolding to fit your unique needs. */'
            },
            {
                id:3,
                title: 'titulo 3',
                image: '1592672021.jpeg',
                content: '/** * Next, we will create a fresh Vue application instance and attach it to * the page. Then, you may begin adding components to this application * or customize the JavaScript scaffolding to fit your unique needs. */'
            },
            {
                id:4,
                title: 'titulo 4',
                image: '1592672021.jpeg',
                content: '/** * Next, we will create a fresh Vue application instance and attach it to * the page. Then, you may begin adding components to this application * or customize the JavaScript scaffolding to fit your unique needs. */'
            },
            {
                id:5,
                title: 'titulo 5',
                image: '1592672021.jpeg',
                content: '/** * Next, we will create a fresh Vue application instance and attach it to * the page. Then, you may begin adding components to this application * or customize the JavaScript scaffolding to fit your unique needs. */'
            }
        ]
      }
    },
}
</script>