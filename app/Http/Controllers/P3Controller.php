<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Magyarjeti\Loripsum\Client;
use Magyarjeti\Loripsum\Http\CurlAdapter;
use Debugbar;
use Random;
use Lipsum;

class P3Controller extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to GET LoremIpsum
    */
    public function getLoremlipsum() {
      include ('LoremIpsum.php');
    }
    /**
    * Responds to requests to GET /practice - Home
    */
    public function getRandomUser() {
      include ('RandomUser.php');
    }

    /**
    * Responds to requests to GET /books
    */
    public function getIndex() {
        //return 'List all the books';
        return view('books.index');
    }

    /**
     * Responds to requests to GET /books/show/{id}
     */
    public function getShow($title=null) {
        return view('books.show')->with('title',$title);
    }

    /**
     * Responds to requests to GET /books/create
     */
    public function getCreate() {
      //return 'Form to create books';
      /**
      $view = '<form method="POST" action="/books/create">';
      $view .= csrf_field();
      $view .= '<input type="text" name="title">';
      $view .='<input type="submit">';
      $view .='<form>';
      return $view;
      */
      return view('books.create');
    }

    /**
     * Responds to requests to POST /books/create
     */
    public function postCreate() {
      return 'Process the creation of a new book: '.$_POST['title'];
    }

}
