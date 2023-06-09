<?php include 'header.php' ?>
<html>
    <div class="bg-dark text-white">
    <div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Text above the video</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla auctor cursus felis, et fringilla ipsum facilisis nec.</p>
    </div>
    <div class="col-md-12">
      <div class="embed-responsive embed-responsive-16by9">
      <iframe width="1120" height="630" src="https://www.youtube.com/embed/OyDyOweu-PA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <div class="row ">
    <div class="col-md-12">
      <h2>Comments</h2>
      <div class="comment-section">
        <!-- Existing comments -->
        <div class="comment">
          <h4>User 1</h4>
          <p>This is the first comment.</p>
        </div>
        <div class="comment">
          <h4>User 2</h4>
          <p>This is the second comment.</p>
        </div>
        
        <!-- Comment form -->
        <form action="process_form.php" method="POST">
  <div class="form-group">
    <label for="comment">Leave a comment:</label>
    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
    </div>
  </div>
</div>
    </div>
</html>

<?php include 'footer.php' ?>
