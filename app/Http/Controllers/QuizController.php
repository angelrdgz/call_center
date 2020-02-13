<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quiz;
use App\Set;
use App\SetAnswer;
use App\Question;
use App\User;

class QuizController extends Controller
{
    public function index()
    {
      $sets = Set::all();
      return view('quiz.index',["sets"=>$sets]);
    }

    public function store(Request $request)
    {
        $set = new Set();
        $set->client = $request->client;
        $set->user_id = $request->adviser;
        $set->call_id = $request->callId;
        $set->business_line = $request->businessLine;
        $set->rcs = $request->rcs;
        $set->save();

        return response()->json(["data"=>$set]);

    }

    public function show($id)
    {
      $questions = Question::where('set_id', 1)->get();
      $advisers = User::where('role_id', 2)->get();
      return view('quiz.show',["questions"=>$questions, 'advisers'=>$advisers]);
    }

    public function update(Request $request){

        $set = Set::where('id', $request->id)->first();
        $set->comments = $request->comments;
        $set->save();
        
        foreach ($request->all() as $key => $value) {
            if(strpos($key, "question-") !== false){
                $answer = new SetAnswer();
                $answer->set_id = $request->id;
                $answer->question_id = str_replace("question-", "", $key);
                $answer->answer_id = $value;
                $answer->save();
            }           
        }

        return redirect('admin/quiz')->with('success', "Encuesta guardada correctamente");
    }
}