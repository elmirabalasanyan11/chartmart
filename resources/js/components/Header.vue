<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" v-for="link in links">
<!--                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
                    <router-link class="nav-link" :to="link.href"> {{ link.title }}</router-link>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "Header",
        data() {
            return {
                links: [
                    {
                        title: 'Home',
                        href: '/'
                    },
                    {
                        title: 'Chart',
                        href: '/chart'
                    },
                    {
                        title: 'Posts',
                        href: '/posts'
                    },
                    {
                        title: 'Create post',
                        href: '/create-post'
                    }
                ]
            }

        }
    }
</script>

<style scoped>

</style>
