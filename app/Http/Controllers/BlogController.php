<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nduthi;

class BlogController extends Controller
{
   
public function getSingle($slug){
                //fetch from the database on the slug

                $nduthi=Nduthi::where('slug', '=', $slug)->first(); //we could use get() but first is faster
                $like = Nduthi::where('slug', '!=', $slug)->inRandomOrder()->take(3)->get();

                return view('blog.single')->withNduthi($nduthi)->withLike($like);

                //return the view and pass in the post object

    }
   
}
