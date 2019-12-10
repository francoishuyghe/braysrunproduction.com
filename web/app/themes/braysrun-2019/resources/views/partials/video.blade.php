<video poster="{{ $video['poster'] }}" autoplay loop>
        <source src="{{ $video['video_mp4'] }}" type="video/mp4" />
        <source src="{{ $video['video_webm'] }}" type="video/webm" />
        <source src="{{ $video['video_ogv'] }}" type="video/ogv" />
</video>