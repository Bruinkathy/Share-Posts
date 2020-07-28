<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-chevron-left"></i> Back</a>
    <div class="card card-body bg-light mt-2">
      <h2>Add Post:</h2>
      <p>Create a post with this form</p>
      <!-- <form action="<?php echo URLROOT; ?>/posts/add" method="post"> -->
      <form action="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['id'] ?>" method="post">
        <div class="form-group">
          <label for="title">Title: <sup>*</sup></label>
          <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title'] ;?>">
          <span class="invalid-feedback"><?php echo $data['title_err'] ;?></span>
        </div>
        <div class="form-group">
          <label for="body">Post: <sup>*</sup></label>
          <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"> <?php echo $data['body']; ?></textarea>
          <span class="invalid-feedback"><?php echo $data['body_err'] ;?></span>
        </div> 
        
        <input type="submit" class="btn btn-primary" value="Submit">
      </form>
    </div>
  </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>