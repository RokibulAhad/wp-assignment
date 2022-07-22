<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head();?>
  
</head>
<body <?php body_class()?>>
   
    <section class="nav_manu ">
    <?php 
        wp_nav_menu(
            array(
                'theme_loaction' => 'mainmenu',
                'container' => 'div',
                'container_class' => 'container bg main_menu',
            )
        )
    ?>
        
    </section>
    
       
        
    <section class="main_body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ">
                <?php 
                while (have_posts()){
                    the_post();
                    ?>
                   <div class="container ">
                        <div class="row">
                            <div class="col-md-12  my-4 bg-light " >
                            <h2 class="text-primary mt-3"><?php the_title()?></h2>
                            <p class="mt-4"><?php the_excerpt()?></p>
                            <?php 
                            if(has_post_thumbnail()){
                                the_post_thumbnail("medium_large");
                            }
                            ?>
                            </div>
                        </div>
              
                
                     </div>
                    
                <?php    
                }
                ?>
                </div>
                <div class="col-md-4 my-4 ">
                <div class="col-md-12 bg-light p-3">
                   <?php 
                   if(is_active_sidebar("sidebar-1")){
                    dynamic_sidebar("sidebar-1");
                   }
                   ?>
                </div>
                </div>
            </div>
        </div>
        
               
                
                
            
            
        </section> 
    
        
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8 bg-light pt-5 text-center">
                    <p>all rights reserved at &copy;Rokib</p>
                </div>


                <div class="col-md-4 bg-light pt-5 ">
                    <h5>Important links</h5>
                    
                    <?php 
                            wp_nav_menu(
                                array(
                                    'theme_loaction' => 'footermenu',
                                    'container' => 'div',
                                    'container_class' => 'container bg footer_menu',
                                )
                            )
                        ?>
                       
                   
                    
                </div>
            </div>
        </div>
       
    </footer>

    <?php wp_footer();?>
</body>
</html>