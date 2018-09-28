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
    <ul>
      @foreach($users as $user)
      <li>{{ $user }}</li>
      @endforeach
    </ul>
  </body>
</html>