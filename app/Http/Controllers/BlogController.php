<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogContent;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function viewAdminBlog()
    {
        $blogs = Blog::all();
        return view('/admin/blog-lihat', ['blogs' => $blogs]);
    }

    public function viewAdminTambahBlog()
    {
        $kategoris = Kategori::all();
        return view('/admin/blog-tambah', ['kategoris' => $kategoris]);
    }

    public function tambahBlog(Request $request)
    {
        $blog = Blog::create([
            'judul' => $request->judul,
            'kategori_id' => $request->kategori
        ]);

        $isi = array_map(function ($i) {
            return ['text' => $i];
        }, $request->isi);


        $blog->contents()->createMany($isi);
        return response(content: 'Berhasil menambah blog', status: 200);
    }
}
