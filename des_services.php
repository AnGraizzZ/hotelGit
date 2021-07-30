<?php
              $customizer_repeater_example = get_theme_mod('customizer_repeater_example', json_encode( array(/*The content from your default parameter or delete this argument if you don't want a default*/)) );
              $customizer_repeater_example_decoded = json_decode($customizer_repeater_example);
      foreach($customizer_repeater_example_decoded as $repeater_item){
        ?>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="fa <?=$repeater_item->icon_value;?>"></span></div>
            <div class="media-body">
              <h3 class="heading"><?=$repeater_item->title;?></h3>
              <p><?=$repeater_item->text;?></p>
            </div>
          </div>      
        </div>
        <?php 
        }
        ?>