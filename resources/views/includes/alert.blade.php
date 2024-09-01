@if($alert = session()->pull('alert'))
    <div class="alert alert-success mb-0 rounded-0 text-center medium py-2">
        {{ $alert }}
    </div>
@endif