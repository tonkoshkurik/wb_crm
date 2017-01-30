<div class="box">
  <div class="request">
    <?php if (isset($authUrl)): ?>
      <a class="login" href="<?= $authUrl ?>">Connect Me!</a>
    <?php else: ?>
      <h3>List of owner sites:</h3>

      <?php foreach ($sites as $item): ?>
        <?= $item   ?><br />
      <?php endforeach ?>

      <h3>Sitemaps:</h3>
      <?php // foreach ($crawlerrors as $item): ?>
      <pre>
      <?php print_r($sitemaps); ?>
    </pre>
      <?php // endforeach ?>
    <?php endif ?>
  </div>
<!--  <h2>Sitemap set</h2>-->
<!--  --><?php // print_r($sitemapset); ?>
</div>
