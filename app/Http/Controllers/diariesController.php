<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;

class DiariesController extends Controller
{
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'content' => 'required|max:255',
        ]);

        // 日記を作成
        $diary = new Diary;
        $diary->content = $request->content;

        $diary->save();

        return redirect('/'); //質問：どこにreturnすべきか分かりません。
    }

    public function create()
    {
        $diary = new Diary;

        return view('diaries.create', [
        'diary' => $diary,
    ]);
    }
}

