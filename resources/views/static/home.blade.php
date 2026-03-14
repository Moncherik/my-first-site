@extends('static.layouts.main')

@section('header-title')
Главная страница
@endsection

@section('content')
<div class="hero">
    <div class="hero-matrix-bg">
        <div class="tenor-gif-embed" data-postid="23663949" data-share-method="host" data-aspect-ratio="0.94375" data-width="100%">
            <a href="https://tenor.com/view/matrix-gif-23663949">Matrix GIF</a>
        </div>
        <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
        <div class="hero-overlay"></div> </div>

    <div class="hero-content">
        <h1>Добро пожаловать</h1>
        <p>Учитесь, а иначе в жизни вас ждёт полное разочарование...</p>
        <a href="#" class="hero-btn">Начать</a>
    </div>
</div>

<!-- Добавляем этот контейнер-обертку -->
<div class="main-container">
    <main class="main-block">
        <h1>Home page</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab asperiores vitae tempora magnam error! Amet asperiores sunt vero, ipsa, molestias id atque rerum tenetur, qui et hic ullam inventore consequuntur.</p>
    </main>

    <!-- Твой сайдбар теперь внутри контейнера -->
    @include('includes.aside')
</div>
@endsection




