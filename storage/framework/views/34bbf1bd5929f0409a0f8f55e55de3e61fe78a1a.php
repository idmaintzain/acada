
<?php echo $__env->make('backend_include.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;

  <body>

   <?php echo $__env->make('backend_include.topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;

    <div class="container-fluid">
      <div class="row">
         <?php echo $__env->make('backend_include.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>; 
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">ACADA - upload</h1>

          <div class="row placeholders">
                     </div>

          <h2 class="sub-header">Upload Video</h2>
          <form class="form-horizontal" action="store" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Video tile</label>
    <div class="col-sm-10">
      <input type="text" name="video_title" class="form-control" id="inputEmail3" placeholder="Video Title">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Video Embed Code</label>
    <div class="col-sm-10">
    NOTE: Please change the video width and height to Width:350    height:250  before posting
      <input type="text" name="video_url" class="form-control" id="inputPassword3" placeholder="Video URL">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Category</label>
    <div class="col-sm-10">
    <select class="selectpicker" class="form-control" name="category">
  <option>PHP</option>
  <option>JAVA</option>
  <option>HTML</option>
</select>

    </div>
  </div>


  <?php echo e(csrf_field()); ?>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
