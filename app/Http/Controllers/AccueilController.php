<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AccueilController extends Controller
{
    public function index()
	{
		return view('accueil');
	}

	public function presentation()
	{
		return view('presentation');
	}

	public function activite()
	{
		return view('activite');
	}

	public function accompagnement()
	{
		return view('accompagnement');
	}

	public function conseils()
	{
		return view('conseils');
	}

	public function courtage()
	{
		return view('courtage');
	}

}
