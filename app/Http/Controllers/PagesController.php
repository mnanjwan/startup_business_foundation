<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    // about
    public function whoWeAre()
    {
        $aboutSidebar = 'who-we-are';
        return view('pages.who-we-are', compact('aboutSidebar'));
    }

    public function whoWeWorkWith()
    {
        $aboutSidebar = 'who-we-work-with';
        return view('pages.who-we-work-with', compact('aboutSidebar'));
    }

    public function whatWeDo()
    {
        $aboutSidebar = 'what-we-do';
        return view('pages.what-we-do', compact('aboutSidebar'));
    }

    public function founderMessage()
    {
        $aboutSidebar = 'founder-message';
        return view('pages.founder-message', compact('aboutSidebar'));
    }

    // programs
    public function investmentOpportunitiesExposition()
    {
        $programSidebar = 'ioe';
        return view('pages.program-investment-opportunities', compact('programSidebar'));
    }

    public function ruralMicroEnterpriseInitiative()
    {
        $programSidebar = 'rme';
        return view('pages.program-rural-micro-enterprise', compact('programSidebar'));
    }

    public function enterpriseIncubationCentres()
    {
        $programSidebar = 'eiic';
        return view('pages.program-enterprise-incubation-centres', compact('programSidebar'));
    }

    public function meritocratsStartup()
    {
        $programSidebar = 'msp';
        return view('pages.program-meritocrats-startup', compact('programSidebar'));
    }

    // get involved
    public function getInvolved()
    {
        return view('pages.get-involved');
    }

    // contact
    public function contactUs()
    {
        return view('pages.contact-us');
    }
}
