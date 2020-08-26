<!doctype html>
<html lang="ja">
  <head>
    <title> Enginear</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <style>
      .cover {
        background: url(image/header.jpeg);
        background-size: cover;
      }
    </style>
  </head>
  <body class = 'bg-light'>
    <header>
    <div class="d-flex justify-content-between">
    <ul class="navbar-nav ml-5">
      <div class="container ml-0 mr-0 text-light ">
        <nav class="navbar navbar-expand-sm navbar-light ">
          <a href="" class="navbar-brand ">
          <img src="image/logo3.jpg" >
          </a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="menu" class="collapse navbar-collapse">
          </ul>
            <ul class="navbar-nav mt-5 mr-5 ">
              @if (Route::has('login'))
                <div class="top-right links ">
                    @auth
                        <a href="{{ url('/show') }}" class="text-secondary ">マイページ</a>
                    @else
                        <a href="{{ route('login') }}"class="text-secondary ">ログイン</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"class="text-secondary ">新規登録</a>

                            
                        @endif
                    @endauth
                </div>
            @endif
            </ul>
          </div>
        </nav>
        </div>
      </div>

      <div class="cover text-white text-center py-5">
        <h1 class="display-4 mb-4">Enginear</h1>
        <a href="" class="btn btn-primary btn-lg">ログイン（test）</a>
      </div>
    </header>
    <main>
      <section class="py-5">
        <h2 class="text-center mb-5">Features</h2>
        <div class="container">
          <div class="mb-5 row">
            <div class="col-sm-8">
              <h3>Engenear</h3>
              <p>あなたの近くに。。。</p>
              <p>こちらは、駆け出しエンジニアの交流を目的としたサイトです。プログラミングの楽しさ、あるいは苦しさを分かち合って、勉強のモチベーションを上げましょう！！
            </div>
            <div class="col-sm-4">
              <img src="image/logo1.jpg" class="w-100">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8 order-sm-2">
              <h3>Communication</h3>
              <p>身近なエンジニアや、同じ言語を学んでいるエンジニアを探して、情報共有しよう！！</p>
            </div>
            <div class="col-sm-4 order-sm-1">
              <img src="image/logo2.jpg" class="w-100 ">
            </div>
          </div>
        </div>
      </section>
      <section class="bg-light text-center py-5">
        <a href="" class="btn btn-primary btn-lg">Get It Now!</a>
      </section>
    </main>
    <footer class="text-center text-muted py-4">
      お問い合わせ
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script>
      $(function() {
        'use strict';
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>
  </body>
</html>