<?php require_once("header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">
<!-- <?php
    //     if(isset($_SESSION['fail'])):
    // foreach($_SESSION['fail'] as $errors): ?>

<div class="alert alert-danger"><?php //echo $errors?></div> -->
    
    <?php // endforeach;
    // unset($_SESSION['fail']);
    // endif;?>

    <?php // if(isset($_SESSION['failed'])): ?>
         <!--   <div class="alert alert-primary"><?php //echo $_SESSION['failed'];?></div>      
                <?php// unset($_SESSION['failed']);endif;?> -->

                <?php  
    if(isset($_SESSION['fail'])):
    foreach($_SESSION['fail'] as $errors): ?>

<div class="alert alert-danger"><?php echo $errors?></div>
    
    <?php  endforeach;
    unset($_SESSION['fail']);
    endif;?>

    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success"><?php echo $_SESSION['success'] ; ?></div>
      <?php  unset($_SESSION['success']);
        endif; ?> 


            <form action="errors.php" method= "post">
            <h6>Id</h6>
                <input type="id_reg" name="id" class="form">
                <pre></pre>    
            <h6>Email</h6>
                <input type="email" name="email" class="form">
                <pre></pre>
                <h6>Password</h6>
                <input type="password" name="password" class="form">
                <input type="submit" value="register" class="form">
            </form>

        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>