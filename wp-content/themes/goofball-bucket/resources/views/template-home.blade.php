{{--
  Template Name: Home Template
--}}

@extends('layouts.fluid')

@section('content')
  @while(have_posts()) @php(the_post())
    @php
      $hero = get_field('hero');
    @endphp
    <div class="row hero" {!! App\bg_image($hero['url']) !!}>
      <div class="col">

        {{-- <img class="img-fluid py-5" src="{!! $hero['url'] !!}"> --}}
      </div>
    </div>
    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <script charset="utf-8" src="https://widget.bandsintown.com/main.min.js"></script><a class="bit-widget-initializer" data-artist-name="goofball bucket" data-display-local-dates="false" data-display-past-dates="true" data-auto-style="false" data-text-color="#000000" data-link-color="#2F95DE" data-popup-background-color="#FFFFFF" data-background-color="#FFFFFF" data-display-limit="15" data-link-text-color="#FFFFFF"></a>
          </div>
          <div class="col-sm-12 col-md-6">
            @php
              $midContent = get_field('mid_content');
            @endphp
            {!! the_field('mid_content') !!}
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        @php
          $images = get_field('image_gallery_1');
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

  @endwhile
@endsection
