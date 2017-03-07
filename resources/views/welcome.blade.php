<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="homepage__/materialize/css/materialize.css" rel="stylesheet" type="text/css"/>

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
        <link href="homepage__/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="homepage__/css/simple-line-icons.min.css" rel="stylesheet" type="text/css">
        <link href="homepage__/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="homepage__/css/uniform.default.css" rel="stylesheet" type="text/css">
        <!-- END GLOBAL MANDATORY STYLES -->
        <link href="homepage__/css/login.css" rel="stylesheet" type="text/css">
        <!-- BEGIN THEME STYLES -->
        <link href="homepage__/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="homepage__/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="homepage__/css/layout.css" rel="stylesheet" type="text/css"/>
        <link id="style_color" href="homepage__/css/grey.css" rel="stylesheet" type="text/css"/>
        <link href="homepage__/css/custom.css" rel="stylesheet" type="text/css"/>

        <!-- Styles -->
        <style>
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }


            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>

    </head>
    <body style="background-color: #c0c6c2;">
        {{--<div class="row">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@if (Auth::check())--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ url('/login') }}">Login</a>--}}
                        {{--<a href="{{ url('/register') }}">Register</a>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--@endif--}}

        {{--</div>--}}
        <br/><br/><br/>
         <div class="container" >

             <div class="card" style="height: 74px; padding: 1px 20px 0px 35px; background-color: #F1F3FA;">
                 <h1 class="title" style="color:#4db3a5;">  Addis Ababa City Roads Pavement Management System </h1>
             </div>

             <br/><br/>

            <div class="row">
                <div class="col-md-7" >
                    <img style="width: 100%;" src="/Login__/img/bg1.JPG"/>
                </div>

                {{--<div class="col-md-1"> </div>--}}

                <div class="col-md-4 login">

                    <br/>
                    <div class="content">
                        <!-- BEGIN LOGIN FORM -->
                        <form class="login-form" action="index.html" method="post">
                            <h3 class="form-title">Sign In</h3>
                            <div class="form-group">
                                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                                <label class="control-label visible-ie8 visible-ie9">Username</label>
                                <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9">Password</label>
                                <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success uppercase">Login</button>
                                <a href="#" style="float: right;"> <h4>register</h4> </a>
                            </div>
                        </form>
                    </div>


                </div>
            </div>

         </div>
    </body>
</html>
