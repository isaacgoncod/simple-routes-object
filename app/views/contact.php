<?php $this->layout('master')?>

<h1><?php echo $name;?></h1>

<form action="" method="post">

  <input type="email" name="email">
  <input type="password" name="password">

  <button type="submit">Login</button>
  
</form>