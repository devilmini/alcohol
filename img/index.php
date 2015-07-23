


    

	
	<?php

	$this->start_element('nextgen_gallery.image_list_container');

	?>
	<!-- Thumbnails -->
	<?php for ($i=0; $i<count($images); $i++):
       $image = $images[$i];
       $thumb_size = $storage->get_image_dimensions($image, 800);
       

       

			 $this->start_element('nextgen_gallery.image_panel', 'item', $image);

			?>
			
				<?php

				$this->start_element('nextgen_gallery.image', 'item', $image);

				?>
       
            <a href="<?php echo esc_attr($storage->get_image_url($image))?>"
               >
                <img
                    
                    src="<?php echo esc_attr($storage->get_image_url($image, $thumbnail_size_name))?>"
                    
                />
            </a>
       
				
			
			

        <?php if ($number_of_columns > 0): ?>
            <?php if ((($i + 1) % $number_of_columns) == 0 ): ?>
                
            <?php endif; ?>
        <?php endif; ?>

	<?php endfor ?>
	<?php

	$this->end_element();

	?>




