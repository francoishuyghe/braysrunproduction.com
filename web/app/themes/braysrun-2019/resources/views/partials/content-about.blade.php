<section id="top">
    <div class="container">
        @include('partials.video')
        <div class="text h1">
            {{ $data['intro_text'] }}
        </div>
    </div>
</section>

<section id="intro">
    <div class="container">
        @php the_content() @endphp
    </div>
</section>

<section id="team">
        <div class="container">
    @if($data['team'])
        <div class="row">
            @foreach ($data['team'] as $teammember)
            <div class="team-member col-md-4 text-center">
                <img src="{{ $teammember['photo']['sizes']['medium'] }}"/>
                <h3>{{ $teammember['name'] }}</h3>
                <h6>{{ $teammember['title'] }}</h6>
            </div>
            @endforeach
        </div>
    @endif
    </div>
</section>

<section id="contact">
    <div class="container">
        <h2>Get in Touch</h2>
        {!! $data['contact'] !!}
    </div>
</section>
