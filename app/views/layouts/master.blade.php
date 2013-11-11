<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>MySkill - Evolua suas habilidades.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        {{HTML::style('css/bootstrap.min.css')}}
        {{HTML::style('css/bootstrap-theme.min.css')}}
        {{HTML::style('css/main.css')}}
        
        <link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>

       {{HTML::script('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')}}

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->        
    <div class="navbar navbar-inverse">

      <div class="container">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">MySkills</a>
        </div>
        <div class="navbar-collapse collapse navbar-left">
          <ul class="nav navbar-nav">
          <a href="https://github.com/MySkills/MySkills.com.br" target="_blank"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>
        </div><!--/.navbar-collapse -->

        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/">$ {{$coins}} </a></li>
            <li><a href="/">{{$users}} Usuári@s</a></li>
            <li><a href="/">{{$skills}} Skills</a></li>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <a href="https://github.com/MySkills/MySkills.com.br" target="_blank">
      <img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub">
    </a>


  @yield('content')


          <hr>
    </div> <!-- /container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
      <footer class="footer">
        <div class="container">
          <p>&copy;MySkills 2012</p>
        </div>
      </footer>

      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

      {{HTML::script('js/vendor/bootstrap.min.js')}}
      {{HTML::script('js/main.js')}}
      <script>
          var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
          (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
          g.src='//www.google-analytics.com/ga.js';
          s.parentNode.insertBefore(g,s)}(document,'script'));
      </script>
    </body>
</html>
