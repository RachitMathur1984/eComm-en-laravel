<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <!--<script>
        $(document).ready(function(){
            $("button").click(function(){
                alert("all set");
            })
        })
    </script>-->
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}
    <style>
        .custom-login{
            height: 500px;
            padding-top: 100px;
        }

        img.slider-img{
            height:400px !important;
        }

        .custom-product{
            height: 600px;
        }

        .slider-text{
            background-color: #35443585 !important;
        }

        img.trending-image{
            height: 100px;
        }

        .trending-item{
            float: left;
            width: 20%;
        }

        .trending-wrapper{
            margin: 30px;
        }

        img.detail-img{
            height: 200px;
        }
    </style>
</body>
</html>