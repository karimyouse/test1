<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>web laravel</title>
</head>
<body>
    <h1>Hello , {{ $name }}</h1>
    <form action="about" method="post">
        @csrf
        <input type="text" name="name" id="name"><br>
     <select name="departs" id="">
        @foreach ($departs as $key => $depart)
         <option value="{{ $key }}"> {{ $depart }} </option>
         

        @endforeach

     </select> <br>
     <input type="submit" value="Send"><br>
 </form>
</body>
</html>
