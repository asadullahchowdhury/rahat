<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rahat Chowdhury</title>
    <!--------->
        <!--Links-->
    <!--------->
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>

<!---------->
    <!--Header-->
<!---------->
@include('includes.header')

<!-------->
    <!--Home-->
<!-------->

@yield('content')

<!---------->
    <!--Footer-->
<!---------->
@include('includes.footer')

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
