<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\Question;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class WordsController extends Controller
{
    //
    public function question()
    {
        return view('question');
    }

    public function word()
    {
        $word = Word::all();
        return view('word', [
            'word' => $word,
        ]);
    }

    public function saveWord(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'word' => 'string|required|max:255',
            'meaning' => 'string|required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('/word')->withInput()->withErrors($validator);
        }

        Word::updateOrCreate(
            [
                'word' => $request['word']
            ],
            [
                'word' => $request['word'],
                'meaning' => $request['meaning']
            ]
        );

        return redirect('word');
    }
}
