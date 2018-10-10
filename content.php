



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

<div class="container-fluid" id="projectSection">
  <div class="row title_section">
    <div class="col">
      <h2>Recent Work</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus
        accumsan et viverra justo commodo.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-4 work">
      <div class="inner">
        <div class="img-container">

        </div>
        <h3>Header</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus
          accumsan et viverra justo commodo.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus
            accumsan et viverra justo commodo.</p>
      </div>
    </div>

    <div class="col-12 col-md-4 work">
      <div class="inner">
        <div class="img-container">

        </div>
        <h3>Header</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus
          accumsan et viverra justo commodo.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus
            accumsan et viverra justo commodo.</p>
      </div>
    </div>

    <div class="col-12 col-md-4 work">
      <div class="inner">
        <div class="img-container">

        </div>
        <h3>Header</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus
          accumsan et viverra justo commodo.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus
            accumsan et viverra justo commodo.</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid" id="contactSection">
  <div class="row">
    <div class="col">
      <h2>Let's Connect!</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-sm-8 col-md-6 order-2 order-md-1">
      <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="telephone">Phone Number</label>
        <input type="tel" name="telephone">
        <label for="message">Message</label>
        <textarea name="message" rows="8"></textarea>
        <button name="submit">
          <strong>Submit</strong>
        </button>
      </form>
    </div>
    <div class="col-12 col-sm-8 col-md-6 order-1 order-md-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus
      accumsan et viverra justo commodo.</div>
  </div>
