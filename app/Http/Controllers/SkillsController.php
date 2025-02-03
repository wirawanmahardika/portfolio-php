<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Helper\BiznetStorageHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SkillsController extends Controller
{
    public function viewAdminSkill()
    {
        $skills = Skill::all();
        $skills = $skills->map(function ($s) {
            $s->imageUrl = env('STORAGE_URL_BUCKET') . $s->image;
            return $s;
        });
        return view('admin.skill-lihat', ["skills" => $skills]);
    }

    public function viewAdminTambahSkill()
    {
        return view('admin.skill-tambah');
    }

    public function viewAdminEditSkill()
    {
        return view('admin.skill-edit');
    }

    public function adminTambahSkill(Request $request)
    {
        $request->validate([
            "name" => "required",
            "image" => "required|file"
        ]);

        $skill = new Skill;
        $skill->name = $request->name;
        $skill->image = Storage::disk('s3')->put('skill_image', $request->file('image'));
        $skill->save();

        return redirect("/admin/skills");
    }

    public function adminEditSkill(Request $request)
    {
        $validated = $request->validate([
            "id" => "required|numeric",
            "name" => "max:50",
            "image" => "file"
        ]);

        $data = [];
        foreach ($validated as $key => $value) {
            if (isset($value)) {
                if ($key === 'image') {
                    $skill = Skill::select("image")->find($request->id);
                    Storage::disk('s3')->delete($skill->image);
                    $data['image'] = Storage::disk('s3')->put('skill_image', $request->file('image'));
                } else {
                    $data[$key] = $value;
                }
            }
        }

        Skill::where('id', $request->id)->update($data);
        return redirect("/admin/skills");
    }
}
