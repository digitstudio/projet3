<?php
// Des fonction en vracs qui peuvent etre utile dans plein de petit contexte




// CREE LE TITRE HTML
function titre_page_html()
{
 return "A.G.D.Z Avocat - Espace Client";

}


// GENERE LES LIENS DU SITE
function site_link_base($chemin = "")
{

  switch ($chemin) {
    case "js":
        $ma_page_home = "http://agdzavocat.ddns.net:8080/projet3/application/assets/js/"; // CHEMIN JAVASCRIPT
        break;
    case "img":
        $ma_page_home = "http://agdzavocat.ddns.net:8080/projet3/application/assets/images/"; // CHEMIN IMAGES
        break;
    case "upload":
          $ma_page_home = "http://agdzavocat.ddns.net:8080/projet3/uploads/"; // CHEMIN IMAGES
          break;

    case "login":
        $ma_page_home = "http://agdzavocat.ddns.net:8080/projet3/backend/login/"; // PATH TO LOGIN
        break;
    case "css":
        $ma_page_home = "http://agdzavocat.ddns.net:8080/projet3/application/assets/css/"; // CHEMIN CSS
        break;
    case "video":
        $ma_page_home = "http://agdzavocat.ddns.net:8080/projet3/application/assets/video/"; // CHEMIN VIDEO
        break;

    case "js_front":
                $ma_page_home = "http://agdzavocat.ddns.net:8080/projet3/application/assets/front/js/"; // CHEMIN JAVASCRIPT
                break;
    case "img_front":
                $ma_page_home = "http://agdzavocat.ddns.net:8080/projet3/application/assets/front/images/"; // CHEMIN IMAGES
                break;
    case "css_front":
                $ma_page_home = "http://agdzavocat.ddns.net:8080/projet3/application/assets/front/css/"; // CHEMIN CSS
                break;

    default:
        $ma_page_home = "http://agdzavocat.ddns.net:8080/projet3/uploads/"; // CHEMIN URL UPLOAD

                    }
  return $ma_page_home;
}




// Retourner texte responsive avec une taille max pour un titre menu
function texte_responsive($value1,$value2,$taillemax)
{
    $taillemax = intval($taillemax) - 3; // On récupere la taille max
    $calcul = strlen($value1);
    $calcul = $calcul + strlen($value2);
      if ($calcul < $taillemax)
      {
        return $value1.' '.$value2;
      }
      else
      {
         $value1 = substr($value1,0,$taillemax - 3);
         $value1 = $value1.'...';
         return $value1;
      }

}

// RETOURNE LA DATE OU HEURE UNIQUEMENT DEPUIS DATETIME MYSQL
function date_formater($myvalue,$format)
{
$datetime = new DateTime($myvalue);

$data = $datetime->format($format);

return $data;
}



// EXPORTER UN FICHIER TEXTE DEPUIS UN STRING
function exporter_vers_fichier_texte($notre_texte,$nom_fichier)
{

  header('Content-type: text/plain');


  header('Content-Disposition: attachment; filename="'.$nom_fichier.'"');

  print($notre_texte);


}

// GENERER UN NOM DE FICHIER ALEATOIRE AVEC SON EXTENSION EN PARAMETRE (ex: .TXT,.JPG,.PNG)
function random_nom_fichier($extension_file)
{
  $nom_fichier = "Fichier_";
  $random_nom_fichier = hash('sha512', session_id().microtime($nom_fichier)); // On hash ce même nom pour le rendre unique.
  $nom_du_fichier_final = $nom_fichier.$random_nom_fichier . $extension_file; // On crée le nom du fichier avec l'extension
  return $nom_du_fichier_final;
}



// ENCRYPTER UNE DONNEE
function encrypt($value,$key = '45',$iv='1234567824546542')
{
  $plaintext = $value;
  $ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
// todo IV specifique pour pouvoir decrypter, une solution plus securise serait de egalement stocker le IV dans une base de donnée externe à chaque encryptage afin davoir des IV uniques
  $ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
  $hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
  $ciphertext = base64_encode( $iv.$hmac.$ciphertext_raw );

return $ciphertext;
}



// DECRYPTER UNE DONNEE
function decrypt($value,$key = '45',$iv='1234567824546542')
{
  $c = base64_decode($value);
  $ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
// todo IV specifique pour pouvoir decrypter, une solution plus securise serait de egalement stocker le IV dans une base de donnée externe à chaque encryptage afin davoir des IV uniques
  $hmac = substr($c, $ivlen, $sha2len=32);
  $ciphertext_raw = substr($c, $ivlen+$sha2len);
  $original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
  $calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
  if (hash_equals($hmac, $calcmac))//PHP 5.6+ timing attack
  {
      return $original_plaintext;
  }
}







?>
