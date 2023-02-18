<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            font-family: sans-serif;
            background-color:#fffaf0;
            color: #212121;
        }
        .container{
            width: 80%;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>

    <title>Kurslar</title>
</head>
<body>
    <div class="container">
        
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('courses.index') }}">Kurslar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('students.index') }}">Öğrenciler</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('courses.create') }}">Yeni Kurs Ekle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('students.create') }}">Yeni Öğrenci Ekle</a>
            </li>
        </ul>

        <hr>
        @yield('content')


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
</body>
</html>