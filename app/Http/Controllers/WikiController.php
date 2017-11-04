<?php

namespace App\Http\Controllers;

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
        $wiki = Wiki::where('url', $url);
        return view('show', ['wiki'=>$wiki]);
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

    protected function create(array $data)
    {
        return Wiki::create([
            'title' => $data['title'],
            'content' => $data['content'],
            'tag' => $data['tag'],
            'url' => $data['url'],
            'user_id' => Auth::id(),
        ]);
    }
}
