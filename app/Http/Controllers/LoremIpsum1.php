<?php
      // Basic form to capture # of paragraphs
      // set default value of $noOfParas
      $loremContent ="";
      if (!isset($_GET['noOfParas'])) {
        $noOfParas = '1';
      } else {
        $noOfParas = $_GET['noOfParas'];
      }

      $view =  '<html>';
      $view .=  '      <head>';
      $view .=  '        <title>CSCIE 15 [Dynamic Web Applications: P3]</title>';
      $view .=  '        <link href="css/mainstyle.css" type="text/css" rel="stylesheet">';
      $view .=  '    </head>';
      $view .=  '    <body>';
      $view .=  ' <div class="container"';
      $view .=  '    <div class="content">';
      $view .=  '        <div class="title">';

      // Set home address based off of environment
      echo $app;
      If ($app->environment('local')) {
        // The environment is local
        $view .=  '<h6><a href= "http://p3.loc"><--P3 Home</a></h6>';
      }
      if ($app->environment('production')) {
        $view .=  '<h6><a href= "http://p3.loc"><--P3 Home</a></h6>';
      }

      $view .=  '<h6><form method="Button" action=""<h6>';
      // section for # of paragraphs
      $view .=  '<h6><label for="noOfParas">Number Of Paragraphs (valid 1-99)?: </label><input id="noOfParas" type="number" name="noOfParas" required="required" min="1" max="99"'.'value="'.$noOfParas .'"></h6>';

      // section for short, medium, long or very long paragraphs
      $view .=  '<h6><label for="shortOrLong">Prefer short or long paragraphs? : </label><input id="shortOrLong" type="radio" name="shortOrLong" ' .' value="long">Long';
      $view .=  '<input id="shortOrLong" type="radio" name="shortOrLong"' .' value="verylong">Very Long';
      $view .=  '<input id="shortOrLong" type="radio" name="shortOrLong" checked ="checked"' .' value="medium">Medium';
      $view .=  '<input id="shortOrLong" type="radio" name="shortOrLong"' .' value="short">Short</h6>';

      // section for all caps
      $view .=  '<h6><label for="allCaps">ALL CAPS? : </label><input id="allCaps" type="checkbox" name="allCaps" value="allcaps">ALL CAPS</h6>';

      // button to generate content
      $view .=  '<h6><input type="submit" class="btn" value="Generate Random Content!"></h6>';

      // set default value of shortOrLong
      if (!isset($_GET['shortOrLong'])) {
        $shortOrLong = "short";
      } else {
        $shortOrLong = $_GET['shortOrLong'];
      }

      // set default value of allCaps
      if (!isset($_GET['allCaps'])) {
        $AllCaps = "";
      } else {
        $AllCaps = $_GET['allCaps'];
      }

      //echo '<br>';
      // Retrieve content from loripsum.net site passing the # of paras requested
      $loremURL = "http://loripsum.net/api/" .$noOfParas ."/" .$shortOrLong ."/" . $AllCaps;
      //echo $loremURL;
      $loremContent=file_get_contents($loremURL);

      // continue with creating html page
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
      //$view .=  "$loremContent";

      echo $view;

  ?>
