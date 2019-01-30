<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Link;


class LinksController extends Controller
{
    public function index(){
        $links = Link::all();

        return view('links', ['links' => $links]);

    }

    public function showLinksForm(){}

    public function handleLinksForm(request $request){}
}
