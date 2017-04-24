
@include('backend_include.head');

  <body>

    @include('backend_include.topbar');

    <div class="container-fluid">
      <div class="row">
        @include('backend_include.sidebar');  
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">ACADA - Dashboard -  {{ Auth::user()->name }}</h1>

          <div class="row placeholders">
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
