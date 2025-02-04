<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $experiences = [
            ['procent' => '95', 'experience' => 'html'],
            ['procent' => '20', 'experience' => 'php'],
            ['procent' => '60', 'experience' => 'javascript'],
            ['procent' => '50', 'experience' => 'typoskript'],
            ['procent' => '30', 'experience' => 'css'],
            ['procent' => '38', 'experience' => 'tailwind-css'],
            ['procent' => '60', 'experience' => 'sql'],
            ['procent' => '69', 'experience' => 'mongodb'],
            ['procent' => '90', 'experience' => 'wordpress'], 
            ['procent' => '10', 'experience' => 'laravel'],
            ['procent' => '20', 'experience' => 'react'],
            ['procent' => '77', 'experience' => 'docker'],
            ['procent' => '85', 'experience' => 'aws'],
            ['procent' => '51', 'experience' => 'cloud-firestore'],
            ['procent' => '33', 'experience' => 'visual-studio-code-2019'],
        ];

        $cvlist = [
            ['from'=>'2022','to'=>'present','company'=>'Visionary Labs', 'position'=>'CEO'],
            ['from'=>'2018','to'=>'2022','company'=>'CodeBridge', 'position'=>'CTO'],
            ['from'=>'2015','to'=>'2018','company'=>'InnoCore', 'position'=>'Software Architect'],
            ['from'=>'2012','to'=>'2015','company'=>'TechWave', 'position'=>'Project Manager'],
            ['from'=>'2005','to'=>'2008','company'=>'AppMasters', 'position'=>'Team Lead'],
            ['from'=>'2000','to'=>'2005','company'=>'PixelPros', 'position'=>'UI/UX Designer'],
            ['from'=>'1996','to'=>'2000','company'=>'WebWorks', 'position'=>'Fullstack Developer'],
            ['from'=>'1993','to'=>'1996','company'=>'NextGen Soft', 'position'=>'Backend Developer'],
            ['from'=>'1990','to'=>'1993','company'=>'DevSolutions', 'position'=>'Frontend Developer'],
            ['from'=>'1988','to'=>'1990','company'=>'CodeCraft', 'position'=>'Junior Developer'],
        ];

        $contact2networks = [
            ['title'=>'github','link'=>'https://github.com/'],
            ['title'=>'linkedin','link'=>'https://www.linkedin.com/'],
            ['title'=>'xing','link'=>'https://www.xing.com/'],
            ['title'=>'instagram','link'=>'https://www.instagram.com/'],      
            ['title'=>'facebook','link'=>'https://www.facebook.com/'],
            ['title'=>'tick-tack','link'=>'https://www.tiktok.com/'],
            ['title'=>'mastodon','link'=>'https://mastodon.de/']
        ];

        $contactfields = [
            ['title'=>'First Name','type'=>'text', 'name'=>'given_name', 'required'=>'required'],
            ['title'=>'Last Name','type'=>'text', 'name'=>'family_name', 'required'=>'required'],
            ['title'=>'Company Name','type'=>'text', 'name'=>'organization', 'required'=>'required'],
            ['title'=>'Email','type'=>'email', 'name'=>'email', 'required'=>'required'],
            ['title'=>'Phone','type'=>'tel', 'name'=>'tel', 'required'=>'required'],
        ];
        return view('portfolio', compact('experiences', 'cvlist', 'contactfields', 'contact2networks'));
    }
}
