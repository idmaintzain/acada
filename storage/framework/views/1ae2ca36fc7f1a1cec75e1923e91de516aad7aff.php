
<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
 

 <?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <body>

    <div class="container">

     <?php echo $__env->make('includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>ABOUT ACADA</h1>
        
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
        </p>
      </div>
 <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div> <!-- /container -->




  </body>
</html>
