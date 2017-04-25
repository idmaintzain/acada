<?php // Illuminate\Support\Collection;  ?>
<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
 

 <?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <body>

    <div class="container">

     <?php echo $__env->make('includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>WELCOME TO ACADA</h1>
        <p>ACADA is an open source community built with PHP using Laravel, it allows developers share links of helpful videos.
</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">Read More &raquo;</a>
        </p>
      </div> 

        <!-- ******CONTENT****** --> 
     
           <!-- <div  class="">
             
                    
                        <img src="slides/slide-1.jpg"  alt="" />
                        
            </div>//flexslider-->

       <!-- Page Content -->
       



<div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">CATEGORY - PHP</h1>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               
            </div>
          
        </div>

    </div> <!-- /container -->


<div class="bs-example">
   <div class="container">
        <div class="row"> <?php  
 $html = DB::table('video')->where('category', 'PHP')->get();

   foreach ($html as $video1) {  ?>
            <div class="col-xs-6" style="width: 33%;">
                <div class="thumbnail" >
                 <?php  echo $video1->video_url; ?> 
                    <div class="caption">
                        <h3>  <?php  echo $video1->video_title; ?> </h3>
                        <p>Posted by: <?php  echo $video1->posted_by; ?> </p>
                    </div>
                </div>
            </div>
            <?php }  ?>

        </div>
    </div>     
</div>









 <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
</html>
