<article {{ post_class() }} >
<section id="top">
    @include('partials.video')
</section>

  <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    <div class="row">
      <div class="col-6">
        @php next_post_link( '%link', '<i class="fal fa-arrow-left"></i> Previous Episode' ) @endphp
      </div>
      <div class="col-6 next">
        @php previous_post_link( '%link', 'Next Episode <i class="fal fa-arrow-right"></i>' ) @endphp
      </div>
    </div>
  </footer>
</article>
