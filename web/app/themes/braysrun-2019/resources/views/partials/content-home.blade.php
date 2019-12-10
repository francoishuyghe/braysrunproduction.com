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
                    <h4>{{ the_field('type', $project->ID) }}</h4>
                    <h2>{{ $project->post_title }}</h2>
                </div>
            </header>

        <h3>Discover {{ $project->post_title }}</h3>
        <p>{{ the_field('blurb', $project->ID) }}</p>
        <a class="button" href="{{ the_permalink($project->ID) }}">See Project</a>
        </div>
    </div>
    @endforeach
</section>
