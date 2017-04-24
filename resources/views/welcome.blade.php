<?php // Illuminate\Support\Collection;  ?>
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
 

 @include('includes.head')

  <body>

    <div class="container">

     @include('includes.nav')

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>WELCOME TO ACADA</h1>
        <p>ACADA is an open source community built with PHP using Laravel, it allows developers share links of helpful videos.
</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
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
                <h1 class="page-header">Video Gallery</h1>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <table border="1" align="center">
<tr>
  
    <td>
   
   </td>


 </tr></table>
            </div>
          
        </div>

    </div> <!-- /container -->






<div class="bs-example">
   <div class="container">
        <div class="row"> <?php  
 $video = DB::table('video')->get();

   foreach ($video as $vid) {  ?>
            <div class="col-xs-6" style="width: 33%;">
                <div class="thumbnail" >
                 <?php  echo $vid->video_url; ?> 
                    <div class="caption">
                        <h3>  <?php  echo $vid->video_title; ?> </h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula. Cras justo odio, dapibus ac facilisis in quam.</p>
                        <p><a href="#" class="btn btn-primary">Share</a> <a href="#" class="btn btn-default">Download</a></p>
                    </div>
                </div>
            </div>
            <?php }  ?>

        </div>
    </div>     
</div>




 @include('includes.footer')
  </body>
</html>
