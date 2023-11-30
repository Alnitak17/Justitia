<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Question;
use App\Models\Answer;

class AdminController extends Controller
{
    public $questions = 0;
    public $answers = 0;

    //load panel w/ data
    public function show () {

        return view('admin');
    }

    public function showQuiz() {

        $questions = Question::where('id', '>=', 0)
                        ->orderby('id')
                        ->get();

        $answers = Answer::where('id', '>=', 0)
                        ->orderby('id')
                        ->get();

        return view('adminquiz')->with('questions', $questions)->with('answers', $answers);
    }

    public function deleteQuestion(Request $request) {

        $questionId = $request->input('question_id');

        return response()->json(['message' => 'Success']);
    }

    public function createQuestion(request $request) {

        Question::create([
            "title" => $request->input('title'),
            "body" => $request->input('body'),
            "photo" => $request->input(null),
        ]);


    }

}
