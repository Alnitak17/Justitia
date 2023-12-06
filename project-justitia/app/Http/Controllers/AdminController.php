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
            "title" => $request->input('titleInput'),
            "body" => $request->input('bodyInput'),
            "photo" => $request->input('fileInput')
        ]);

        return redirect('adminquiz');
    }

    public function createAnswer(request $request) {

        Answer::create([
            "question_id" => 1,
            "title" => $request->input('titleInput'),
            "body" => $request->input('bodyInput')
        ]);

        return redirect('adminquiz');
    }

}
