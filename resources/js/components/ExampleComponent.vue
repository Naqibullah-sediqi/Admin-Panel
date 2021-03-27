<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Woo it is vue and laravel</div>

                    <div class="card-body">
                       Welcome naqibullah sediqi it is default page
                    

                    <div v-for="n in newsContent">

                    <ul>

                                <li>{{ns.date}}</li>
                                <li>{{ns.organization}}</li>
                    </ul>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script type="application/javascript">

    export default {

        data(){
        return {

        newsContent : []
        }
        },
        created() {
           this.fetchNews();
        },

        methods :{

        fetchNews(){
        this.$http.get('news').then(response => {this.newsContentnewsContent = response.data.newsData});
        

        }

        }
    }

</script>
