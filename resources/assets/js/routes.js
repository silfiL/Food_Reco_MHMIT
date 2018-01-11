import VueRouter from 'vue-router';
import Home from './components/Home.vue';
import Profile from './components/Profile.vue';
import EditProfile from './components/EditProfile.vue';

let routes = [{
        path: '/',
        component: Home
    },
    {
        path: '/profile',
        component: Profile
    },
    {
        path: '/profile/edit',
        component: EditProfile
    }
];


export default new VueRouter({
    routes
});