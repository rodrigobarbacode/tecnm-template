$(".dropdown").hover(
  function () {
    $(this).find(".dropdown-menu").stop(true, true).delay(200).fadeIn();
  },
  function () {
    $(this).find(".dropdown-menu").stop(true, true).delay(200).fadeOut();
  }
);

$(".dropdown-menu").hover(
  function () {
    $(this).stop(true, true);
  },
  function () {
    $(this).stop(true, true).delay(200).fadeOut();
  }
);
