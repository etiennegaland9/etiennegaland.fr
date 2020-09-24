$(document).ready(function () {
  // cache le bouton à l'ouverture de la page :
  $("#firstEffect").hover(function () {
    $("#returnTop").hide();
  });
  // bouton de remontée en haut de page :
  $(function () {
    $(window).scroll(function () {
      //Fonction appelée quand on descend la page
      if ($(this).scrollTop() > 1800) {
        // Quand on est à 2000pixels du haut de page,
        $("#returnTop").show(); // Fait apparaitre le bouton
      } else {
        $("#returnTop").hide(); // Fait disparaitre le bouton
      }
    });
  });

  // hide les boutons reseaux sur l'animation d'accueil :
  $("#firstEffect").hover(function () {
    $("#reseaux").hide();
  });
  $(window).scroll(function () {
    posScroll = $(document).scrollTop();
    if (posScroll >= 930) $("#reseaux").fadeIn(930);
    else $("#reseaux").fadeOut(930);
  });
  // hide les liens balises sur l'animation d'accueil :
  $("#firstEffect").hover(function () {
    $("#liens").hide();
  });
  $(window).scroll(function () {
    posScroll = $(document).scrollTop();
    if (posScroll >= 930) $("#liens").fadeIn(930);
    else $("#liens").fadeOut(930);
  });

  // pour les boutons proposant de changer le style de la page :
  $("#white").click(function () {
    $("body").css("color", "black").css("background-color", "white");
    $(".firstEffect").css(
      "background-image",
      "url(./asset/css/Compfight07_.jpg"
    );
  });
  $("#black").click(function () {
    $("body").css("color", "white").css("background-color", "black");
    $(".firstEffect").css(
      "background-image",
      "url(./asset/css/background-1.jpg"
    );
  });
  $("#initial").click(function () {
    $("body").css("color", "white").css("background-color", "rgb(40, 39, 49)");
    $(".firstEffect").css(
      "background-image",
      "url(./asset/css/Compfight08_.jpg"
    );
  });
});
