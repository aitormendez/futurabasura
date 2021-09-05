{{--
  Title: Plyr
  Description: Incrusta un video con Plyr
  Category: embed
  Icon: controls-play
  Keywords: video vimeo youtube
  Mode: edit
  Align: center
  PostTypes: story proyect page
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: true
  EnqueueStyle: styles/vimeo-block.css
  EnqueueScript: scripts/vimeo-block.js
--}}

<div class="contenedor plyr-block my-4 {{ $block['classes'] }}">
	<div class="un-video" otra-cosa="{{ get_field('video_provider') }}" data-plyr-provider="{{ get_field('video_provider') }}" data-plyr-embed-id="{{ get_field('vimeo_id') }}"></div>
</div>
