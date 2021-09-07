@if ($hero_video)
<section class="mb-4">
    <div class="plyr__video-embed w-100" id="player">
        <iframe
            src="https://player.vimeo.com/video/{{ $hero_video }}?loop={{ get_field('hero_video_loop', 'option')  }}&amp;title=false&amp;gesture=media&amp;autoplay={{ get_field('hero_video_autoplay', 'option')  }}&amp;muted={{ get_field('hero_video_autoplay', 'option')  }}"
            allowfullscreen 
            allowtransparency 
            allow="autoplay">
        </iframe>
    </div>

    <div id="player" data-plyr-provider="vimeo" data-plyr-embed-id="76979871"></div>
</section>

@endif