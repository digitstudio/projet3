<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="<?php echo site_link_base("css_front");?>fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo site_link_base("css_front");?>DCLigne.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>A.G.D.Z - DCLigne</title>
</head>
<body>


	<div class="container-fluid">
		<nav class="navbar">

				<div class="reso">

	           <i class="fab fa-youtube"></i>&nbsp;&nbsp;
	           <i class="fab fa-linkedin"></i>&nbsp;&nbsp;
	           <i class="fab fa-facebook-square"></i>&nbsp;&nbsp;
	           <i class="fas fa-rss-square"></i>&nbsp;&nbsp;
	        </div>
	        <!-- <div class="row">
	        	<div class="numero">
					<h8>+33 04 78 78 78</h8>

				</div>
				<div class="adresse">
					<h9 >agdavocats@contact.fr</h9>
				</div>
	        </div> -->

				<nav class="navbar navbar-expand-lg">
					<div class="numero">
					<h8>+33 04 78 78 78</h8>

				</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<div class="adresse">
					<h9 >agdavocats@contact.fr</h9>
				</div>

 				 </nav>
					<div class="user">
						<a href="<?php echo site_url('/backend/login'); ?>">	<i class="fas fa-user-circle"></i></a>
					</div>

	        </nav>
	        <div class="container">
	        	<div class="row">
       	<div class="col-md-12" id="log">
	  <a href="<?php echo site_url('/'); ?>">	<img src="<?php echo site_link_base("img_front");?>logo-bleu.png"></a>

	</div>

       </div><br><br>

</div>
</div>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php   $this->load->view('front/menu_front'); ?>
  </div>
</nav><br><br>





</div>


	 <div class="container">
	<div class="demande"><h5>Demande de consultation en ligne</h5></div>
<br>


		<form method="" action="">
			<div class="row">
		<div class="col-md-6">
			<div class=" devis row">
				<div class="col-md-12">
                       <button type="button" class="btn btn btn-lg btn-block">Vous êtes ?</button>
				</div>
			</div><br>
			<form method="" action="">
			<div class=" devis1 row">

					<div class="col-sm-3">
						<input type="text" name="particulier" required="text" placeholder="Particulier">
					</div>
					<div class="col-sm-3">
						<input type="text" name="particulier" required="text" placeholder="Entreprise">
					</div>
					<div class="col-sm-3">
						<input type="text" name="particulier" required="text" placeholder="Collectivité">
					</div>
					<div class="col-sm-3">
						<input type="text" name="particulier" required="text" placeholder="Etablissement">
					</div>


			</div><br>
			<div class=" devis2 row">

					<div class="col-md-6">
						<div class="input-group mb-3">
	                       <input type="text" class="form-control" placeholder="Nom" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">

						</div>
					</div>
					<div class="col-md-6">
						<div class="input-group mb-3">
	                       <input type="text" class="form-control" placeholder="Prenom" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">

						</div>
					</div>

			</div>
			<div class="devis2 row">

					<div class="col-md-12">
						<div class="input-group mb-3">
	                       <input type="tel" class="form-control" placeholder="Telephone" aria-label="Recipient's username" aria-describedby="basic-addon2" required="tel">

						</div>
					</div>

			</div>
			<div class="devis2 row">

					<div class="col-md-12">
						<div class="input-group mb-3">
	                       <input type="email" class="form-control" placeholder="Adresse mail" aria-label="Recipient's username" aria-describedby="basic-addon2" required="email">

						</div>
					</div>
			</div>
			<div class="devis2 row">

					<div class="col-md-12">
						<div class="input-group mb-3">
	                       <input type="text" class="form-control" placeholder="Adresse postale" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">

						</div>
					</div>
			</div>
			<div class="devis2 row">
				<div class="col-md-6">
					<div class="input-group mb-3">
                       <input type="number" class="form-control" placeholder="Code postal" aria-label="Recipient's username" aria-describedby="basic-addon2" required="number">

					</div>
				</div>
				<div class="col-md-6">
					<div class="input-group mb-3">
                       <input type="text" class="form-control" placeholder="Ville" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p>Une page web contient du texte et des images, mais aussi un certain nombre d'éléments très fréquents : listes,
						tableaux, formulaires, icônes, boutons. Créer une harmonie dans la présentation de tous ces éléments n'est pas une
						tâche aisée.
						Nous allons voir comment Bootstrap permet de créer un rendu visuel cohérent pour que tous ces éléments
						cohabitent de façon esthétique.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
           <div class=" row">
           	 <div class="col-md-10">
           	 	<div class="  input-group mb-3">
					  <select class="choix  custom-select" id="inputGroupSelect02">
					    <option selected>Votre demande concerne...</option>
					    <option value="1">Un</option>
					    <option value="2">Deux</option>
					    <option value="3">Trois</option>
					    <option value="3">Quatre</option>
					  </select>

				</div>
           	 </div>
           </div>
           <div class="row">
           	<div class="col-md-12">
           	<form class="tArea">
  <div class="mb-3">

    <textarea class="ask form-control" id="" placeholder="Posez vos questions" ></textarea>

  </div>

           	</div>
           </div>

           	  <div class="buto">
           	  	<button type="button" class="btn btn-dark" id="conct">VALIDER</button>
           	  </div>
           </div>
		</div>


		</form>


	        </div>
	</div>

















	        </div>

</div>
<div class="container-fluid">
<footer>
	<style type="text/css">
		footer{
          background-color: #0f02bc;
	color: white;
	margin-top: 10px;
	padding-top: 10px;
	padding-bottom: 5px;
	font-size: 20px;
	text-align: center;
		}
		footer a{
	color:#fff;
	font-size: 10px;
	margin-left: 8px;
	display: inline;
	border-right: 2px solid #fff;
}
	</style>
	<div class="container-fluid">
		<div class="row" >
			<div class="actualite col-sm-4 col-md-4">
				<div class="footer1">
					<p>AGDZ avocats <br>Marseille dans le quartier préfecture<br>+33 64 48 48 48<br>cabinet@agdzavocat.com<br>recrutement@agdzavocats.com</p>
					<i class="fab fa-youtube"></i>&nbsp;&nbsp;
	           <i class="fab fa-linkedin"></i>&nbsp;&nbsp;
	           <i class="fab fa-facebook-square"></i>&nbsp;&nbsp;
	           <i class="fas fa-rss-square"></i>&nbsp;&nbsp;

				</div>
			</div>

			<div class="actualite col-sm-4 col-md-4">
				<div class="footer2">
					<img src="<?php echo site_link_base("img_front");?>logo-blanc.png" alt="le logo"/>

				</div>
			</div>

			<div class="actualite col-sm-4 col-md-4">
				<div class="carte">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.065686218915!2d5.373373515122521!3d43.29194607913538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9c0b84d3dad0b%3A0xa6fdfda4628c186e!2s64%20Rue%20Grignan%2C%2013001%20Marseille!5e0!3m2!1sfr!2sfr!4v1585918260796!5m2!1sfr!2sfr" width="300" height="225" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

				</div>
			</div>
			<div class="actualite col-sm-12 col-md-12">
				<a href="faq">Conditions générales de service &nbsp;</a>
				<a href="faq">&nbsp;Tous droit de service&nbsp; </a>
				<a href="faq">&nbsp;Mentions légales &nbsp;</a>
				<a href="faq">&nbsp;FAQ&nbsp; </a>
				<a href="faq">&nbsp;Plan de site&nbsp;</a>


			</div>
		</div>
	</div>
</footer>


	</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
