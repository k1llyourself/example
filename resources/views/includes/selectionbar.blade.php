<div class="selectionbar">
    <ul class="selectionbar-menu">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" id="categoryDropdown">Категорії</a>
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