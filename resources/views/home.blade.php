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

            <div class="form-group">
              <label>¿Presentó dolor?  </label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="dolorIsPresent" id="inlineRadio1" value="si">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="dolorIsPresent" id="inlineRadio2" value="no" checked>
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </div>

            <div class="form-group dolorLevel" style="display:none;margin-top:5%;">
              <label>Nivel de dolor</label>
              <input type="range" class="form-range" min="0" max="10" step="1" id="customRange3">
            </div>

            <div class="form-group" style="margin-top:5%;">
              <label>¿Tomó medicamentos?  </label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="medicamentos" value="si">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="medicamentos" value="no" checked>
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </div>

            <div class="form-group medicamento" style="display:none;margin-top:5%;">
              <label for="exampleInputPassword1">Medicamento</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre medicamento">
            </div>
            <div class="form-group" style="margin-top:5%;">
              <label>Menstruación  </label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="menstruacion" value="si">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="menstruacion" value="no" checked>
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </div>
            <div style="margin-top:5%;">
              <button type="submit" class="btn btn-primary" style="width:100%">Guardar</button>
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
    console.log('Working')
  })

  $("input[name$='dolorIsPresent']").click(function() {
        var test = $(this).val();
        if(test=='si'){
          $(".dolorLevel").show();
        }else{
          $(".dolorLevel").hide();
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

</script>
@endsection