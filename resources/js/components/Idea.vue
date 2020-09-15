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
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control input-sm" maxlength="256">
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
                                    <small class="text-muted">
                                        <em>{{ since(item.created_at) }}</em>
                                    </small>
                                    {{ item.descripcion }}
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
    import axios from 'axios';
    import toastr from 'toastr';
    import moment from 'moment';
    
    moment.locale('es')

    export default {
        data() {
            return {
                ideas: []
            }
        },
        created: function() {
            this.getIdeas()
        },
        methods: {
            since: function(d) {
                return moment(d).fromNow()
            },
            getIdeas: function() {
                var urlIdeas = 'mis-ideas'
                axios.get(urlIdeas).then(Response => {
                this.ideas = Response.data
                })
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
