@extends('static.layouts.main')

@section('header-title')
Контакты
@endsection

@section('content')
@if ($errors->any())
  <div class="block-error">
    <ul>
      @foreach ($errors->all() as $err )
        <li>{{ $err }}</li>      
      @endforeach
    </ul>
  </div>
@endif
@if(session('success'))
    <div class="alert alert-success" style="background: #28a745; color: white; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
        {{ session('success') }}
    </div>
@endif
<div class="main-container">
  <div class="main-block">
    <h1>Contact page</h1>
      <form action="{{ route('contact') }}" method="POST">
        @csrf 
        <label for="name">Имя</label>
        <input type="text" placeholder="Введите имя" name="name" id="name">
        <label for="email">Email</label>
        <input type="text" placeholder="Введите ваш email" name="email" id="email">
        <label for="subject">Тема сообщения</label>
        <input type="text" placeholder="Введите тему" name="subject" id="subject">
        <label for="message">Текст</label>
        <textarea name="message" id="message" placeholder="Введите сообщение"></textarea>
        <button type="submit">Отправить</button>
        </form>
  </div>
</div>
@include('includes.aside')
  @endsection
