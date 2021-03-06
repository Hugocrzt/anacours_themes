<?php

/*
    Template Name: Particulier Niveau
*/

get_header(); ?>
<div>
    <main>
		<section>
            <div class="home-landing-bandeau pilier-landing-bandeau">
				<div class="home-landing-bandeau-text-wrapper pilier-landing-adaptation">
					<div class="home-landing-bandeau-title-container">
						<h1><?php the_field( 'landing_titre' ); ?></h1>
					</div>
					<h2 class="pillier-sous-titre"><?php the_field( 'landing_sous-titre' ); ?></h2>
					<p><?php the_field( 'landing_paragraphe' ); ?></p>
					<div class="tophorizontal-landing-ctas-niveau-adaptation">
						<a class="transparent-btn niveau-adaptation" href="<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-anglais/">
							Cours particuliers dans une matière
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
						</a>
						<a class="transparent-btn niveau-adaptation" href="<?php echo esc_url( home_url( '/' ) ); ?>sortie-decole-et-devoirs/">
							Aide aux devoirs
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
						</a>
						<a class="transparent-btn niveau-adaptation" href="<?php echo esc_url( home_url( '/' ) ); ?>sortie-decole-et-devoirs/">
							Sortie d'école & devoirs
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
						</a>
					</div>
				</div>
				<?php $Landing_Image = get_field('landing_image'); if( $Landing_Image ): ?>
				<img class="home-landing-background-image pilier-landing-background-image-adaptation" src="<?php echo $Landing_Image['url']; ?>" alt="">
				<?php endif; ?>
			</div>
        </section>
		<section>
			<div class="container-bandeau-matiere">
				<div class="wrapperone-bandeau-matiere">
					<div>
						<h2><?php the_field( 'titre_section_2' ); ?></h2>
						<p><?php the_field( 'paragraphe_section_2' ); ?></p>
					</div>
				</div>
				<div class="wrappertwo-bandeau-matiere">
					<div class="matiere-grid">
						<div class="matiere-block">
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-mathematiques'>
								<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-maths.svg" alt="">
								<p>Mathématiques</p>
							</a>
						</div>
						<div class="matiere-block">
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-francais/'>
								<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-francais.svg" alt="">
								<p>Francais</p>
							</a>
						</div>
						<div class="matiere-block">
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-physique-chimie/'>
								<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-physique.svg" alt="">
								<p>Physique-chimie</p>
							</a>
						</div>
						<div class="matiere-block">
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-anglais/'>
								<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-anglais.svg" alt="">
								<p>Anglais</p>
							</a>
						</div>
						<div class="matiere-block">
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-svt/'>
								<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-svt.svg" alt="">
								<p>SVT</p>
							</a>
						</div>
						<div class="matiere-block">
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-economie/'>
								<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-economie.svg" alt="">
								<p>Économie</p>
							</a>
						</div>
						<div class="matiere-block">
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>sortie-decole-et-devoirs/'>
								<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-aide-devoirs.svg" alt="">
								<p>Aide aux devoirs</p>
							</a>
						</div>
						<div class="matiere-block">
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-allemand/'>
								<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-allemand.svg" alt="">
								<p>Allemand</p>
							</a>
						</div>
						<div class="matiere-block">
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-espagnol/'>
								<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-espagnol.svg" alt="">
								<p>Espagnol</p>
							</a>
						</div>
					</div>
				</div>
			</div>
        </section>
        <section>
			<div class="english-advantage-container niveau-adaptation">
				<div class="english-advantage-title-wrapper">
					<h2>En quoi consiste notre accompagnement</h2>
				</div>
				<div class="english-advantage-arguments-wrapper">
					<div class="english-advantage-arguments-space">
						<div class="english-advantage-argument-item">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/02/devoir_3.png" alt="">
							<p>Aider les élèves à faire leurs devoirs à raison d’une à plusieurs séances par semaine.</p>
						</div>
						<div class="english-advantage-argument-item">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/02/basique_3.png" alt="">
							<p>Les accompagner dans les apprentissages fondamentaux en lecture, écriture, mathématiques…</p>
						</div>
						<div class="english-advantage-argument-item">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/02/revoir_1.png" alt="">
							<p>Revoir et travailler des notions mal assimilées.</p>
						</div>
						<div class="english-advantage-argument-item">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/02/method_2.png" alt="">
							<p>Acquérir l’organisation et la méthode indispensable pour l’entrée au collège.</p>
						</div>
					</div>
				</div>
			</div>
        </section>
		<section>
			<div class="home-avis-container">
				<h2>Ce que disent <span class="split-color-text">nos clients</span> </h2>
				<p class="home-avis-texte">ils ont utilisé nos services et partagent leur expérience</p>
				<div class="home-avis-wrapper">
					<div class="home-avis-note-item">
						<!-- TrustBox widget - Micro Combo -->
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/02/logo_trustpilot.png" alt="">
						<div class="trustpilot-widget" data-locale="fr-FR" data-template-id="5419b6ffb0d04a076446a9af" data-businessunit-id="616d855be9da8e19c7d23f9b" data-style-height="20px" data-style-width="100%" data-theme="light">
							<a href="https://fr.trustpilot.com/review/anacours.com" target="_blank" rel="noopener">Trustpilot</a>
						</div>
						<!-- End TrustBox widget -->
					</div>
					<div class="home-avis-commentaires-wrapper">
						<div class="home-avis-commentaires-column">
							<div class="home-avis-commentaire-box">
								<p class="home-avis-commentaire-date">
									19/08/2021
								</p>
								<p class="home-avis-commentaire-content">
									Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos ...
								</p>
								<p class="home-avis-commentaire-name">
									Fuchs
								</p>
							</div>
						</div>
						<div class="home-avis-commentaires-column">
							<div class="home-avis-commentaire-box">
								<p class="home-avis-commentaire-date">
									19/08/2021
								</p>
								<p class="home-avis-commentaire-content">
									Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos ...
								</p>
								<p class="home-avis-commentaire-name">
									Fuchs
								</p>
							</div>
							<div class="home-avis-commentaire-box">
								<p class="home-avis-commentaire-date">
									19/08/2021
								</p>
								<p class="home-avis-commentaire-content">
									Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos ...
								</p>
								<p class="home-avis-commentaire-name">
									Fuchs
								</p>
							</div>
						</div>
						<div class="home-avis-commentaires-column">
							<div class="home-avis-commentaire-box">
								<p class="home-avis-commentaire-date">
									19/08/2021
								</p>
								<p class="home-avis-commentaire-content">
									Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos ...
								</p>
								<p class="home-avis-commentaire-name">
									Fuchs
								</p>
							</div>
							<div class="home-avis-commentaire-box">
								<p class="home-avis-commentaire-date">
									19/08/2021
								</p>
								<p class="home-avis-commentaire-content">
									Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos ...
								</p>
								<p class="home-avis-commentaire-name">
									Fuchs
								</p>
							</div>
						</div>
					</div>
					<div class="home-avis-commentaire-wrapper-mobile">
						<div class="swiper-four-mobile">
							<div class="swiper-wrapper">
								<div class="swiper-slide home-avis-commentaires-column">
									<p class="home-avis-commentaire-date">
										19/08/2021
									</p>
									<p class="home-avis-commentaire-content">
										Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos ...
									</p>
									<p class="home-avis-commentaire-name">
										Fuchs
									</p>
								</div>
								<div class="swiper-slide home-avis-commentaires-column">
									<p class="home-avis-commentaire-date">
										19/08/2021
									</p>
									<p class="home-avis-commentaire-content">
										Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos ...
									</p>
									<p class="home-avis-commentaire-name">
										Fuchs
									</p>
								</div>
								<div class="swiper-slide home-avis-commentaires-column">
									<p class="home-avis-commentaire-date">
										19/08/2021
									</p>
									<p class="home-avis-commentaire-content">
										Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos ...
									</p>
									<p class="home-avis-commentaire-name">
										Fuchs
									</p>
								</div>
							</div>
							<div class="swiper-pagination"></div>
						<div>
					</div>
				</div>
			</div>
			<div class="avis-image-container">
				<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/anacours/assets/src/img/553228-PK37K1-739.png" alt="">
			</div>
		</section>
		<section>
			<div class="bandeau-calltoaction-container">
				<div class="bandeau-calltoaction-wrapper">
					<div class="bandeau-calltoaction-image">
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/bandeau-fille-serree.png" alt="">
					</div>
					<div class="bandeau-calltoaction-text">
						<h2>Découvrir la solution</h2>
						<h2>qui correspond aux besoins de votre enfant.</h2>
					</div>
					<div class="bandeau-calltoaction-btns">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>agences/">Trouver mon agence</a>
						<a href="#">Obtenir mon tarif</a>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="explain-standard-container">
				<div class="explain-standard-text-wrapper">
					<h2><?php the_field( 'titre_section_3' ); ?></h2>
					<p><?php the_field( 'paragraphe_section_3' ); ?></p>
					<div class="notre-plus-block">
						<p>Notre plus</p>
						<p><?php the_field( 'notre_plus_section_3' ); ?></p>
					</div>
				</div>
				<div class="explain-standard-image-wrapper">
					<div>
						<?php $Section3_Image = get_field('image_section_3'); if( $Section3_Image ): ?>
						<img src="<?php echo $Section3_Image['url']; ?>" alt="">
						<?php endif; ?>
					</div>
				</div>
			</div>
        </section>
		<section>
			<div class="explain-standard-container invert-dispo">
				<div class="explain-standard-text-wrapper">
					<h2><?php the_field( 'titre_section_4' ); ?></h2>
					<p><?php the_field( 'paragraphe_section_4' ); ?></p>
					<div class="notre-plus-block">
						<p>Notre plus</p>
						<p><?php the_field( 'notre_plus_section_4' ); ?></p>
					</div>
					<a class="cta-yellow" href="#">Demander un devis</a>
				</div>
				<div class="explain-standard-image-wrapper">
					<div>
						<?php $Section4_Image = get_field('image_section_4'); if( $Section4_Image ): ?>
						<img src="<?php echo $Section4_Image['url']; ?>" alt="">
						<?php endif; ?>
					</div>
				</div>
			</div>
        </section>
        <section>
			<div class="home-arguments-container matiere-adaptation">
				<h2>POURQUOI CHOISIR ANACOURS ?</h2>
				<div class="home-arguments-wrapper">
					<div class="home-argument-item">
						<div class="home-argument-image">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/Picto-Anacours-Plume.gif" alt="">
						</div>
						<div class="home-argument-text">
							<h3>25 ans</h3>
							<h4>d'expertise scolaire</h4>
						</div>
					</div>
					<div class="home-argument-item">
						<div class="home-argument-image">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/Picto-Anacours-Bourse.gif" alt="">
						</div>
						<div class="home-argument-text">
							<h3>50%</h3>
							<h4>de crédit d'impôt pour tous</h4>
						</div>
					</div>
					<div class="home-argument-item">
						<div class="home-argument-image">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/Picto-Anacours-Main.gif" alt="">
						</div>
						<div class="home-argument-text">
							<h3>97%</h3>
							<h4>des familles sont satisfaites</h4>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="home-magazine-container">
				<h2>Le Magazine Anacours</h2>
				<div class="home-magazine-wrapper">
					<div class="swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<a href="#" class="article-box-image-wrapper">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/01/12970-scaled.jpg" alt="">
								</a>
								<div class="news-tag">
									<a class='apprentissage-tag' href="#">Apprentissage</a>
									<a class='methodologie-tag' href="#">Méthodologie</a>
								</div>
								<h3>Se préparer efficacement à une dictée</h3>
								<p class="news-intro-text">Souvent redoutée des élèves, la dictée est pourtant un excellent outil d’apprentissage de la langue. Pour en tirer tous les bénéfices, …</p>
								<a class="transparent-btn" href="#">
									Découvrir
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
								</a>
							</div>
							<div class="swiper-slide">
								<a href="#" class="article-box-image-wrapper">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/01/14582-scaled.jpg" alt="">
								</a>
								<div class="news-tag">
									<a class='apprendre-efficacement-tag' href="#">Apprentissage</a>
									<a class='apprendre-efficacement-tag' href="#">Méthodologie</a>
									<a class='apprendre-efficacement-tag' href="#">Révisions</a>
								</div>
								<h3>Travail scolaire : aider son enfant à devenir autonome</h3>
								<p class="news-intro-text">S’il est indispensable d’encadrer et apporter son aide pour les devoirs en primaire, petit à petit, l’acquisition de l’autonomie …</p>
								<a class="transparent-btn" href="#">
									Découvrir
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
								</a>
							</div>
							<div class="swiper-slide">
								<a href="#" class="article-box-image-wrapper">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2022/01/1837-scaled.jpg" alt="">
								</a>
								<div class="news-tag">
									<a class='parcours-scolaire-tag' href="#">Baccalauréat</a>
									<a class='apprendre-efficacement-tag' href="#">Révisions</a>
								</div>
								<h3>A quel moment commencer ses révisions pour le bac ?</h3>
								<p class="news-intro-text">Même si le nouveau baccalauréat fait la part belle au contrôle continu, un certain nombre d’épreuves écrites et orales demeurent.…</p>
								<a class="transparent-btn" href="#">
									Découvrir
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
								</a>
							</div>
						</div>
				</div>
				<a class="home-magazine-btn-more" href="#">Voir tout les articles</a>
				<div>
					<div class="prev-ctrl">
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-chevron-left-slider.svg" alt="">
					</div>
					<div class="next-ctrl">
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-chevron-left-slider.svg" alt="">
					</div>
					<div class="swiper-pagination"></div>
				</div>
		</section>
		<section>
			<div class="home-map-container final-section">
				<h2><span class="split-color-text">40 Agences</span> en France</h2>
				<p>trouver l'agence la plus proche de chez vous</p>
				<div class="home-map-searchbar-wrapper">
					<input type="text" placeholder="Ville, code postal">
					<button><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-localisez-moi.svg" alt=""></button>
					<button><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-search.svg" alt=""></button>
				</div>
				<div class="home-map-content-wrapper">
					<div class="home-map-image-wrapper">
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/france.svg" alt="">
					</div>
					<div class="home-map-list-wrapper">
						<div class="home-map-list-items-wrapper">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>agence/" class="home-map-list-item">
								<h3>Ile-de-france</h3>
								<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-chevron.svg" alt="">
							</a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>agence/" class="home-map-list-item">
								<h3>Lyon</h3>
								<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-chevron.svg" alt="">
							</a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>agence/" class="home-map-list-item">
								<h3>Bordeaux</h3>
								<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-chevron.svg" alt="">
							</a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>agence/" class="home-map-list-item">
								<h3>Marseille</h3>
								<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-chevron.svg" alt="">
							</a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>agence/" class="home-map-list-item">
								<h3>Toulouse</h3>
								<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-chevron.svg" alt="">
							</a>
						</div>
						<a class="toutes-agence-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>agences/">Voir toutes les agences</a>
					</div>
				</div>
			</div>
		</section>
    </main>
</div>
<?php get_footer();
