<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title',"SIA")</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
        <div class="container">
        <a class="navbar-brand" href="/">
              <img src="images/siaaa.png" alt="" width="40px" weight="30px" class="mx-auto"> Sistem Informasi Akademik
          </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{request()->is('dosen')?'active':''}}" href="/dosen">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->is('mahasiswa')?'active':''}}" href="/mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->is('matkul')?'active':''}}" href="/matkul">Mata Kuliah</a>
                </li>
            </ul>
        </div>
    </nav>
    </section>
    @yield('content')

</body>
</html>