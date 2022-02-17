<?php

/*
    Template Name: Tarifs
*/

get_header(); ?>

<div>
  <main>
    <section>
      <div class="home-landing-bandeau pilier-landing-bandeau">
				<div class="home-landing-bandeau-text-wrapper pilier-landing-adaptation">
					<div class="home-landing-bandeau-title-container">
						<h1>Des formules et tarifs adaptés <span class="split-color-text">à vos besoins</span></h1>
					</div>
					<p>En fonction de vos besoins, nos conseillers pédagogiques vous proposent des cours réguliers à domicile ou sous forme de
            stages intensifs à domicile ou sous forme de stages intensifs en agence, avec l'enseignant qui correspond au profil de votre
          </p>
					<a class="btn-demande-devis" href="#">Demander un devis</a>
				</div>
				<img class="home-landing-background-image pilier-landing-background-image-adaptation" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/01/pexels-gabby-k-6237928-scaled.jpg" alt="">
			</div>
    </section>

    <section>
      <div class="tarifs-container">
          <h2>Les tarifs</h2>
          <div class="container-ligne">
            <div class="row-tarif-liste">

                <p>Les tarifs sont établis en fonction de  </p>
                  <li>la classe de l'élève</li>
                  <li>le lieu où sont dispensés les cours,</li>
                  <li>le nombre d'heures de cours commandées</li>

                <p class="mt-1">Tarifs des cours à domicile  </p>
                  <li>A partir de xx€ jusqu'à xx€ TTC/h après crédit d'impôt.</li>

                <p class="mt-1">Les frais d'inscription</p>
                <p id="tarif-p">les frais d'inscriptions sont de 42.50€ TTC après crédit d'impôt.<br>Ils sont variables pour toute la famille et pour l'année scolaire. Ils comprennent :</p>
                  <li>Une évaluation des connaissances pour l'élève</li>
                  <li>L'ensemble des démarches administratives liées à l'emploi d'un enseignant à domicile.</li>
                  <li>Le suivi pédagogique avec un conseiller dédié.</li>
                  <li>La possibilité de changer ou rajouter une ou plusieurs matières au cours de l'année scolaire</li>

                <p class="mt-1">Tarifs des cours collectifs en agence pendant les vacances scolaires  </p>
                  <li>A partir de 22€ TTC /h par cours</li>
                  <li>A partir de 220€ TTC /h pour un stage intensif de révisions en petit groupe de 10h.</li>
                  <li>LIl se déroule à raison de 2 heures par jours sur 5 jours</li>

                <p class="mt-1">Tarifs de nos cours en lighe  </p>
                  <li>De 34.90€ à 16.60€ TTC par mois suivant la formule d'abonnement choisie</li>
                  <li>A partir de 220€ TTC /h pour un stage intensif de révisions en petit groupe de 10h.</li>

            </div>
            <div class="col-tarif-image">
              <div>
                <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/01/153052-OU5TEO-736-scaled.jpg" alt="">
              </div>
            </div>
          </div>
      </div>
    </section>

    <section>
      <div class="moyen-paiment-container">
				<div class="moyen-paiement-wrapper">
					<h2>Les moyens <span class="split-color-text">de paiement</span></h2>
					<div class="moyen-paiement-space">
						<div class="moyen-paiement-item">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/01/ressources_01.png" alt="">
							<p>Des ressources pédagogiques du CP à la Terminale et dans toutes les matières</p>
						</div>
						<div class="moyen-paiement-item">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/01/outils_2.png" alt="">
							<p>Des fiches de cours, des exercices interactifs, des annales corrigées, des quiz d'évaluation...</p>
						</div>
						<div class="moyen-paiement-item">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/01/planning_01.png" alt="">
							<p>Un planning de révision personnalisable pour suivre sa progression</p>
						</div>
					</div>

          <div class="moyen-paiement-other">
            <div class="row">
              <div class="rectangle"></div>
              <div>
                <p>du texte du texte </p>
                <p>du texte du texte </p>
              </div>
            </div>
            <div class="row">
              <div class="rectangle"></div>
              <div>
                <p>du texte du texte </p>
                <p>du texte du texte </p>
              </div>
            </div>
          </div>
          <div class="container-button">

            <a class="cta-yellow" href="http://">nous contacter</a>
          </div>
				</div>
			</div>
    </section>


  </main>
</div>

<?php get_footer();
