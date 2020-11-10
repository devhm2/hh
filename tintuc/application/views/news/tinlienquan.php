<p style="color:#960;font-size:16px;">Tin liên quan</p>
<ul style="list-style:none;margin-left:20px;">
    <?php
    //while($dong=mysqli_fetch_array($baiviet)){ 
    foreach ($lienquan as $dong) {
        ?>
        <li style="margin-top:10px;"><a href="<?php echo site_url('news/detail') . '/' . $dong['idbaiviet']; ?>"><?php echo $dong['tenbaiviet'] ?></a></li>
            <?php
        }
        ?>
</ul>