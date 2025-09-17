<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Product;
use App\Models\Vacancy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
{
    public function home()
    {
        $members = Member::all();
        return view('home', compact("members"));
    }
    public function about()
    {
        $members = Member::all();
        return view('pages.about', compact("members"));
    }
    public function shop()
    {
        
        return view('pages.shop', );
    }
    public function projects()
    {
        return view('pages.projects');
    }
    public function vacancies()
    {
        $now = Carbon::now()->getTimestamp();
        $vacancies = Vacancy::where("date", ">", $now)->get();
        return view('pages.vacancies', compact("vacancies"));
    }
    public function vacancy($slug)
    {
        $vacancy = Vacancy::where("slug", $slug)->first();
        if (!is_object($vacancy)) {
            return Redirect::route('vacancies')->with("error", "Could not find the vacancy");
        }


        return view('pages.vacancy', compact("vacancy"));
    }

    public function team()
    {
        $members = Member::all();
        return view('pages.team', compact("members"));
    }

    public function member($slug)
    {
        $member = Member::where("slug", $slug)->first();
        if (!is_object($member)) {
            return Redirect::back()->with("error", "Could not find the profile details");
        }
        return view('pages.member', compact("member"));
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
