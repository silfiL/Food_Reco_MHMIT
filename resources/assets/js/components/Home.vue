<template>
    <div class="container">
        <my-menu>
            <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><a href="#">Healthy Section</a></li>
                    <li role="presentation"><a href="#">Recommend</a></li>
                </ul>
                <article>
                    <div class="col-md-12">
                        <carousel>
                            <slide v-for="art in articles">
                                <h1>{{art.title}}</h1>
                                <p>{{art.content}}</p>
                            </slide>
                        </carousel>
                    </div>
                </article>
        </my-menu>
    </div>
</template>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    export default {
        data(){
            return {
                article: {
                    title: '',
                    content: '',
                    image: ''
                },
                errors: [],
                articles: []
            }
        },
        mounted()
        {
            this.readArticles();
        },
        methods: {
            readArticles()
            {
                axios.get('/article')
                    .then(response => {

                        this.articles = response.data.articles;

                    });
            }
        }
    }
</script>