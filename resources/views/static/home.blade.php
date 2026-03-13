@extends('static.layots.main')

@section('header-title')
Главная страница
@endsection

@section('content')
<div class="hero">
  <div class=""hero-overlay">
    <h1>Добро пожаловать</h1>
    <p>Учитесь</p>
    <a href="#" class="hero-btn">Начать</a>
  </div>
</div>
<h1>Home page</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab asperiores vitae tempora magnam error! Amet asperiores sunt vero, ipsa, molestias id atque rerum tenetur, qui et hic ullam inventore consequuntur.</p>
@include('includes.aside')
  @endsection


