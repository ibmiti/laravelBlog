<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    //
    public function index(){

      return view('blogs.index');
    }
    public function create(){
      return view('blogs.create');
    }
    public function edit(){
      return view('blogs.edit');
    }
    public function delete(){
      return view('blogs.delete');
    }
    public function store(){
      
    }
}
