<?php

session_start();
// SESSION JOB PHP



$_SESSION["email"]="test";
$_SESSION["time"] = time();
$_SESSION["password"] = "password";
$_SESSION["client_id"] = "";





class Sendmail extends CI_Controller {


///////////////////////// CODE A PLACER DANS LE CONTROLLER EXPORTER LES MAIL SELECTIONNER //////////////////////////

public function index()



{


}

/// CODE A REPLACER BIEN + TARD ///////////////////////














public function client_existe_verification()
{

  $this->load->helper('global');
  $this->load->model('client_model');

  $email = "admin@digitstudio.fr";
  $password = "test";
  $password = encrypt($password);

  echo $password;

  //echo $password;
  $tableau_donne_client = $this->client_model->connexion_client($email,$password);

  foreach($tableau_donne_client as $row)
  {

    // CLIENT EXISTE
    $valeur_final = $valeur_final . $row->email;
    echo $valeur_final;
  }


  // A CODER SESSION TEMPORAIRE DE 6 HEURE

}


///////////////////////////////////////////////////////////////////////////////////////

public function supprimer_un_client()

{

        $this->load->helper('global');
        $this->load->model('client_model');

        echo $this->client_model->supprimer_client(1);


}
public function TEST_AFFICHER_CLIENT()

{

      $valeur_final = "";
      $this->load->helper('global');
      $this->load->model('client_model');


  $valeur_base_donne_client = $this->client_model->afficher_base_client();
 foreach($valeur_base_donne_client as $row)
 {
   echo $row->nom;
   echo $row->client_id;


 }

}
public function CLIENT_TEST_CREATION()
{
  $this->load->helper('global');
  $this->load->helper('client');
  $this->load->model('client_model');

  //echo sortir_base_client();
  $test = generer_numero_client('entreprise');

   echo $test;

  $this->client_model->cree_client('',generer_numero_client('particulier'),encrypt('test'),'charles','jean','0771651588','admin@digitstudio.fr','59140','dunkerque','');


}
///////////////////////////////////////////////















public function TEST_encryptage()

// pour encrypt,decrypt
{

    $this->load->helper('global');
  echo encrypt("test");
  echo decrypt("eSpoQiUFZW2zwIzbPkF3ggdXKNYkwxRmX8n8R+Uvux6+3fISImBjUnPuVQ7OMwPYi+dfzRym8s+MhCqF85SDOw==");
}

///////////////////////////////

////////////////////////////////////////////////////////////////////////////////////
public function TEST2()
{


    // CODE EXEMPLE POUR INSCRIRE UN EMAIL NEWSLETTER MERCI DE BIEN AJOUTER SI POSSIBLE
    // des CHECK au code Securité et également de vérifier de bien passé un numéro INTEGER
    // et non un string


// INSCRIRE UN EMAIL DANS LA BASE DE DONNE MYSQL
    $this->load->model('newsletter_model');
    $this->newsletter_model->inserer_email_newsletter("1d@digitstudio.fr",1,1,1);
}
////////////////////////////////////////////////////////////////////////////////////




///////////////////////// CODE A PLACER DANS LE CONTROLER ////////////////////////////////////////
    public function TEST()
    {
// CODE EXEMPLE POUR ENVOYER UN MAIL VIA LE CONTROLLER
      $this->load->helper('mail');
      $source_origine = array('[NOM]','[PRENOM]','[MESSAGE]');
      $source_modifier = array('MARICHEZ','JEROME','Merci pour votre inscription');
      envoyer_mail("bienvenue_email.php","CABINET AVOCAT","admin@digitstudio.fr","admin@digitstudio.fr",$source_origine,$source_modifier);
// FIN
    }
//////////////////////////////////////////////////////////////////////////////////////////////////


}

?>
