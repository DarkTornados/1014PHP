<?php 
  if($_POST) {
    //create_new_post();
  }


  $sql = "SELECT * FROM posts WHERE id = '" . $_GET['id'] . "'";
  $result = mysql_query($sql);
  $post = mysql_fetch_assoc($result);


 ?>

 <div>
  <a href="?action=read" class="pull-right btn btn-success">Back to all posts</a>

</div>

<form method="POST" class="form-horizontal" enctype="multipart/form-data">
<fieldset>
<input type="hidden" name="id_user" value="1">
<!-- Form Name -->
<legend>Edit Blog Post</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Title</label>  
  <div class="col-md-8">
  <input id="title" name="title" type="text" placeholder="" class="form-control input-md" value="<?php echo $post['title'] ?>">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="content">Content</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="content" name="content"><?php echo $post['content'] ?></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Date</label>  
  <div class="col-md-4">
  <input id="date" name="date" type="text" placeholder="" class="form-control input-md" value="<?php echo $post['date'] ?>">
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="image">Image</label>
  <div class="col-md-4">
  <?php echo display_image($post['image']) ?>
    <input id="image" name="image" class="input-file" type="file">
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="image">Author</label>
  <div class="col-md-4">
    <select name="id_user" id="">
    <?php 
      get_all_authors_dropdown($post['id_user']);
     ?>
      
    </select>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button type="submit" id="submit" name="submit" class="btn btn-success">Submit</button>
    <button type="reset" id="reset" name="reset" class="btn btn-info">Reset</button>
  </div>
</div>

</fieldset>
</form>
