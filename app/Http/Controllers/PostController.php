<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $post = Post::with('Comment')->withCount('Comment') ->orderBy('comment_count', 'desc')->get();
        // $posts=Post::all();
       $post_length = count($post);
       
        //     echo'<pre>'; for($i=0;$i<$post_length;$i++){
        //         $comment_length = count($post[$i]->comment);
        //         for($j=0;$j<$comment_length;$j++){ print_r(
                
        //         $post[$i]->description .'<br>'.$post[$i]->comment[$j]->message .'<br>' );
        //     }
        // }
        return view('post.index',compact('post'));
    }

    public function search(Request $request){

        $search = $request -> get('search');

        $post = Post::whereHas('Comment', function ($query) use ($request) {
            $query->where('message', 'like binary', "%{$request->search}%");
        })
        ->orWhere('description', 'like binary', '%' .$search. '%')
        ->withCount('Comment') ->orderBy('comment_count', 'desc')->get();
    
        return view('post.index', compact('post'));

        // $post =Post::with('Comment')->where('description', 'like', '%' .$search. '%')
        //                             ->orWhere('')
        //                             ->withCount('Comment') ->orderBy('comment_count', 'desc')->get();
        // // $post = DB::table('posts')->where('description', 'like', '%' .$search. '%')->paginate(5);
        // return view('post.index',compact('post'));
    }
}
