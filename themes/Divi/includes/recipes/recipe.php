<div class="entry-content recipe">
   <div class="et_pb_section et_pb_fullwidth_section  et_pb_section_0 et_section_regular">
      <section class="et_pb_fullwidth_header et_pb_module et_pb_bg_layout_dark et_pb_text_align_left  et_pb_fullwidth_header_0">
         <div class="et_pb_fullwidth_header_container left">
            <div class="header-content-container center">
               <div class="header-content">
                  <h1><?php echo $recipe->title(); ?></h1>
               </div>
            </div>
         </div>
         <div class="et_pb_fullwidth_header_overlay"></div>
         <div class="et_pb_fullwidth_header_scroll"></div>
      </section>
   </div>
   <!-- .et_pb_section -->
   <div class="et_pb_section  et_pb_section_1 et_section_regular">
      <div class="et_pb_row et_pb_row_0 et_pb_row_4col info-bar">
         <div class="et_pb_column et_pb_column_1_4  et_pb_column_0">
            <div class="et_pb_text et_pb_module et_pb_bg_layout_dark et_pb_text_align_center  et_pb_text_0">
               <i class="wp-svg-pie pie"></i><?php echo $recipe->servings_normalized(); ?>
               <p></p>
            </div>
            <!-- .et_pb_text -->
         </div>
         <!-- .et_pb_column -->
         <div class="et_pb_column et_pb_column_1_4  et_pb_column_1">
            <div class="et_pb_text et_pb_module et_pb_bg_layout_dark et_pb_text_align_center  et_pb_text_1">
               <i class="wp-svg-busy busy"></i><?php echo $recipe->prep_time(); ?>
               <p></p>
            </div>
            <!-- .et_pb_text -->
         </div>
         <!-- .et_pb_column -->
         <div class="et_pb_column et_pb_column_1_4  et_pb_column_2">
            <div class="et_pb_text et_pb_module et_pb_bg_layout_dark et_pb_text_align_center  et_pb_text_2">
               <i class="wp-svg-clock clock"></i> Ready in 4.5 hours
               <p></p>
            </div>
            <!-- .et_pb_text -->
         </div>
         <!-- .et_pb_column -->
         <div class="et_pb_column et_pb_column_1_4  et_pb_column_3">
            <div class="et_pb_text et_pb_module et_pb_bg_layout_dark et_pb_text_align_center  et_pb_text_3">
              <?php echo $recipe->rating(); ?>
               <i class="wp-svg-star-3 star-3"></i><i class="wp-svg-star-3 star-3"></i><i class="wp-svg-star-3 star-3"></i><i class="wp-svg-star-2 star-2"></i>
               (357)
               <p></p>
            </div>
            <!-- .et_pb_text -->
         </div>
         <!-- .et_pb_column -->
      </div>
      <!-- .et_pb_row -->
      <div class=" et_pb_row et_pb_row_1">
         <div class="et_pb_column et_pb_column_1_2  et_pb_column_4">
            <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_fade_in et_pb_image_0 et_always_center_on_mobile et-animated">
               <img src="<?php echo $recipe->featured_image_url('full'); ?>" alt="" width="372" height="248" src-orig="<?php echo $recipe->featured_image_url('full'); ?>" scale="1.25">
            </div>
         </div>
         <!-- .et_pb_column -->
         <div class="et_pb_column et_pb_column_1_2  et_pb_column_5">
            <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_4">
               <p><?php echo $recipe->description(); ?></p>
            </div>
            <!-- .et_pb_text -->
         </div>
         <!-- .et_pb_column -->
      </div>
      <!-- .et_pb_row -->
      <div class=" et_pb_row et_pb_row_2">
         <div class="et_pb_column et_pb_column_1_2  et_pb_column_6">
            <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_5">
               <h2>Ingredients</h2>
               <?php
                $ingredient_list = new WPURP_Template_Recipe_Ingredients();
                echo $ingredient_list->output( $recipe );
                ?>
            </div>
            <!-- .et_pb_text -->
         </div>
         <!-- .et_pb_column -->
         <div class="et_pb_column et_pb_column_1_2  et_pb_column_7">
            <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_6">
               <h3>Directions</h3>
               <ol class="list-numbers recipe-directions__list">
                  <li class="step">
                    <span class="recipe-directions__list--item">Pour milk into a small bowl, and stir in the gelatin powder. Set aside</span>
                  </li>
                  <li class="step">
                    <span class="recipe-directions__list--item">
                    In a saucepan, stir together the heavy cream and sugar, and set over medium heat. Bring to a full boil, watching carefully, as the cream will quickly rise to the top of the pan. Pour the gelatin and milk into the cream, stirring until completely dissolved. Cook for one minute, stirring constantly. Remove from heat, stir in the vanilla and pour into six individual ramekin dishes.
                    </span>
                  </li>
                  <li class="step"><span class="recipe-directions__list--item">Cool the ramekins uncovered at room temperature. When cool, cover with plastic wrap, and refrigerate for at least 4 hours, but preferably overnight before serving.</span></li>
               </ol>
            </div>
            <!-- .et_pb_text -->
         </div>
         <!-- .et_pb_column -->
      </div>
      <!-- .et_pb_row -->
   </div>
   <!-- .et_pb_section -->
</div>