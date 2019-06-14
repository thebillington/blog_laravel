<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PageController extends Controller
{

    // Home page
    public function index() {

    	// Return the index view
    	return view('index');

    }

    // About page
    public function about() {

    	// Return the about view
    	return view('about');

    }

    // Get request for the posts page
    public function posts() {

    	//$posts = ["HELLO POST", "AYRTON HI", "Testing 3"];

    	$posts = Post::paginate();

    	// Return the posts view
    	return view('posts', compact("posts"));

    }

    // Get request for the create post page
    public function posts_create() {

    	// Return the new post view
    	return view('new_post',);

    }

    // Post request for the create new post page
    public function post_store() {

    	// Create a new post model and set the data
    	$post = new Post();
    	$post->title = request('title');
    	$post->content = request('content');
    	$post->save();

    	// Go back to the posts page
    	return redirect('posts');

    }

}