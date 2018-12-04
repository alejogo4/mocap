<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Attachment;
use DB;
class PostController extends Controller
{
    public function store(Request $request)
    {

        DB::transaction(function() use($request){
            $create=Post::create($request->all());
            $create->imgPublicacion=$request->file('imgPublicacion')->store('public');
            $create->save();
            foreach($request->file('url') as $file) {
                $route=$file->store('public');
                Attachment::create([
                    'url'=> $route,
                    'id_publicacion'=>$create->id
                ]);
            }
        });
        return redirect()->back();
    }
}
