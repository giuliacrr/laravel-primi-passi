<!DOCTYPE html>
<html lang="en">
<!--Che cos'è blade? PErchè i file sono nome.blade.php?-->

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
  <style>
    body {
      background-color: lightskyblue;
    }
  </style>
  <title>Laravel - First Steps</title>
</head>

<body>
  <div id="app">
  <!--..........HEADER..........-->
  <header>
    <div class="text-center text-white bg-primary pt-2 pb-2">
      <h1>Welcome to Home</h1>
      <h3>Welcome to laravel</h3>
    </div>
    <div>
      <div>
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
                  <a class="nav-link text-primary" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-primary" href="/1">Route#1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-primary" href="/2">Route#2</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!--..........MAIN..........-->
  <main class="container bg-primary p-4">
    <h2 class="text-center mt-5 mb-4 text-white">Things from here should be easier, right?</h2>
    <div class="d-flex justify-content-center">
      <iframe src="https://giphy.com/embed/l3vR27h9mvQ7HNdgA" width="480" height="338" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/ryanthepyro-builders-pyrocms-l3vR27h9mvQ7HNdgA"></a></p>
    </div>
    <h4 class="text-white text-center mt-3">Btw, I am {{ $name }} {{ $surname }}</h4>
  </main>
  <!--..........FOOTER..........-->
  <footer></footer>
</div>
  <!--..........BOOTSTRAP JS..........-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!--..........JS LINK..........-->
  <script src="js/main.js"></script>
</body>

</html>