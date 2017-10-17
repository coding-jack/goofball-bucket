{{--
  Template Name: Media Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="row pt-5 mt-5">
      <div class="col">
        @include('partials.page-header')
        {!! get_field('intro_textarea') !!}
      </div>
    </div>

    <div class="row py-5">
      <div class="col">
        @php
          $images = get_field('image_gallery');
        @endphp
        <div class="image-slider">
          @foreach($images as $image)
            <div class="image-slide">
              <img class="img-fluid" src="{!! $image['url'] !!}">
              <div class="text-center">
                {!! $image['caption'] !!}
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    @if(have_rows('videos'))
      <div class="row py-5">
        <div class="col">
          <div class="video-slider">
            @while (have_rows('videos')) @php(the_row())
              <div class="video-slide">
                <div class="embed-responsive embed-responsive-16by9">
                  {!! the_sub_field('video') !!}
                </div>
              </div>
            @endwhile
          </div>
        </div>
      </div>
    @endif
    @include('partials.content-page')
  @endwhile
@endsection
