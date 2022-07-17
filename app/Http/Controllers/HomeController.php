<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\VehicleType;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        $vehicle_types = VehicleType::all();
        return view('posts', ["posts"=>$posts, "vehicle_types"=>$vehicle_types]);
    }
}
