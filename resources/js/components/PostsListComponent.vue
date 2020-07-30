<template>
    <div>

        <router-link class="btn btn-success" :to=" {name: 'contact' } ">Contacto</router-link>

        <posts-list-default
        :key="currentPage" 
        @getCurrentPage="getCurrentPage"
        v-if="total > 0 " 
        :posts="posts" 
        :pCurrentPage="currentPage" 
        :total="total"
        ></posts-list-default>
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
            fetch('/api/post?page='+this.currentPage)
            .then(response => response.json())
            .then( json => {
                this.posts = json.data.data
                this.total = json.data.last_page
            });
        },
        getCurrentPage: function(currentPageVal) {
            console.log("postList + currenpage: "+currentPageVal)
            this.currentPage = currentPageVal;
            this.getPosts()
        }
    },

    data: function () {
      return {
        postSelected: '',
        posts: [],
        total: 0,
        currentPage:1
      }
    },
}
</script>