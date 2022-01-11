export default {
    actions: {
        async fetchPosts(context){
            const res = await fetch('api/posts');
            const posts = await res.json();
            context.commit('updatePosts', posts)
        },

        async createPost(context, form){
            await axios.post('/api/posts', form, {
                headers: {"Content-type": "application/json"}
            }).then(response => {
                    if(response.data.status){
                        context.commit('addPostToList', response.data.post)
                        // this.$router.push('/posts/' + response.data.post.id)
                    }
                    console.log(response.data)
                }).catch(error => {
                    console.log(error)
                })
        }
    },

    state: {
        posts: []
    },

    mutations: {
        updatePosts(state, posts){
            state.posts = posts.posts;
        },

        addPostToList(state, newPost){
            state.posts.unshift(newPost);
        }
    },

    getters: {
        allPosts(state) {
            return state.posts;
        },
        postsCount(state){
            return state.posts.length;
        }
    },
}
