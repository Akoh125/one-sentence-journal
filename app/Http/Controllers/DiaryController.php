<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;

class DiaryController extends Controller
{
    public function index()
    {
        // メッセージ一覧を取得
        $diaries = Diary::all();         // 追加

        // メッセージ一覧ビューでそれを表示
        return view('diaries.index', [     // 追加
            'diaries' => $diaries        // 追加
        ]);                                 
    }


    public function create()
    {
        $diary = new Diary;

        return view('diaries.create', [
        'diary' => $diary,
    ]);
    }
    
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

        return redirect()->route('diaries.index'); 
    }

    
}
