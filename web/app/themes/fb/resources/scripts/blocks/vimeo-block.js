import Plyr from 'plyr';

const videos = $('.un-video');

videos.each(function(){
  new Plyr($(this), {
    captions: {
      active: true,
    },
  });
});


