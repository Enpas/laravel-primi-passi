<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
  <title>laravel-home</title>
  <style>

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto Mono', monospace;
    }

    .container {
      width: 30%;
      padding: 20px;
      margin: 50px auto;
      text-align: center;
      border-radius: 10px;
      box-shadow: 1px 1px 3px 1px black;
      background-color: rgba(0, 0, 0, 0.1)
    }

    h1 {
      margin: 10px;
    }

    ul {
      list-style: none;
      margin: 10px;
    }

    li {
      margin: 5px;
    }

    a {
      text-decoration: none;
      font-weight: 600;
      color: rgb(80, 80, 80);
    }
  </style>
</head>
<body>

  <div class="container">

    <h1>Hello World</h1>

    <ul>

        @foreach ($list as $element)
          @if($element['surname'] == "verdi")
            <li><b>user1:</b> {{$element['name']}} {{$element['surname']}}</li>
          @endif
        @endforeach

        @foreach ($list as $element)
        @if($element['number'] == "20")
          <li><b>user2:</b> {{$element['name']}} {{$element['surname']}}</li>
        @endif
        @endforeach

      @foreach ($list as $element)
      @if($element['name'] == "giallo")
        <li><b>user3:</b> {{$element['name']}} {{$element['surname']}}</li>
      @endif
      @endforeach

    </ul>

    <a class="neon-button" href="http://127.0.0.1:8000/page">Next page</a>

  </div> 


</body>
</html>