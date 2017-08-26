<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Stuff;
use App\Question;
use Mail;
use Session;

class PagesController extends Controller
{
    public function getIndex(){
    	$news = News::orderBy('id', 'desc')->paginate(3);
    	return view('home')->withNews($news);
    } 

    public function getNews(){
    	$news = News::orderBy('id', 'desc')->paginate(6);
    	return view('news')->withNews($news);
    }

    public function getNewsSingle( $id){
    	$news = News::find($id);
    	return view('news_single')->withNews($news);
    }


    public function getAssistance(){
        return view('assistance');
    }

    public function getAdjuster(){
        return view('adjuster');
    }


    public function getContact(){
        return view('contact');
    }

    public function getAbout(){
        $stuffs = Stuff::orderBy('id', 'desc')->paginate(6);
        return view('about')->withStuffs($stuffs);
    }

     public function store(Request $request){

        $this->validate($request, [
            'firstName'=>'required|max:255',
            'lastName'=>'required|max:255',
            'tel'=>'required|min:9|max:9',
            'body'=>'required' ]);

        $data = [
        'firstName' => $request->firstName,
        'lastName' => $request->lastName,
        'tel' => $request->tel,
        'body' => $request->body
        ];

        Mail::send('question.email', $data, function($message) use ($data){
            $message->from('alskomts@gmail.com');
            $message->to('saidkhonovsaidmurod@gmail.com');
        });


        $question = new Question;

        $question->firstName = $request->firstName;
        $question->lastName = $request->lastName;
        $question->tel = $request->tel;
        $question->body = $request->body;

        $question->save();

        Session::flash('success', 'The question was successfully sent!');

        return redirect()->route('home');

    }

}
