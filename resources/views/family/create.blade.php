<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form action="/family" method="POST">
{{ csrf_field() }}
  Member Firstname: <input type="text" name="firstname" id=""> <br>
  Member Lastname: <input type="text" name="lastname" id=""> <br>
  Member Position: <input type="text" name="position" id=""> <br>
  <input type="submit" value="Submit">
  @foreach($errors->all() as  $e)
  <li>{{$e}} </li>
  @endforeach
  </form>
</body>
</html>
