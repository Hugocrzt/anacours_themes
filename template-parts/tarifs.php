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
						<h1>Cours particuliers <span class="split-color-text">à domicile</span></h1>
					</div>
					<h2 class="pillier-sous-titre">Des cours sur-mesure avec une équipe engagée dans la réussite de l'élève !</h2>
					<p>Chez Anacours, il ne s’agit pas seulement de trouver un enseignant pour un élève, mais de trouver le professeur approprié pour cet élève. Nous sommes sûrs d’une chose : pour réussir, il faut redonner l’envie d’apprendre.</p>
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
              <div class="col">
                <p>Les tarifs sont établis en fonction de  </p>
                <ul>
                  <li>la classe de l'élève</li>
                  <li>le lieu où sont dispensés les cours,</li>
                  <li>le nombre d'heures de cours commandées</li>
                </ul>
              </div>


              <div class="col">
                <p>Tarifs des cours à domicile  </p>
                <ul>
                  <li>A partir de xx€ jusqu'à xx€ TTC/h après crédit d'impôt.</li>
                </ul>
              </div>

              <div class="col">
                <p>Les frais d'inscription</p>
                <p>les frais d'inscriptions sont de 42.50€ TTC après crédit d'impôt.Ils sont variables pour toute la famille et pour l'année scolaire. Ils comprennent :</p>
                <ul>
                  <li>Une évaluation des connaissances pour l'élève</li>
                  <li>L'ensemble des démarches administratives liées à l'emploi d'un enseignant à domicile.</li>
                  <li>Le suivi pédagogique avec un conseiller dédié.</li>
                  <li>La possibilité de changer ou rajouter une ou plusieurs matières au cours de l'année scolaire</li>
                </ul>
              </div>

              <div class="col">
                <p>Tarifs des cours collectifs en agence pendant les vacances scolaires  </p>
                <ul>
                  <li>A partir de 22€ TTC /h par cours</li>
                  <li>A partir de 220€ TTC /h pour un stage intensif de révisions en petit groupe de 10h.</li>
                  <li>LIl se déroule à raison de 2 heures par jours sur 5 jours</li>
                </ul>
              </div>

              <div class="col">
                <p>Tarifs de nos cours en lighe  </p>
                <ul>
                  <li>De 34.90€ à 16.60€ TTC par mois suivant la formule d'abonnement choisie</li>
                  <li>A partir de 220€ TTC /h pour un stage intensif de révisions en petit groupe de 10h.</li>
                </ul>
              </div>

            </div>
            <div class="col-tarif-image">
                              <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/cours-particuliers-photo-of-woman-writing-on-blackboard-3184644@2x.jpg" alt="">

            </div>

          </div>

      </div>
    </section>

    <section>
      <div>
        <h2>Les moyens de paiement</h2>
      </div>
      <div class="row">
        <div class="col"> background cirle + img + sous-titre</div>
        <div class="col"> background cirle + img + sous-titre</div>
        <div class="col"> background cirle + img + sous-titre</div>
      </div>

      <div class="row">
        <div class="col1">
          <div>
            <img src="" alt="">
          </div>
          <div>
            <h4></h4>
            <p></p>
          </div>
        </div>
        <div class="col1">
          <div>
            <img src="" alt="">
          </div>
          <div>
            <h4></h4>
            <p></p>
          </div>
        </div>
      </div>
      <div>
        <a href="http://">Nous contacter</a>
      </div>
    </section>
  </main>
</div>

<?php get_footer();
