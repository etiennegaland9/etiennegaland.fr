$(document).ready(function () {
  // animation au-dessus du header :
  $(".clickDown").click(function () {
    $("h1").animate({ fontSize: "20rem" }, 3000).css({ color: "white" });
  });
  $(".clickDown").click(function () {
    $(".clickDown").animate({ fontSize: "0" }, 1000);
  });
  $(".clickDown").click(function () {
    $(".clickUp").animate({ fontSize: "2.5rem" }, 3000).css({ color: "white" });
  });

  $('a[href^="#"]').click(function () {
    let home = $(this).attr("href");
    if (home === "#") {
      return;
    }
    $("html, body").animate(
      {
        scrollTop: $(home).offset().top,
      },
      1000
    );
    return false;
  });
});
