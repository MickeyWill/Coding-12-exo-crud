<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about;
use App\contact;
use App\portfolio;
use App\service;
use App\team;
use App\testimonial;

class AllController extends Controller
{
    public function show(){
        $about = about::all();
        $contact = contact::all();
        $portfolio = portfolio::all();
        $service = service::all();
        $team = team::all();
        $testimonial = testimonial::all();

        return view('index', compact('about', 'contact', 'portfolio', 'service', 'team', 'testimonial'));
    }

    public function index(){
        $about = about::all();
        return view('database.index', compact('about'));
    }    

}
