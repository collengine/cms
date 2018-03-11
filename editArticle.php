
<?php include "templates/include/header.php" ?>
 
      <div id="adminHeader">
        <h2>Books Online Admin</h2>
        <p>You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>Log out</a></p>
      </div>
 
      <h1><?php echo $results['pageTitle']?></h1>
 
      <form action="admin.php?action=<?php echo $results['formAction']?>" method="post">
        <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>"/>
 
<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>
 
        <ul>
 
          <li>
            <label for="title">Book Title</label>
            <input type="text" name="title" id="title" placeholder="Name of the article" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->title )?>" />
          </li>


          <li>
            <label for="author">Book Author</label>
            <input type="text" name="author" id="author" placeholder="Name of the Author" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->author )?>" />
          </li>

          <li>
            <label for="publisher">Book Publisher</label>
            <input type="text" name="publisher" id="publisher" placeholder="Name of the Publisher" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->publisher )?>" />
          </li>

          <li>
            <label for="genre">Book Genre</label>
            <input type="text" name="genre" id="genre" placeholder="Name of the Genre" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->genre )?>" />
          </li>


          <li>
            <label for="image">Browse Book Cover</label>
            <input type ="file" name ="image" id="image"/>
           
            
          </li>

<!-- 
          <li>
            <label for="title">Upload Book Cover</label>
            
            <input class="btn btn-success" type="submit" name='upload_image' value="Upload Image"/>
          </li> -->
 

          <li>
            <label for="summary">Article Summary</label>
            <textarea name="summary" id="summary" placeholder="Brief description of the article" required maxlength="1000" style="height: 5em;"><?php echo htmlspecialchars( $results['article']->summary )?></textarea>
          </li>
 
          <li>
            <label for="content">Article Content</label>
            <textarea name="content" id="content" placeholder="The HTML content of the article" required maxlength="100000" style="height: 30em;"><?php echo htmlspecialchars( $results['article']->content )?></textarea>
          </li>
 
          <li>
            <label for="publicationDate">Publication Date</label>
            <input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['article']->publicationDate ? date( "Y-m-d", $results['article']->publicationDate ) : "" ?>" />
          </li>
 
 
        </ul>
 
        <div class="buttons">
          <input type="submit" name="saveChanges" value="Save Changes" />
          <input type="submit" formnovalidate name="cancel" value="Cancel" />
        </div>
 
      </form>
 
<?php if ( $results['article']->id ) { ?>
      <p><a href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Delete This Article?')">Delete This Article</a></p>
<?php } ?>
 
<?php include "templates/include/footer.php" ?>
