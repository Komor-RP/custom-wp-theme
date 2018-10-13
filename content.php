<?php if (get_theme_mod('about_display', 'Show') == "show") : ?>

  <div class="container" id="aboutSection">
    <div class="row" id="aboutContent">
      <div class="col-md-10">

        <p><?php echo get_theme_mod('about_description') ?></p>

      </div>
    </div>
  </div>

<?php endif; ?>

<?php if (get_theme_mod('display_skills', 'Show') == "show") : ?>

  <div class="container-fluid" id="skillsSection">
    <div class="row">
      <div class="col-sm-8 order-2 order-md-1" id="graphs">
        <div class="inner">



          <label> <?php echo sanitize_text_field(get_theme_mod('skill1_label')) ?> </label>

          <div class="progress">
            <?php echo show_skills_graph(get_theme_mod('skill1')) ?>
          </div>

          <label> <?php echo sanitize_text_field(get_theme_mod('skill2_label')) ?> </label>
          <div class="progress">
            <?php echo show_skills_graph(get_theme_mod('skill2')) ?>
          </div>

          <label> <?php echo sanitize_text_field(get_theme_mod('skill3_label')) ?> </label>
          <div class="progress">
            <?php echo show_skills_graph(get_theme_mod('skill3')) ?>
          </div>

          <label> <?php echo sanitize_text_field(get_theme_mod('skill4_label')) ?> </label>
          <div class="progress">
            <?php echo show_skills_graph(get_theme_mod('skill4')) ?>
          </div>

          <label> <?php echo sanitize_text_field(get_theme_mod('skill5_label')) ?> </label>
          <div class="progress">
            <?php echo show_skills_graph(get_theme_mod('skill4')) ?>
          </div>


        </div>
      </div>
      <div class="col-sm-4 order-1 order-md-2">
        <div class="inner">
          <h2> <?php echo sanitize_text_field( get_theme_mod('skills_title')) ?> </h2>
          <p> <?php echo esc_textarea( get_theme_mod('skills_description')) ?>  </p>
          </div>

        </div>
      </div>

    </div>

<?php endif; ?>

<?php if (get_theme_mod('display_projects', 'Show') == "show") : ?>

    <div class="container-fluid" id="projectSection">
      <div class="row title_section">
        <div class="col">
          <h2> <?php echo sanitize_text_field( get_theme_mod('projects_title')) ?> </h2>
          <p> <?php echo esc_textarea( get_theme_mod('projects_description')) ?> </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-4 work">
          <div class="inner">
            <div class="img-container">

            </div>
            <h3> <?php echo sanitize_text_field( get_theme_mod('projects_title1')) ?> </h3>
            <p>Autem amet, yet illum, incididunt velitesse ea. Ut proident yet consequuntur or occaecat fugiat yet magnam or elit. Corporis sunt consequat eius for error. Aliquam tempora consequuntur or voluptate. Nequeporro. Anim irure quis. Laborum occaecat laboris but sequi, but voluptatem or labore nor nulla. Quaerat. Sint. Aspernatur aliquip, do and duis and quaerat vitae labore. Cupidatat sint nor aut quam cupidatat ullam. Aspernatur si and inventore reprehenderit. </p>
          </div>
        </div>

        <div class="col-12 col-md-4 work">
          <div class="inner">
            <div class="img-container"></div>
            <h3> <?php echo sanitize_text_field( get_theme_mod('projects_title2')) ?> </h3>
            <p>Ullamco nesciunt nequeporro iure non and laboris or ea. Nihil ullam. Et duis quis. Elit. Ab architecto or est tempora or cillum and officia. Illum natus nor occaecat and irure so nequeporro or ut yet laborum. Commodo aut aut nor velit yet minim laudantium magni. Explicabo anim so nostrum. Numquam sed ipsum nesciunt or aliqua ad or voluptatem. Numquam anim deserunt amet iste for eu. Nostrud labore ad yet nostrum or error est officia. Esse ipsa, aliquid autem illo nor culpa.</p>
          </div>
        </div>

        <div class="col-12 col-md-4 work">
          <div class="inner">
            <div class="img-container"></div>
              <h3> <?php echo sanitize_text_field( get_theme_mod('projects_title3')) ?> </h3>
                <p>Adipisci nisi incidunt enim rem but quae adipisci. Laudantium. Sed. Deserunt nostrud. Iste molestiae est rem or anim, nostrud aliqua. Quis doloremque commodi eu. Dolor autem quae. Consequatur quae consequuntur numquam nor cupidatat and beatae so magnam. Deserunt eiusmod, eius. Exercitation consequuntur quae, illum voluptas or aute.</p>
          </div>
        </div>
      </div>
    </div>

<?php endif; ?>
