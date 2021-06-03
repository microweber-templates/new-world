<?php
$randomId = uniqid();
?>
<div class="filters__item">
    <div class="filters__item-title" id="headingOne">
        @if($filter->isFirst)<h3>@else<h4>@endif
            <span class="filters__item-title-text js-filters-item-title"
                  role="button" data-toggle="collapse" data-target="#filters-item-{{$randomId}}"
                  aria-expanded="false" aria-controls="filters-item-{{$randomId}}">
                {{$filter->name}}
                <span class="filters__item-title-icon"></span>
            </span>
        @if($filter->isFirst)</h3>@else</h4>@endif
    </div>
    <div class="collapse show" id="filters-item-{{$randomId}}"
         aria-labelledby="headingOne" data-parent="#form-filters">
        <div class="filters__item-body">

            @foreach($filter->options as $options)
                @php
                    $randIdForCheck = uniqid();
                @endphp
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input js-filter-option-select" type="checkbox" id="{{$randIdForCheck}}" @if ($options->active) checked @endif name="filters[{{$filterKey}}][]" value="{{$options->value}}">
                        <label class="custom-control-label" for="{{$randIdForCheck}}">
                            {{ $options->value }}
                        </label>


                       {{-- @if ($options->active)
                            <div class="remove-control">
                                <a href="#" data-key="filters[{{$filterKey}}][]" data-value="{{$options->value}}" class="js-filter-picked"><i class="fa fa-times-circle"></i></a>
                            </div>
                        @endif--}}
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
