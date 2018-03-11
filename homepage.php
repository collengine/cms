<?php include "header.php" ?>
 
      <ul id="headlines">
 
<?php foreach ( $results['articles'] as $article ) { ?>
 <?php $pre = 'uploads/';
  $finalPath = $pre.$article->image ?>

        <li>
          <h2>
            <span class="pubDate"><?php echo date('j F', $article->publicationDate)?></span><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?></a>
          </h2>
          <ul style="list-style: none; margin-left: 50px;">

          	<li style="display: inline-block;"><div><img style="width:180px; height: 180px; " src=<?php echo($finalPath) ?> alt="icon" /></div></li>
            <li style="display: inline-block;">
            	<div>
            		<ul style="list-style: none;">
            			<li>Author:      <?php echo htmlspecialchars( $article->author )?></li>
            			<li>Title:       <?php echo htmlspecialchars( $article->title  )?></li>
            			<li>Genre:       <?php echo htmlspecialchars( $article->genre )?></li>
            			<li>Publisher:   <?php echo htmlspecialchars( $article->publisher )?></li>
            		</ul>
            	</div>
        </li>
         </ul>
          
          

          
        </li>
 
<?php } ?>
 
      </ul>
 
      <p><a href="./?action=archive">Article Archive</a></p>
 
<?php include "footer.php" ?>
