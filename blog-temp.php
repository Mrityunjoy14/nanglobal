<?php
/*
Template Name: Blog Page Template 
*/
get_header('pages');
?>
    <div role="main" class="main">
        <?php
        $theme_directory_uri = get_template_directory_uri();
        $featured_image_url  = get_the_post_thumbnail_url(get_the_ID(), 'full');
        ?>

            <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-6" style="background-image: url('<?php echo $featured_image_url; ?>');">

                <div class="container">
                    <div class="row mt-5">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="text-9 font-weight-bold">Blog</h1>
                            <span class="sub-title"></span>
                        </div>
                        <div class="col-md-12 align-self-center order-1" style="visibility: hidden;">
                            <ul class="breadcrumb breadcrumb-light d-block text-center">
                                <li><a href="index-2.html">Home</a></li>
                                <li class="active">Pages</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container" id="row-holder">
            <div class="row head-content">
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
            </div>
                <div class="top-border-holder">
                            &nbsp;
                        </div>
    <?php
    $args = array(
        'post_type' => 'post',  // You can customize the post type
        'posts_per_page' => -1, // Show all posts or specify the number
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
    ?>
        <div class="row hero-blogs"> 
            <div class="col-md-1 left-border-holder"></div>
            <div class="col-md-11 bordrnpadd">
            <div class="col-md-4">
                <div class="subbordrnpadd">
                <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail( 'medium' ); ?>
                </div>
            <?php endif; ?>
            </div>
            </div>
            
            <div class="col-md-8">
                <div class="subbordrnpadd">
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <div class="post-excerpt">
                <?php the_excerpt(); ?>
            </div>

            <a class="read-more" href="<?php the_permalink(); ?>">Start ></a>
        </div>
        </div>
        </div>



        </div>
    <?php
        endwhile;
    else :
        echo 'No posts found.';
    endif;
    wp_reset_postdata();
    ?>

                </div>

                <div class="yellow-sec-holder">
                 </div>

            </div>

        </div>
       
<style>
.hero-blogs .post-thumbnail img {
    height: auto;
    box-shadow: 4px 5px 5px #e3e3e3;
}

.left-border-holder {
    background: url(http://localhost/adventures/wp-content/uploads/2023/11/new-blog-border-left.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: auto;
}

.bordrnpadd {
    border-top: 2px solid #ede7e7;
    padding-top: 2rem;
    padding-bottom: 2rem;
}

.yellow-sec-holder {
    background: #ffdc00;
    height: 200px;
}

.top-border-holder {
    background: url(http://localhost/adventures/wp-content/uploads/2023/11/new-blog-border-top.png);
    width: 50%;
    margin-left: 24px;
    background-size: 100%;
    height: 83px;
    background-repeat: no-repeat;
}

#row-holder .hero-blogs:nth-child(3) .bordrnpadd {
    margin-top: 2rem;
}

.hero-blogs .subbordrnpadd h2.post-title {
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 10px;
}

.head-content {
    margin-bottom: 30px;
}

.hero-blogs .subbordrnpadd a.read-more {
    background: #ffdc00;
    float: right;
    padding: 5px 10px 5px 10px;
    color: #000;
    font-weight: bold;
    border: 2px solid #ffdc00;
}

.hero-blogs .subbordrnpadd a.read-more:hover {
    text-decoration: none;
    background: transparent;
}

</style>
<?php
get_footer('pages');
?>
