<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield("title")</title>
		{!! Html::style("bootstrap/css/bootstrap.min.css") !!}
		{!! Html::style("bootstrap/css/bootstrap-theme.min.css") !!}
		{!! Html::style("css/style.css") !!}
		<!--[if lt IE 9]>
			{!! Html::script("https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js") !!}
			{!! Html::script("https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js") !!}
		<![endif]-->
	</head>
	<body>
		<header>
			<nav id="nav" class="navbar navbar-default navbar-fixed-top">
			  <div id="navbar" class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="{{ url('/') }}">
			      	 <img alt="Brand" src=".././public/images/logo.png">
				  </a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="{{ url('/') }}">ACCUEIL <span class="sr-only">(current)</span></a></li>
			        <li><a href="{{ url('presentation') }}">PRESENTATION</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ACTIVITES <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="{{ url('conseils') }}">CONSEILS</a></li>
			            <li><a href="{{ url('courtage') }}">COURTAGE</a></li>
			            <li><a href="{{ url('accompagnement') }}">ACCOMPAGNEMENT</a></li>
			          </ul>
			        </li>
			        <li><a href="{{ url('contact') }}">NOUS CONTACTER</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</header>
		<section>
			@yield('content')
		</section>
		<footer class="container-fluid">
			<div id="copyright" class="row" >
          		<p>Copyright &copy; 2019 issaissifou.com Tous droits réservés</p>
      		</div>

		</footer>
		 
        {!! Html::script("https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js") !!}
		{!! Html::script("bootstrap/js/bootstrap.min.js") !!}
	</body>
</html>
