<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
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
    </head>
    <body>
        <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>
        <div class="row">
            <div class="col-12">
                <div class="h1">
                    TAHANAN GELOMBANG - RAWL
                </div>
                <form role="form" action="#" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    Rwave<br>
                    <input type="text" id="piar" name="pair" value="">
                    <br>
                    w<br>
                    <input type="text" id="v2air" name="v2air" value="">

                    <br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
            <div class="col-12">
                <div class="h1">
                    TAHANAN ANGIN - RWIND
                </div>
                <form role="form" action="{{route('hitung_rwind')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    Pair<br>
                    <input type="text" id="piar" name="pair" value="">
                    <br>
                    V2air<br>
                    <input type="text" id="v2air" name="v2air" value="">
                    <br>
                    CX<br>
                    <input type="text" id="cx" name="cx" value="">
                    <br>
                    AF<br>
                    <input type="text" id="af" name="af" value="">
                    <br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
            <div class="col-12">
                <div class="h1">
                    TAHANAN PERUBAHAN DRAFT - RADIS
                </div>
                <form role="form" action="{{ route('hitung_radis') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    RT:<br>
                    <input type="text" id="rt" name="rt" value="">
                    <br>
                    Delta 0<br>
                    <input type="text" id="delta_0" name="delta_0" value="">
                    <br>
                    Delta<br>
                    <input type="text" id="delta" name="delta" value="">
                    <br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
            <div class="col-12">
                <div class="h1">
                    TAHANAN SIFAT AIR - RAS
                </div>
                <form role="form" action="{{route('hitung_ras')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    RT:<br>
                    <input type="text" id="rt" name="rt" value="">
                    <br>
                    Pw<br>
                    <input type="text" id="pw" name="pw" value="">
                    <br>
                    Pw0<br>
                    <input type="text" id="pw0" name="pw0" value="">
                    <br>
                    RF<br>
                    <input type="text" id="rf" name="rf" value="">
                    <br>
                    Cf<br>
                    <input type="text" id="cf" name="cf" value="">
                    <br>
                    Cf0<br>
                    <input type="text" id="cf0" name="cf0" value="">
                    <br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    </body>
</html>
<script>
    var a = document.getElementById("myNumber");
</script>
