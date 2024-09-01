@extends('layouts.user')
@section('page.title', 'Перегляд товарів Шкварка-Shop')
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
@section('user.content')


    <h1 style="font-weight: bold; color: black; margin: 10px;" >Перегляд</h1>




    <section class="post-show">
        @if($post->images->count() > 0) <!-- Перевіряємо, чи є додаткові зображення -->
        <div class="post-images-sidebar">
            <div class="small-image-container">
                <!-- Головне зображення у сайдбарі з можливістю натискання -->
                <div class="small-image-wrapper">
                    <img src="{{ Storage::url($post->image_path) }}" alt="{{ $post->title }}" class="small-image main-image" onclick="changeMainImage('{{ Storage::url($post->image_path) }}')">
                </div>
        
                <!-- Додаткові зображення -->
                @foreach($post->images as $image)
                    @if($image->image_path !== $post->image_path)
                        <div class="small-image-wrapper">
                            <img src="{{ asset('storage/' . $image->image_path) }}" alt="Додаткове зображення" class="small-image" onclick="changeMainImage('{{ asset('storage/' . $image->image_path) }}')">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        @endif  
    
        @if($post->image_path)
            <div class="post-show-img-container">
                <!-- Додано стрілочки для перемикання зображень -->
                @if($post->images->count() > 0)
                <i class="bi bi-chevron-left arrow-left" onclick="prevImage()"></i>
                <i class="bi bi-chevron-right arrow-right" onclick="nextImage()"></i>
                @endif
    
                <!-- Додано id="main-image" для зміни зображення -->
                <img id="main-image" class="post-show-img" src="{{ Storage::url($post->image_path) }}" alt="{{ $post->title }}">
            </div>
        @endif
    <div class="post-show-inf">
        <h1>{{$post->title}}</h1>
        <p>{{$post->price}} {{$post->unit}}</p>
        
        @if(!empty($post->content))
        <section class="post-show-content">
            <div id="content-markdown" style="display: none;">{!! $post->content !!}</div>
            <div id="content-html"></div>
        </section>
        @endif
        <script>
           document.getElementById('content-html').innerHTML = marked.parse(document.getElementById('content-markdown').innerText);

        </script>

        <div class="add-to-cart-container">
            <a  href="{{ route('user.posts.edit', $post->id) }}" type="button" class="btn btn-success add-to-cart" >
                {{__('Змінити')}}
            </a>
        </div>
        <div class="small text-muted" style="text-align: right;">
            {{ now()->format('d.m.Y H:i:s') }}
        </div>
    </div>
</section>

<script>
    function changeMainImage(imageUrl) {
        // Знаходимо головне зображення за id і змінюємо його атрибут src
        document.getElementById('main-image').src = imageUrl;
    }
</script>


<script>
    let currentIndex = 0;
    const images = Array.from(document.querySelectorAll('.small-image'));
    const mainImage = document.getElementById('main-image');
    
    function updateMainImage(index) {
        if (images[index]) {
            mainImage.src = images[index].src;
        }
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateMainImage(currentIndex);
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        updateMainImage(currentIndex);
    }

    // Ініціалізуємо основне зображення
    updateMainImage(currentIndex);
</script>

@endsection


