<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MainInfo;
use App\Skill;
use App\Resume;
use App\Story;
use App\Portfolio;
use App\Phone;
use App\Mail;
use App\SocialNetwork;
use App\CommonInfo;
use App\File;

class PortfolioController extends Controller
{
    //
    public function index($language = NULL)
    {
        if (strnatcasecmp($language, 'ru') == 0){
            $mainInfo = MainInfo::where('language', 'ru')->first();
            $skills =   Skill::select('title_ru as title', 'value')->get();
            $resumes =  Resume::select('title_ru as title', 'text_ru as text')->get();
            $stories =  Story::select( 'year', 'title_ru as title', 'position_ru as position', 'text_ru as text' )->orderBy('year','desc')->get();
            $portfolio = Portfolio::select('link', 'img', 'title_ru as title', 'text_ru as text')->latest()->limit(3)->get()->reverse();
            $phones =   Phone::select('phone')->get();
            $mails =    Mail::select('mail')->get();
            $socialNetworks = SocialNetwork::select('link', 'icon')->get();
            $commonInfos = CommonInfo::select('section', 'title', 'value_ru as value')->get();
            $files = File::select('title')->get();
            $language = 'ru';
            return view('portfolio.index', compact('language','mainInfo', 'skills', 'resumes', 'stories', 'portfolio','phones','mails','socialNetworks','commonInfos','files'));
        }
        elseif (strnatcasecmp($language, 'en') == 0){
            $mainInfo = MainInfo::where('language', 'en')->first();
            $skills =   Skill::select('title_en as title', 'value')->get();
            $resumes =  Resume::select('title_en as title', 'text_en as text')->get();
            $stories =  Story::select( 'year', 'title_en as title', 'position_en as position', 'text_en as text' )->orderBy('year','desc')->get();
            $portfolio = Portfolio::select('link', 'img', 'title_en as title', 'text_en as text')->latest()->limit(3)->get()->reverse();
            $phones =   Phone::select('phone')->get();
            $mails =    Mail::select('mail')->get();
            $socialNetworks = SocialNetwork::select('link', 'icon')->get();
            $commonInfos = CommonInfo::select('section', 'title', 'value_en as value')->get();
            $files = File::select('title')->get();
            $language = 'en';
            return view('portfolio.index', compact('language','mainInfo', 'skills', 'resumes', 'stories', 'portfolio','phones','mails','socialNetworks','commonInfos','files'));
        }
        
        return redirect('/ru');
    }
}
