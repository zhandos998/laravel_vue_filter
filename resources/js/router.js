import VueRouter from 'vue-router';
import Home from './components/Home.vue';

export default new VueRouter({
    routes:[
        {
            path:'/',
            component:Home
        }
    ],
    mode:'history'
})

