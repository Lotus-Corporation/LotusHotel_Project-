<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from DICHVU";
    $result=$link->query($sql);
?>
<style>
    body{
        background:linear-gradient(rgb(231, 245, 249),rgb(193, 233, 244));
        margin: 0;
    }
    .layout_anh{
        height: 700px; 
        background-color:rgb(40, 129, 143); 
        position:relative; 
        background-attachment: fixed;
        background-image: url('https://hiltonbyplaya.honeymoonwishes.com/images/registry_images/popup_138584.jpg');
        background-position: center center;
        margin-bottom: 7%;
    }   
    .layout_anh_opacity{
        width: 100%;
        height: 700px; 
        position:absolute; 
        top:0;
        background-color: black;
        opacity:0.4;
    }
    .loigoi{
        text-align: center; 
        position:absolute; 
        top:43%;
        left:38%;
        color: #fff;    
    }
    .layout:nth-child(n){
        margin-left: 10%;
    }
    .layout:nth-child(n+1){
        margin-right: 6%;
    }
    .layout_con{
        float: left; 
        width:30%;
        height: 380px;
        margin: 1.5% 1%;
        text-decoration: none;
        position: relative;
        overflow: hidden;
        transition: 0.25s
    }
    .layout_con:hover{
        transform: scale(1);
        opacity: 0.9
    }
    .layout_con > img{
        transition: 0.7s;
    }
    .layout_con > img:hover{
        transform: scale(1.07);
        opacity: 0.93
    }
    .mota{
        margin-left: 5%;
        color: black;
        position: absolute;
        top:250px;
        background-color: #fff;
        width: 83%;
        padding-left: 7%;
        border-radius: 5px;
        transition: 0.5s;
        font-size: 18px;
        font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .mota:hover{
        background-color: gray;
        color: #fff;
    }
    h3{
        margin-bottom: -10px;
    }

</style>

<div class="layout_anh">
    <div class="layout_anh_opacity"></div>
    <div class="loigoi">
        <div style=" font-size:60px; margin-left:15%">SERVICES</div>
    </div>
</div>
<?php
    while ($row=$result->fetch_assoc())
    {
?>
<form method="POST" action="view/public_giohang.php?action=add">
    <div class="layout">
        <div class="layout_con">
            <img src="img/dichvu/<?php echo $row["HINHANHDV"]; ?>" style="width: 100%; height: 280px; border-radius:5px">
            <div class="mota">
                <h3><?php echo $row["TENDV"] ?></h3>
                <p><?php echo $row["DONGIADV"]?> VND/<?php echo $row["DONVITINH"]?></p>
            </div>
            <input type=hidden value="1" name="soluong_dv[<?php echo $row["MA_DV"]?>]">
            <input type=submit>
        </div>
    </div>
</form>
<?php
    }
?>