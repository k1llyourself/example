@extends('layouts.main')

@section('page.title', $post->title)

@section('main.content')

<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
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
            <button type="button" class="btn btn-success add-to-cart" data-product-id="{{ $post->id }}">
                {{__('Додати до кошика')}}
            </button>
        </div>
    </div>
</section>


<section class="post-show-text">
    <p>Сформувати замовлення можна за телефоном, Viber або через Facebook.</p>
    <p>Дізнатися більше можна на сторінці <a href="{{ route('contacts') }}">{{ __('Контакти')}}</a>.    </p> 
    <!-- Додайте тут ваше посилання або кнопку для оформлення замовлення -->
</section>
@if($similarPosts->count() > 0)
<section class="full-width-section">
    <div class="container">
        <h2>Схожі товари</h2>
        <div class="row row-cols-2 row-cols-md-4 g-4">
            @foreach ($similarPosts as $similarPost)
                <div class="col">
                    <div class="card wide-card mb-4">
                        @if($similarPost->image_path)
                            
                            <div class="image-container">
                                <img src="{{ Storage::url($similarPost->image_path) }}" class="card-img-top" alt="{{ $similarPost->title }}">
                            </div>
                        @endif
                        
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">
                                <a href="{{ route('home.show', $similarPost->id) }}" class="stretched-link text-decoration-none text-dark">
                                    {{ $similarPost->title }}
                                </a>
                            </h5>
                            <div class="d-flex justify-content-between align-items-center">
                            <p class="card-price m-0">
                                {{ number_format($similarPost->price, 2) }}
                                {{ $similarPost->unit }}
                            </p>
                            <button type="button" class="btn btn-link add-to-cart" data-product-id="{{ $similarPost->id }}" style="z-index: 3; padding-right: 0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-fill post-cart" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zm3.5 10.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm7 0a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                                </svg>
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
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

