export default {
  init() {
    // JavaScript to be fired on the about us page

    //Trailer controls
    $('.trailer-btn').click(function () {
      $('.trailer-player').addClass('active');

      //Play the video
      let $iframe = $('.trailer-player iframe');
      $iframe.attr('src', $iframe.attr('og-src'));
    });

    $('.trailer-player').click(function () {
      $(this).removeClass('active');

      //Stop the video
      let $iframe = $('iframe', this);
      $iframe.attr('src', '');

    });
  },
};
