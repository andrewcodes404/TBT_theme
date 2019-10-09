<div data-aos="fade-in" class="we-do--wrapper<?php if (get_field('index') % 2 == 0) {
                                echo '--even';
                            } ?>">



    <div class="we-do content-width-wrapper">

        <!-- <h5 class="<?php if (get_field('index') % 2 !== 0) {
                        echo 'black';
                    } ?>  <?php if (get_field('index') == 1) {
                        echo 'we-do-big-title';
                    } ?>  "   >What we do</h5> -->


        <?php if (get_field('index') == 1) {
                echo ' <h5 class="black we-do-big-title"> What we do </h5> 
                            <div class="line-break line-break--sml"></div>';
            } ?>
            
        



        <div class="we-do--flex-box">


            <div class="we-do--flex-item1">
                <h3 class="skyblue we-do-index">0<?php the_field('index') ?></h3>
                <div class="line-break line-break--sml"></div>

            </div>
            <div class="we-do--flex-item2">


                <h3 class="<?php if (get_field('index') % 2 == 0) {
                                echo 'white';
                            } ?>"><?php the_field('title') ?></h3>
                <div class="line-break line-break--sml"></div>
                <h6 class="we-do-text <?php if (get_field('index') % 2 == 0) {
                                            echo 'white';
                                        } ?>"><?php the_field('text') ?></h6>


            </div>

             <div class="we-do--flex-item3"></div>
            <div class="we-do--flex-item4">


                <h5 class="we-do-list-title <?php if (get_field('index') % 2 !== 0) {
                                                echo 'black';
                                            } ?>">HOW WE DO IT:</h5>
                <div class="line-break line-break--sml"></div>
                <div class="we-do--list">
                    <?php if (have_rows('list')) : ?>
                        <?php while (have_rows('list')) : the_row();
                                $listItem = get_sub_field('list_item');
                                ?>
                            <div class="we-do--list-item<?php if (get_field('index') % 2 == 0) {
                                                                    echo '--even';
                                                                } ?>">
                                <div class="we-do--the-hyphen">
                                </div>
                                <p class="h5-alternative <?php if (get_field('index') % 2 !== 0) {
                                                                        echo 'black';
                                                                    } ?>"><?php echo $listItem; ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>


            </div>
        </div>


    </div>
</div>