<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ContactRequest;
use App\Models\About;
use App\Models\Contact;
use App\Models\Progress;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $about = About::firstOrFail();
        $services = Service::where('status', 1)->latest()->get();
        return view('frontend.index', compact('services', 'about'));
    }

    public function about(){
        $about = About::firstOrFail();
        $progresses  = Progress::isActive()->get();
        return view('frontend.about', compact('about', 'progresses'));
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function contactStore(ContactRequest $request){
        Contact::create($request->all());
        return redirect()->back()->withMsg('Your message has been sent.');
    }
}
