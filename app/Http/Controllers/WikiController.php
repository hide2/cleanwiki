<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Wiki;

class WikiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('new', 'create', 'edit');
    }

    public function index()
    {
        return view('wiki');
    }

    public function show($url)
    {
        $wiki = Wiki::where('url', $url)->first();
        $title = $wiki->title;
        return view('show', ['wiki'=>$wiki, 'title'=>$title]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => 'required|string|max:255',
            'url' => 'required|string|url|max:255|unique:wikis',
        ]);
    }

    protected function new()
    {
        return view('new');
    }

    protected function create()
    {
        return Wiki::create([
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'tag' => $_POST['tag'],
            'url' => $_POST['url'],
            'user_id' => Auth::id(),
        ]);
    }
}
