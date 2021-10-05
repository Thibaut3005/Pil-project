<?php

// Template Name: pole

get_header();

?> 



<div class="banner-pole">
    <div class="banner-titre">
        <h1 class="titre-banner-pole"><?php the_field('titre_banner_pole'); ?></h1>
    </div>
    <div class="banner-intro">
        <h3 class="intro-banner-pole"><?php the_field('introduction_banner_pole'); ?></h2>
    </div>
</div>
<div class="video">
    <?php 
    if(get_field('video')){
        echo get_field('video');
    }else{
        echo wp_get_attachment_image(get_field('image'), 'full');
    };
    ?>
</div>
<div class="banniere-defilante">
    <?php get_template_part('banniere-defilante')?>
</div>
<div class="team-pole">
    <h2 class="team">Notre équipe</h2>
    <div class="team-spec">
        <?php 
        if( have_rows('grille_team_pole') ):?>
            <div class="team-list">
            <?php while ( have_rows('grille_team_pole') ) : the_row();
            $image = get_sub_field('photo_grille');
            $photo = $image['sizes']['thumbnail'];
            ?>
            <div class="team-all">
                <img class="photo-de-profil" src="<?php echo $photo;?>" alt="">
                <p class="nom"><?php the_sub_field('nom_grille');?></p>
                <p class="role"><?php the_sub_field('role_grille');?></p>
                <p class="email"><?php the_sub_field('email_grille');?></p>
            </div>
            <?php endwhile;?>
        </div>
        <?php else :
            // no rows found
            echo 'error';
        endif;
        ?>
    </div>
</div>
<div class="actualite-pole">
    <h2 class="titre-actualite">Actualités</h2>
    <a class="bouton-actualite" href="facebook.com">Suivez-nous <i class="fab fa-facebook-f"></i></a>
</div>
<div class="footer-pole">
    
</div>

<?php

get_footer();

?>
