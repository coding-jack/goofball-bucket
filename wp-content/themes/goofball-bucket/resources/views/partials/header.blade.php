  <nav class="navbar navbar-expand-lg navbar-dark bg-faded fixed-top">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
  <a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      {!!
     wp_nav_menu([
       'theme_location'  => 'primary_navigation',
       'container'       => 'div',
       'container_id'    => 'bs4navbar',
       'container_class' => 'collapse navbar-collapse',
       'menu_id'         => false,
       'menu_class'      => 'navbar-nav ml-auto',
       'depth'           => 2,
       'fallback_cb'     => 'bs4navwalker::fallback',
       'walker'          => new bs4navwalker()
     ]);
      !!}
   </nav>
{{-- <div class="container">

  <nav class="nav-primary text-center">

    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => , 'menu_class' => 'nav']) !!}
    @endif
  </nav>
</div> --}}
