<?php

require 'includes/init.php';
$conn = require 'includes/db.php';

$articles = Article::getAll($conn);

?>


<?php require 'includes/header.php'; ?>




<?php if(empty($articles)): ?>
  <p>No articles found. =(</p>
<?php else: ?>
  <style></style>
   <ul style="background-color:#007969;">
   <?php foreach ($articles as $article): ?>
      <li>
      <article>
          <h2><a href="article.php?id=<?= $article['id'];?>"><button type="button"><?=
           htmlspecialchars($article['title']);?></button></a></h2>
        <p><?= htmlspecialchars($article['content']);?></p>
      </article>
       </li>
   <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php require 'includes/footer.php';?>
