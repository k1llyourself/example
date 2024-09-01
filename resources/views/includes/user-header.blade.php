<nav class="navbar navbar-expand-md" id="mainNavbar">
    <div class="container-fluid">

        <a href="{{route('login.store')}}" class="navbar-brand">
            ШКВАРКА-SHOP
        </a>



        <div class="container">
            <form action="{{ route('user.posts') }}" method="GET" class="row align-items-center search-bar" style="margin-bottom: 0">
                
                <div class="search-bar-item col-8 col-md-8">
                    <div>
                        <div class="input-group">
                            <!-- Лупа зліва -->
                            <button class="input-group-text search-icon-btn" type="submit">
                                <i class="bi bi-search" type="submit"></i>
                            </button>
                            <x-input class="form-control  search-input" name="search" value="{{ request('search') }}" placeholder="{{ __('Пошук') }}" aria-label="Search" />
                        </div>
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
                        <a href="{{ route('user.posts', ['category_id' => $category_id]) }}">
                            {{ $category_name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li>
            <a href="{{ route('home') }}" class="nav-link">
                {{ __('Сторінка перегляду') }}
            </a>
        </li>

        <li>
            <a href="{{route('login.store')}}" class="nav-link">
                {{ __('Редактор товарів') }}
            </a>
        </li>

        <li>
            <a href="{{ route('user.posts.create') }}" class="nav-link">
                {{ __('Додати товар') }}
            </a>
        </li>

        <li>
            <form action="{{ route('logout') }}" method="POST" style="padding: 0; margin: 0;">
                @csrf
                <button type="submit" class="btn btn-link nav-link">Вихід</button>
            </form>
        </li>
    </ul>



    <div class="burger-menu">
        <span class="burger-icon"><i class="bi bi-list"></i></span>
    </div>
    
    <form action="{{ route('user.posts') }}" method="GET" class="col-10 search-bar-sidebar" style="margin: 0">
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
                        <a href="{{ route('user.posts', ['category_id' => $category_id]) }}">
                            {{ $category_name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li>
            <a href="{{ route('home') }}" class="nav-link">
                {{ __('Сторінка перегляду') }}
            </a>
        </li>

        <li>
            <a href="{{route('login.store')}}" class="nav-link">
                {{ __('Редактор товарів') }}
            </a>
        </li>

        <li>
            <a href="{{ route('user.posts.create') }}" class="nav-link">
                {{ __('Додати товар') }}
            </a>
        </li>

        <li>
            <form action="{{ route('logout') }}" method="POST" style="font-size: 18px; padding: 4px 20px; color:black">
                @csrf
                <button type="submit" class="btn btn-link nav-link">Вихід</button>
            </form>
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
