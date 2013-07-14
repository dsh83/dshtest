<?php
/*
 Template Name: Education
 */
?>

<?php include('inc/html_header.php'); ?>
<?php include('inc/the_header.php'); ?>
<?php include('inc/the_nav.php'); ?>

	<div class="row">
		<div class="large-6 large-offset-6 columns cont">
			<h4><?php the_title(); ?></h4>
	
					<!-- ARGS Education-->
						<?php $args_education = array(
						'post_type' => 'education',
						'posts_per_page' => -1,
						); ?>
 
          <div class="section-container accordion" data-section>
            <?php $the_query = new WP_Query( $args_education ); ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <section>
          <p class="title" data-section-title><a href="#panel1"><?php the_title(); ?></a></p>
          <div class="content" data-section-content>
            <p><?php the_content(); ?></p>
          </section>
            <?php endwhile; ?> <!--  end of the loop. -->
          </div>
      </div>
    </div>
  </div>
<?php include("inc/html_footer.php");?>