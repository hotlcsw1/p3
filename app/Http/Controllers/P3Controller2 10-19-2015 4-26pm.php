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
}
