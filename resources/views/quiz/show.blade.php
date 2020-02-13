@extends('layouts.quiz')


@section('content')
<form method="POST" action="{{ url('admin/quiz/1') }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id">
<div class="quizBox slider">



@php
 $count = 1;
@endphp

@foreach($questions as $question)
<div>
<div class="left p-0 bg-white h-md-100">
<div class="h-100 p-5">
        <h3 class="text-center">{{ $question->title }}</h3>
        <div class="img"></div>
        <h4 class="text-center">{{ $question->question }}</h4>
    </div>
</div>
<div class="right">
    
<div class="h-100 p-5">
    <h4 class="text-center">Selecciona Una Opción</h4>
    @foreach($question->answers as $answer)
    <div class="row" style="min-width:100%;">
        <div class="col-sm-2">
        <label class="el-checkbox el-checkbox-lg">
  <input type="radio" name="question-{{$answer->question_id}}" value="{{$answer->id}}" checked>
  <span class="el-checkbox-style  pull-right"></span>
</label>
        </div>
        <div class="col-sm-10">
        {{ $answer->answer }}
        </div>
    </div>
    @endforeach

    <p class="text-center">
       <a class="btn btn-outline-light next">Siguiente</a>
    </p>
    
</div>
</div>
</div>
 @php
  $count++;
 @endphp
@endforeach
<div>
<div class="left p-0 bg-white h-md-100">
<div class="h-100 p-5">
        <h3 class="text-center">Finalizar</h3>
        <div class="img"></div>
        <h4 class="text-center">Hemos finalizado la evaluación de calidad, puedes dejar algun comentario a cerca de la sesión.</h4>
    </div>
</div>
<div class="right">
    
<div class="h-100 p-5">
    <h4 class="text-center">Deja un comentario</h4>
    <div class="row" style="min-width:100%;">
        <div class="col-sm-12">        
        <textarea name="comments" id="comments" cols="30" rows="10" class="form-control"></textarea>
        </div>
    </div>
    <p class="text-center">
       <button class="btn btn-outline-light" type="submit">Finalizar</button>
    </p>
    
</div>
</div>
</div>

</div>
</form>
@stop

@section("script")
<script>
    $(document).ready(function(){
        
        $('#staticBackdrop').modal()

        var currentSlide = $('.slider').slick();

        $(document).on('click', '.beginQuiz', function(){
            $.ajax({
                url: "{{ url('admin/quiz')}}",
                method: "post",
                async: true,
                data:{
                    _token: "{{ csrf_token() }}",
                    adviser: $('select[name="adviser"] option:selected').val(),
                    callId: $('input[name="callId"]').val(),
                    businessLine: $('select[name="businessLine"] option:selected').val(),
                    client: $('input[name="client"]').val(),
                    rcs: $("input[name='rcs']:checked").val(),
                },
                success: function(data){
                    console.log(data)
                    $('input[name="id"]').val(data.data.id)
                    $('#staticBackdrop').modal("hide")
                },
                error: function(msg){
                    console.log(msg)
                }

            })
        })

        

     $(document).on('click', '.next', function(){
        $('.slider').slick('slickNext');
     })
    });
</script>
@stop