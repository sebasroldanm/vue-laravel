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
                            <li>
                                <p>
                                    <small class="text-muted">
                                        <em>Hace un minuto</em>
                                    </small>
                                    Mi nueva idea
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
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
    .title {
        font-size: 60px;
        text-align: center;
    }
</style>
