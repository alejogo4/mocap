<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function store(Request $request)
    {
        $create=Post::create($request->all());
        $create->$imgPublicacion=$request->file('imgPublicacion')->store('public');
        $create->save();

        // $archivos=$request->file('url');
        // foreach($archivos as $value){
        //     $request->file('url')->store('public');
        // }

          // getting all of the post data
        $files = $request->file('url');
        $destinationPath = 'uploads';

        // recorremos cada archivo y lo subimos individualmente
        foreach($files as $file) {
            $filename = $file->getClientOriginalName();
            $upload_success = $file->move($destinationPath, $filename);
        }
        // $nameImgPublicacion=$imgPublicacion->getClientOriginalName();
        // \Storage::disk('local')->put();
        // $request->file()

    }
}
