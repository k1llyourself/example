<div class="row">
    <div class="col-12 col-md-4">
        <div class="mb-3">
            <x-select name="category_id" value="{{ request('category_id')}}" 
            :options="$categories"
            />
        </div>
    </div>

    
    <div class="col-12 col-md-8">
        <div class="mb-3">
            <div class="d-flex" role="search">
                <x-input class="form-control me-2" name="search" value="{{request('search')}}" placeholder="{{__('Пошук')}}" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">{{__('Знайти')}}</button>
            </div>
        </div>
    </div>

</div>