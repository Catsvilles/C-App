<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function JobPostList()
  {
      return view('jobpost_list');
  }
    public function ArticleList()
  {
      return view('article_list');
  }
    public function createJobPost()
  {
      return view('job_post_create');
  }

  public function createArticle()
{
    return view('article_create');
}


}
