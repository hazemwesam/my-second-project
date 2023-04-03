<?php require_once("header.php"); ?>

<?php if (isset($_SESSION['login'])):?>
<h1>Email : <?php echo $_SESSION['login']["email"]; ?></h1>
<h1>ID :<?php echo $_SESSION['login']["id"]; ?></h1>
<?php else:?>
<div class="container alert alert-primary"><h1><center>login first</center></h1></div>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>