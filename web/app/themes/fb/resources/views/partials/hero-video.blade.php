@if ($hero_video)
<section class="mb-4">
    <div class="plyr__video-embed w-100" id="player">
        <iframe
            src="https://player.vimeo.com/video/{{ $hero_video }}?loop=false&amp;title=false&amp;gesture=media"
            allowfullscreen allowtransparency>
        </iframe>
    </div>
</section>

@endif