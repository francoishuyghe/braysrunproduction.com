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
            @foreach ($data['team'] as $teammember)
            <div class="team-member">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ $teammember['photo']['sizes']['medium'] }}"/>
                    </div>
                    <div class="col-md-8">
                <h3>{{ $teammember['name'] }}</h3>
                @if($teammember['title'])
                    <h6>{{ $teammember['title'] }}</h6>
                @endif
                {!! $teammember['bio'] !!}
                    </div>
                </div>
            </div>
            @endforeach
    @endif
    </div>
</section>

<section id="contact">
    <div class="container">
        <h2>Get in Touch</h2>
        {!! $data['contact'] !!}
    </div>
</section>
