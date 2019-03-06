<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;
use App\Http\Resources\BlogResource;

class ApiBlogController extends Controller
{
    //
    public function index ()
    {
        return BlogResource::collection(Blog::all());
    }
}
