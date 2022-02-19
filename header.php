<!doctype html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content=""/>
	<meta property="og:title" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:type" content="website"/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:image" content="">
	<meta property="og:image" itemprop="image" content="">
	<meta name="twitter:card" content="">
	<meta name="twitter:image" content="">
	<meta name="twitter:title" content="">
	<meta name="twitter:description" content="">
	<!-- TrustBox script -->
	<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
	<!-- End TrustBox script -->
	<?php wp_head(); ?>
</head>

<?php wp_body_open(); ?>
<header>
	<div class="header desktop-header">
		<div class="top-header">
			<div class="top-header-container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-container">
					<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/logo_Anacours_horizontal_sans-marges.svg" alt="Logo Anacours">
				</a>
				<div class="top-navigation">
					<div class="header-agences top-nav-link">
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-location.svg" alt="">
						<a>Nos agences</a>
					</div>
					<div class="header-telephone top-nav-link">
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-phone.svg" alt="">
						<a>09 72 60 52 52</a>
					</div>
					<div class="header-call-actions-container">
						<div class="header-espace top-nav-link">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-user.svg" alt="">
							<a href="https://client.anacours.fr/login.aspx" target="_blank">Mon espace</a>
						</div>
						<div class="header-tarif top-nav-link">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-devis.svg" alt="">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>demande-de-devis/">Obtenir un tarif</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-header">
			<div class="bottom-header-visible-container">
				<div class="header-cours-particuliers-container">
					<a>
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-chevron.svg" alt="">
						Cours particuliers
					</a>
				</div>
				<div class="header-stages-intensifs-container">
					<a>
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-chevron.svg" alt="">
						Stages intensifs
					</a>
				</div>
				<div class="header-cours-ligne-container">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>cours-en-ligne/">Cours en ligne</a>
				</div>
				<div class="header-recrutement-container">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>recrutement/">Recrutement</a>
				</div>
			</div>
			<div class="bottom-header-hidden-container" id="header-cours-particulier">
				<div class="bottom-header-hidden-wrapper">
					<div class="bottom-header-hidden-columnone">
						<p class="bottom-header-hidden-columnone-title">Cours particuliers</p>
						<p class="bottom-header-hidden-columnone-paragraphe">Chez Anacours, il ne s’agit pas seulement de trouver un enseignant pour un élève, mais de trouver le professeur approprié pour cet élève. Nous sommes sûrs d’une chose : pour réussir, il faut redonner l’envie d’apprendre.</p>
						<a class="bottom-header-hidden-columnone-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>cours-particuliers/">Découvrir</a>
					</div>
					<div class="bottom-header-hidden-columntwo">
						<p class="bottom-header-hidden-columntwo-title">Par matières</p>
						<ul>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-anglais/">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
									<p>Anglais</p>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-francais/">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
									<p>Français</p>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-physique-chimie/">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
									<p>Physique-chimie</p>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-mathematiques/">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
									<p>Mathématique</p>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-allemand/">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
									<p>Allemand</p>
								</a>
							</li>
						</ul>
					</div>
					<div class="bottom-header-hidden-columntwo">
						<p class="bottom-header-hidden-columntwo-title">Par niveaux</p>
						<ul>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-primaire/">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
									<p>Primaire</p>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-college/">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
									<p>Collège</p>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-lycee/">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
									<p>Lycée</p>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>cours-particulier-superieur/">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
									<p>Supérieur</p>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>cours-particuliers-adulte/">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
									<p>Adulte</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="bottom-header-hidden-container" id="header-stages-intensifs">
				<div class="bottom-header-hidden-wrapper">
					<div class="bottom-header-hidden-columnone">
						<p class="bottom-header-hidden-columnone-title">Stages Intensifs</p>
						<p class="bottom-header-hidden-columnone-paragraphe">Nos stages de révisions proposés dans nos agences pendant les vacances scolaires, permettent sur une courte période de travailler une matière en profondeur.</p>
						<a class="bottom-header-hidden-columnone-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>stages-intensifs/">Découvrir</a>
					</div>
					<div class="bottom-header-hidden-columntwo">
						<p class="bottom-header-hidden-columntwo-title">Préparer un examen</p>
						<ul>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>stages-intensifs-brevet/">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
									<p>Brevet</p>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>stages-intensifs-baccalaureat/">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
									<p>Baccalaureat</p>
								</a>
							</li>
						</ul>
					</div>
					<div class="bottom-header-hidden-columntwo">
						<p class="bottom-header-hidden-columntwo-title">Par matières</p>
						<ul>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>stages-intensifs-anglais/">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
									<p>Anglais</p>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>stages-intensifs-francais/">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
									<p>Français</p>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>stages-intensifs-physique-chimie/">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
									<p>Physique-chimie</p>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>stages-intensifs-mathematiques/">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
									<p>Mathématique</p>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>stages-intensifs-allemand/">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-arrow-right.svg" alt="">
									<p>Allemand</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="mobile-header">
		<div class="mobile-top-header">
			<div class="header-menu-wrapper-mobile">
				<div class="mobile-logo-container">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/logo_Anacours_horizontal_sans-marges.svg" alt="Logo Anacours"></a>
				</div>
				<a href="" class="mobile-account-container">
					<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-user.svg" alt="">
				</a>
				<input type="checkbox" id="menu-toggle"></input>
				<label for="menu-toggle" class="menu-open">
					<div id="open" class="home-burger"></div>
					<p class="open-text">Menu</p>
					<p class="close-text">Close</p>
				</label>
				<div class="menu-mobile menu-effects">
					<div class="cta-mobile-container">
						<a href="#">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-devis.svg" alt="">
							<p>Obtenir un devis</p>
						</a>
						<a href="#">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-user.svg" alt="">
							<p>Mon espace</p>
						</a>
					</div>
					<div class="nav-mobile-container">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>cours-particuliers/">
							<p>Cours particuliers</p>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-chevron.svg" alt="">
						</a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>stages-intensifs/">
							<p>Stages intensifs</p>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-chevron.svg" alt="">
						</a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>cours-en-ligne/">
							<p>Cours en ligne</p>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-chevron.svg" alt="">
						</a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>recrutement/">
							<p>Recrutement</p>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-chevron.svg" alt="">
						</a>
					</div>
				</div>
            </div>
		</div>
		<div class="mobile-bottom-header">
			<a class="mobile-bottom-transparent-btn agence-btn-mobile-header">
				<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-location.svg" alt="">
				<p>Nos agences</p>
			</a>
			<div class="mobile-bottom-transparent-btn tel-btn-mobile-header">
				<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-phone.svg" alt="">
				<p>Tel.</p>
			</div>
			<a class="tarif-btn-mobile-header">
				<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/12/icon-devis.svg" alt="">
				<p>Obtenir un tarif</p>
			</a>
		</div>
	</div>
</header>
