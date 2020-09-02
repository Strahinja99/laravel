<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pocetna(){
    	$naslov = 'Dobrodošli u frizerski salon,';
    	return view('stranice.pocetna')->with('naslov', $naslov);
    }

    public function cene(){
    	$podaci = array(
			'naslov' => 'Cene',
			'nizservisa'=>['Web Dizajn', 'IT', 'Multimediji']
			);
			return view('stranice.cene')->with($podaci); 	
    }

    public function usluge(){
    	
    	return view('stranice.usluge')->with($podaci); 	
	}
	
	public function onama(){
    	$naslov = 'O nama,';
    	return view('stranice.onama')->with('naslov' ,$naslov); 	
	}
	
	public function kontakt(){
    	$naslov = 'kontakt';
    	return view('stranice.kontakt')->with('naslov', $naslov);	
    }


}
