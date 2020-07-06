<template>
    <div>
        <div class="card" v-for="post in posts" :key="post.title">
            <img :src=" '/images/' + post.image" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ post.title }}</h5>
                <p class="card-text">{{ post.content }}</p>
                <a href="#" class="btn btn-primary">Ver Resumen</a>
            </div>
        </div>
   </div>
</template>

<script>
export default {
    props: ['title','final_posts'],
    data: function () {
      return {
        posts: [
            {
                title: 'titulo 1',
                image: '1592672021.jpeg',
                content: '/** * Next, we will create a fresh Vue application instance and attach it to * the page. Then, you may begin adding components to this application * or customize the JavaScript scaffolding to fit your unique needs. */'
            },
            {
                title: 'titulo 2',
                image: '1592672021.jpeg',
                content: '/** * Next, we will create a fresh Vue application instance and attach it to * the page. Then, you may begin adding components to this application * or customize the JavaScript scaffolding to fit your unique needs. */'
            },
            {
                title: 'titulo 3',
                image: '1592672021.jpeg',
                content: '/** * Next, we will create a fresh Vue application instance and attach it to * the page. Then, you may begin adding components to this application * or customize the JavaScript scaffolding to fit your unique needs. */'
            },
            {
                title: 'titulo 4',
                image: '1592672021.jpeg',
                content: '/** * Next, we will create a fresh Vue application instance and attach it to * the page. Then, you may begin adding components to this application * or customize the JavaScript scaffolding to fit your unique needs. */'
            },
            {
                title: 'titulo 5',
                image: '1592672021.jpeg',
                content: '/** * Next, we will create a fresh Vue application instance and attach it to * the page. Then, you may begin adding components to this application * or customize the JavaScript scaffolding to fit your unique needs. */'
            }
        ]
      }
    },
}
</script>