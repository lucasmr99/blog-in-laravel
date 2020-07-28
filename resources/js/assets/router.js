window.Vue = require('vue');
import VueRouter from 'vue-router';
import PostList from '../components/PostsListComponent.vue';
import PostDetail from '../components/PostsDetailComponent.vue';

Vue.use(VueRouter);

/* const Foo = { template: 
    '<div>foo <router-link to="/foo">Go to Foo</router-link> <router-link to="/bar">Go to Bar</router-link><router-link to="/">Go to Bar list</router-link></div>' 
};

const Bar = { template: 
    '<div>bar <router-link to="/foo">Go to Foo</router-link> <router-link to="/bar">Go to Bar</router-link></div>'
}; */

export default new VueRouter({
    mode: 'history', //es util para quitar la # de la url
    routes: [  
        { path: '/', component: PostList, name: 'list' }, 
        { path: '/detail/:id', component: PostDetail, name: 'detail' }, 
    ]// short for `routes: routes`
});