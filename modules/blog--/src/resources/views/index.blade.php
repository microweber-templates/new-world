{!! $posts->scripts() !!}


<div class="container">
<div class="row">
    <div class="col-lg-12 mx-auto">
        <div class="row">

            <div class="col-md-3">
                <div class="card">

                    {!! $posts->filtersActive() !!}

                    {!! $posts->search() !!}

                    {!! $posts->tags() !!}

                    {!! $posts->categories() !!}

                    {!! $posts->filters() !!}

                </div>
            </div>

        </div>

             <div class="row new-world-news">

             @if(empty($posts->results()))
                {{_e('No results for this criteria.')}}
             @endif


                 @php $i=0; @endphp
            @foreach($posts->results() as $post)
                     @php $i++; @endphp
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>00" itemscope="" itemtype="http://schema.org/Article">
                <div class="post-holder">
                    <a href="{{site_url($post->url)}}" itemprop="url">
                        <div class="thumbnail-holder">
                            <div class="tags">
                                @foreach($post->tags as $tag)
                                <span class="badge badge-primary">{{$tag->name}}</span>
                                @endforeach
                            </div>

                            <div class="thumbnail" style="background: url('{{$post->thumbnail(400,400)}}')">
                                <!--<img src="{{$post->thumbnail(400,400)}}"/>-->
                            </div>
                        </div>
                    </a>

                    <a href="{{site_url($post->url)}}"><h3 class="m-b-10">{{$post->title}}</h3></a>

                    <small>{{$post->created_at}}</small>

                    <a href="{{site_url($post->url)}}" itemprop="url" class="button-8 m-t-20"><span>{{_e('Read more')}}</span></a>
                </div>
            </div>
            @endforeach
            </div>

             {!! $posts->pagination() !!}

        </div>
</div>
</div>
