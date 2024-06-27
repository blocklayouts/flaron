jQuery(document).ready(function ($) {
  // AJAX call to dismiss the notice
  $(".notice.is-dismissible").on("click", ".notice-dismiss", function () {
    var data = {
      action: "flaron_dismiss_notice",
      nonce: welcome_notice_params.welcome_notice_security,
    };
    $.post(welcome_notice_params.ajaxurl, data);
  });
});
