<?php 

// Template Name: Homepage




get_header(); 

?> 
<div class="banner-home">
    <div class="header-home">
        <h1 class="punch-line"><?php the_field("punch_line") ?></h1>
        <a class="fleche-home" href="#"><img src="../wp-content/uploads/2021/10/arrow-down.svg" alt="Flèche"></a>
    </div>
    <div class="video-home">
        <?php 
            if(get_field('video')){
                echo get_field('video');
            }else{
                echo wp_get_attachment_image(get_field('image'), 'full');
            };
        ?>
    </div>
    <div class="texte-home">
        <h3 class="intro-home"><?php the_field('introduction_home') ?></h3>
        <div class="liste-1-home">
            <h4 class="titre-liste-home"><?php the_field('titre_1_intro_home') ?></h4>
            <?php if( have_rows('liste_1_intro_home') ): ?>
                <ul class="liste_1">
                <?php while( have_rows('liste_1_intro_home') ): the_row(); 
                    $objet1 = get_sub_field('objet_1_list_1');
                    $objet2 = get_sub_field('objet_2_list_1');
                    $objet3 = get_sub_field('objet_3_list_1');
                    $objet4 = get_sub_field('objet_4_list_1');
                    $objet5 = get_sub_field('objet_5_list_1');
                    $objet6 = get_sub_field('objet_6_list_1');
                    $objet7 = get_sub_field('objet_7_list_1');
                    ?>
                    <li>
                        <?php echo $objet1; ?>
                    </li>
                    <li>
                        <?php echo $objet2; ?>
                    </li>
                    <li>
                        <?php echo $objet3; ?>
                    </li>
                    <li>
                        <?php echo $objet4; ?>
                    </li>
                    <li>
                        <?php echo $objet5; ?>
                    </li>
                    <li>
                        <?php echo $objet6; ?>
                    </li>
                    <li>
                        <?php echo $objet7; ?>
                    </li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
        <div class="liste-2-home">
            <h4 class="titre-liste-home"><?php the_field('titre_2_intro_home') ?></h4>
            <?php if( have_rows('liste_2_intro_home') ): ?>
                <ul class="liste_2">
                <?php while( have_rows('liste_2_intro_home') ): the_row(); 
                    $objet1 = get_sub_field('objet_1_list_2');
                    $objet2 = get_sub_field('objet_2_list_2');
                    $objet3 = get_sub_field('objet_3_list_2');
                    $objet4 = get_sub_field('objet_4_list_2');
                    $objet5 = get_sub_field('objet_5_list_2');
                    ?>
                    <li>
                        <?php echo $objet1; ?>
                    </li>
                    <li>
                        <?php echo $objet2; ?>
                    </li>
                    <li>
                        <?php echo $objet3; ?>
                    </li>
                    <li>
                        <?php echo $objet4; ?>
                    </li>
                    <li>
                        <?php echo $objet5; ?>
                    </li>
                    </li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
    <div class="banniere-defilante-home">
        <?php get_template_part('banniere-defilante')?>
    </div>
</div>
<div class="secteur-home">
    <div class="texte-secteur">
        <h1 class="titre_sect_home"><?php the_field('titre_sect_home') ?></h1>
        <h4 class="texte_sect_home"><?php the_field('texte_sect_home') ?></h4>
        <div class="jsp"></div>
    </div>
</div>
<div class="formations-home">
    <?php if( get_field('image_sect_home') ): ?>
        <img class="image_sect_home" src="<?php the_field('image_sect_home'); ?>" />
    <?php endif; ?>
    <div class="texte-formations">
        <h1 class="titre_form_home"><?php the_field('titre_form_home') ?></h1>
        <h4 class="introduction_form_home"><?php the_field('introduction_form_home') ?></h4>
        <p class="texte_form_home"><?php the_field('texte_form_home') ?></p>
        <div class="list-form">
            <div class="liste-3-home">
            <?php if( have_rows('liste_3_form_home') ): ?>
                    <ul class="liste_3">
                    <?php while( have_rows('liste_3_form_home') ): the_row(); 
                        $objet1 = get_sub_field('objet_1_liste_3');
                        $objet2 = get_sub_field('objet_2_liste_3');
                        $objet3 = get_sub_field('objet_3_liste_3');
                        $objet4 = get_sub_field('objet_4_liste_3');
                    ?>
                        <li class="li-3">
                            <?php echo $objet1; ?>
                        </li>
                        <li class="li-3">
                            <?php echo $objet2; ?>
                        </li>
                        <li class="li-3">
                            <?php echo $objet3; ?>
                        </li>
                        <li class="li-3">
                            <?php echo $objet4; ?>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="liste-3-home">
            <?php if( have_rows('liste_4_form_home') ): ?>
                    <ul class="liste_4">
                    <?php while( have_rows('liste_4_form_home') ): the_row(); 
                        $objet1 = get_sub_field('objet_1_liste_4');
                        $objet2 = get_sub_field('objet_2_liste_4');
                        $objet3 = get_sub_field('objet_3_liste_4');
                    ?>
                        <li class="li-3">
                            <?php echo $objet1; ?>
                        </li>
                        <li class="li-3">
                            <?php echo $objet2; ?>
                        </li>
                        <li class="li-3">
                            <?php echo $objet3; ?>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
        <?php 
        $link = get_field('bouton_form_home');
        if( $link ): ?>
            <a class="bouton_form_home" href="<?php echo esc_url( $link ); ?>">Voir le site de l'ACA +</a>
        <?php endif; ?>
    </div>
</div>
<?php get_sidebar(); ?>
<?php 

get_footer();

?>
