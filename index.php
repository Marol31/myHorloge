<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="style.css" rel="stylesheet" media="all" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">

			function afficherheure(){

			var a = new Date();
			var h = a.getHours();
			var m = a.getMinutes();
			var s = a.getSeconds();

			if(s<=9){

			$(document).ready(function(){

				$("#heure").html("<span>"+h+"</span>:<span>"+m+"</span>:<span>0"+s+"</span>");
			});

			}else if(m<=9){

			$(document).ready(function(){

				$("#heure").html("<span>"+h+"</span>:<span>0"+m+"</span>:<span>"+s+"</span>");
			});
			}else if(h<=9){

			$(document).ready(function(){

				$("#heure").html("<span>0"+h+"</span>:<span>0"+m+"</span>:<span>"+s+"</span>");
			});
			}else if(s<=9&&m<=9){

			$(document).ready(function(){

				$("#heure").html("<span>"+h+"</span>:<span>0"+m+"</span>:<span0>"+s+"</span>");
			});
			}else if(s<=9&&m<=9&&h<=9){

			$(document).ready(function(){

				$("#heure").html("<span>"+h+"</span>:<span>0"+m+"</span>:<span0>"+s+"</span>");
			});
			}else{

			$(document).ready(function(){

				$("#heure").html("<span>"+h+"</span>:<span>"+m+"</span>:<span>"+s+"</span>");
			});
			}



			setTimeout('afficherheure()', 1000);
		};

		</script>
</head>
<body onload="afficherheure();">

<main>
	<div id="affichage">
		<h1>MyHorloge</h1>
		<?php


$jours=array('dimanche','lundi','mardi','mercredi','jeudi','vendredi','samedi');
$mois=array('janvier','février','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre');

			// récupération du timestamp
			$dateCourante = time();
			$numeroJour = date("w",$dateCourante);
			$nomJour = $jours[$numeroJour];
			$numeroMois = date("n",$dateCourante);
			$nomMois = $mois[$numeroMois];
			$numeroJourMois = date("j",$dateCourante);
			$annee=date("Y",$dateCourante);
			echo "<div id='date'>Nous sommes le <br/>".$nomJour." ".$numeroJourMois." ".$nomMois." ".$annee."</div>";


?>

	</div>
	<div id="heure"></div>

</main>



</body>

</html>
