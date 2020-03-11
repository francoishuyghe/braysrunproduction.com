<section id="top">
    <div class="container">
        @include('partials.video')
    </div>
</section>

<section id="intro">
    <div class="container">
        <div class="blurb h1">
            @php the_content() @endphp
        </div>
        <a href="/about" class="button">About Us</a>
    </div>
</section>

<section id="projects">
    @foreach ($portfolio as $project)
    <div class="project">
        <div class="container">
            <header style="background-image: url({{ get_the_post_thumbnail_url($project->ID, 'large') }})">
                <div class="wrap">
                    <h5>{{ the_field('type', $project->ID) }}</h5>
                    <a href="{{ the_permalink($project->ID) }}">
                        <h2>{{ $project->post_title }}</h2>
                    </a>
                </div>
            </header>

            <div class="text">
                {{-- <h5>Discover {{ $project->post_title }}</h5> --}}
                <p class="h1">{{ the_field('blurb', $project->ID) }}</p>
                <a class="button" href="{{ the_permalink($project->ID) }}">See Project</a>
            </div>

            @php $images = get_field('landing_page_photos', $project->ID) @endphp
            @if($images)
            <div class="images">
                <div class="row">
                    @foreach ($images as $image)
                        <div class="col-md-4">
                            <img src="{{ $image['sizes']['medium'] }}" />
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
    @endforeach
</section>
