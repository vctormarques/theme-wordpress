<?php get_header(); ?>
     <!-- if ( have_posts() ) : while ( have_posts() ) :   the_post();  -->
    <?php
    global $post;
    $ultimoPost = query_posts("posts_per_page=1&order=ASC"); ?>

    <div class="container posts">
    
    <?PHP if ( $ultimoPost ) {
        foreach ( $ultimoPost as $post ) :  setup_postdata( $post );
        ?>
        <div class="row">
            <div class="col-md-6">
                <?php if(has_post_thumbnail( )): ?>
                    <?php the_post_thumbnail('large', array( 'class' => 'img-thumbnail' )); ?>
                <?php else: ?>
                        <img alt="" src="<?php echo get_template_directory_uri() ?>/img/thumbnail-default.jpg" class="img-thumbnail" style="width:371; height:263" />
                <?php endif; ?>
            </div>
            <div class="col-md-5" style="margin-left: 30px">
                <button class="btn btn-primary btn-category"><?PHP echo get_the_category( $id )[0]->name ?> </button>
                <a href="<?php the_permalink(); ?>" style="text-decoration: none;"><h6 class="h6"><?php the_title(); ?></h6></a>
                <span class="content"><?php the_excerpt(); ?></span>
                <div class="row autor">
                    <div class="col-md-6">
                        <span class="content">Por: <?php echo get_the_author(); ?></span>
                    </div>
                    <div class="col-md-6" align="right">
                        <span class="rede-social"> <i class="fa fa-facebook-square"></i> </span>
                        <span class="rede-social"> <i class="fa fa-twitter-square"></i> </span>
                        <span class="rede-social"> <i class="fa fa-instagram"></i> </span>
                    </div>

                </div>
            </div>
        </div>
        <hr class="hr">
        <?php
        endforeach;
    }
    ?>
    </div>
<?PHP
    global $post;
    $myposts = get_posts( array(
        'posts_per_page' => 5,
        'offset'         => 1,
        // 'category'       => 1
    ) );
 ?>

<div class="container posts-banner">
 <?PHP
    if ( $myposts ) {
        foreach ( $myposts as $post ) :  setup_postdata( $post ); ?>

        <div class="row">
            <div class="col-md-4">
                <?php if(has_post_thumbnail( )): ?>
                    <?php the_post_thumbnail('post-thumbnail', array( 'class' => 'img-thumbnail' )); ?>
                <?php else: ?>
                        <img alt="" src="<?php echo get_template_directory_uri() ?>/img/thumbnail-default.jpg" class="img-thumbnail" style="width:371; height:263" />
                <?php endif; ?>
            </div>
            <div class="col-md-6">
                <button class="btn btn-primary btn-category"><?PHP echo get_the_category( $id )[0]->name ?> </button>
                <a href="<?php the_permalink(); ?>" style="text-decoration: none;"><h6 class="h6"><?php the_title(); ?></h6></a>
                <span class="content"><?php the_excerpt(); ?></span>
                <div class="row">
                    <div class="col-md-6">
                        <span class="content">Por: <?php echo get_the_author(); ?></span>
                    </div>
                    <div class="col-md-6" align="right">
                        <span class="rede-social"> <i class="fa fa-facebook-square"></i> </span>
                        <span class="rede-social"> <i class="fa fa-twitter-square"></i> </span>
                        <span class="rede-social"> <i class="fa fa-instagram"></i> </span>
                    </div>

                </div>
            </div>
        </div>
        <hr class="hr">
        <?php
        endforeach;
        wp_reset_postdata();
    }
    ?>
</div>



        
    <?php 
        // endwhile; else: 
        //     echo '<p>Não existe nenhum post</p>';
        // endif; 
    ?> 

<?php get_footer(); ?>
