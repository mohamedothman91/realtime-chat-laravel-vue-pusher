<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use TCG\Voyager\Facades\Voyager;

class ChatMessage extends Controller
{
    use BreadRelationshipParser;

    public function index(){
        



        $view = "voyager::chat-messages.browse";
        return Voyager::view($view);

    }


}
