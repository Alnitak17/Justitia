<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class AdminController extends Controller
{
    public $quizzes = 0;
    public $questions = 0;
    public $answers = 0;

    //load panel w/ data
    public function show () {

        return view('admin');
    }

    public function showQuiz() {

        $quizzes = Quiz::where('id', '>=', 0)
                    ->get();

        $questions = Question::where('id', '>=', 0)
                        ->orderby('id')
                        ->get();

        $answers = Answer::where('id', '>=', 0)
                        ->orderby('id')
                        ->get();

        return view('adminquiz')->with('quizzes', $quizzes);
    }

    public function createQuiz() {

        Quiz::create([
            "name"=> $request->input('name')
        ]);

        return response()->json(['success'=>'Quiz created']);
    }

    public function deleteQuiz() {
        $id;

        $deleted = Quiz::where('id', '=', $id)->delete();

        return response()->json(['success'=>'Row has been deleted']);
    }

    public function updateQuiz() {

    }
}
