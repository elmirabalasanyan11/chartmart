<template>
    <div>
        <spinner v-if="loader"></spinner>
        <div class="card mt-4" v-else>
            <div class="card-header">
                {{ post.title }}
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>  {{ post.body }}</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
</template>

<script>
    import Spinner from "./Spinner";
    import axios from 'axios';


    export default {
        name: "PostById",
        components: { Spinner },
        data: () => ({
            loader: true,
            post: [],
        }),

        mounted() {
            this.loadPost(this.$route.params.id)
        },

        methods: {
            loadPost(id) {
                axios.get('/api/posts/' + id)
                    .then(response => {
                        this.post = response.data.post;
                        this.loader = false;
                    })
                    .catch(error => {
                        console.log(error)
                    })
            }
        }
    }
</script>

<style scoped>

</style>
