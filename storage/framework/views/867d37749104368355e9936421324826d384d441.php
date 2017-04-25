
<?php echo $__env->make('backend_include.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;

  <body>

    <?php echo $__env->make('backend_include.topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;

    <div class="container-fluid">
      <div class="row">
        <?php echo $__env->make('backend_include.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;  
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">ACADA - Dashboard -  <?php echo e(Auth::user()->name); ?></h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>ALL VIDEO</h4>
              <span class="text-muted">ALL</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>HTML</h4>
              <span class="text-muted"> </span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>PHP</h4>
              <span class="text-muted"></span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>JAVA</h4>
              <span class="text-muted"> </span>
            </div>
          </div>

          <h2 class="sub-header">All video</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Video Tile </th>
                  <th>Category</th>
                  <th>Posted By</th>
                  <th>Time of upload</th>
                </tr>
              </thead>
              <tbody>
               <?php  
 $video = DB::table('video')->get();

   foreach ($video as $vid) {  ?>
                <tr>
                <td></td>
                  <td><?php  echo $vid->video_title; ?> </td>
                  <td><?php  echo $vid->category; ?> </td>
                  <td><?php  echo $vid->posted_by; ?> </td>
                  <td><?php  echo $vid->created_at; ?> </td>
              
                </tr>
                <?php }  ?>
              </tbody>
            </table>
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
