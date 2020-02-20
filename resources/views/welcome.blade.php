<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <!-- scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/welcome.js') }}"></script>
    </head>
    <body>

    <button data-target="modal-upload-image" class="btn modal-trigger">Modal</button>

    <div id="modal-upload-image" class="modal">

        <div class="modal-content">
            <div class="row">
                <div class="row">

                    <div class="input-field col s12">
                        <input type="text" placeholder="Nombre" id="pic-name" class="validate">
                        <label for="pic-name">Nombre</label>
                    </div>

                    <div class="col s12">
                        <div class="col s12">
                            <input type="file" placeholder="Archivo" id="pic-file" class="waves-effect waves-light btn">
{{--                            <label for="pic-file">Archivo</label>--}}
                        </div>
{{--                        <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>--}}
                    </div>

                    <div class="col s12">
                        <textarea id="pic-description" class="materialize-textarea"></textarea>
                        <label for="pic-description">Descripción</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <a class="waves-effect waves-light btn" onclick="saveNewPicture()">button</a>
{{--            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>--}}
        </div>

    </div>

    </body>
</html>
