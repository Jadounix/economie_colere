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
		<p>Le jeu se déroule en 7 tours. Un personnage virtuel fait d’abord 6 offres au participant, allant de 0 à 5 euros, apparaissant dans un ordre aléatoire.</p>
		<p><img src="images/P4/partenaire.png" style="float:right; transform:scale(0.7)" alt="">
			Ces 6 propositions sont faites par le même personnage, afin d'écarter toute possibilité que différents personnages évoquent différentes émotions.
		</p>
		<p style="clear:left;"> À chaque fin de tour, une liste d’émotions est proposée au participant. Il est invité à sélectionner les émotions qu'il a ressenti lorsqu'il a pris connaissance de l'offre. <br> Après ces 6 offres,  c'est au tour du participant de faire une unique offre finale. <br> Il est ensuite invité à répondre à la question suivante : “Pouvez vous expliquer cette offre de x€ ?”</p>
		<p>Les émotions proposées étaient les suivantes :</p>
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
		<p>Nos deux hypothèses reposent sur le principe de rationalité ( <a href="p1.php">Voir introduction</a> ).</p>
		<h3>Hypothèse 1</h3>
		<p>Notre première hypothèse était que le joueur présenterait un seuil de résistance, et que quand viendrait son tour de proposer une offre, celle ci sera égale à son seuil. <br>
			Ce seuil correspond à la somme d'argent en dessous de laquelle le joueur refusera toute proposition, et au dessus de laquelle il les accepteras toutes.<br> Cette hypothèse correspond à un comportement rationnel de la part du joueur, qui veut éviter un refus de la part du répondant afin de maximiser ses gains. Le joueur n’ayant pas connaissance du comportement de son partenaire, le présuppose comme étant identique au sien. <br> Si, par exemple, le joueur refuse en tant que receveur une offre à partir de trois euros, il est probable qu'il en offrira quatre en tant qu'offreur. En effet, lorsque j'ai peu d'informations sur le comportement des autres, la manière la plus logique et raisonnable pour anticiper ce que vont faire les autres, c'est de supposer qu'ils feront comme je le ferais
			si j'étais à leur place. C’est un comportement rationnel optimisateur.
		</p><br/>
		<h3>Hypothèse 2</h3>
		<p>
			Notre seconde hypothèse concernait l’impact de la valence émotionnelle sur le comportement. Lorsque le sujet passe le seuil de résistance, c’est à dire lors de la première offre refusée, il devrait passer d’une émotion à valence positive à une émotion à valence négative. C’est pour vérifier cette hypothèse que nous avons demandé au joueur testé quelles sont les émotions qu’il a ressenti à chaque proposition du personnage virtuel.
		</p>
		<h2>Résultats & interprétations</h2>
		<p>Les résultats et les méthodes de traitement des données sont consultables dans les <a href="annexes.php">annexes</a> du site.</p>
		<p>68 personnes, principalements des étudiants L3 MIASHS, ont participé à notre expérience sur le jeu de l’ultimatum.</p>
		<h3>Hypothèse 1</h3>
		<p>Notre première hypothèse était que le joueur testé proposera une offre égale à son propre seuil d'acceptation. <br>Pour vérifier cette hypothèse nous avons d’abord du trier le participants qui ont effectivement présenté un seuil. En effet, certains joueurs n'en ont pas présenté. Par exemple, des joueurs ont accepté l’offre à 2€ mais pas celle  à 3€. Ce comportement semble irrationnel, mais en lisant les explications fournies par les joueurs en fin de partie, on comprends qu'il s'agit d'erreurs liées à la compréhension du jeu. Ces joueurs-ci
		n’ont pas été comptés.</p><p>Au total, 57 personnes ont donc été identifiées comme présentant un seuil d’acceptation, soit 85% de l’échantillon de joueur total. Tous les résultats qui vont suivre concernant l'hypothèse 1 reposeront sur cet échantillon.</p>
			<img src="images/P4/hasThreshold_ratio.png" class="chart" alt="">

		<p>Parmi eux, Le seuil moyen d'acceptation
		est de 3,21€. </p>

		<img src="images/P4/thresholds_offers_whisker_plot.png" alt="Graphique montrant la répartition des seuils" class="chart">

		<p>13 participant, soit 22% des joueurs ont fait une offre égale à leur seuil, comme attendu dans l’hypothèse 1. On peut alors dire que notre première hypothèse n’est pas vérifiée. <br></p>
		<img src="images/P4/offers_pie.png" class="chart" alt="">


		<p>Cette première hypothèse suppose une forte rationalité des participants. Il n'est donc pas anormal de constater que cette supposition est érronée, puisqu’on a vu que les émotions peuvent ébranler un comportement rationnel. <br> De plus, près de la moitié des joueurs testés ont fait une offre de 5€, en expliquant qu’ils voulaient être équitables dans le partage de l’argent.</p> <img class="chart" src="images/P4/thresholds_offers_bars.png" alt=""> <p>La prédominance de ce comportement (offres à 5€), que nous n’avions pas envisagée au départ, explique peut-être pourquoi peu de réponses lors du jeu vont dans le sens de notre hypothèse. <a href="#offres-5-euros">(Nous allons en re-parler)</a> </p>
		<h3>Hypothèse 2</h3>
		<p>Notre seconde hypothèse stipulait qu'un refus de la part du receveur était corrélée uniquement avec des émotions négatives, et une acceptation, uniquement avec des émotions positives.
		<br> Les résultats montrent que 22 participants, soit 33% de la population totale testée, adoptent effectivement ce comportement. Cette hypothèse est donc également réfutée car ce comportement est suivi par seulement un tiers des participants.</p>
		<p>Il n’est pas complètement anormal d’observer ces comportements. En effet, les émotions ne dépendent pas uniquement de l'offre présente : Les émotions du joueur impliquent des évènements qui se déroulent dans le temps, qui font appel à sa mémoire. <br> Par exemple, si j'ai refusé une offre à 1€, je peux en être très mécontent, mais si dans la foulée on me propose une offre à 3€, je peux trouver cela insuffisant mais concevoir
			que l'offreur a fait un effort. Mon émotion n'est donc pas forcément uniquement négative. Et inversement, je peux accepter une offre à 2€ mais trouver que l’offre est quand même basse. Dans ce cas mon émotion ne sera pas forcément uniquement positive.</p>
		<p>Face à cette nouvelle réfutation de notre hypothèse, nous avons malgré tout essayé de déceler des comportements intéressants. <br> Lorsque le joueur artificiel offre 1€ ou 2€, le but est d’induire la colère au participant. Ces offres ont été refusé par 46 participants, soit 68%. Et l’émotion de colère a été choisi par 36 participants, soit 53% des participants. Au final notre induction de la colère n’a fonctionné que dans la moitié des cas. Mais ce résultat reste néanmoins significatif, car la colère a été choisie à 53% parmi 8 émotions. Si le choix des émotions était aléatoire, celui de la colère aurait probablement tourné autour des 12.5%.
		</p>

		<h3>Autres résultats</h3>

		<p id="offres-5-euros">49 % des joueurs testés ont fait une offre de 5€.</p>
		<img src="images/P4/offers_repartition.png" alt="Graphique montrant la répartition des seuils" class="chart">
		<p>Dans les commentaires que les participants ont écrits pour expliquer cette offre, on retrouve à chaque fois que le joueur testé a voulu être “juste” ou “équitable” avec un partage
			égal. On peut faire le lien avec le résultat précédent. L’induction de la colère peut donner aux personnes une envie de justice qui les pousse à adopter ce comportement “juste”.
			On peut supposer que ce comportement s’explique en partie par l’envie de donner une image positive de soi.
		</p>
		<p>On pourrait également y voir une portée éducative de la colère ressentie, mais notre protocole ne nous permet pas de tester cette hypothèse.</p>

		<h2>Conclusion</h2>
		<p>La non cohérence des résultats avec notre hypothèse peut aussi être expliqué par les limites du protocole. Par exemple, il est plus aisé pour les participants de faire des offres hautes puisque la monnaie est fictive. Du fait que les
			participants jouent à un jeu et ne soient pas dans une réelle situation peut fausser les résultats. </p>
		<p>De plus, les animations du jeu ont pu induire des émotions aux joueurs testés. En effet plusieurs participants nous ont indiqué que voir le personnage virtuel avec qui ils jouent “pleurer” lorsqu’ils refusaient son offre, leur procurait de l’empathie pour ce personnage virtuel.</p> <img src="images/jeu/partenaire.png" alt="">

		<p>
	 	Toujours pour illustrer comment les éléments graphiques du jeu et sa contextualisation ont eu de l'impact sur le comportement des joueur, beaucoup ont manifesté de l'animosité envers le personnage virtuel dans les commentaires de fin de partie. </p>

		<p>Au final, nos résultats suggèrent que les personnes ont plus tendance à proposer une offre correspondant à la moitié de la somme à partager. C'est ce comportement inattendu qui a primé sur ceux décrits par nos hypothèses.</p>
	</main>

</div>

<?php include 'pied.php'; ?>
