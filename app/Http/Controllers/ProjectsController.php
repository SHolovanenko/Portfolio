<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Portfolio;

class ProjectsController extends Controller
{
    //
    public function index($language = NULL) {
        if (strnatcasecmp($language, 'ru') == 0){
            $portfolio = Portfolio::select('link', 'img', 'title_ru as title', 'text_ru as text')->latest()->limit(3)->get()->reverse();
            
            return view('portfolio.projects', compact('mainInfo', 'skills', 'resumes', 'stories', 'portfolio','phones','mails','socialNetworks','commonInfos','files'));
        }
        elseif (strnatcasecmp($language, 'en') == 0){
            $portfolio = Portfolio::select('link', 'img', 'title_en as title', 'text_en as text')->latest()->limit(3)->get()->reverse();
            return view('portfolio.projects', compact('mainInfo', 'skills', 'resumes', 'stories', 'portfolio','phones','mails','socialNetworks','commonInfos','files'));
        } 
    }
}
