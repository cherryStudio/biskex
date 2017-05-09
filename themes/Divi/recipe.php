<div class="recipe">
  <div class="wpurp-container">
    <?php
      $print_button = new WPURP_Template_Recipe_Print_Button();
      echo $print_button->output( $recipe );

      $star_rating = new WPURP_Template_Recipe_Stars();
      echo $star_rating->output( $recipe );
    ?>
  </div>
  <h2><?php echo $recipe->title(); ?></h2>
  <?php echo $recipe->description(); ?>

  <h3><?php _e( 'Ingredients', 'wp-ultimate-recipe' );?></h3>
  <?php
    $ingredient_list = new WPURP_Template_Recipe_Ingredients();
    echo $ingredient_list->output( $recipe );
  ?>
</div>
