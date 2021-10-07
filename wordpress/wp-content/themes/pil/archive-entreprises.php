<?php
// Template Name: Entreprises
get_header(); 

?> 

// Display the categories
<div class="gauche_categories">
<?php 
            $get_parent_cats = array(
                'parent' => '0' //get top level categories only
            ); 

            $all_categories = get_categories( $get_parent_cats );//get parent categories 

            foreach( $all_categories as $single_category ){
                //for each category, get the ID
                $catID = $single_category->cat_ID;

                echo '<li><a class="form-check" href=" ' . get_category_link( $catID ) . ' ">' . $single_category->name . '</a>'; //category name & link
   
                $get_children_cats = array(
                    'child_of' => $catID //get children of this parent using the catID variable from earlier
                );

                $child_cats = get_categories( $get_children_cats );//get children of parent category
                echo '<ul style="padding: 0rem 5rem;"> <form class="form-check" action="" >';
                    foreach( $child_cats as $child_cat ){
                        //for each child category, get the ID
                        $childID = $child_cat->cat_ID;

                        //for each child category, give us the link and name
                        // echo '<a href=" ' . get_category_link( $childID ) . ' ">' . $child_cat->name . '</a>';
                       echo '<input class="checkbox" type="checkbox" checked="checked" value="male" name="gender"> <label for="checkbox">'   .$child_cat->name .'<label/>'; 

                         echo '<ul class="post-title">';

                        $query = new WP_Query( array( 'cat'=> $childID, 'posts_per_page'=>10 ) );

                        wp_reset_postdata();

                        echo '</ul>';

                    }
                echo '</form></ul></li>';
            } //end of categories logic ?>
</div>




//Display the infos in the accordion
<div class="droite">
        <? get_search_form(); ?>
                <? if(have_rows('repeater_entreprises')) : while(have_rows('repeater_entreprises')) : the_row(); 
                $titre_ent = get_sub_field('nom_entreprise');
                $image_ent = get_sub_field('image_entreprise');
                $email_ent = get_sub_field('mail_entreprise');
                $telephone_ent = get_sub_field('telephone_entreprise');
                $site_web_ent = get_sub_field('site_entreprise');
                ?>
                <div class="secteur__entreprise">
                        <div class="secteur__titre">
                                <div class="secteur__taxo">
                                        <h2><?= $titre_ent?></h2>
                                        <?php foreach(get_sub_field('taxonomie_entreprise') as $data){ ?>
                                                <h6 class="secteur"> <?php echo $data;?></h6>
                                        <? }?>
                                </div>
                                <div class="secteur__button">
                                        <button><img src="http://localhost/wordpress/wp-content/src/img/svg/arrow-down.svg" alt="down_btn"></button>
                                </div>
                        </div>
                        <div class="secteur__panel">
                                <img class="secteur__img" src="<?= $image_ent?>" alt="<? echo $titre_ent?>">
                                <div class="info_entreprises">
                                <h6><?= $telephone_ent?></h6>
                                <h6><?= $email_ent?></h6>
                                <h6 class="site_web"><?= $site_web_ent?></h6>
                                </div>
                        </div>
                </div>
                <? endwhile; endif;?>

</div>
