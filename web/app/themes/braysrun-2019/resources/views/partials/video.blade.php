<div class="video-wrap">
        <video poster="{{ $video['poster'] }}" autoplay loop muted playsinline>
                <source src="{{ $video['video_mp4'] }}" type="video/mp4" />
                <source src="{{ $video['video_webm'] }}" type="video/webm" />
                <source src="{{ $video['video_ogv'] }}" type="video/ogv" />
        </video>

        @if (isset($data['trailer']))
        @php 
        $iframe = $data['trailer'];
          preg_match('/src="(.+?)"/', $iframe, $matches);
          preg_match("/src='(.+?)'/", $iframe, $othermatches);
          $src = $matches[1];
          if (!$src) {
            $src = $othermatches[1];
          }
          $cleanedsrc = explode('?', $src);
          // add extra params to iframe src
          $new_src = $cleanedsrc[0] . '?autoplay=1';
          $iframe = str_replace($src, $new_src, $iframe);
          $iframe = str_replace('src', 'og-src', $iframe);
          // add extra attributes to iframe html
          $attributes = 'frameborder="0"';
          $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
        @endphp

        <div class="trailer-btn"><i class="fal fa-play"></i></div>
        <div class="trailer-player">
                <div class="trailer-wrap">
                        <div class="player-wrap">{!! $iframe !!}</div>
                </div>
        </div>
        @endif
</div>
