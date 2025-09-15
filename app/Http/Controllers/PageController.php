<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function shop()
    {
        return view('pages.shop');
    }
    public function projects()
    {
        return view('pages.projects');
    }
    public function vacancies()
    {
        $now = Carbon::now()->getTimestamp();
        $vacancies = Vacancy::where("date",">", $now)->get();
        return view('pages.vacancies', compact("vacancies"));
    }
    public function vacancy($slug)
    {
        $vacancy = Vacancy::where("slug",$slug)->first();
        if(!is_object($vacancy)){
            return Redirect::route('vacancies')->with("error","Could not find the vacancy");
        }

       
        return view('pages.vacancy', compact("vacancy"));
    }

    public function contact()
    {
        return view('pages.contact');
    }
    public function cart()
    {
        return view('pages.cart');
    }
}
