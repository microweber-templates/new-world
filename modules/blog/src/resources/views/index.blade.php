<?php
$randId = uniqid();
?>

{!! $posts->scripts() !!}

<section class="section edit safe-mode nodrop" field="layout-blog-{{$randId}}" rel="content">

        <div class="row">
            <div class="col-lg-9 mx-lg-auto">
                <div class="section__block-title text-sm-center">
                    <h2>Blog</h2>
                    <p class="lead-text">This is the simple blog</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">{!! $posts->search() !!} </div>
            <div class="col-md-2">
                {!! $posts->limit(); !!}
            </div>
            <div class="col-md-2">
                {!! $posts->sort(); !!}
            </div>
        </div>



        {!! $posts->tags() !!}

        <div class="cards-wrap mx-lg-auto">

            {!! $posts->filters() !!}

            {!! $posts->filtersActive() !!}

            @php
                $i=0;
            @endphp
            @foreach($posts->results() as $post)
            @php
               $i++;
               $colorClass = 'color-red';
               if (($i % 3) == 0) {
                   $colorClass = 'color-green';
               }
               if (($i % 2) == 0) {
                   $colorClass = 'color-yellow';
               }
            @endphp

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 bg-transparent {{$colorClass}} rounded-0">
                    <div class="card-hover-block d-none d-lg-flex">
                        <div class="card-hover-block__body">
                            <h6>{{$post->title}}</h6>
                        </div>
                        <div class="card-hover-block__footer">
                            <a href="{{site_url($post->url)}}" class="card-link link">
                                {{ _e('More info') }}
                                <span class="link__arrow">
                                <svg width="6" height="11" viewBox="0 0 6 11" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z"
                                        fill="#000000"/>
                                </svg>
                            </span>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="d-block card-img-top rounded-0">
                        <img src="{{$post->thumbnail(650,400)}}" class="img-cover"
                             alt="">
                    </a>
                    <div class="card-body">
                        <div class="categories">
                            @php
                                $iTag=0;
                            @endphp
                            @foreach($post->tags as $tag)
                            @php
                                $iTag++;
                                $colorClass = 'red';
                                if (($iTag % 3) == 0) {
                                    $colorClass = 'green';
                                }
                                if (($iTag % 2) == 0) {
                                    $colorClass = 'yellow';
                                }
                            @endphp
                            <a href="?tags={{$tag->slug}}" class="categories__item categories__item--{{$colorClass}}">{{$tag->name}}</a>
                            @endforeach
                        </div>
                        <p class="card-text">{{$post->title}}</p>
                    </div>
                    <div class="card-footer border-0 bg-transparent rounded-0">
                        <div class="d-flex">
                            <span class="card-date">{{$post->posted_at}}</span>
                            <span class="card-location">
                                @php
                                    $location = $post->getCustomFieldValueByName('Location')
                                @endphp

                                @if($location)
                                {{ $location }}
                                @else
                                    {{ _e('Unknown') }}
                                @endif

                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="d-flex">
                <div class="mx-auto">
                {!! $posts->pagination() !!}
                </div>
            </div>

        </div>
    </div>
</section>
