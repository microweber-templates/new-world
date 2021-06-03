<?php
$randomId = uniqid();
?>

<div class="filters__item">
    <div class="filters__item-title" id="headingFour">
        @if($filter->isFirst)<h3>@else<h4>@endif
            <span class="filters__item-title-text js-filters-item-title"
                  role="button" data-toggle="collapse" data-target="#filters-item-{{$randomId}}"
                  aria-expanded="false" aria-controls="filters-item-{{$randomId}}">
                {{$filter->name}}
                <span class="filters__item-title-icon"></span>
            </span>
            @if($filter->isFirst)</h3>@else</h4>@endif
    </div>
    <div class="collapse show" id="filters-item-{{$randomId}}" aria-labelledby="headingFour" data-parent="#form-filters">
        <div class="filters__item-body">

            <div id="js-filter-option-datepicker{{$randomId}}"></div>

            <script>
                filter.addDateRangePicker({
                    id: 'js-filter-option-datepicker{{$randomId}}',
                    fromDate: '{{$filter->fromDate}}',
                    toDate: '{{$filter->toDate}}',
                });
            </script>

        </div>
    </div>
</div>
