
<div class="card wide-card mb-4">
    @if($post->image_path)
        <div class="image-container">
            <img src="{{ Storage::url($post->image_path) }}" class="card-img-top" alt="{{ $post->title }}">
        </div>
    @endif
    <div class="card-body d-flex flex-column">
        <h5 class="card-title">
            <a href="{{ route('home.show', $post->id) }}" class="stretched-link text-decoration-none text-dark">
                {{ $post->title }}
            </a>
        </h5>
        <div class="d-flex justify-content-between align-items-center">
            <p class="card-price m-0">
                {{ number_format($post->price, 2) }} {{ $post->unit }}
            </p>
            <button type="button" class="btn btn-link add-to-cart" data-product-id="{{ $post->id }}" style="z-index: 3; padding-right: 0;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-fill post-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zm3.5 10.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm7 0a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                </svg>
            </button>
            
        </div>
    </div>
</div>

