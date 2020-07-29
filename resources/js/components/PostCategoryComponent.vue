<template>
    <div>
        <h1>{{ category.title }}</h1>
        <posts-list-default
        :key="currentPage" 
        @getCurrentPage="getCurrentPage"
        v-if="total > 0 " 
        :posts="posts" 
        :pCurrentPage="currentPage" 
        :total="total"
        ></posts-list-default>   </div>
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
            fetch('/api/post/'+this.$route.params.category_id+'/category?page='+this.currentPage)
            .then(response => response.json())
            .then( json => {
                this.posts = json.data.posts.data
                this.total = json.data.posts.last_page
                this.category = json.data.category
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
        category: "",
        currentPage:1
      }
    },
}
</script>