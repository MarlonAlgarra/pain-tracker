@extends('homeLayout')

@section('title','Pain Tracker')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/mainMenu.css') }}">
@endsection

@section('content')
<style>
    .mainHeader{
        top: 0%;
        width: 100%;
        height: 70px;
        background-color:white;
        position: fixed;
        text-align: center;
    }

    .center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .formCheck:checked{
      background-color: red;
      border-color: #cb4154;
    }
    .custom-range::-webkit-slider-thumb {
      background: red;
    }

    .custom-range::-moz-range-thumb {
      background: red;
    }

    .custom-range::-ms-thumb {
      background: red;
    }
</style>

<div class="mainHeader">
    <div class="center">
        <h2 style="font-family: Raleway">Pain Tracker <i class="bi bi-hospital-fill" style="color:red"></i></h2>
    </div>
</div>

  <div class="wrapper">
      <div class="item menu">
        <div class="linee linee1"></div>
        <div class="linee linee2"></div>
        <div class="linee linee3"></div>
      </div>
      <div class="item gallery">
        <div class="dot dot1"></div>
        <div class="dot dot2"></div>
        <div class="dot dot3"></div>
        <div class="dot dot4"></div>
        <div class="dot dot5"></div>
        <div class="dot dot6"></div>
      </div>
      
      <button class="item add">
        <div class="circle">
          <div class="close">
            <div class="line line1"></div>
            <div class="line line2"></div>
          </div>
        </div>
        <input type="search" placeholder="Agregar" class="search" />
        
      </button>
      {{-- <button class="item add">
        <i class="bi-person-fill"></i>
      </button> --}}

      <a class="nav-items items1" href="#">
        <i class="bi-person-fill"></i>
      </a>
      <div class="nav-items items2">
        <i class="bi-journal-album"></i>
      </div>
      <div class="nav-items items3">
        <i class="bi-heart-pulse"></i>
      </div>
      <div class="nav-items items4">
        <i class="bi-alarm"></i>
      </div>
      <div class="box">
        <div class="box-line box-line1"><a href="{{ route('login.destroy') }}">Log out</a></div>
        <div class="box-line box-line2"></div>
        <div class="box-line box-line3"></div>
        <div class="box-line box-line4"></div>
      </div>
  </div>
  
  <style>
    .formulario{
      z-index:5;
      display: none;
      transition: .4s;
    }
  </style>
  <div class="formulario">
    <div class="container" style="margin-top: -30%;width: 23rem;">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Nuevo Registro</h5>
          <form>
            @csrf
            <div class="form-group">
              <label>¿Presentó dolor?  </label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input formCheck" type="radio" name="dolorIsPresent" id="inlineRadio1" value="si">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input formCheck" type="radio" name="dolorIsPresent" id="inlineRadio2" value="no" checked>
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </div>

            <div class="form-group dolorLevel" style="display:none;margin-top:5%;">
              <label>Nivel de dolor: <strong id="painNumber"></strong></label>
              <input type="range" class="form-range custom-range" value="0" min="0" max="10" step="1" id="painRange">
            </div>

            <div class="form-group" style="margin-top:5%;">
              <label>¿Tomó medicamentos?  </label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input formCheck" type="radio" name="medicamentos" value="si">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input formCheck" type="radio" name="medicamentos" value="no" checked>
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </div>

            <div class="form-group medicamento" style="display:none;margin-top:5%;">
              <label for="">Medicamento</label>
              <input type="text" class="form-control" id="medicineName" placeholder="Nombre medicamento" required>
            </div>
            <div class="form-group" style="margin-top:5%;">
              <label>Menstruación  </label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input formCheck" type="radio" name="menstruacion" value="si">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input formCheck" type="radio" name="menstruacion" value="no" checked>
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </div>
            <div style="margin-top:5%;">
              <button id="saveRegister" class="btn btn-danger" style="width:100%; background-color:red;">Guardar</button>
            </div>
            
          </form>
        </div>
      </div>
    </div>
    {{-- <div class="card" style="width: 22rem;margin-top:-80%;">

      <div class="card-body">
        <h5 class="card-title">Nuevo Registro</h5>
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">dolor</label>
            <input type="dolor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">dolor</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div> --}}
  </div>
  <div class="effect"></div>
@endsection

@section('scripts')

<script>
  document.querySelector(".circle").addEventListener("click", () => {
    for (let i = 0; i <= 3; i++) {
      document
        .getElementsByClassName("nav-items")
        [i].classList.remove("show-menu");
      document
        .getElementsByClassName("box-line")
        [i].classList.remove("box-line-show");
    }
    // document.querySelector(".box").classList.remove("box-show");
    // document.querySelector(".add").classList.toggle("go");
    // document.querySelector(".search").classList.toggle("search-focus");
    // document.querySelector(".search").focus();
    //document.querySelector(".circle").classList.toggle("color");
    // document.querySelector(".line1").classList.toggle("move");
    // document.querySelector(".line2").classList.toggle("mov");
    document.querySelector(".effect").classList.toggle("big");
  });
  /* menu */
  document.querySelector(".menu").addEventListener("click", () => {
    for (let i = 0; i <= 3; i++) {
      document.querySelector(".box").classList.remove("box-show");
      document
        .getElementsByClassName("nav-items")
        [i].classList.toggle("show-menu");
      document
        .getElementsByClassName("box-line")
        [i].classList.remove("box-line-show");
    }
  });
  /* box */
  document.querySelector(".gallery").addEventListener("click", () => {
    document.querySelector(".box").classList.toggle("box-show");
    for (let i = 0; i <= 3; i++) {
      document
        .getElementsByClassName("box-line")
        [i].classList.toggle("box-line-show");
      document
        .getElementsByClassName("nav-items")
        [i].classList.remove("show-menu");
    }
  });
</script>

<script>
  $('.circle').on('click',function(){
    $('.formulario').toggle();
    $('.line1').toggleClass('move')
    $('.line2').toggleClass('mov')
  })

  $("input[name$='dolorIsPresent']").click(function() {
        var test = $(this).val();
        if(test=='si'){
          $(".dolorLevel").show();
          $('#painNumber').text(1)
          $("#painRange").prop('min',1); 
        }else{
          $(".dolorLevel").hide();
          $("#painRange").prop('min',0); 
          $("#painRange").val() = 0;
          $('#painNumber').text(0)
        }
  });

  $("input[name$='medicamentos']").click(function() {
        var test = $(this).val();
        if(test=='si'){
          $(".medicamento").show();
        }else{
          $(".medicamento").hide();
        }
  });

  $("#painRange").on('change',function(){
    $('#painNumber').text(' '+$(this).val())
  });

  $("#saveRegister").click(function(e){
    e.preventDefault();
    if($("#medicineName").val() == '' && $("input[name$='medicamentos']:checked").val()=='si'){
      alert('Ingrese un nombre en los medicamentos')
    }else{
      $(this).prop( "disabled", true ).text('Guardando...')
      formData = {
      '_token':$("input[name$='_token']").val(),
      'pain': $("input[name$='dolorIsPresent']:checked").val(),
      'painLevel': $("#painRange").val(),
      'medicine':$("input[name$='medicamentos']:checked").val(),
      'medicineName': $("#medicineName").val(),
      'menstruation':$("input[name$='menstruacion']:checked").val()
      }
      $.ajax({
          url: "{{ route('registros.store') }}",
          type: "post",
          data: formData,
          success: function(d) {
            $('.circle').click();
            iziToast.show({
              theme: 'dark',
              icon: 'bi-journal-album',
              title: 'Registro Agregado',
              message: '',
              position: 'center'
            });
            $('#saveRegister').prop( "disabled", false ).text('Guardar')
          },
          // error: function(xhr, ){
          //   $(this).prop( "disabled", false ).text('Guardar')
          // }
      });
    }
    
  })
</script>
@endsection