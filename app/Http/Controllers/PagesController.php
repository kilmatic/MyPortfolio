<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Home page
    public function index(){
        $data = [
            'title' => 'Kilmatic'
        ];
        return view('pages.index')->with($data);
    }

    //About page
    public function about() {
        $data = [
          'title' => 'About Me, My Tech Stack, Skillset',
          'bio' => 'My name is Kanya Kila, I’m a 30-year-old male,
                    I have been studying I.T since high school.
                    My enthusiasm has helped me to meet some experts in the I.T industry,
                    and gain learning experience from them.
                    I was taught web design by a web expert working for Rhodes University,
                    then I had a follow up at college of programming in Web Development and Desktop Application Development.',
          'skills' => ['SQL','Bootstrap','Laravel','ASP.Net MVC','C#','PHP','HTML/5','CSS/3','JavaScript'],
          'certifications' => ['MTA','Sololearn']
        ];
        return view('pages.about')->with($data);
    }

    //Craft page
    public function craft() {
        $data = [
          'title' => 'My work',
          'crafts' => ['karsareus','Dreamshare','portfolio']
        ];
        return view('pages.craft')->with($data);
    }

    //Contact page
    public function contact() {
        $data = [
        'title' => 'Contact'
        ];
        return view('pages.contact')->with($data);
    }
}
