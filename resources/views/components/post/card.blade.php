<x-card>
    <x-card-body>
        <div class="mb-4">
            <h5>
                <a href="{{route('home.show', $post -> id)}}">
                    {{$post -> title}}

                </a>
            </h5>
        </div>
        <div class="meddium">
            {{ __("zl")}}
        </div>
    </x-card-body>
</x-card>



