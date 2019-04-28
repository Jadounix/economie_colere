<?php include 'entete.php'; ?>

<div class="container">
	<aside class="table-of-contents"></aside>
	<main class="post-content">
		<h2>Le jeu</h2>
		<p>Bien que terminée, vous pouvez toujours participer à l'expérience en lançant le jeu : </p>
		<div id="game">
			<div class="slide" id="slide0"style="display:none"> <!-- Commencer  -->
				<div id="game-title"> Le jeu de l'ultimatum </div>
				<div class="rightArrow"></div>
			</div>

			<div class="slide" style="display:none"><!-- Règles  -->
				<h1 id="titre_regles">Règles </h1>
				<div id="regles">
					Dans ce jeu à deux joueurs, vous allez incarner <span style="color:blue;">le personnage bleu</span>.
					<br><br>
					Lors de la première étape, <span style="color:red;">le personnage rouge</span> appelé “l’offreur” se voit confié d'une somme de 10€, qu'il doit partager avec vous selon la répartition qu'il souhaite.
					<br>
					Vous, “le répondant”, prenez connaissance de la répartition proposée. <br><br>Vous pourrez alors soit l’accepter, auquel cas chacun des joueurs recevra sa part d'argent, soit la refuser, auquel cas <em>aucun des deux joueurs ne recevra d’argent</em>.
					<br><br>
					Lors de la deuxième étape, les rôles s'inverseront : Vous, le personnage bleu, deviendrez l'offreur, et le personnage rouge deviendra le répondant.
					<br><span class="warning">Attention : Vous n'aurez <em>qu'une seule offre </em> à faire.</span>
				</div>
				<div class="rightArrow triggeringReceive"></div>
			</div>

			<div class="slide" style="display:none"> <!-- Recevoir offre   -->
				<div class="triangle">Vous</div>
				<h2 class="onVousPropose">Sur les 10€, on vous propose..</h2>
				<div class="myMoneyZone"></div>
				<div class="theirMoneyZone "></div>
				<div class="zone-reponse" style="display:none">
					<div class="button reponse-oui">ACCEPTER</div>
					<div class="button reponse-non">REFUSER</div>
				</div>
			</div>



			<div class="slide" style="display:none"> <!--MERCI d'avoir participé -->
				<h1>Merci d'avoir participé !</h1>
				<div class=" loading_div" >
					<p>Envoi des résultats sur le serveur..</p>
					<img src="images/jeu/loading.gif" class="" id="loading" alt="loading">
				</div>
			</div>
		</div>
		<h2>Hypothèses</h2>
		<h2>Résultats</h2>
	</main>

</div>




<?php include 'pied.php'; ?>
<script src="JS/jeu_ultimatum.js"></script>
<script src="JS/traitement_donnees.js" charset="utf-8"></script>
