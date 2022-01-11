import VueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(VueRouter);

import Index from "./views/index";
import Chart from "./views/Chart";
import Post from "./views/Post";
import PostById from "./views/PostById";
import CreatePost from "./views/CreatePost";

const routes = [
    {
        path: '/',
        component: Index
    },

    {
        path: '/chart',
        component: Chart
    },

    {
        path: '/posts',
        component: Post
    },

    {
        path: '/posts/:id',
        component: PostById
    },

    {
        path: '/create-post',
        component: CreatePost
    }
];

export default new VueRouter({
    mode: 'history',
    routes
})
