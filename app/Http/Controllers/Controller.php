<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

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
        return view('home', ['skills' => $skills]);
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
}
