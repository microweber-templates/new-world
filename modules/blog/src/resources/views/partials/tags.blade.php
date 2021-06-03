<?php
$randomId = uniqid();
?>

<div class="row">
    <div class="col-md-10 col-lg-9 mx-auto">
        <div class="filter-wrap text-sm-center">


            @php
                $i=0;
            @endphp
            @foreach($tags as $tag)
            @php
                $i++;
                $colorClass = 'red';
                if (($i % 3) == 0) {
                    $colorClass = 'green';
                }
                if (($i % 2) == 0) {
                    $colorClass = 'yellow';
                }
            @endphp

            <span class="js-filter-tag filter__item filter__item--{{$colorClass}} @if($tag->active) active @endif" data-slug="{{$tag->slug}}">{{$tag->name}}</span>
            @endforeach

        </div>
    </div>
</div>
