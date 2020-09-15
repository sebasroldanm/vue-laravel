<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="title">Captura tus ideas</h2>
                    </div>

                    <div class="card-body">
                        <h4>En que estas pensando?</h4>
                    </div>

                    <div class="well">
                        <!-- <h4>En que estas pensando?</h4> -->
                        <form v-on:submit.prevent="createIdea">
                            <div class="input-group">
                                <input type="text" class="form-control input-sm" v-model="newIdea" maxlength="256">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        Agregar
                                    </button>
                                </span>
                            </div>
                        </form>
                        <hr>
                        <ul class="list-unstyled">
                            <li v-for="(item, i) in ideas" :key="i">
                                <p>
                                    <small class="text-muted"><em>{{ since(item.created_at) }}</em></small> 
                                    {{ item.description }}
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios  from 'axios'
    import toastr from 'toastr'
    import moment from 'moment'
    moment.lang('es');
    
    export default {
        data () {
            return {
                ideas : [],
                newIdea: '',
            }
        },
        created: function() {
            this.getIdeas();
        },
        methods: {
            since: function(d) {
                return moment(d).fromNow();
            },
            getIdeas: function(page) {
                var urlIdeas = 'mis-ideas';
                axios.get(urlIdeas).then(response => {
                    this.ideas = response.data
                });
            },
            createIdea: function() {
                var url = 'guardar-idea';
                axios.post(url, {
                    description: this.newIdea
                }).then(response => {
                    this.getIdeas();
                    this.newIdea = '';
                    toastr.success('Nueva idea registrada');
                }).catch(error => {
                    toastr.error('Error');
                });
            }
        }
    }
</script>

<style>
    .title {
        font-size: 60px;
        text-align: center;
    }
</style>
