<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control de Calidad</title>
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('css/checkbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>
<body>

@yield("content")
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Nueva Evaluación</h5>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del Asesor</label>
    <select name="adviser" id="" class="form-control">
        <option value="">Seleccionar asesor</option>
        @foreach($advisers as $adviser)
         <option value="{{ $adviser->id }}">{{ $adviser->name }}</option>
        @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Linea de Negocio</label>
    <select name="businessLine" id="" class="form-control">
        <option value="1">Atención al cliente</option>
        <option value="2">Ventas</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del cliente</label>
    <input type="text" name="client" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">ID de la llamada</label>
    <input type="text" name="callId" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">¿Usó RCS para seleccionar la llamada?</label>
    <br>
    <div class="form-check form-check-inline">
  <input class="form-check-input" name="rcs" value="1" type="radio" name="inlineRadioOptions" checked id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Sí</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" name="rcs" value="0" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">No</label>
</div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary beginQuiz">Comenzar</button>
      </div>
    </div>
  </div>
</div>

<script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('js/slick.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@yield("script")
</body>
</html>