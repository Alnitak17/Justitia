<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Quiz;
use App\Models\Question;

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




        return view('admin');
    }
}
