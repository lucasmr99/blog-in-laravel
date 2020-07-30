window.Vue = require('vue');
import VueRouter from 'vue-router';

import PostList from '../components/PostsListComponent.vue';
import PostDetail from '../components/PostsDetailComponent.vue';
import PostCategory from '../components/PostCategoryComponent.vue';

import Contact from '../components/ContacComponent.vue';

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
        { path: '/post-category/:category_id', component: PostCategory, name: 'post-category' }, 
        { path: '/contact', component: Contact, name: 'contact' }, 
    ]// short for `routes: routes`
});