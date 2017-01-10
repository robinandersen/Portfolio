<?php snippet('header-white') ?>

  <main class="main" role="main">

    <div class="about-container fadein">
        <div class="flex-item">

          <img src="content/2-about/<?php echo $page->pofileImage()->image() ?>">

        </div>
        <div class="flex-item2">

          <?php echo $page->intro()->kirbytext() ?>

        </div>
    </div>

  </main>

<?php snippet('footer') ?>
