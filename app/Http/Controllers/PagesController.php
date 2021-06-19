<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Models\Publication;

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
        return view('pages.what-we-do', compact('aboutSidebar', 'page'));
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

    public function industrialSupportServices()
    {
        $page = 'programs';
        $programSidebar = 'iss';
        return view('pages.program-industrial-support-services', compact('programSidebar', 'page'));
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
        // $publications = Publication::paginate(10);
        $publications = Publication::all();
        return view('pages.media-publications', compact('page', 'publications'));
    }

    public function publicationDetails($publicationId)
    {
        $page = 'media';
        // get publication
        $publication = Publication::where('id', $publicationId)->first();
        if(!$publication) {
            return redirect()->back()->with('error', 'No Publication Found');
        }

        return view('pages.media-publications-details', compact('publication', 'page'));
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

    public function donate()
    {
        $page = '';
        return view('pages.donate', compact('page'));
    }

    public function downloadProfile()
    {
        $file= public_path(). "/assets/startup_business_foundation_profile.pdf";
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Response::download($file, 'startup_business_foundation_profile.pdf', $headers);
    }

    public function downloadPublication($publicationId)
    {
        // get publication 
        $publication = Publication::where('id', $publicationId)->first();
        if(!$publication) {
            return redirect()->back()->with('error', 'No Resource Found');
        }

        // get publication category 
        if($publication->publication_category_id == 1) {
            $type = 'AGRO';
        } else {
            $type = 'TRADE';
        }

        $file= public_path(). '/assets/publications/'.$type.'/'.$publication->file;
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Response::download($file, $publication->file, $headers);
    }
}
