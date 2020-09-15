<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> --}}

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-xl-offset-2">
                <div id="app">
                    <h2 class="text-center">Captura tus ideas</h2>
                    <div class="well">
                        <h4>En que estas pensando?</h4>
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
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>