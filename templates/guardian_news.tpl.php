<?php
/**
 * @file
 * Template for The Guardian news module.
 */
?>
<div>
  <div>

    <?php foreach ($articles as $article) : ?>
    <li>
      <a href=""><h3>{{article.webTitle}}</h3></a>
      <p>{{article.webPublicationDate| date:"MM/dd/yyyy 'at' h:mma"}}</p>
      <p>Temperature: {{article.sectionName}}</p>
    </li>
    <?php endforeach; ?>

    <button>More</button>
  </div>
</div>
