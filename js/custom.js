(function ($) {
  "use strict";

  // NAVBAR
  $(".navbar-nav .nav-link").click(function () {
    $(".navbar-collapse").collapse("hide");
  });

  //Footer Image

  var footerImgsrc = $(".footer-image > img").attr("src");
  $("footer").css("background-image", "url(" + footerImgsrc + ")");

  // Header Video

  // var vidHidden = $("a[href$='.mp4']");
  // var vidHiddenUrl = vidHidden.attr("href");

  // var headerVid = $("#ctaVideo source");
  // var headerVidUrl = headerVid.attr("src", vidHiddenUrl);

  // headerVidUrl = vidHiddenUrl;
  // console.log(headerVidUrl);
  // console.log($("#ctaVideo source").attr("src"));
  // $("#ctaVideo source").attr("src", vidHidden.attr("href")).load();

  $(".category-tag > a").addClass(
    "category-tag bg-danger text-decoration-none p-0 m-0"
  );

  $(".menu-item > a").addClass("fs-5 ms-3 me-3 text-center");
  $(".vcard > img").addClass("rounded-circle");

  $("#comment").addClass("form-control");

  $("#submit").removeClass("submit").addClass("form-control");
})(window.jQuery);
