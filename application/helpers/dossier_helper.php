<?php




function generer_numero_dossier()
{

    $valeur_generation_numero = rand(100000, 900000);
    return $valeur_generation_numero;
}


function retourner_statut_icon($string)

  // NECESSITE FONT AWESOME CHARGER POUR FONCTIONER
{
   switch($string){

   case "en-attente":
   $string = '<i class="fas fa-history fa-2x"></i>';
   break;

   case "valide":
   $string = '<i class="fas fa-check fa-2x"></i>';
   break;

   case "piece":
   $string = '<i class="fas fa-exclamation-triangle fa-2x"></i>';
   break;

   default:
   $string = '<i class="fas fa-history fa-2x"></i>';


    }

  return $string;
}



?>
