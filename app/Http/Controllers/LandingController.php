<?php

namespace App\Http\Controllers;

use App\Model\AdminSetting;
use App\Model\Coin;
use App\Model\Faq;
use App\Model\Testimonial;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    // landing page
    public function home()
    {
        $data['settings'] = allsetting();
        $data['title'] = $data['settings']['app_title'].__('::Home');
        $data['pexer_features'] = AdminSetting::where('slug', 'LIKE', 'pexer_feature|%')->get();
        $data['coins'] = Coin::where(['status'=> STATUS_ACTIVE])->get();
        $data['faqs'] = Faq::where(['status'=> STATUS_ACTIVE])->get();
        $data['testimonials'] = Testimonial::where(['status'=> STATUS_ACTIVE])->get();

        return view('landing.home', $data);
    }
}
