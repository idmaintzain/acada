
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
                <a class="thumbnail" href="#">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/cccUdsONu28" frameborder="0" allowfullscreen></iframe>
                </a>
            </div>
          
        </div>

    </div> <!-- /container -->


    <?php
  
   $user = DB::table('users')->where('name', 'Idowu Adeyinka')->first();

echo $user->name;



?>

 @include('includes.footer')
  </body>
</html>
