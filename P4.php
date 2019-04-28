<?php include 'entete.php'; ?>

<div class="container">
	<aside class="table-of-contents"></aside>
	<main class="post-content">
		<p>Bien que terminée, vous pouvez toujours participer à l'expérience en lançant le jeu : </p>
		<div id="game">
			<div class="slide" id="slide0" style="display:none">
				<!-- Commencer  -->
				<div id="game-title"> Le jeu de l'ultimatum </div>
				<div class="rightArrow"></div>
			</div>

			<div class="slide" style="display:none">
				<!-- Règles  -->
				<h1 id="titre_regles">Règles </h1>
				<div id="regles">
					Dans ce jeu à deux joueurs, vous allez incarner <span style="color:blue;">le personnage bleu</span>.
					<br><br>
					Lors de la première étape, <span style="color:red;">le personnage rouge</span> appelé “l’offreur” se voit confié d'une somme de 10€, qu'il doit partager avec vous selon la répartition qu'il souhaite.
					<br>
					Vous, “le répondant”, prenez connaissance de la répartition proposée. <br><br>Vous pourrez alors soit l’accepter, auquel cas chacun des joueurs recevra sa part d'argent, soit la refuser, auquel cas <em>aucun des deux joueurs ne recevra
						d’argent</em>.
					<br><br>
					Lors de la deuxième étape, les rôles s'inverseront : Vous, le personnage bleu, deviendrez l'offreur, et le personnage rouge deviendra le répondant.
					<br><span class="warning">Attention : Vous n'aurez <em>qu'une seule offre </em> à faire.</span>
				</div>
				<div class="rightArrow triggeringReceive"></div>
			</div>

			<div class="slide" style="display:none">
				<!-- Recevoir offre   -->
				<div class="triangle">Vous</div>
				<h2 class="onVousPropose">Sur les 10€, on vous propose..</h2>
				<div class="myMoneyZone"></div>
				<div class="theirMoneyZone "></div>
				<div class="zone-reponse" style="display:none">
					<div class="button reponse-oui">ACCEPTER</div>
					<div class="button reponse-non">REFUSER</div>
				</div>
			</div>



			<div class="slide" style="display:none">
				<!--MERCI d'avoir participé -->
				<h1>Merci d'avoir participé !</h1>
				<div class=" loading_div">
					<p>Envoi des résultats sur le serveur..</p>
					<img src="images/jeu/loading.gif" class="" id="loading" alt="loading">
				</div>
			</div>
		</div>
		<h1>Travail expérimental réalisé</h1>
		<h2>Protocole</h2>
		<p>Le jeu se déroule en 6 tours. Un personnage virtuel fait d’abord 5 propositions au joueur testé allant de 1 à 5 euros, les propositions étant aléatoire. Ces 5 propositions sont faites par le même personnage, afin qu’il n’y ait pas d'émotion
			particulière associée à ce personnage. A chaque fin de tour, une liste d’émotions est proposée au joueur testé. Il doit choisir quelle émotion il a ressentie. Lors du sixième et dernier tour, le joueur testé doit à son tour faire une offre. A
			la fin du jeu, on demande au joueur testé de répondre à la question suivante : “Pouvez vous expliquer cette offre de x€ ?”</p>
		<p>Liste des émotions à choisir :</p>
		<ul>
			<li>colère</li>
			<li>irritation</li>
			<li>contentement</li>
			<li>envie</li>
			<li>gratitude</li>
			<li>mépris</li>
			<li>satisfaction</li>
			<li>surprise</li>
		</ul>
		<h2>Hypothèses</h2>
		<p>La première hypothèse de notre protocole est que le joueur testé propose l’offre minimale qu’il a acceptée. Cela correspond à un comportement rationnel de la part du joueur, qui veut éviter un refus de la part du répondant. Le joueur n’ayant pas la connaissance du comportement de l’autre joueur suppose que son comportement est identique au sien. En effet, lorsqu'on a peu d'informations sur le comportement des autres, la manière la plus logique et raisonnable pour anticiper ce que vont faire les autres, c'est de supposer qu'ils feront comme je le ferais si j'étais à leur place. C’est un comportement rationnel optimisateur.
		</p><br/><p>
		Notre deuxième hypothèse concerne l’impact de la valence émotionnelle sur le comportement. Lorsque le sujet passe le seuil de résistance, c’est à dire lors de la première offre refusée, il devrait passer d’une émotion à valence positive à une émotion à valence négative. C’est pour vérifier cette hypothèse que nous demandons au joueur testé quelles sont les émotions qu’il a ressenti à chaque proposition du personnage virtuel.
		</p>
		<h2>Résultats & interprétations</h2>
		<p>Nous avons eu 68 participants à notre expérience sur le jeu de l’ultimatum.</p>
		<p>Notre première hypothèse était que le joueur testé propose l’offre minimale qu’il a acceptée. Pour vérifier cette hypothèse nous avons d’abord trié le participants qui ont effectivement un seuil et ceux qui n’en ont pas. C’est à dire qu’il y a des joueurs testés qui ont accepté l’offre à 2€ mais pas à 3€ par exemple. Ces joueurs-ci n’ont pas été comptés. Au total 57 personnes ont présenté un seuil d’acceptation, soit 85% de l’échantillon de joueur total. Le seuil moyen d'acceptation, c’est à dire le seuil moyen en dessous duquel les joueurs testés refusent l’offre, est de 3,21€. </p>
		<p>13 participant, soit 22% des joueurs ont fait une offre égale à leur seuil, comme attendu dans l’hypothèse 1. On peut dire que notre première hypothèse n’est pas vérifiée.</p>
		<p>Cette première hypothèse suppose une forte rationalité des participants. Dans ce contexte précis, il n'est pas anormal de constater le contraire. De plus, près de la moitié des joueurs testés ont fait une offre de 5€, en expliquant qu’ils voulaient être équitables dans le partage de l’argent. La prédominance de ce comportement, que nous n’avions pas envisagée au départ, explique peut-être pourquoi peu de réponses lors du jeu vont dans le sens de notre hypothèse.</p>
		<p>Notre seconde hypothèse était que lorsque le sujet passe le seuil de résistance, c’est à dire lors de la première offre refusée, il passe d’une émotion à valence positive à une émotion à valence négative. Au final 22 personnes, soit 33% des joueurs testés adoptent effectivement ce comportement. Cette hypothèse est donc également réfutée car ce comportement est suivi par seulement un tiers des participants.</p>
		<p>Il n’est pas complètement anormal d’observer ces comportements. Par exemple, si j'ai refusé une offre à 1€, je peux en être très mécontent, mais si dans la foulée on me propose une offre à 3€, je peux trouver cela insuffisant mais concevoir que l'offreur a fait un effort. Mon émotion n'est donc pas forcément négative. Et inversement, je peux accepter une offre à 2€ mais trouver que l’offre est quand même basse. Dans ce cas mon émotion ne sera pas forcément positive.</p>
		<p>Nous avons essayé lors du jeu de l’ultimatum d’induire la colère avec des offres de 0€ ou 1€. Ces offres ont été refusé par 46 participants, soit 68%. Et l’émotion de colère a été choisi par 36 participants, soit 53% des participants lorsqu’ils ont reçu une offre de 0€ ou 1€. Au final notre induction de la colère n’a fonctionnée que dans la moitié des cas.</p>
		<p>Tout d’abord, 49 % des joueurs testés ont fait une offre de 5€. Dans les commentaires que les participants ont écrits pour expliquer cette offre, on retrouve à chaque fois que le joueur testé a voulu être “juste” ou “équitable” avec un partage égal.</p>
		<p>0,06 % des participants ont fait une offre supérieure à 5 euros. C’est à dire qu’ils ont donné plus d’argent au joueur virtuel qu’ils n’en ont gardé. Les participants ayant adopté ce comportement expliquent qu’ils ont voulu se montrer généreux. On peut supposer que ce comportement s’explique donc en partie par l’envie de donner une image positive de soi.</p>
		<h3>Conclusion</h3>
		<p>La non cohérence des résultats avec notre hypothèse peut aussi être expliqué par les défauts du protocole. Par exemple, il est plus aisé pour les participants de faire des offres hautes puisque la monnaie est fictive. Du fait que les participants jouent à un jeu et ne soient pas dans une réelle situation peut fausser les résultats. </p>
		<p>De plus les animations du jeu ont pu induire des émotions aux joueurs testés. En effet plusieurs participants nous ont dit que, de voir le personnage virtuel avec qui ils traitent “pleurer” lorsqu’ils refusaient son offre, leur donnait de l’empathie pour ce personnage virtuel.</p>
		<p>Notre expérience portait sur deux hypothèses. Au final, nos résultats suggèrent que les personnes ont plus tendance à offrire une offre correspondant à la moitié de la somme à partager. Ce comportement que nous n'avions pas attendu est plus présent que le comportement de notre hypothèse, qui voulait que les personnes offrent le montant minimal qu’elles avaient acceptées.</p>
	</main>

</div>




<?php include 'pied.php'; ?>
<script src="JS/jeu_ultimatum.js"></script>
<script src="JS/traitement_donnees.js" charset="utf-8"></script>
