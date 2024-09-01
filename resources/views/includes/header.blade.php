<nav class="navbar navbar-expand-md" id="mainNavbar">
    <div class="container-fluid">

        <a href="{{ route('home') }}" class="navbar-brand">
            ШКВАРКА-SHOP
        </a>

        <!-- Кошик для мобільної версії -->
        <!-- Кошик для мобільної версії -->
<div class="cart-icon-container-mobile d-md-none">
    <a href="{{ route('cart.index') }}" class="cart-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-cart-fill basket" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zm3.5 10.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm7 0a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
        </svg>
        <div class="cart-badge">
            <i class="bi bi-circle-fill"></i>
            <span class="cart-items-count">
                {{ count(Session::get('cart', [])) }}
            </span>
        </div>
       
    </a>
    <span class="cart-total-price-mobile" style="font-weight: bold;">{{ number_format(array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], Session::get('cart', []))), 2) }} zł</span>
</div>


        <div class="container">
            <form action="{{ route('home') }}" method="GET" class="row align-items-center search-bar" style="margin-bottom: 0">
                
                <div class="search-bar-item col-8 col-md-8">
                    <div>
                        <div class="input-group">
                            <!-- Лупа зліва -->
                            <button class="input-group-text search-icon-btn" type="submit">
                                <i class="bi bi-search" type="submit"></i>
                            </button>
                            <x-input class="search-input" name="search" value="{{ request('search') }}" placeholder="{{ __('Пошук') }}" aria-label="Search" />
                        </div>
                    </div>
                </div>
                
                <div class="search-bar-item col-4 col-md-4 d-none d-md-block" style="text-align: right;">
                    <div class="cart-icon-container">
                        <a href="{{ route('cart.index') }}" class="cart-icon"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-cart-fill basket" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zm3.5 10.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm7 0a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                            </svg>
                            <div class="cart-badge">
                                <i class="bi bi-circle-fill"></i>
                                <span class="cart-items-count">
                                    {{ count(Session::get('cart', [])) }}
                                </span>
                            </div>
                        </a>
                        <span class="cart-total-price" style="font-weight: bold;">{{ number_format(array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], Session::get('cart', []))), 2) }} zł</span>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</nav>




<div class="selectionbar">
    <ul class="selectionbar-menu">
        <li class="dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="categoryDropdown">Категорії</a>
            <ul class="dropdown-menu">
                @foreach($categories as $category_id => $category_name)
                    <li>
                        <a href="{{ route('home', ['category_id' => $category_id]) }}">
                            {{ $category_name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li>
            <a href="{{ route('home') }}" class="nav-link">
                {{ __('Головна') }}
            </a>
        </li>
        <li>
            <a href="{{ route('about-us') }}" class="nav-link">
                Про нас
            </a>
        </li>
        <li>
            <a href="{{ route('contacts') }}" class="nav-link">
                Контакти
            </a>
        </li>
    </ul>



    <div class="burger-menu">
        <span class="burger-icon"><i class="bi bi-list"></i></span>
    </div>
    
    <form action="{{ route('home') }}" method="GET" class="col-10 search-bar-sidebar" style="margin: 0">
        <div class="search-bar-sidebar col-12 col-md-8">
            <div class="mb-3">
                <div class="input-group">
                   
                    <button class="input-group-text search-icon-btn" type="submit">
                        <i class="bi bi-search" type="submit"></i>
                    </button>
                    <x-input class="form-control-sidebar  search-input" name="search" value="{{ request('search') }}" placeholder="{{ __('Пошук') }}" aria-label="Search" />
                </div>
            </div>
        </div>  
    </form>
    

    
    
    
    
       
            
</div>

<div class="sidebar" id="customSidebar">
        
    <div class="sidebar-header">
        <a href="{{ route('home') }}" class="navbar-brand">
            ШКВАРКА-SHOP
        </a>
        <span class="close-icon" id="customCloseIcon">&times;</span>
    </div>
    <ul class="custom-sidebar-menu">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" id="customCategoryDropdown">Категорії</a>
            <ul class="custom-dropdown-submenu" id="customCategoryMenu">
                @foreach($categories as $category_id => $category_name)
                    <li>
                        <a href="{{ route('home', ['category_id' => $category_id]) }}">
                            {{ $category_name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li>
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') && !request()->has('category_id') ? 'active' : '' }}">
                {{ __('Головна') }}
            </a>
        </li>
        <li>
            <a href="{{ route('about-us') }}" class="nav-link {{ request()->routeIs('about-us') ? 'active' : '' }}">
                Про нас
            </a>
        </li>
        <li>
            <a href="{{ route('contacts') }}" class="nav-link {{ request()->routeIs('contacts') ? 'active' : '' }}">
                Контакти
            </a>
        </li>
    </ul>

    
</div>

<script>
document.querySelector('.burger-icon').addEventListener('click', function() {
    var sidebar = document.getElementById('customSidebar');
    sidebar.classList.add('open');
});

document.getElementById('customCloseIcon').addEventListener('click', function() {
    var sidebar = document.getElementById('customSidebar');
    sidebar.classList.remove('open');
});

document.addEventListener("DOMContentLoaded", function() {
    var categoryDropdown = document.getElementById("customCategoryDropdown");
    var categoryMenu = document.getElementById("customCategoryMenu");

    categoryDropdown.addEventListener("click", function(event) {
        event.preventDefault();  // Запобігає переходу по посиланню
        categoryMenu.classList.toggle("open");
    });
});





</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categoryDropdown = document.getElementById('categoryDropdown');
        const dropdownMenu = categoryDropdown.nextElementSibling;

        categoryDropdown.addEventListener('click', function (event) {
            event.preventDefault();
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });

        document.addEventListener('click', function (event) {
            if (!categoryDropdown.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.style.display = 'none';
            }
        });
    });
</script>



<script>
window.addEventListener('scroll', function() {
    const navBar = document.querySelector('.navbar');
    if (window.scrollY > 134) { // Прокрутили на 100px або більше
        navBar.classList.add('show');
    } else {
        navBar.classList.remove('show');
    }
});

window.addEventListener('scroll', function() {
    const selectionBar = document.querySelector('.selectionbar');
    if (window.scrollY > 134) { // Прокрутили на 100px або більше
        selectionBar.classList.add('show');
    } else {
        selectionBar.classList.remove('show');
    }
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function () {
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
        const cartTotalPriceMobileElement = document.querySelector('.cart-total-price-mobile');

        cartItemsCountElements.forEach(element => {
            element.textContent = data.item_count || 0;
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