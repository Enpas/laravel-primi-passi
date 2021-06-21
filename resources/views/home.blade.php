<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>laravel-home</title>
</head>
<body>

    <h1>Hello World</h1>

    <ul>

        @foreach ($list as $element)
          @if($element['surname'] == "verdi")
            <li>user1: {{$element['name']}} {{$element['surname']}}</li>
          @endif
        @endforeach

        @foreach ($list as $element)
        @if($element['number'] == "20")
          <li>user2: {{$element['name']}} {{$element['surname']}}</li>
        @endif
        @endforeach

      @foreach ($list as $element)
      @if($element['name'] == "giallo")
        <li>user3: {{$element['name']}} {{$element['surname']}}</li>
      @endif
      @endforeach

    </ul>

    <a href="http://127.0.0.1:8000/page">Next page</a>


</body>
</html>