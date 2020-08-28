<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Events\Posted;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{

    /**
     * @return View
     */
    public function index() : View
    {
        $posts = Post::all();
        return view('channels.index',[
            "posts" => $posts
        ]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request) : JsonResponse
    {
        $posts = new Post;
        $posts->title = $request->title;
        $posts->description = $request->description;
        $posts->save();
        //pusherの処理
       event(new PusherEvent($posts));
    }
}