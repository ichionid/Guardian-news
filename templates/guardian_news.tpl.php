<?php
/**
 * @file
 * Template for The Guardian news module.
 */
?>
<div>
  <div>

    <ul>
    <?php foreach ($articles as $article) : ?>
      <li>
        <a href="<?php print $article['webUrl']; ?>"><h3><?php print $article['webTitle']; ?></h3></a>
        <p><?php print $article['webPublicationDate']; ?> | <?php print $article['sectionName']; ?></p>
      </li>
    <?php endforeach; ?>
    </ul>

    <div><a href=""><?php t('More'); ?></a></div>
  </div>
</div>
