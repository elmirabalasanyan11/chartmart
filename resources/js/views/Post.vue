<template>
    <div>
        <create-post></create-post>
        <h4 class="mt-3">Posts count - {{ postsCount }}</h4>
        <spinner v-if="loading"></spinner>
        <div class="row mt-3" v-else>

            <one-post v-for="post in allPosts" :title="post.title" :body="post.body" :date="post.created_at"
                      :id="post.id"></one-post>
        </div>
    </div>
</template>

<script>
    import Spinner from "./Spinner";
    import OnePost from "../blog/OnePost";
    import {mapGetters, mapActions} from 'vuex';
    import CreatePost from "./CreatePost";

    export default {
        name: "Post",
        components: {Spinner, OnePost, CreatePost},
        data: () => ({
            loading: true,
            posts: [],
        }),

        computed: mapGetters(['allPosts', 'postsCount']),

        async mounted() {
            //use vuex store methods
            this.fetchPosts();
            this.loading = false
        },

        methods:
            mapActions(['fetchPosts']),
    }
</script>

<style scoped>

</style>
