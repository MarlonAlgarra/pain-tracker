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

    <div class="effect"></div>
  
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
        document.querySelector(".box").classList.remove("box-show");
        document.querySelector(".add").classList.toggle("go");
        document.querySelector(".search").classList.toggle("search-focus");
        document.querySelector(".search").focus();
        document.querySelector(".circle").classList.toggle("color");
        document.querySelector(".line1").classList.toggle("move");
        document.querySelector(".line2").classList.toggle("mov");
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
@endsection