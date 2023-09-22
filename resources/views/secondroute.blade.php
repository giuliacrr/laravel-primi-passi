<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--Vue--> 
      <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!--Stylesheet-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Laravel - First Steps</title>
  </head>

  
<body>
  <header>
    <div class="text-center text-white bg-success pt-2 pb-2">
      <h1>Welcome to Route#2</h1>
      <h3>Welcome to Laravel</h3>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <!--Link logo to laravel.com-->
        <a class="navbar-brand" href="https://laravel.com/">
          <div class="d-flex justify-content-center align-items-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/985px-Laravel.svg.png" alt="logo" style="width:50px;">
            <h2 class="ms-2">Laravel</h2>
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-success" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-success" href="/1">Route#1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-success" href="/2">Route#2</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!---->
  <main class="container bg-success p-4">
    <h2 class="text-center mt-3 mb-2 text-white">Latest:</h2>
    <div class="d-flex flex-wrap justify-content-center">
      <!--Start-->
      @foreach ($coding as $materie)
        <div class="ms-2 me-2">
          <div class="card" style="width: 18rem;">
            <img src="{{$materie["img"]}}" class="card-img-top" alt="logo" style="width:120px; height:100px">
            <div class="card-body">
              <h5 class="card-title">{{$materie["nome"]}}</h5>
              <p class="card-text"><a class="text-success" href="{{$materie["link"]}}">Link to the site</a></p>
            </div>
          </div>
        </div>
      @endforeach
      <!--End-->
    </div>
  </main>
  <!--..........BOOTSTRAP JS..........-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!--..........JS LINK..........-->
  <script src="js/main.js"></script>
</body>
</html>