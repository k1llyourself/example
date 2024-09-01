@extends('layouts.main')

@section('page.title', 'Кошик Шкварка-Shop')

@section('main.content')
<h1 style="font-weight: bold; margin-bottom:20px;">Кошик</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(empty($cart))
<div class="empty-cart-container">
    <div class="empty-cart-message">
        <h3>Ваш кошик порожній</h3>
        <a href="{{ route('home') }}" class="btn btn-success">{{ __('Повернутися на головну') }}</a>
    </div>
</div>
@else
    <div id="cart-container" class="cart-items-container">
        @foreach($cart as $item)
            <div class="cart-item" data-item-id="{{ $item['id'] }}">
                <div class="cart-image-container">
                    <div class="cart-item-image">
                        @if(isset($item['image_path']) && $item['image_path'])
                            <img src="{{ Storage::url($item['image_path']) }}" alt="{{ $item['title'] }}">
                        @else
                            <p>Зображення не доступне</p>
                        @endif
                    </div>
                </div>
                    
                <div class="cart-item-details">
                    <h3 class="cart-item-title">
                        <a href="{{ $item['id'] }}" class="text-decoration-none text-dark">
                            {{ $item['title'] }}
                        </a>
                        
                    </h3>
                    <div class="cart-item-row">
                        <span class="cart-item-price">{{ number_format($item['price'], 2) }} {{ $item['unit'] }}</span>
                        <input type="number" value="{{ $item['quantity'] }}" min="1" class="quantity-input" data-item-id="{{ $item['id'] }}">
                    </div>
                    <div class="cart-item-row">
                        <span>Сума:</span>
                        <span class="cart-item-total">{{ number_format($item['price'] * $item['quantity'], 2) }} zł</span>
                    </div>
                </div>
                <div class="remove-container">
                    <button type="button" class="btn-remove" data-item-id="{{ $item['id'] }}">
                        <i class="bi bi-trash3-fill"></i>
                    </button>
                </div>
                
            </div>
        @endforeach

        
        
    </div>
    <section class="post-show-text">
        <p>Сформувати замовлення можна за телефоном, Viber або через Facebook.</p>
        <p>Дізнатися більше можна на сторінці <a href="{{ route('contacts') }}">{{ __('Контакти')}}</a>.    </p> 
        <!-- Додайте тут ваше посилання або кнопку для оформлення замовлення -->
    </section>
@endif
@endsection




<script>
document.addEventListener('DOMContentLoaded', function() {
    // Обробка зміни кількості
    document.querySelectorAll('.quantity-input').forEach(input => {
        input.addEventListener('change', function() {
            const itemId = this.getAttribute('data-item-id');
            const quantity = this.value;

            fetch(`{{ route('cart.update', '') }}/${itemId}`, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ quantity: quantity })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Оновлення суми для конкретного рядка
                    const cartItem = this.closest('.cart-item');
                    const price = parseFloat(cartItem.querySelector('.cart-item-price').innerText.replace(' zł', ''));
                    const total = price * quantity;
                    cartItem.querySelector('.cart-item-total').innerText = total.toFixed(2) + ' zł';

                    // Оновлення загальної ціни кошика
                    updateCartUI(data);
                } else {
                    console.error('Failed to update quantity');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });

    // Обробка видалення товару
    document.querySelectorAll('.btn-remove').forEach(button => {
        button.addEventListener('click', function() {
            const itemId = this.getAttribute('data-item-id');

            fetch(`{{ route('cart.remove', '') }}/${itemId}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Видалення рядка
                    const cartItem = document.querySelector(`.cart-item[data-item-id="${itemId}"]`);
                    cartItem.remove();

                    // Перевірка, чи кошик порожній після видалення
                    if (document.querySelectorAll('.cart-item').length === 0) {
                        location.reload(); // Перезавантаження сторінки, якщо кошик порожній
                    } else {
                        // Оновлення інтерфейсу кошика
                        updateCartUI(data);
                    }
                } else {
                    console.error('Failed to remove item');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });

    function updateCartUI(data) {
        const cartItemsCountElements = document.querySelectorAll('.cart-items-count');
        const cartTotalPriceElement = document.querySelector('.cart-total-price');
        const cartTotalPriceMobileElement = document.querySelector('.cart-total-price-mobile');
        // Оновлення лічильника унікальних товарів
        cartItemsCountElements.forEach(element => {
            element.textContent = data.unique_item_count || 0;
        });

        if (cartTotalPriceElement) {
            cartTotalPriceElement.textContent = `${data.total_price || 0} zł`;
        }
        if (cartTotalPriceMobileElement) {
            cartTotalPriceMobileElement.textContent = `${data.total_price || 0} zł`;
        }
    }
});

</script>