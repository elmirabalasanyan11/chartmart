<template>
    <form>
        <h4>Create post </h4>
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" v-model="form.title" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp" placeholder="Enter title">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail2">Description</label>
            <input type="text" v-model="form.body" class="form-control" id="exampleInputEmail2"
                   aria-describedby="emailHelp" placeholder="Enter Description">
        </div>

        <button type="button" class="btn btn-primary" @click.prevent="store">Create</button>
    </form>
</template>

<script>
    import axios from 'axios';
    import {mapActions} from 'vuex';

    export default {
        name: "CreatePost",

        data: () => ({
            form: {
                title: '',
                body: '',
            },
            loader: false
        }),

        methods: {
            ...mapActions(['createPost']),
            store() {
                this.createPost(this.form);
            }
        }
    }
</script>

<style scoped>

</style>
