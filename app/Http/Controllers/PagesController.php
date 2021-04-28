<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $page = 'home';
        return view('pages.home', compact('page'));
    }

    // about
    public function whoWeAre()
    {
        $page = 'about';
        $aboutSidebar = 'who-we-are';
        return view('pages.who-we-are', compact('aboutSidebar', 'page'));
    }

    public function whoWeWorkWith()
    {
        $page = 'about';
        $aboutSidebar = 'who-we-work-with';
        return view('pages.who-we-work-with', compact('aboutSidebar', 'page'));
    }

    public function whatWeDo()
    {
        $page = 'about';
        $aboutSidebar = 'what-we-do';
        return view('pages.what-we-do', compact('aboutSidebar'. 'page'));
    }

    public function founderMessage()
    {
        $page = 'about';
        $aboutSidebar = 'founder-message';
        return view('pages.founder-message', compact('aboutSidebar', 'page'));
    }

    // programs
    public function investmentOpportunitiesExposition()
    {
        $page = 'programs';
        $programSidebar = 'ioe';
        return view('pages.program-investment-opportunities', compact('programSidebar', 'page'));
    }

    public function ruralMicroEnterpriseInitiative()
    {
        $page = 'programs';
        $programSidebar = 'rme';
        return view('pages.program-rural-micro-enterprise', compact('programSidebar', 'page'));
    }

    public function enterpriseIncubationCentres()
    {
        $page = 'programs';
        $programSidebar = 'eiic';
        return view('pages.program-enterprise-incubation-centres', compact('programSidebar', 'page'));
    }

    public function meritocratsStartup()
    {
        $page = 'programs';
        $programSidebar = 'msp';
        return view('pages.program-meritocrats-startup', compact('programSidebar', 'page'));
    }

    // projects
    public function projects()
    {
        $page = 'projects';
        return view('pages.projects', compact('page'));
    }

    // media
    public function publications()
    {
        $page = 'media';
        return view('pages.media-publications', compact('page'));
    }
    public function news()
    {
        $page = 'media';
        return view('pages.media-news', compact('page'));
    }

    public function photosAndVideos()
    {
        $page = 'media';
        return view('pages.media-photos-and-videos', compact('page'));
    }

    public function annualReports()
    {
        $page = 'media';
        return view('pages.media-annual-reports', compact('page'));
    }

    // get involved
    public function getInvolved()
    {
        $page = 'get-involved';
        return view('pages.get-involved', compact('page'));
    }

    // contact
    public function support()
    {
        $page = 'support';
        return view('pages.support', compact('page'));
    }
}
