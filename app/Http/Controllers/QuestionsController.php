<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Session;
use Mail;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

     public function index()
    {
        $questions = Question::orderBy('id', 'desc')->paginate(10);
        return view('question.index')->withQuestions($questions);
    }

    public function create(){
    	return view('question.create');
    }

   

     public function show($id)
    {
        $question = Question::find($id);
        $question->seen = true;
        $question->save();
        return view('question.show')->withQuestion($question);
    }

    public function destroy($id)
    {
        $question = Question::find($id);
        $question->delete();

        Session::flash('success', 'This question was successfully deleted');

        return redirect()->route('question.index');

    }

}
