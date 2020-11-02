<?php get_header(); ?>

<main id="main">
  <article>
    <section class="second__mv">
      <h1 class="second__mv__ttl">
        <?php the_title(); ?>
      </h1>
      <div class="second__mv__img">
        <?php the_post_thumbnail('full'); ?>
      </div>
    </section>

    <div class="wrap">
      <section class="contact__contents">
        <p class="contact__ttl">お問い合わせ希望の方は<br>下記formに必要事項を入力ください。</p>
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <script>
          hbspt.forms.create({
            portalId: "8224690",
            formId: "0b595759-ac0e-49e3-82cb-6b02e0807f4f"
          });
        </script>
      </section>
    </div>
    <!-- /.wrap -->
  </article>
</main>


<?php get_footer(); ?>