@props(['post' => null, 'categories' => []])

<link rel="stylesheet" href="https://unpkg.com/easymde/dist/easymde.min.css">
<script src="https://unpkg.com/easymde/dist/easymde.min.js"></script>


<form action="{{ $post ? route('user.posts.update', $post->id) : route('user.posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($post)
        @method('PUT')
    @endif

    <!-- Назва товару -->
    <x-form-item>
        <x-label  required>{{ __('Назва товару') }}</x-label>
        <x-input class="new-form-control" name="title" value="{{ old('title', $post->title ?? '') }}" autofocus />
    </x-form-item>

    <!-- Ціна -->
    <x-form-item>
        <x-label required>{{ __('Ціна') }}</x-label>
        <x-input class="new-form-control" type="number" name="price" value="{{ old('price', $post->price ?? '') }}" />
    </x-form-item>

    <x-form-item>
        <x-label>{{ __('Одиниця виміру') }}</x-label>
        <select class="new-form-control" name="unit" class="form-control">
            <option value="zł/шт" {{ old('unit', $post->unit ?? '') == 'zł/шт' ? 'selected' : '' }}>zł/шт</option>
            <option value="zł/кг" {{ old('unit', $post->unit ?? '') == 'zł/кг' ? 'selected' : '' }}>zł/кг</option>
        </select>
    </x-form-item>
    <x-form-item>
        <x-label>{{ __('Опис (необов\'язково)') }}</x-label>
        <textarea id="editor" style="width: 100%; min-height: 200px;" name="content">{{ old('content', $post->content ?? '') }}</textarea>
    </x-form-item>
        
   

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var easyMDE = new EasyMDE({ element: document.getElementById("editor") });
        });
    </script>

<!-- Вибір категорії для товару -->
<x-form-item>
    <x-label>{{ __('Категорія') }}</x-label>
    <select class="new-form-control" id="category_id" name="category_id">
        @foreach($categories as $id => $name)
            <option value="{{ $id }}" {{ old('category_id', $post->category_id ?? '') == $id ? 'selected' : '' }}>{{ $name }}</option>
        @endforeach
    </select>
</x-form-item>

<!-- Додавання нової категорії -->
<x-form-item>
    <x-label>{{ __('Додати нову категорію') }}</x-label>
    <input type="text" id="category-name" class="form-control" placeholder="Назва категорії">
    <button  type="button" class="btn btn-primary mt-2" onclick="addCategory()">Додати категорію</button>
</x-form-item>

<!-- Видалення категорії -->
<x-label>{{ __('Видалити категорію') }}</x-label>
<x-form-item>
    <select class="new-form-control" id="category-to-delete">
        @foreach($categories as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
    <button type="button" class="btn btn-danger mt-2" onclick="deleteCategory()">Видалити категорію</button>
</x-form-item>

    
    <!-- Зображення товару -->
    <x-form-item>
        <x-label>{{ __('Зображення товару') }}</x-label>
        <x-input class="new-form-control" type="file" name="image" accept="image/*" />
    </x-form-item>

    
    @if ($post && $post->image_path)
    <div style="position: relative; display: inline-block;">
        <!-- Мініатюра головного зображення -->
        <img src="{{ asset('storage/' . $post->image_path) }}" alt="Головне зображення" style="width: 100px; height: auto; border: 1px solid #ddd; border-radius: 4px;">
    @else
        <p>Головне зображення відсутнє.</p>
    @endif
        </div>

    
    <div>
        <label for="additional_images">Додаткові зображення (необов'язково)</label>
        <x-input class="new-form-control" type="file" name="additional_images[]" multiple />
    </div>

    <!-- Перевірка на наявність зображень -->
    @if ($post && $post->images && $post->images->count() > 0)
        <div style="display: flex; gap: 10px; flex-wrap: wrap; padding-top: 10px">
            @foreach ($post->images as $image)
                <div style="position: relative; display: inline-block;" id="image-{{ $image->id }}">
                    <!-- Мініатюра зображення -->
                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="Додаткове зображення" style="width: 100px; height: auto; border: 1px solid #ddd; border-radius: 4px;">

                    <!-- Кнопка видалення -->
                    <button type="button" onclick="removeImage('{{ $image->id }}')" style="position: absolute; top: 0; right: 0; background-color: red; color: white; border: none; cursor: pointer; padding: 0 5px">×</button>
                    
                    <!-- Поле для видалення -->
                    <input type="checkbox" name="remove_additional_images[]" value="{{ $image->id }}" style="display: none;" id="remove-{{ $image->id }}">
                </div>
            @endforeach
        </div>
    @else
        <p>Зображення відсутні.</p>
    @endif

    <!-- Додавання нових зображень -->
    



    <script>
        function removeImage(imageId) {
            // Встановлюємо чекбокс у видалення при натисканні кнопки
            document.getElementById('remove-' + imageId).checked = true;
            document.getElementById('image-' + imageId).style.display = 'none'; // Сховати зображення
        }

        
    </script>

    <p class="small text-muted">Додайте до 4 додаткових зображень</p>
    <!-- Опубліковано -->
    <x-form-item>
        {{ __('Опубліковано') }}
        <x-checkbox name="published" :checked="old('published', $post->published ?? true)" />
    </x-form-item>

    <p class="small text-muted">Якщо галочка прибрана, то на сайті товар не показається</p>

    <div class="d-flex justify-content-between">
        <x-button type="submit" class="btn btn-primary" style="padding: 10px; width: 100%; font-weight: bold; border-radius: 3px;">
            {{ __('Зберегти') }}</x-button>
    </div>

    


</form>



<script>
    function addCategory() {
        const categoryName = document.getElementById('category-name').value;
        
        if (!categoryName) {
            alert('Будь ласка, введіть назву категорії.');
            return;
        }

        fetch('{{ route('categories.store') }}', {
            method: 'POST',
            body: JSON.stringify({ name: categoryName }),
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            }
        })
    }

</script>

<script>
function deleteCategory() {
    const categoryId = document.getElementById('category-to-delete').value;
    
    if (!categoryId) {
        alert('Будь ласка, виберіть категорію для видалення.');
        return;
    }

    if (!confirm('Ви впевнені, що хочете видалити цю категорію?')) {
        return;
    }

    fetch('{{ route('categories.destroy', ':id') }}'.replace(':id', categoryId), {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Перезавантажити сторінку після успішного видалення
            location.reload();
        } else {
            alert('Помилка при видаленні категорії.');
        }
    })
    .catch(error => {
        console.error('Помилка:', error);
        alert('Помилка при видаленні категорії.');
    });
}

</script>