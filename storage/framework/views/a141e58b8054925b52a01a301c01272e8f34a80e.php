      
      <?php $__env->startSection('content'); ?>
      <p>HEllow index.php</p>
      <h1 align="center">hey</h1>
          
      <?php $__env->stopSection(); ?>
      

<?php echo $__env->make(view('layout.app'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>