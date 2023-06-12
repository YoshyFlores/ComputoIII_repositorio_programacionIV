<template>
    <div class="container">
        <h1>Post</h1>
        <br />
        <ul v-for="post in posts" :key="post.id">
            <li>{{ post.id }}
            <p>{{post.post_name}}</p>
            </li>
        </ul>
    </div>
</template>

<script>
export default ({
    data() {
            return{
                posts: []
            }
    },
    created(){
        this.getPosts();
    },
    methods: {
        getPosts(api_url){
            api_url = api_url || '/api/v2/posts'
            const headers = {
                'Authorization': 'Bearer 1|DQ9h7bvRM6zKXIgffBkBUcJIi1lgthjdom8Y1yh4'
            };
            fetch(api_url, {headers})
                .then(response => response.json())
                .then(response => this.posts = response.data)
                .catch(error=>console.log(error))
            }
    }
})
</script>

<style scoped></style>
