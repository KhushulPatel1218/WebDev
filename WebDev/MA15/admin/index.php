<?php

require '../includes/init.php';

Auth::requireLogin();

$conn = require '../includes/db.php';

$articles = Article::getAll($conn);

?>


<?php require '../includes/header.php'; ?>



    


<h2>Administration Page</h2>

<p><a href="new-article.php">Add New Article</a></p>

<?php if(empty($articles)): ?>
  <p>No articles found. =(</p>
<?php else: ?>

   <table>
    <thead>
        <th>title</th>
    </thead>
    <tbody>
    
   <?php foreach ($articles as $article): ?>
      <transliterator_create>
      <td>
        <a href="article.php?id=<?= $article['id'];?>"><?=
           htmlspecialchars($article['title']);?></a>
   </td>
   </tr>
   <?php endforeach; ?>
   </tbody>
   </table>

<?php endif; ?>

<?php require '../includes/footer.php';?>
