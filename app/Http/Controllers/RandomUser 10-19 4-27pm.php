<?php
    // ***Basic form to capture # of paragraphs and retrieve or set default values***
      // Set default value of $noOfUsers
      if (!isset($_GET['noOfUsers'])) {
        $noOfUsers = '1';
      } else {
        $noOfUsers = $_GET['noOfUsers'];
      }

      // Create the table's HTML string
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
      $view .=  '<h4>Random User Generator<h4>';

      // Section for # of users
      $view .=  '<h5><label for="noOfUsers">Number Of Users (valid 1-99)? : </label><input id="noOfUsers" type="number" name="noOfUsers" required="required" min="1" max="99"'.'value="' .$noOfUsers .'"></h5>';

      // ***Optional parameters***
      $view .=  '<h6>Optional values to include ...?</h6>';

      // Section for birthdate
      $view .=  '<h5><label for="birthDate">Birth Date : </label><input id="birthDate" type="checkbox" name="birthDate" value="birthDate"></h5>';

      // Section for company
      $view .=  '<h5><label for="company">Company : </label><input id="company" type="checkbox" name="company" value="company"></h5>';

      // Section for address
      $view .=  '<h5><label for="address">Address : </label><input id="address" type="checkbox" name="address" value="address"></h5>';

      // Section for profile
      $view .=  '<h5><label for="rndmProfile">Profile : </label><input id="rndmProfile" type="checkbox" name="rndmProfile" value="rndmProfile"></h5>';

      // button to generate content
      $view .=  '<h6><input type="submit" class="btn" value="Generate Random Users!"></h6>';

      // horizontal line
      $view .=   '<hr>';

      // Instantiate faker create
      $faker = Faker\Factory::create();

      // create the table
      $view .=   '<table class="tg">';
      $view .=  '          <tr>';
      $view .=  '            <td class="tg-p96l">Here are some random users for your use...</td>';
      $view .=  '          </tr>';

      // Create a for loop to request 'noOfUSers' i.e. no. of users
      foreach (range(1,intval($noOfUsers)) as $Index) {
      // each time we need a new user with their optional credentials
          // retrieve new user name
          $tName      = $faker->name;

          // Retrieve or set default value of company
          if (!isset($_GET['company'])) {
            $tCompany = "";
            //echo $tCompany;
          } else {
            $tCompany   = $faker->Company;
            //echo $tCompany;
          }

          // Retrieve or set default value of birthDate
          if (!isset($_GET['birthDate'])) {
            $tBirthDate = "";
            //echo $tBirthDate;
          } else {
            $tBirthDate = $faker->dateTimeThisCentury->format('Y-m-d');
            //echo $tBirthDate;
          }

          // set default value of address
          if (!isset($_GET['address'])) {
            $tAddress = "";
            //echo $tAddress;
          } else {
            $tAddress   = $faker->address;
            //echo $tAddress;
          }

          // set default value of allCaps
          if (!isset($_GET['rndmProfile'])) {
            $tRndmText = "";
            //echo $tRndmText;
          } else {
            $tRndmText = $faker->text;
            //echo $tRndmText;
          }

          // continue with creating table html string
          $view .=  '          <tr>';
          $view .=  '            <td class="tg-ecrb"> '.$tName .'<br></td>';
          $view .=  '          </tr>';

          // add company to the table's html
          if ($tCompany=="") {
            //do not print the company value
          } elseif ($tCompany!=""){
              # print the company value
              $view .=  '          <tr>';
              $view .=  '            <td class="tg-ecra"> Company : ' .$tCompany .'<br></td>';
              $view .=  '          </tr>';
            }

          // add birthday to the table's html
          if ($tBirthDate=="") {
            //do not print the birthday value
          } elseif ($tBirthDate!=""){
              # print the birthday value
              $view .=  '          <tr>';
              $view .=  '            <td class="tg-ecra"> Birth Date : ' .$tBirthDate .'<br></td>';
              $view .=  '          </tr>';
          }

          // add address to the table's html
          if ($tAddress=="") {
            //do not print the address value
          } elseif ($tAddress!="") {
            # print the address value
              $view .=  '          <tr>';
              $view .=  '            <td class="tg-ecra"> Address : ' .$tAddress .'<br></td>';
              $view .=  '          </tr>';
          }

          // add profile to the table's html
          if ($tRndmText=="") {
            //do not print the profile value
          } elseif ($tRndmText!="") {
              # print the profile value
              $view .=  '          <tr>';
              $view .=  '            <td class="tg-ecra"> Profile : ' .$tRndmText .'<br></td>';
              $view .=  '          </tr>';
            }
      }

      // Close out table, div & form tags
      $view .=  '        </table>';
      $view .=  '        </div>';
      $view .=  '    </div>';
      $view .=  '</div>';
      $view .=  '<form>';

      // echo the HTML table
      echo $view;

?>
