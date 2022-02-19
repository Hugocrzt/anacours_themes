<?php

/*
    Template Name: Particulier Matières
*/

get_header(); ?>
<div>
    <main>
		<section>
            <div class="home-landing-bandeau pilier-landing-bandeau">
				<div class="home-landing-bandeau-text-wrapper pilier-landing-adaptation">
					<div class="home-landing-bandeau-title-container">
						<h1>
							<?php the_field( 'landing_titre' ); ?>
						</h1>
					</div>
					<h2 class="pillier-sous-titre"><?php the_field( 'landing_sous-titre' ); ?></h2>
					<p><?php the_field( 'landing_paragraphe' ); ?></p>
					<a class="cta-purple" href="#">Commencer dès maintenant</a>
				</div>
				<?php $Landing_Image = get_field('landing_image'); if( $Landing_Image ): ?>
				<img class="home-landing-background-image pilier-landing-background-image-adaptation" src="<?php echo $Landing_Image['url']; ?>" alt="">
				<?php endif; ?>
			</div>
        </section>
        <section>
			<div class="english-advantage-container listing-adaptation">
				<div class="english-advantage-title-wrapper">
					<div class="column-one">
						<h2>Un soutien scolaire qui a fait ses preuves</h2>
						<p>
							Anacours depuis plus de 20 ans a mis en place un accompagnement scolaire qui a fait ses preuves.
						</p>
						<div class="notre-plus-block">
							<p>Notre plus</p>
							<p><?php the_field( 'notre_plus_pragraphe' ); ?></p>
						</div>
					</div>
					<div class="column-two">
						<ul>
							<li>
								Un service d’écoute et un diagnostic précis des besoins 
							</li>
							<li>
								Des enseignants dotés d’une pédagogie adaptée à chaque élève
							</li>
							<li>
								Acquisition de bonnes méthodes de travail
							</li>
						</ul>
					</div>
				</div>
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
					<h2><?php the_field( 'titre_stages_intensifs' ); ?></h2>
					<p>Pendant les vacances à domicile ou en agence des stages intensifs de 10h de cours pour se renforcer sur la matière sont également proposés.</p>
					<a class="cta-yellow" href="<?php echo esc_url( home_url( '/' ) ); ?>stages-intensifs/">En savoir plus</a>
				</div>
				<div class="explain-standard-image-wrapper">
					<div>
						<?php $Stages_Image = get_field('image_stages_intensifs'); if( $Stages_Image ): ?>
						<img src="<?php echo $Stages_Image['url']; ?>" alt="">
						<?php endif; ?>
					</div>
				</div>
			</div>
        </section>
		<section>
			<div class="home-enseignants-container pillier-adaptation">
				<div class="home-enseignants-wrapper">
					<div class="home-enseignants-image">
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/Photo-enseignants.png" alt="">
					</div>
					<div class="home-enseignants-text">
						<h2>Des enseignants <span class="split-color-text">qualifiés et pédagogues</span></h2>
						<p>Après avoir échangé avec l'élève et sa famille, nos conseillers pédagogiques choisissent avec soin le professeur le plus adapté en fonction des objectifs identifiés.</p>
						<div class="slider-container-avis-enseignants">
							<p class="slider-avis-enseignants-label">Paroles d'enseignants</p>
							<div class="swiper-two">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="avis-enseignants-pres-container">
											<div class="avis-enseignants-box-image-wrapper">
												<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/10/leone-venter-VieM9BdZKFo-unsplash-scaled.jpg" alt="">
											</div>
											<div class="avis-enseignants-box-name-wrapper">
												Flavie F.
											</div>
										</div>
										<div class="avis-enseignants-comment-container">
											<p>Constituendi autem sunt qui sint in amicitia fines et quasi termini diligendi.</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="avis-enseignants-pres-container">
											<div class="avis-enseignants-box-image-wrapper">
												<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/10/leone-venter-VieM9BdZKFo-unsplash-scaled.jpg" alt="">
											</div>
											<div class="avis-enseignants-box-name-wrapper">
												Flavie F.
											</div>
										</div>
										<div class="avis-enseignants-comment-container">
											<p>Constituendi autem sunt qui sint in amicitia fines et quasi termini diligendi.</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="avis-enseignants-pres-container">
											<div class="avis-enseignants-box-image-wrapper">
												<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/10/leone-venter-VieM9BdZKFo-unsplash-scaled.jpg" alt="">
											</div>
											<div class="avis-enseignants-box-name-wrapper">
												Flavie F.
											</div>
										</div>
										<div class="avis-enseignants-comment-container">
											<p>Constituendi autem sunt qui sint in amicitia fines et quasi termini diligendi.</p>
										</div>
									</div>
								</div>
								<div class="swiper-pagination"></div>
							<div>
						</div>
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
			<div class="container-bandeau-matiere">
				<div class="wrapperone-bandeau-matiere">
					<div>
						<h2>Les cours particuliers <span class="split-color-text">dans une matière</span></h2>
						<p>Le soutien scolaire en primaire, c’est l’assurance de voir votre enfant encadré à domicile dans une matière spécifique (mathématiques, français, anglais). L’enseignant a pour mission de revoir les leçons et retravailler en profondeur chaque chapitre au travers d’exercices. Il accompagne ainsi votre enfant dans l’acquisition de ses connaissances et lui permettra de garder confiance en lui.</p>
					</div>
				</div>
				<div class="wrappertwo-bandeau-matiere">
					<div class="matiere-grid">
						<div class="matiere-block">
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-mathematiques'>
								<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-maths.svg" alt="">
								<p>Mathématique</p>
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
								<p>Economie</p>
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
								<p class="news-intro-text">S’il est indispensable d’encadrer et apporter son aide pour les devoirs en primaire, petit à petit, l’acquisition de l’autonomie…</p>
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
								<p class="news-intro-text">Même si le nouveau baccalauréat fait la part belle au contrôle continu, un certain nombre d’épreuves écrites et orales demeurent. …</p>
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
