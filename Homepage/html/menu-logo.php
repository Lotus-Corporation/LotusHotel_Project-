<link rel="stylesheet" href="./css/menu-logo.css"> 
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link href="css/font-awesome.min.css" rel="stylesheet"/>
<style>

</style>
<?php 
  $link=new mysqli("localhost", "root","","khachsan");
  $sql="select * from LOAIPHONG";
  $result=$link->query($sql);
?>
<div id="header" class="thanh_logo1">
  <a  style="float:left; font-size: 30px;margin-left:20px;" href="">
  <i class="fa fa-bars"></i>
  </a>
  <a  style="float:left; font-size: 35px;margin-left:20px; " href="index_menu.php">
  <i class="fa fa-home"></i>
  </a>
  <div class="logo1" >Our rooms
    <div class="menu" >
        <?php
          while ($row=$result->fetch_assoc())
          {
        ?>   
            <a href="index_menu.php?pid=8&&malp=<?php echo $row["MA_LOAIPHONG"] ?>"> <?php echo $row["LOAIPHONG"];?></a>
        <?php
          }
        ?>
    </div>
  </div class="mmenu">
  <a class="logo1" href="index_menu.php?pid=2" >Services</a>
  <a class="logo1" href="index_menu.php?pid=3"> Restaurant </a>
  <a class="logo" href="index_menu.php">
    <img src="img/anhphongnoibat/logo.png" alt="" width=100% height=130px ></a> 
  <a class="logo1" href="index_menu.php?pid=4">Spa&Wellness</a>
  <a class="logo1" href="index_menu.php?pid=5" >Special Offers</a>
  <a class="logo1" href="index_menu.php?pid=6">Contacts</a>
  <a  style="float:left; font-size: 35px; margin-right:20px;" href="index_menu.php?pid=7">
  <i class="fa fa-shopping-cart"></i>
  </a>
  <a  style="float:left; font-size: 30px; margin-right:20px;" href="view/login.php">
  <i class="fa fa-user"></i>
  </a>
</div>
<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      var header = document.getElementById("header");
      if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        header.classList.add("shrink");
      } else {
        header.classList.remove("shrink");
      }
    }
  </script>



      
