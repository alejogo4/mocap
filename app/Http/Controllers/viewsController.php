<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Attachment;

class viewsController extends Controller
{
    public function welcome(){
        $posts=Post::get();
        return view('welcome',compact('posts'));
    }

    public function detail($id){
        $posts=Post::whereid($id)->first();
        $attachments= Attachment::select('url')->join('publicaciones','publicaciones.id','archivos.id_publicacion')
        ->where('id_publicacion',$posts->id)->get();
        return view('detail', compact('posts','attachments'));
    }
}
