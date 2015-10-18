<?php
      // Basic form to capture # of paragraphs
      // set default value of $noOfParas
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
      $view .=  '<h5><a href= "http://p3.loc"><--P3 Home</a></h5>';
      $view .=  '<h5><form method="Button" action=""<h5>';
      $view .=  '<h5><label for="noOfParas">Number Of Paragraphs (valid 1-99)?: </label><input id="noOfParas" type="number" name="noOfParas" required="required" min="1" max="99"'.'value="'.$noOfParas.'"></h5>';
      $view .=  '<h5><input type="submit" class="btn" value="Generate Random Content!"></h5>';

      // Retrieve content from loripsum.net site passing the # of paras requested
      $loremURL = "http://loripsum.net/api/" .$noOfParas ."/long/headers";
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
