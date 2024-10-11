<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;

use App\Models\Page;
use App\Models\Heading;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\Slide;
use App\Models\Video;
use App\Models\Image;
use App\Models\Audio;
use App\Models\Article;
use App\Models\News;
use App\Models\Menu;
use App\Models\WebsiteInfo;
use Image as ImageCompress;
use DB;
use Illuminate\Support\Facades\Schema;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slide::orderBy('order_index')->get();
        $servicesPages = Page::where('position', 'services')->orderBy('order_index')->get();
        $completedProjectsPages = Page::where('position', 'completed_projects')->orderBy('order_index')->limit(4)->get();
        $newsPages = News::orderBy('id', 'DESC')->limit(3)->get();

        $homeImage1 = Gallery::where('position', 'home_1')->first();
        $homeImage2 = Gallery::where('position', 'home_2')->first();

        $aboutHeading = Heading::where('position', 'about')->first();
        $whatWeDoForYouHeading = Heading::where('position', 'what_we_do_for_you')->first();
        $completedProjectHeading = Heading::where('position', 'completed_projects')->first();
        $ourBlogHeading = Heading::where('position', 'our_blog')->first();


        return view('client.index', compact(
            'slides',
            'servicesPages',
            'completedProjectsPages',
            'newsPages',
            'homeImage1',
            'homeImage2',
            'aboutHeading',
            'whatWeDoForYouHeading',
            'completedProjectHeading',
            'ourBlogHeading',
        ));
    }

    public function aboutUs()
    {
        $servicesPages = Page::where('position', 'services')->orderBy('order_index')->get();
        $whyChooseUsPages = Page::where('position', 'why_choose_us')->orderBy('order_index')->get();

        $aboutImage = Gallery::where('position', 'about')->first();

        $aboutHeading = Heading::where('position', 'about')->first();
        $ourMissionHeading = Heading::where('position', 'our_mission')->first();
        $whyChooseUsHeading = Heading::where('position', 'why_choose_us')->first();

        return view('client.about_us', compact(
            'servicesPages',
            'whyChooseUsPages',
            'aboutImage',
            'aboutHeading',
            'ourMissionHeading',
            'whyChooseUsHeading',
        ));
    }

    public function service()
    {
        $servicesPages = Page::where('position', 'services')->orderBy('order_index')->get();
        $whatWeDoForYouHeading = Heading::where('position', 'what_we_do_for_you')->first();

        return view('client.service', compact(
            'servicesPages',
            'whatWeDoForYouHeading',
        ));
    }

    public function contact()
    {
        $contactInfo = Contact::first();

        return view('client.contact_us', compact(
            'contactInfo',
        ));
    }

    public function product()
    {
        $productsPages = Page::where('position', 'products')->orderBy('order_index')->get();

        return view('client.product', compact(
            'productsPages',
        ));
    }

    public function projects()
    {
        $completedProjectsPages = Page::where('position', 'completed_projects')->orderBy('order_index')->get();
        $completedProjectHeading = Heading::where('position', 'completed_projects')->first();

        return view('client.projects', compact(
            'completedProjectsPages',
            'completedProjectHeading',
        ));
    }

    public function news(Request $request)
    {
        $search = $request->search;

        $newsPages = News::orderBy('id', 'DESC')->when($search, function($q) use($search){
            $q->where('name', 'LIKE', '%'.$search.'%')
                ->where('description', 'LIKE', '%'.$search.'%');
        })->get();

        $ourBlogHeading = Heading::where('position', 'our_blog')->first();

        return view('client.news', compact(
            'newsPages',
            'ourBlogHeading',
        ));
    }


    public function detail($id)
    {
        $page = Page::findOrFail($id);
        return view('client.page_detail', compact(
            'page',
        ));
    }



    public function newsDetail($id)
    {
        $news = News::findOrFail($id);
        return view('client.news_detail', compact(
            'news',
        ));
    }
}
