<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function historycshl() {
        $pageTitle = "History Of Cold Spring Harbor Laboratory - DNALC.";
        $pageLink = "About us / History of CSHL.";
        $about = About::select('title', 'description', 'thumbnail')->first();

        return view('pages.historycshl', compact('pageTitle', 'pageLink', 'about'));
    }

    public function parentcenter() {
        $pageTitle = "Introducing The Parent Center - DNALC New York, USA";
        $pageLink = "About us / Parent Center";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.parentcenter', compact('pageTitle', 'about', 'pageLink'));
    }

    public function aboutUs() {
        $pageTitle = "The Host Institution - Godfrey Okoye University";
        $pageLink = "About us / Mission of GOU.";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.missiongou', compact('pageTitle', 'about', 'pageLink'));
    }

    ////public function visiongou() {
        ////    $pageTitle = "Page Title.";
        ////    $pageLink = "link";
        ////    $about = About::select('title', 'description', 'thumbnail')->first();
        ////    return view('pages.visiongou', compact('pageTitle', 'about', 'pageLink'));
    ////}

    ////public function philosophygou() {
        ////    $pageTitle = "Page Title.";
        ////    $pageLink = "link";
        ////    $about = About::select('title', 'description', 'thumbnail')->first();
        ////    return view('pages.philosophygou', compact('pageTitle', 'about', 'pageLink'));
    ////}

    public function aboutdnalc() {
        $pageTitle = "About DNA Learning Center, Nigeria.";
        $pageLink = "About us / About DNALC.";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.aboutdnalc', compact('pageTitle', 'about', 'pageLink'));
    }

    public function historystory() {
        $pageTitle = "History - Our Story In 'The Beginning'";
        $pageLink = "About us / History of DNALC.";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.historystory', compact('pageTitle', 'about', 'pageLink'));
    }

    public function missionvision() {
        $pageTitle = "Mission & Vision Of DNALC Nigeria.";
        $pageLink = "About us / Mission & Vision.";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.missionvision', compact('pageTitle', 'about', 'pageLink'));
    }

    public function centerAA() {
        $pageTitle = "The Center's Attraction & Accessiility.";
        $pageLink = "About us / Center's Attraction.";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.caa', compact('pageTitle', 'about', 'pageLink'));
    }

    public function qualityNP() {
        $pageTitle = "Quality & Novelty Of Programs.";
        $pageLink = "About us / Quality & Novelty.";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.qnp', compact('pageTitle', 'about', 'pageLink'));
    }

    public function oTF() {
        $pageTitle = "OWing the Future.";
        $pageLink = "About us / Owing the Future.";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.otf', compact('pageTitle', 'about', 'pageLink'));
    }

    public function boarddirectors() {
        $pageTitle = "The Board Of Directors.";
        $pageLink = "About us / Board of Directors.";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.boarddirectors', compact('pageTitle', 'about', 'pageLink'));
    }

    public function adminstaff() {
        $pageTitle = "Administrative Staff.";
        $pageLink = "About us / Administrative.";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.adminstaff', compact('pageTitle', 'about', 'pageLink'));
    }

    public function teachingstaff() {
        $pageTitle = "Teaching Staff.";
        $pageLink = "About us / Teaching.";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.teachingstaff', compact('pageTitle', 'about', 'pageLink'));
    }

    public function researchstaff() {
        $pageTitle = "Research Staff.";
        $pageLink = "About us / Research.";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.researchstaff', compact('pageTitle', 'about', 'pageLink'));
    }

    public function mediacenter() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.mediacenter', compact('pageTitle', 'about', 'pageLink'));
    }

    public function signaturecourse() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.signaturecourse', compact('pageTitle', 'about', 'pageLink'));
    }

    public function dnafacility() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.dnafacility', compact('pageTitle', 'about', 'pageLink'));
    }

    public function saturdaydna() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.saturdaydna', compact('pageTitle', 'about', 'pageLink'));
    }

    public function sssinternship() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.sssinternship', compact('pageTitle', 'about', 'pageLink'));
    }

    public function urex() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.urex', compact('pageTitle', 'about', 'pageLink'));
    }

    public function postgraduate() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.postgraduate', compact('pageTitle', 'about', 'pageLink'));
    }

    public function drde() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.drde', compact('pageTitle', 'about', 'pageLink'));
    }

    public function pdrp() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.pdrp', compact('pageTitle', 'about', 'pageLink'));
    }

    public function workshop() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.workshop', compact('pageTitle', 'about', 'pageLink'));
    }

    public function gallery() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.gallery', compact('pageTitle', 'about', 'pageLink'));
    }

    public function conference() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.conference', compact('pageTitle', 'about', 'pageLink'));
    }

    public function blog() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.blog', compact('pageTitle', 'about', 'pageLink'));
    }

    public function employment() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.employment', compact('pageTitle', 'about', 'pageLink'));
    }

    public function faq() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.faq', compact('pageTitle', 'about', 'pageLink'));
    }

    public function contact() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.contact', compact('pageTitle', 'about', 'pageLink'));
    }

    public function worlddna() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.worlddna', compact('pageTitle', 'about', 'pageLink'));
    }

    public function dnascience() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.dnascience', compact('pageTitle', 'about', 'pageLink'));
    }

    public function genomescience() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.genomescience', compact('pageTitle', 'about', 'pageLink'));
    }

    public function dnabarcoding() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.dnabarcoding', compact('pageTitle', 'about', 'pageLink'));
    }

    public function dnametabarcoding() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.dnametabarcoding', compact('pageTitle', 'about', 'pageLink'));
    }

    public function privacy() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        $about = About::select('title', 'description', 'thumbnail')->first();
        return view('pages.privacy', compact('pageTitle', 'about', 'pageLink'));
    }

}
