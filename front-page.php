<?php
/**
 * Template Name: Front Page
 *
 * @package Exit_Game_Theme
 */
get_header(); ?>

<div class="main-content">
    <div class="container">
        <div class="bg">
            <h1 class="h1"><?php bloginfo('name'); ?> - pabėgimo kambarys namuose</h1>
            <button class="button">UŽSAKYTI DĖŽĘ</button>
        </div>
    </div>

    <div class="container2">
        <h2 class="h2__why">Kodėl verta rinktis galvosūkių dėžes?</h2>
        <div class="container2__content">
        <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/pabegimo-kambarys-namuose.jpg" type="image/jpeg" media="(min-width: 1300px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/galvosukiu-deziu-privalumai.webp" type="image/webp" media="(min-width: 992px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pabegimo-kambarys-namuose.jpg" alt="Galvosūkių dėžių privalumai">
        </picture>
            <ul class="list">
                <li>Galvosūkių dėžės - tai puikus būdas praleisti laiką su šeima ar draugais.</li>
                <li>Viskas, kas yra dėžėje, panardina į nuotykių atmosferą: neįtikėtinos dekoracijos, stulbinantys efektai ir šokiruojantys siužeto vingiai.</li>
                <li>Jūs ne tik išsprendžiate galvosūkius; per savo nuotykius atskleidžiate tikrą detektyvą.</li>
                <li>Jūs gaunate privačią patirtį su draugais – tik artimiausi ir patikimiausi žmonės, jokių svetimų.</li>
            </ul>
        </div>
    </div>

    <h2 class="h2 h2--small">Quest dėžės kiekvienam skoniui!</h2>

    <div class="container">
        <div class="about">
            <div class="about__body">
                <div class="about__header">
                    <div class="about__title title">Mūsų galvosūkių dėžė puikiai tinka</div>
                </div>
                <div class="about__row">
                    <div class="about__column">
                        <div class="item-about">
                            <div class="item-about__icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/galvosukiu-dezes-draugams.png" alt="galvosukių dėžės draugams">
                            </div>
                            <div class="item-about__title">Draugams ir šeimoms</div>
                            <div class="item-about__text">Patirkite jaudinančius nuotykius su šeima ir draugais!</div>
                        </div>
                    </div>
                    <div class="about__column">
                        <div class="item-about">
                            <div class="item-about__icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/galvosukiu-dezes-hobis.png" alt="galvosūkių dėžės hobis">
                            </div>
                            <div class="item-about__title">Pomėgiai detektyvai</div>
                            <div class="item-about__text">Jūs pats esate pomėgis detektyvas arba turite ypatingą idėją pasimatymui.</div>
                        </div>
                    </div>
                    <div class="about__column">
                        <div class="item-about">
                            <div class="item-about__icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/laisvalaikio-ideja.png" alt="laisvalaikio idėja">
                            </div>
                            <div class="item-about__title">Tendencijos kūrėjai</div>
                            <div class="item-about__text">Ar tau nuobodu ir ieškai naujų iššūkių?</div>
                        </div>
                    </div>
                    <div class="about__column">
                        <div class="item-about">
                            <div class="item-about__icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/bendruomeniskumas.png" alt="bendruomeniškumas">
                            </div>
                            <div class="item-about__title">Komandos formavimas</div>
                            <div class="item-about__text">Įmonės renginys, skirtas sukurti komandinę dvasią jūsų įmonėje.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <div class="blog">
        <div class="blog__body">
            <div class="blog__header">
                <div class="blog__title title">Naujienos</div>
                <div class="blog__text">Aktualiausios naujienos apie pramogas</div>
            </div>

            <div class="blog__content">
                <?php
                // Query for the latest blog posts
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6, // Limit to 6 posts
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="blog__column">
                            <div class="item-blog">
                                <a href="<?php the_permalink(); ?>" class="item-blog__link">
                                    <div class="item-blog__icon">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium'); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-thumbnail.jpg" alt="<?php the_title(); ?>">
                                        <?php endif; ?>
                                        <div class="item-blog__title-overlay">
                                            <h3><?php the_title(); ?></h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <p><?php _e('Nėra naujų įrašų.', 'exit-game-theme'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();