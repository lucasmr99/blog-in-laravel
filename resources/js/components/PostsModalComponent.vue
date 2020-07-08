<template>
    <!-- Modal -->
    <div v-if="post" class="modal fade" id="postsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{ post.title }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">{{ post.content }}</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
</template>

<script>
export default {
    props: ['post'],
    created(){
        console.log('modal')
    },
    watch: {
      post: (newVal, oldVal) => {
        $("#postsModal").modal("show");
        console.log(newVal.title + oldVal.title);
      }
    }
}
</script>