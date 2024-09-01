<div class="border-bottom pb-3 mb-4">
    @isset($link)
        <div class="mb-3">
            {{ $link }}
        </div>
    @endisset

    <div class="d-flex justify-content-between">
        <div>
            <h1 class="h2 m-0">
                {{ $slot }}
            </h1>
        </div>

        @isset($right)
            <div>
                {{ $right }}
            </div>
        @endisset
    </div>
</div>

<x-errors />

{{-- use App\Models\Post;
use App\Models\User;
for ($i = 0; $i < 99; $i++){
    Post::query()->create([
        'user_id' => User::query()->value('id'),
        'title' => fake()->word(),
        'content' => fake()->sentence(),
        'price' => fake()->numberBetween($min = 5, $max = 100),
        'category_id' => fake()->numberBetween($min = 1, $max = 3),
        'published' => true,
        'created_at' => now(),
        'image_path' => 'storage/image/background.png',
        ]);
    }    --}}
