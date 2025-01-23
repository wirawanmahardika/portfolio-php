<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        if (!Auth::attempt($request->only(['username', 'password']))) {
            $request->session()->regenerate();
            return redirect()->back()->withErrors('username dan password tidak valid');
        }
        return redirect('/admin');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerate();
        return redirect('/');
    }

    public function admin()
    {
        return view('admin.admin', ["item" => 1, "kategori" => 3, "customer" => 2]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function home()
    {
        $skills = Skill::all();
        $about = Storage::get('about.txt');
        return view('home', ['skills' => $skills, 'about' => $about]);
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('blog', ['blogs' => $blogs]);
    }

    public function readBlog(Blog $blog)
    {
        return view('read-blog', ['blog' => $blog]);
    }

    public function project()
    {
        $projects = Project::all();
        return view('project', ['projects' => $projects]);
    }

    public function adminAbout()
    {
        $text = Storage::get('about.txt');
        return view('admin.about', ['text' => $text]);
    }

    public function adminPostAbout(Request $request)
    {
        Storage::put('about.txt', $request->text);
        return redirect('/admin/about');
    }
}
