<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function about()
    {
    	return view('pages.about');
    }

        public function contact()
    {
    	$people = [
    			'Nishol Chetty : 083 639 9890','Varsha Munoo : 071 937 0455','John Smit : 084 625 9033'
    	];

    	return view('pages.contact', compact('people'));
    }
}
