<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            html,body{
                background-color: #FAD7A0;
                color: #636b6f;
                font-family: 'Nunito',sans-serif;
                font-weight: 200;
                height: 108vh;
                margin:0;
            }

            .full-height{
                height: 108vh;
            }

            .flex-center{
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref{
                position: relative;
            }

            .top-right{
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center,
            }

            .title{
                font-size: 84px;
            }

            .links>a{
                color:#FFF;
                padding:0 25px;
                font-size:13px;
                font-weight: 600;
                letter-spacing:.1rem;
                text-decoration:none;
                text-transform:uppercase;
                transition:transform 0.7s ease, color 0.7s ease;
            }

            .links>a:hover{
                color:#d35400;
                transform: transleteX(-80px);
            }

            .m-b-md{
                margin-botton:30px;
            }

        </style>
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md", style="color: #fff; text-align: center; margin-top: -80px;">
                   Enloquent: Relaciones
                </div>

                <div class="links">
                    @foreach ($users as $user)
                     <a href="{{route('profile',$user->id)}}">{{ $user->name}}</a>   
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>