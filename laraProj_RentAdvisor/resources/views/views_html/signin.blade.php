<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RentAdvisor | Accesso</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/home_house.png') }}" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nouislider.css') }}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('css/theme-color/default-theme.css') }}" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
  <body style="background-image:url({{URL::asset('images/slider/Pescara.jpeg') }}); background-size:cover">
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">
                <h1>Accedi</h1>
                <h3>Accedi al tuo profilo per visualizzarne le opzioni</h3>
              </div>
              <form class="contactform" action="{{ route('home') }}">
                <div class="aa-single-field">
                  <br>
                  <label for="username">Username <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="username">
                </div>
                <div class="aa-single-field">
                  <label for="password">Password <span class="required">*</span></label>
                  <input type="password" name="password">
                </div>
                <div class="aa-single-field">
                <label>
                  <input type="checkbox"> Ricordami
                </label>
                </div>
                <div class="aa-single-submit">
                  <input type="submit" value="Accedi" class="aa-browse-btn" name="submit">
                  <p>Non hai ancora un account? <a href="{{ route('register') }}">Crealo ora!</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('js/bootstrap_layout.js') }}"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="{{ asset('js/nouislider.js') }}"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="{{ asset('js/jquery.mixitup.js') }}"></script>
  <!-- Add fancyBox -->
  <script type="text/javascript" src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
  <!-- Custom js -->
  <script src="{{ asset('js/custom.js') }}"></script>

  </body>
</html>
