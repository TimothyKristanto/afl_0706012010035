<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/App.css">
    <script src="https://kit.fontawesome.com/ff5a4ae61c.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold logo-nav" href="/">
            <i class="fas fa-basketball-ball"></i>
              <span class="logo-title">BasketballChamps</span> 
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item mx-1 mt-1">
                <a class="nav-link btn btn-outline-light rounded-pill nav-link {{ $title === 'Home' ? 'active':'' }}" href="/">Home</a>
              </li>
              <li class="nav-item mx-1 mt-1">
                <a class="nav-link btn btn-outline-light rounded-pill nav-link {{ $title === 'Team' ? 'active':'' }}" href="{{ route('team.index') }}">Team</a>
              </li>
              <li class="nav-item mx-1 mt-1">
                <a class="nav-link btn btn-outline-light rounded-pill nav-link {{ $title === 'Championship' ? 'active':'' }}" href="{{ route('championship.index') }}">Championship</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</body>
</html>