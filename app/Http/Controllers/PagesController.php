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
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.parentcenter', compact('pageTitle', 'pageLink'));
    }

    public function missiongou() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.missiongou', compact('pageTitle', 'pageLink'));
    }

    public function visiongou() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.visiongou', compact('pageTitle', 'pageLink'));
    }

    public function philosophygou() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.philosophygou', compact('pageTitle', 'pageLink'));
    }

    public function aboutdnalc() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.aboutdnalc', compact('pageTitle', 'pageLink'));
    }

    public function historystory() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.historystory', compact('pageTitle', 'pageLink'));
    }

    public function missionvision() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.missionvision', compact('pageTitle', 'pageLink'));
    }

    public function boarddirectors() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.boarddirectors', compact('pageTitle', 'pageLink'));
    }

    public function adminstaff() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.adminstaff', compact('pageTitle', 'pageLink'));
    }

    public function teachingstaff() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.teachingstaff', compact('pageTitle', 'pageLink'));
    }

    public function mediacenter() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.mediacenter', compact('pageTitle', 'pageLink'));
    }

    public function signaturecourse() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.signaturecourse', compact('pageTitle', 'pageLink'));
    }

    public function dnafacility() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.dnafacility', compact('pageTitle', 'pageLink'));
    }

    public function saturdaydna() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.saturdaydna', compact('pageTitle', 'pageLink'));
    }

    public function sssinternship() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.sssinternship', compact('pageTitle', 'pageLink'));
    }

    public function urex() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.urex', compact('pageTitle', 'pageLink'));
    }

    public function postgraduate() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.postgraduate', compact('pageTitle', 'pageLink'));
    }

    public function drde() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.drde', compact('pageTitle', 'pageLink'));
    }

    public function pdrp() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.pdrp', compact('pageTitle', 'pageLink'));
    }

    public function workshop() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.workshop', compact('pageTitle', 'pageLink'));
    }

    public function gallery() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.gallery', compact('pageTitle', 'pageLink'));
    }

    public function conference() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.conference', compact('pageTitle', 'pageLink'));
    }

    public function blog() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.blog', compact('pageTitle', 'pageLink'));
    }

    public function employment() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.employment', compact('pageTitle', 'pageLink'));
    }

    public function faq() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.faq', compact('pageTitle', 'pageLink'));
    }

    public function contact() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.contact', compact('pageTitle', 'pageLink'));
    }

    public function worlddna() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.worlddna', compact('pageTitle', 'pageLink'));
    }

    public function dnascience() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.dnascience', compact('pageTitle', 'pageLink'));
    }

    public function genomescience() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.genomescience', compact('pageTitle', 'pageLink'));
    }

    public function dnabarcoding() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.dnabarcoding', compact('pageTitle', 'pageLink'));
    }

    public function dnametabarcoding() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.dnametabarcoding', compact('pageTitle', 'pageLink'));
    }

    public function privacy() {
        $pageTitle = "Page Title.";
        $pageLink = "link";
        return view('pages.privacy', compact('pageTitle', 'pageLink'));
    }

}
