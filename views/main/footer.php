<?php
global $Languager;
global $lang;
?>
			<footer class="foot" id="footer">
				<div class="section foot-cont"><a class="foot-title" href="./index.php"><span>Leka.kz</span><span>since 1989</span></a>
					<div class="foot-col foot-nav-col">
						<button class="foot-col-button" data-click-action="front:asideShow"><span class="foot-subtitle"><?=$Languager->getTranslateToFrontFromId(166,$lang);?></span><span></span></button>
						<nav class="foot-nav foot-navigation">
							<a class="foot-nav-link" href="./product-card.php"><?=$Languager->getTranslateToFrontFromId(165,$lang);?></a>
							<a class="foot-nav-link" href="./news.php"><?=$Languager->getTranslateToFrontFromId(164,$lang);?></a>
							<a class="foot-nav-link" href="#"><?=$Languager->getTranslateToFrontFromId(144,$lang);?></a>
							<a class="foot-nav-link" href="./contacts.php"><?=$Languager->getTranslateToFrontFromId(146,$lang);?></a>
							<a class="foot-nav-link" href="./about.php"><?=$Languager->getTranslateToFrontFromId(148,$lang);?></a>
						</nav>
					</div>
					<div class="foot-col foot-prod-col">
						<button class="foot-col-button" data-click-action="front:asideShow"><span class="foot-subtitle"><?=$Languager->getTranslateToFrontFromId(167,$lang);?></span><span></span></button>
						<nav class="foot-nav foot-products">
							<a class="foot-nav-link" href="#"><?=$Languager->getTranslateToFrontFromId(169,$lang);?></a>
							<a class="foot-nav-link" href="#"><?=$Languager->getTranslateToFrontFromId(168,$lang);?></a>
							<a class="foot-nav-link" href="#"><?=$Languager->getTranslateToFrontFromId(171,$lang);?></a>
							<a class="foot-nav-link" href="#"><?=$Languager->getTranslateToFrontFromId(172,$lang);?></a>
							<a class="foot-nav-link" href="#"><?=$Languager->getTranslateToFrontFromId(173,$lang);?></a>
						</nav>
					</div>
					<form class="foot-form">
						<h5 class="foot-form-subtitle"><?=$Languager->getTranslateToFrontFromId(170,$lang);?></h5>
						<input class="foot-form-input" type="text" placeholder="E-mail">
						<button class="button-arrow foot-form-button">
							<svg width="53" height="19" viewBox="0 0 53 19" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0.178864 9.35676H51.5M51.5 9.35676L42.0569 0.5448M51.5 9.35676L42.0569 18.1687"></path>
							</svg>
						</button>
					</form>
				</div>
				<div class="foot-priv">
					<div class="section"><span class="priv-first"><?=$Languager->getTranslateToFrontFromId(174,$lang);?><strong><?=$Languager->getTranslateToFrontFromId(176,$lang);?></strong>© 1989 - 2021</span><a class="priv-link" href="./privacy.php">Privacy Policy</a>
						<div class="priv-dev"><span>Website Development:</span><a href="https://grammla.kz"><img src="img/grammla.svg" alt=""/></a></div>
					</div>
				</div>
				<script src="http://leka:81/browser-sync/browser-sync-client.js?v=2.26.7"></script>
				<script async="async" src="front.js" type="module"></script>
			</footer>
		</div>
	</body>
</html>