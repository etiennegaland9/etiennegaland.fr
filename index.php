<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EGwebdev</title>

  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <link rel="icon" type="image/png" href="favicon.png" />
  <link rel="stylesheet" type="text/css" href="asset/css/index.css?refresh=<?php echo rand(2, 200) ?>" />
  <link rel="stylesheet" type="text/css" href="asset/css/liens.css" />
  <link rel="stylesheet" type="text/css" href="asset/css/header.css" />
  <link rel="stylesheet" type="text/css" href="asset/css/reseaux.css" />
  <link rel="stylesheet" type="text/css" href="asset/css/footer.css" />
</head>

<body>
  <div class="switchStyle">
    <ul>
      <li id="black">black style</li>
      <li id="white">white style</li>
      <li id="initial">initial style</li>
    </ul>
  </div>

  <div class="firstEffect" id="firstEffect">
    <div class="welcom">
      <h1>Bienvenue</h1>
      <p class="clickDown">Cliquez ici</p>
      <p class="clickUp"><a href="#navbar">Cliquez ici pour continuer</a></p>
    </div>
  </div>

  <header id="home">

    <div class="reseaux" id="reseaux">
      <ul>
        <li id="facebook">
          <a href="https://www.facebook.com/etienne.galand.370" target="blank">
            <img src="./Img/reseaux/logoFB.PNG" alt="facebook" /></a>
        </li>
        <li id="linkedin">
          <a href="https://www.linkedin.com/in/etienne-galand-89774b190/" target="blank">
            <img src="./Img/reseaux/logoLN.PNG" alt="linkedin" /></a>
        </li>
        <li id="indeed">
          <a href="https://my.indeed.com/p/etienneg-pfgp4i5" target="blank">
            <img src="./Img/reseaux/logoID.PNG" alt="indeed" /></a>
        </li>
        <li id="github">
          <a href="https://github.com/etiennegaland9" target="blank">
            <img src="./Img/reseaux/logoGH.PNG" alt="github" /></a>
        </li>
      </ul>
    </div>

    <div class="liens" id="liens">
      <ul>
        <li><a href="#home"><div class="arrow">&#x002C6;</div></a></li>
        <li><a href="#home">Home</a></li>
        <li><a href="#realisations">Projets</a></li>
        <li><a href="#cv">CV</a></li>
        <li><a href="#infos">Parcours</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#endPage"><div class="arrow">&#x002C7;</div></a></li>
      </ul>
    </div>

    <nav id="navbar">
      <div class="branding">
        <img src="./Img/EG20200621.GIF" alt="photo de moi" />
        <div class="brand">Etienne GALAND</div>
      </div>
    </nav>

    <div class="citation">
      <div class="EN">
        <p>
          "The three chief virtues of a programmer are: Laziness, Impatience
          and Hubris."
        </p>
        <p class="wall">Larry Wall</p>
      </div>
      <div class="FR">
        <p>
          <i>"Les trois principales vertus d'un programmeur sont: la paresse,
            l'impatience et l'orgueil."</i>
        </p>
        <p class="wall">Larry Wall</p>
      </div>
    </div>

  </header>
  <hr />
  <div class="container">
    <div id="realisations">
      <h2>Mes réalisations :</h2>
      <ul class="prod">
        <li>
          <div>
            <img src="./Img/Logo.fan2minecraft.PNG" alt="Réalisation du site fan2minecraft" />
          </div>
          <p>
            Site internet de la communauté<br />
            <strong><a href="#" target="_blank" rel="noopener noreferrer">fan2minecraft</a></strong>
          </p>
          <p>rassemble les fans du jeu minecraft</p>
          <p>exercice de formation</p>
        </li>
        <hr />
        <li>
          <div>
            <img src="./Img/Le_Merveilleux.JPG" alt="Réalisation du site Le Merveilleux" />
          </div>
          <p>
            Site internet du restaurant<br />
            <strong><a href="https://github.com/etiennegaland9" target="_blank" rel="noopener noreferrer">Le Merveilleux</a></strong>
          </p>
          <p>restaurant et brasserie gastronomique</p>
          <p>exercice de formation</p>
        </li>
        <hr />
        <li>
          <div>
            <img src="./Img/Logo_header.JPG" alt="Réalisation du site Les Baskets Qui Marchent" />
          </div>
          <p>
            Site internet de la société<br />
            <strong><a href="#" target="_blank" rel="noopener noreferrer">Les Baskets Qui Marchent</a></strong>
          </p>
          <p>vente en ligne de baskets de marques</p>
          <p>exercice de formation</p>
        </li>
      </ul>
    </div>
    <hr />
    <div id="cv">
      <h2>Mon CV :</h2>
      <nav>
        <div>
          <h3>FORMATIONS</h3>
          <ul class="training">
            <li>
              2020 : Formation "Développeur web & web mobile"<br />
              &#160; &#8618; AFPA Marseille<br />
            </li>
            <hr />
            <li>
              2001 - 2002 : Formation "Comptable d'entreprise"<br />
              &#160; &#8618; AFPA Dunkerque<br />
            </li>
            <hr />
            <li>
              1996 - 1998 : Etudes supérieures "Carrières sociales"<br />
              &#160; &#8618; IUT Lille III
            </li>
          </ul>
        </div>
        <div>
          <h3>PROFIL</h3>
          <ul class="profil">
            <li>Développeur web & web mobile</li>
            <hr />
            <li>Développeur Front-end</li>
            <hr />
            <li>Développeur Back-end</li>
          </ul>
        </div>
        <div>
          <h3>EXPERIENCES</h3>
          <ul class="experiences">
            <li>
              2007 à 2019 : Contrôleur de gestion<br />
              &#160; &#8618; Kaufman & Broad, promoteur immobilier<br />
            </li>
            <hr />
            <li>
              2004 à 2007 : Compable<br />
              &#160; &#8618; SAGEFI, administration de bien<br />
            </li>
            <hr />
            <li>
              2003 : Comptable<br />
              &#160; &#8618; Finances Partenaires Innovation, courtage
              financier
            </li>
          </ul>
        </div>
        <div>
          <h3>COMPÉTENCES</h3>
          <ul class="skills">
            <li>
              <img src="./Img/logosdev/logoHTML5.PNG" alt="HTML5" />
            </li>
            <li>
              <img src="./Img/logosdev/logoCSS3.PNG" alt="CSS3" />
            </li>
            <li>
              <img src="./Img/logosdev/logoJS.PNG" alt="JavaScript" />
            </li>
            <li>
              <img src="./Img/logosdev/logoJQuery.PNG" alt="JQuery" />
            </li>
            <li>
              <img src="./Img/logosdev/logoPHP.PNG" alt="PHP" />
            </li>
            <li>
              <img src="./Img/logosdev/logoSQL.PNG" alt="SQL" />
            </li>
            <li>
              <img src="./Img/logosdev/logoSCRUM.PNG" alt="méthode SCRUM" />
            </li>
            <li>
              <img src="./Img/logosdev/logoWP.PNG" alt="CMS Wordpress" />
            </li>
            <li>
              <img src="./Img/logosdev/logoPS.PNG" alt="CMS Prestashop" />
            </li>
          </ul>
        </div>
        <div>
          <h3>DIPLÔMES</h3>
          <ul class="diplomas">
            <li>Attestation formation développeur web et web mobile</li>
            <hr />
            <li>Attestation formation comptable d'entreprise</li>
            <hr />
            <li>DUT sciences sociales</li>
          </ul>
        </div>
      </nav>
    </div>
    <hr />
    <div id="infos">
      <h2>Mon parcours :</h2>
      <article>
        <section>
          <p>
            Né et grandi dans les Hauts-de-france, je débute ma carrière dans
            des professions orientées dans le domaine social et plus
            particulièrement l'animation sociale et socio-culturelle.
          </p>
        </section>
        <img src="./Img/perseverance.JPG" alt="S. JOHNSON" />
        <section class="sud">
          <div>
            <p>
              Mon aventure professionnelle se poursuit, au début des années
              2000, dans le sud de la France. Tout d'abord à Toulouse, où
              j'entreprends une formation pour devenir comptable d'entreprise.
            </p>
            <p>
              En 2007, le promoteur immobilier Kaufman & Broad m'offre la
              possibilité d'intégrer son univers; tout d'abord en tant que
              comptable, puis, montrant ma motivation et ma persévérance,
              j'évolue vers un poste de contrôleur de gestion.
            </p>
            <p>
              En 2019, j'ai l'opportunité d'accéder à un domaine qui me
              paraissait jusqu'alors inaccessible :
              <strong>le développement web</strong>.
            </p>
          </div>
          <img src="./Img/perseverance.JPG" alt="SAMUEL JOHNSON" />
        </section>
        <section>
          <p>
            La programmation est un domaine qui m'a toujours attiré, et ce,
            depuis la fin des années 90. Je l'ai un peu délaissé pour y
            revenir aujourd'hui.
          </p>
        </section>
        <section>
          <p>Quelle aventure passionnante !</p>
        </section>
      </article>
    </div>
    <hr />
    <div id="contact">

      <h2>Pour me contacter :</h2>

      <h3>veuillez utiliser le formulaire ci-dessous</h3>

      <form action="ma-page-de-traitement.php" method="post" enctype="multipart/form-data">
        <div>
          <label for="lastname">Nom :</label>
          <input type="text" id="lastname" name="lastname" minlength="2" maxlength="30" required />
        </div>
        <div>
          <label for="firstname">Prénom :</label>
          <input type="text" id="firstname" name="firstname" minlength="2" maxlength="30" required />
        </div>
        <div>
          <label for="mail">e-mail :</label>
          <input type="email" id="mail" name="mail" required />
        </div>
        <div>
          <label for="msg">Message :</label>
          <textarea id="msg" name="message" maxlength="500" required></textarea>
        </div>
        <div class="button">
          <button type="submit">Envoyer le message</button>
        </div>
      </form>
    </div>

  </div>

  <div id="returnTop">
    <a href="#home"><img src="./Img/arrow.SVG" /></a>
  </div>

  <footer>
    <hr />
    <div class="endPage" id="endPage">
      <div>&copy; 2020 &#45; contact@etiennegaland.fr</div>
      <div><a href="./mentionsLegales.php">Mentions légales</a></div>
      <div class="networks">
        <ul>
          <li><a href="https://www.facebook.com/etienne.galand.370" target="blank">
              <img src="./Img/reseaux/logoFB.PNG" alt="facebook" /></a></li>
          <li><a href="https://www.linkedin.com/in/etienne-galand-89774b190/" target="blank">
              <img src="./Img/reseaux/logoLN.PNG" alt="linkedin" /></a></li>
          <li><a href="https://my.indeed.com/p/etienneg-pfgp4i5" target="blank">
              <img src="./Img/reseaux/logoID.PNG" alt="indeed" /></a></li>
          <li><a href="https://github.com/etiennegaland9" target="blank">
              <img src="./Img/reseaux/logoGH.PNG" alt="github" /></a></li>
        </ul>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
  <script src="./asset/js/index.js"></script>
  <script src="./asset/js/header.js"></script>
</body>

</html>