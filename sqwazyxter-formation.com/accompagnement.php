
    <?php 
    session_start();
   
if(isset($_SESSION['user']))
{
    require_once 'includes/headerOnline.php'; 
     
     
}
else {
    require_once 'includes/header.php'; 
}
?>
    <title>sqwazyxter/Formation - Accompagnement</title>
  </head>

  <?php
  if(isset($_SESSION['user']))
  {
      
      require_once 'includes/accompagnementOnline.php'; 
       
  }
  else {
      require_once 'includes/accompagnementOffline.php'; 
  }
  require_once 'includes/footer.php';
  ?>
  