<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="<?php echo site_link_base("css_front");?>fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo site_link_base("css_front");?>DPublic.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>A.G.D.Z Public</title>
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
  <a href="<?php echo site_url('/'); ?>">		<img src="<?php echo site_link_base("img_front");?>logo-bleu.png"></a>

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
	<div class="demande"><h5>Droit pulic</h5></div><br>

					<div class="row">
						<div class="col-md-5">
									<HR color="#0f02bc" width="100%" size="5px"  />
						</div>
						<div class="col-md-2" style="text-align: center; color: #0000a0;" >
							<i class="fas fa-building"></i>
						</div>
				          <div class="col-md-5">
									<HR color="#0f02bc" width="100%" size="5px"  />
						</div>
					</div>
					          <br>



	<div class="row">
		<div class="col-md-12" id="expert">
			<h4>Expertises</h4>
			<p>Le cabinet se tient à votre disposition pour convenir ensemble des modalités
			d’intervention du cabinet dans le cadre de ses différents domaines d’expertises.
			Une externalisation partielle ou totale de votre service juridique peut être envisagée.
			À ce titre, un rendez-vous personnalisé peut vous être proposé afin de convenir
			ensemble des conditions d’externalisation de votre service juridique.
			Le cabinet peut intervenir en soutient à vos projets par le biais de consultation
			juridique, vous assister lors de réunions, entretiens, audits et vous représenter en
			justice dans l’ensemble des domaines suivants.
            </p>
            <button type="button" class="btn" id="but">PRENDRE RDV</button>
		</div>
	</div><br><br>
		<div class="row">
			<div class="col-md-4" id="imgAv">
				<img src="<?php echo site_link_base("img_front");?>celia.jpg"><br>
				<span>Celine GUNDEGOUZ</span><br>
				<span>Avocate en droit public</span>
			</div>
			<div class="col-md-8" id="imgAv"><p>Maître Célia GUENDOUZ intervient dans l’ensemble des contentieux afférents au droit
			public et est disposée à vous faire part de ses compétences techniques.
			Bénéficiant d’une expérience professionnelle solide dans le cadre du contentieux ayant
			trait au droit public des affaires, Maître Célia GUENDOUZ vous assiste dans vos litiges
			relevant de la commande publique, des contrats et des marchés publics, du droit des
			Collectivités Territoriales, et du droit de la fonction publique.
			Prenez contact avec votre cabinet d’avocat à Marseille pour une assistance efficace..</p>
					<button type="button" class="btn" id="but">DEMANDEZ VOTRE DEVIS</button>
				</div>

		</div> <br><br>
	     <div class="row">
	     	<div class="actualite col-sm-4 col-md-4" id="DCP">DROIT DE LA <br>COMMANDE <br> PUBLIQUE </div>
            <div class=" actualite col-sm-4 col-md-4" id="DCP">DROIT DES <br> COLLECTIVITE <br> TERRITORIALE </div>
            <div class="actualite col-sm-4 col-md-4" id="DCP">DROIT DE LA<br> FONCTION <br> PUBLIQUE</div>




	     </div>
	     <div class="row">
            	<div class=" col-md-4" id="DC"><button type="button" class="btn btn-light">EN SAVOIR PLUS</button></div>
            	<div class="col-md-4" id="DC"><button type="button" class="btn btn-light">EN SAVOIR PLUS</button></div>
            	<div class="col-md-4" id="DC"><button type="button" class="btn btn-light">EN SAVOIR PLUS</button></div>
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
