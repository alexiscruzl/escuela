<html>
  <head>
    <title> primer programa</title>
  </head>
  <body>
    <h1>
      {{ $title }}
    </h1>
    <p>
      hola mundo
    </p>
    @unless ( empty($users))
    <ul>
      @foreach($users as $user)
      <li>{{ $user }}</li>
      @endforeach
    </ul>
    @else
   <p>
     no hay usuarios
    </p> 
    @endunless
  </body>
</html>