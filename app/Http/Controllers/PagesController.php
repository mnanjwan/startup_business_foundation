<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Http\Request;
use Response;
use App\Models\Publication;
use App\Models\PublicationCategory;
use App\Models\Report;
use Exception;

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
        $categories = PublicationCategory::all();
        $category_id = 0;
        return view('pages.media-publications', compact('page', 'publications', 'categories', 'category_id'));
    }

    public function publicationsFilter(Request $request)
    {
        $page = 'media';
        $category_id = $request->category;
        if ($category_id == 0) {
            // all categories
            $publications = Publication::all();
        } else {
            $publications = Publication::where('publication_category_id', $category_id)->get();
        }
        $categories = PublicationCategory::all();
        return view('pages.media-publications', compact('page', 'publications', 'categories', 'category_id'));
    }

    public function publicationDetails($publicationId)
    {
        $page = 'media';
        // get publication
        $publication = Publication::where('id', $publicationId)->first();
        if (!$publication) {
            return redirect()->back()->with('error', 'No Publication Found');
        }

        return view('pages.media-publications-details', compact('publication', 'page'));
    }

    public function news()
    {
        $page = 'media';

        $post = Post::with('writer')->get();
        return view('pages.media-news', compact('page', 'post'));
    }

    public function newsDetails($id)
    {
        $page = 'media';

        $post = Post::whereId($id)->first();
        $posts = Post::all()->take(3);

        return view('pages.media-news-details', compact('page', 'post', 'posts'));
    }

    public function photosAndVideos()
    {
        $page = 'media';
        $vid = Gallery::where('type', 'video')->get();
        $img = Gallery::where('type', 'image')->get();
        return view('pages.media-photos-and-videos', compact('page', 'img', 'vid'));
    }

    public function annualReports()
    {
        $page = 'media';
        $report = Report::all();
        return view('pages.media-annual-reports', compact('page', 'report'));
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
        $file = public_path() . "/assets/startup_business_foundation_profile.pdf";
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Response::download($file, 'startup_business_foundation_profile.pdf', $headers);
    }

    public function downloadPublication($publicationId)
    {
        // get publication
        $publication = Publication::where('id', $publicationId)->first();
        if (!$publication) {
            return redirect()->back()->with('error', 'No Resource Found');
        }

        // get publication category
        if ($publication->publication_category_id == 1) {
            $type = 'AGRO';
        } else {
            $type = 'TRADE';
        }

        try {
            return Response::download($publication->file);
        } catch (Exception $ex) {
            $file = public_path() . '/assets/publications/' . $type . '/' . $publication->file;
            $headers = array(
                'Content-Type: application/pdf',
            );
            return Response::download($file, $publication->file, $headers);
        }
    }

    public function downloadReport($id) {

        $report = Report::find($id);
        if (!$report) {
            return redirect()->back()->with('error', 'No Resource Found');
        }

        return Response::download($report->file);

    }

    public function signedIn()
    {
        return view('auth.signed-in');
    }
}
