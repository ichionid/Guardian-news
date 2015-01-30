<?php
/**
 * @file
 * Template for The Guardian news module.
 */
?>
<div id="guardian-news-articles">
  <div>

    <ul>
    <?php foreach ($articles as $article) : ?>
      <li>
        <a href="<?php print $article['webUrl']; ?>"><h3><?php print $article['webTitle']; ?></h3></a>
        <p><span class="publication-date"><?php print $article['webPublicationDate']; ?></span> &#x2022 <span class="section-name"><?php print $article['sectionName']; ?></span></p>
      </li>
    <?php endforeach; ?>
    </ul>

    <div class="guardian-more"><a href=""><?php t('More'); ?></a></div>
  </div>
</div>
