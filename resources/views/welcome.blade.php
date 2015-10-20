@extends('layouts.master')


@section('welcome')
    Show welcome
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <title>Dynamic Web Applications [CSCIE15] - Project #3</title>
    <link href="css/mainstyle.css" type="text/css" rel="stylesheet">
@stop


@section('content')

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <div class="container">
        <div class="content">
            <div class="title">

            <table class="tg">
              <tr>
                <th class="tg-vjsu">Developer's Best Friend</th>
              </tr>
              <tr>
                <th class="tg-vjsu"></th>
              </tr>
              <tr>
                <td class="tg-p962"></td>
              </tr>
              <tr>
                <td class="tg-p96l">Lorem-Ipsum Generator</td>
              </tr>
              <tr>
                <td class="tg-qgsu">In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation. By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.  Thanks to loripsum.net and the tools provided with the API, now we can easily generate paragraphs of Lorem-Ipsum. Here is my take on it!<br></td>
              </tr>
              <tr>
                <td class="tg-ecrz">Create random filler text for your applications:<a href="\loremlipsum">Generate some random text</td>
              </tr>
            </table>

            <table class="tg">
              <tr>
                <td class="tg-p96l">Random User Generator</td>
              </tr>
              <tr>
                <td class="tg-qgsu">Often during application development we need random users generated for testing, documentation, etc. This application does that seamlessly.  Thanks to Fzaninotto/faker, we can create tons of users without spending oodles of time doing it.  Enjoy the application!</td>
              </tr>
              <tr>
                <td class="tg-ecrz">Create random users for your applications:<a href="\randomuser">Generate some users</td>
              </tr>
            </table>
            </div>
        </div>
    </div>
@stop
