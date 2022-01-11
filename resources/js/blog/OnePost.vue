<template>
    <div class="card col-md-4 m-2 p-0">
        <div class="card-header">
            {{ title }}
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>{{ body }}</p>
                <footer class="blockquote-footer">
                    <cite title="Source Title">Source Title</cite>
                    {{ date }}
                </footer>
            </blockquote>
        </div>

        <div class="card-footer">
                <router-link  class="btn btn-primary" :to="/posts/ + id"> More </router-link>
        </div>
    </div>
</template>

<script>
    export default {
        name: "OnePost",
        props: {
            title: {
                type: String,
                default: "NULL"
            },

            body: {
                type: String,
                default: "NULL"
            },

            date: {
                type: String,
                default: "NULL"
            },

            id: {
                type: Number,
                default: NaN
            },
        }
    }
</script>

<style scoped>

</style>
