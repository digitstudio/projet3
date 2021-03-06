<?php


class Rendezvous_model extends CI_Model

{





  public function update_rendezvous($id,$statut)
  {

    $data = array(
            'statut' => $statut
    );

    $this->db->where('id', $id);
    $this->db->update('rendezvous', $data);

    $this->db->close();
  }


// COUNT RENDEZ VOUS
    public function count_rendezvous($formation ='',$email ='')
    {
        $this->db->from('rendezvous');

          if (!empty($formation)) {
            $this->db->where('formation',$formation);
          }
          if (!empty($email)) {
            $this->db->where('email',$email);
          }

        $combien = $this->db->count_all_results();
        return intval($combien);
    }




        // RECUPERER ET AFFICHER LA BASE DE DONNES DES RENDEZ VOUS ET FORMATION

  public function afficher_rendezvous($typerendezvous,$email = '')
    {


      if($email == '')
      {
      $requete_resultat = $this->db->get('rendezvous');
      }
      else
      {
      $requete_resultat = $this->db->where('email', $email);
      $requete_resultat = $this->db->get('rendezvous');
      }

      return $requete_resultat->result();
      $this->db->close();



    }

    public function cree_rendezvous_front($id = 'NULL',$client_id = 'NULL',$nom,$prenom,$tel,$email,$code_postale,$ville,$adresse,$date,$cabinet)

     {

      // $date = date("Y-m-d H:i:s"); // Certain type de date ne sont pas admis dans MYSQL ce format fonctionne en effet si le champ est DATE TIME
       $data = array(
         'id'=>$id,
         'client_id'=> $client_id, // QUI SERA EGALE A LID DU CLIENT CREE OU NON
         'nom'=>$nom,
         'prenom'=>$prenom,
         'tel'=>$tel,
         'email'=>$email,
         'code_postale'=>$code_postale,
         'ville'=>$ville,
         'adresse'=>$adresse,
         'date'=> $date,
         'cabinet'=>$cabinet,
         'statut'=>'en-attente'
       )
         ;
       //$this->load->database(); PLUS BESOIN CAR AUTOLOAD DE LA DATABASE DANS CONFIG
       $this->db->insert('rendezvous',$data);

       $this->db->close();
      }


      //SUPPRIMER UN RENDEZ VOUS AVEC SON ID
      public function supprimer_rendezvous($id = "erreur")
      {


        if ($id == "erreur")
        {
         return $id;
        }
        else
        {

          $this->db->delete('rendezvous', array('id' => $id));
          $this->db->close();
          return $id;
        }


      }


}




?>
