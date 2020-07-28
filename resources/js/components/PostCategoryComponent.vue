<template>
    <div>
        <h1>{{ category.title }}</h1>
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
    created(){
        this.getPosts();
    },
    methods: {
        postClick: function(p) {
            this.postSelected = p;
        },
        getPosts(){
            console.log( 'categories ' + this.$route.params.category_id)
            fetch('/api/post/'+this.$route.params.category_id+'/category')
            .then(response => response.json())
            .then( json => {
                this.posts = json.data.posts.data
                this.category = json.data.category
            });
        }
    },

    data: function () {
      return {
        postSelected: '',
        posts: [],
        category: ''
      }
    },
}
</script>