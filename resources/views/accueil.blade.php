@extends('template')

@section('title')
   Accueil
@endsection

@section('content')
	<div class="row backgroundimg" >
		<div class="container">
			<div id="home_texte">BIENVENUE DANS NOTRE UNIVERS</div>
			<div id="contact_us" >
				<a href="{{ url('contact') }}"><button class="contact_us">NOUS CONTACTER</button></a>
			</div>
		</div>
	</div>
   
@endsection