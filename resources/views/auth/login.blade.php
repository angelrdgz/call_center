<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Control de Calidad</title>
</head>
<body>
<div class="d-md-flex h-md-100 align-items-center">
    

<!-- First Half -->

<div class="col-md-4 p-0 bg-white h-md-100 loginarea">
    <div class="d-md-flex align-items-center h-md-100 justify-content-center"style="min-width:300px;">
    
    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h2 class="text-center">Sistema de Evaluación</h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('email')
            <p class="text-red-500 text-xs text-danger italic">El usuario es requerido.</p>
      @enderror 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    @error('password')
            <p class="text-red-500 text-danger text-xs italic">La contraseña es requerida.</p>
      @enderror 
  </div>
  <button type="submit" class="btn btn-primary btn-block">Iniciar</button>
</form>
    </div>
</div>

<!-- Second Half -->

<div class="col-md-8 p-0 bg-indigo h-md-100">
    <div class="text-white d-md-flex align-items-center h-100 p-5 text-center justify-content-center">
    </div>
</div>


    
</div>
</body>
</html>