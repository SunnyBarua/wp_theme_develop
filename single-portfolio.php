<?php get_header(); ?>
      <!-- Header Area Start -->
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <?php get_template_part('inc/breadcumb');?>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">

            <?php
            while(have_posts()){
                the_post();
                ?>
                <h2><?php the_title();?></h2>
                <?php the_post_thumbnail();?>
                <?php the_content();?>
                <?php
            }
            wp_reset_postdata()
             ?>
                
                <div class="row">
                   <div class="col-xl-12">
                     <h4>project gallery</h4>
                   </div>
                   <div class="col-xl-4">
                      <div class="project-gallery">
                         <img src="assets/img/portfolio/1.jpg" alt="">
                      </div>
                   </div>
                   <div class="col-xl-4">
                     <div class="project-gallery">
                        <img src="assets/img/portfolio/2.jpg" alt="">
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class="project-gallery">
                        <img src="assets/img/portfolio/3.jpg" alt="">
                     </div>
                  </div>
                </div>
                <br><br>
                <div class="row">
                   <div class="col-xl-12">
                        <h4>project overview</h4>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/jssO8-5qmag" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="portfolio-sidebar">

                <?php
                $technology_lists=get_field('technology_used');

                if($technology_lists){
                    ?>
                    <h4>Technology Used</h4>
                    <ul>
                        <?php
                        foreach($technology_lists as $technology_list){
                            ?>
                            <li><i class="fa fa-arrow-right"></i> <?php echo $technology_list; ?></li>
                            
                            <?php
                        }
                         ?>
                        
                    </ul>
                    <?php
                }
                 ?>
                    
                </div>
                <div class="portfolio-sidebar">
                <?php
                $projects_lists=get_field('project_features');

                if($projects_lists){
                    ?>
                    <h4>Project Features</h4>
                    <ul>
                        <?php
                        foreach($projects_lists as $project_list){
                            ?>
                            <li><i class="fa fa-arrow-right"></i> <?php echo $project_list; ?></li>
                            
                            <?php
                        }
                         ?>
                        
                    </ul>
                    <?php
                }
                 ?>
                </div>
            </div>
        </div>
    </div>
</section>
 <?php get_footer();?>