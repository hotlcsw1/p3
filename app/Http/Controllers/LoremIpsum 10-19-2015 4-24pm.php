<?php
      // Basic form to capture # of paragraphs and
      // Set default value of loremContent to empty string
      $loremContent ="";

      // Retrieve or set default value of $noOfParas
      if (!isset($_GET['noOfParas'])) {
        $noOfParas = '1';
      } else {
        $noOfParas = $_GET['noOfParas'];
      }

      // begin creation of the table html string
      // HTML head
      $view =  '<html>';
      $view .=  '      <head>';
      $view .=  '        <title>CSCIE 15 [Dynamic Web Applications: P3]</title>';
      $view .=  '        <link href="css/mainstyle.css" type="text/css" rel="stylesheet">';
      $view .=  '    </head>';

      // HTML body
      $view .=  '    <body>';

      // HTML div tags
      $view .=  ' <div class="container"';
      $view .=  '    <div class="content">';
      $view .=  '        <div class="title">';

      // Set home address based off of environment
      $environment = App::environment();
      If ($environment=="local") {
        // The environment is local
        $view .=  '<h6><a href= "http://p3.loc"><--P3 Home</a></h6>';
      } elseif ($environment=="production") {
        $view .=  '<h6><a href= "http://p3.approjects.me"><--P3 Home</a></h6>';
      }

      // Invoke the form button
      $view .=  '<h6><form method="Button" action=""<h6>';

      // header
      $view .=  '<h4>Lorem Ipsum Generator<h4>';

      // section for # of paragraphs
      $view .=  '<h5><label for="noOfParas">Number Of Paragraphs (valid 1-99)?: </label><input id="noOfParas" type="number" name="noOfParas" required="required" min="1" max="99"'.'value="'.$noOfParas .'"></h5>';

      // ***Optional parameters***
      $view .=  '<h6>Options...?</h6>';

      // section for header
      $view .=  '<h5><label for="header">Header? : </label><input id="header" type="checkbox" name="header" value="headers"></h5>';

      // section for short, medium, long or very long paragraphs
      $view .=  '<h5><label for="shortOrLong">Prefer short or long paragraphs? : </label><input id="shortOrLong" type="radio" name="shortOrLong" ' .' value="long">Long';
      $view .=  '<input id="shortOrLong" type="radio" name="shortOrLong"' .' value="verylong">Very Long';
      $view .=  '<input id="shortOrLong" type="radio" name="shortOrLong" ' .' value="medium"> Medium';
      $view .=  '<input id="shortOrLong" type="radio" name="shortOrLong"' .' value="short">Short</h5>';

      // section for all caps
      $view .=  '<h5><label for="allCaps">ALL CAPS? : </label><input id="allCaps" type="checkbox" name="allCaps" value="allcaps"></h5>';

      // button to generate content
      $view .=  '<h6><input type="submit" class="btn" value="Generate Random Content!"></h6>';

      // ***Retrieve or set values selected by the user***
      // Retrieve or set default value of header
      if (!isset($_GET['header'])) {
        $header = "";
      } else {
        $header = $_GET['header'];
      }

      // Retrieve or set default value of shortOrLong
      if (!isset($_GET['shortOrLong'])) {
        $shortOrLong = "short";
      } else {
        $shortOrLong = $_GET['shortOrLong'];
      }

      // Retrieve or set default value of allCaps
      if (!isset($_GET['allCaps'])) {
        $AllCaps = "";
      } else {
        $AllCaps = $_GET['allCaps'];
      }

      // Retrieve content from loripsum.net site passing the parameters as defined by the user
      $loremURL = "http://loripsum.net/api/" .$noOfParas ."/" .$header ."/" .$shortOrLong ."/" . $AllCaps;
      //echo $loremURL;
      $loremContent=file_get_contents($loremURL);

      // continue with creating html string
      $view .=   '<table class="tg">';
      $view .=  '          <tr>';
      $view .=  '            <td class="tg-p96l">Here is some random text for your use...</td>';
      $view .=  '          </tr>';
      $view .=  '          <tr>';
      $view .=  '            <td class="tg-ecrz">'.$loremContent.'</td>';
      $view .=  '          </tr>';
      $view .=  '        </table>';
      $view .=  '        </div>';
      $view .=  '    </div>';
      $view .=  '</div>';
      $view .=  '<form>';

      // echo html to create the form
      echo $view;

      // close out
  ?>
