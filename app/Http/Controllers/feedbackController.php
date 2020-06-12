<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\feedbackRequest;
use App\Models\feedbackModel;

class feedbackController extends Controller {
    
    public function submit(feedbackRequest $par) {

        $feedback = new feedbackModel();
        $feedback->name = $par->input('name');
        $feedback->email = $par->input('email');
        $feedback->theme = $par->input('theme');
        $feedback->message = $par->input('message');
        
        $feedback->save();

        return redirect()->route('home')->with('success', 'Сообщение было добавлено');
        
    }

}
