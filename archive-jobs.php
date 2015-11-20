<?php
  /* Job Openings - Archive Page */

  get_header();
?>

<section class="jobs">

  <h1 class="pageTitle">Job Openings</h1>

  <?php if (!have_posts()): ?>
    <p>
      There are currently no job openings.
    </p>
  <?php else: ?>
    <?php while(have_posts()) : the_post(); ?>
      <div class="job-opening row">
        <div class="col-xs-3">
          <a href="<?php the_permalink(); ?>" title="Job opening: <?php the_title(); ?>"><?php the_title(); ?></a>
        </div>
        <div class="col-xs-3">
          <?php echo get_field('department'); ?>
        </div>
        <div class="col-xs-6">
          <?php echo get_the_excerpt(); ?>
        </div>
      </div>
    <?php endwhile; ?>
<?php endif; ?>

</section>

<?php get_footer(); ?>
