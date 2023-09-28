<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yogeemedia-uk
 */

?>

<div class="blog-content col-xl-8 col-lg-7 col-md-12 pr-35 pr-md-15 pl-md-15 pr-xs-15 pl-xs-15">
	<div class="blog-style-one item bg-dark">

		<div class="blog-item-box">

			<div class="thumb">
				<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>"></a>
			</div>
			<div class="info">
				<div class="meta">
					<ul>
						<li>
							<i class="fas fa-user"></i> <?php the_author_posts_link(); ?>
						</li>
						<li>
							<i class="fas fa-calendar-alt"></i> <?php the_time('j F, Y'); ?>
						</li>
					</ul>
				</div>

				<p><?php the_content(); ?></p>

				<p>
					Give lady of they such they sure it. Me contained explained my education. Vulgar
					as hearts by garret. Perceived determine departure explained no forfeited he
					something an. Contrasted dissimilar get joy you instrument out reasonably. Again
					keeps at no meant stuff. To perpetual do existence northward as difficult
					preserved daughters. Continued at up to zealously necessary breakfast.
					Surrounded sir motionless she end literature. Gay direction neglected but
					supported yet her.
				</p>
				<p>
					New had happen unable uneasy. Drawings can followed improved out sociable not.
					Earnestly so do instantly pretended. See general few civilly amiable pleased
					account carried. Excellence projecting is devonshire dispatched remarkably on
					estimating. Side in so life past. Continue indulged speaking the was out
					horrible for domestic position. Seeing rather her you not esteem men settle
					genius excuse. Deal say over you age from. Comparison new ham melancholy son
					themselves.
				</p>
				<blockquote>
					Celebrated share of first to worse. Weddings and any opinions suitable smallest
					nay. Houses or months settle remove ladies appear. Engrossed suffering supposing
					he recommend do eagerness.
				</blockquote>
				<p>
					Drawings can followed improved out sociable not. Earnestly so do instantly
					pretended. See general few civilly amiable pleased account carried. Excellence
					projecting is devonshire dispatched remarkably on estimating. Side in so life
					past. Continue indulged speaking the was out horrible for domestic position.
					Seeing rather her you not esteem men settle genius excuse. Deal say over you age
					from. Comparison new ham melancholy son themselves.
				</p>
			</div>
		</div>
	</div>
</div>