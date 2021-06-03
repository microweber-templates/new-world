<div class="col-lg-8 filters-selected-wrap d-none d-md-inline-block">
    <div class="filters-selected">

        <span class="filter-picked clear-all js-filter-reset">{{_e('Clear all')}}</span>

        @foreach($filtersActive as $filter)
            <span data-key="{{$filter->key}}" data-value="{{$filter->value}}" class="filter-picked js-filter-picked">{{$filter->name}} </span>
        @endforeach

    </div>
</div>
