<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @foreach($family as $f)
  <ul>
  <li> <a href="family/{{$f->id}}/edit"> {{$f->firstname}} </a>{{$f->lastname}}</li>
    <hr>
  </ul>
  @endforeach
</body>
</html>
