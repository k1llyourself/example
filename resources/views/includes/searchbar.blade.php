<div class="search-bar-container">
    <div class="container">
            <form action="{{ route('home') }}" method="GET" class="row align-items-center search-bar" style="margin-bottom: 0">
            <div class="search-bar-item col-4 col-md-4">
                <div class="mb-3">
                    <x-select name="category_id" :value="request('category_id')" :options="$categories"/>
                </div>
            </div>

                <div class="search-bar-item col-8 col-md-6">
                    <div class="mb-4">
                        <div class="d-flex" role="search">
                            <x-input class="form-control me-2" name="search" value="{{ request('search') }}" placeholder="{{ __('Пошук') }}" aria-label="Search" />
                            <button class="btn btn-success" type="submit">
                                {{ __('Знайти') }}
                                {{-- <img src="{{ Storage::url('stock/search1.png') }}" alt="Search" style="width: 24px; height: 24px;"> --}}
                            </button>
                        </div>
                    </div>
                </div>
                <div class="search-bar-item col-0 col-md-2">
                    <div class="cart-icon-container">
                        <div class="cart-details">
                            <span class="cart-items-count">{{ count(Session::get('cart', [])) }}</span>
                            <span class="cart-total-price">{{ number_format(array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], Session::get('cart', []))), 2) }} zł</span>
                            <a href="{{ route('cart.index') }}" class="cart-icon"> 
                                <img class="basket" src="{{ Storage::url('stock/basket.png') }}" alt="Basket" />
                                <span class="cart-items-count">{{ count(Session::get('cart', [])) }}</span>
                            </a>
                        </div>
                        
                    </div>
                </div>
                
                

            </form>


    </div>
</div>

    
<script>
    window.addEventListener('scroll', function() {
    const searchBar = document.querySelector('.search-bar-container');
    if (window.scrollY > 100) { // Прокрутили на 100px або більше
        searchBar.classList.add('show');
    } else {
        searchBar.classList.remove('show');
    }
});

</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productId = button.getAttribute('data-product-id');
            const basketImage = button.querySelector('img');

            // Додаємо товар до локального сховища
            const cart = JSON.parse(localStorage.getItem('cart')) || {};
            cart[productId] = (cart[productId] || 0) + 1; // Збільшуємо кількість
            localStorage.setItem('cart', JSON.stringify(cart));

            // Оновлюємо картинку
            if (basketImage) {
                basketImage.src = basketImage.getAttribute('data-after-src');
            }

            // Відправляємо запит на сервер для додавання товару до кошика
            fetch('{{ route("cart.add") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ product_id: productId })
            })
            .then(response => response.json())
            .then(data => {
                updateCartUI(data);
            })
            .catch(error => console.error('Error:', error));
        });
    });

    function updateCartUI(data) {
        console.log('Cart Data:', data); // Для відлагодження
        const cartItemsCountElements = document.querySelectorAll('.cart-items-count');
        const cartTotalPriceElement = document.querySelector('.cart-total-price');

        cartItemsCountElements.forEach(element => {
            element.textContent = data.item_count || 0;
        });
        

        if (cartTotalPriceElement) {
            cartTotalPriceElement.textContent = `${data.total_price || 0} zł`;
        }
    }
});

</script>
