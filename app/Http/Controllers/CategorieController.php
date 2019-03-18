<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Categorie $categorie)
    {
        $posts = $categorie->posts;

        return view('posts.index', compact('posts'));
    }
}
