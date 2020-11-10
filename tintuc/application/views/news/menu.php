
<div class="menu " style="height:40px;font-size:15px" >
    <ul >      
        <li><a href="<?php echo site_url(''); ?>">Trang chủ</a></li>
        <?php
        foreach ($menu as $dong) {
            ?>
            <li><a href="<?php echo site_url('news/loaitin') . '/' . $dong['idloaitin']; ?>">
                    <?php
                    echo $dong['tenloaitin'];
                    ?></a></li>
            <?php
        }
        ?>
        <li><a href="<?php echo base_url('contact'); ?>"> Liên Hệ </a></li>
     <li style="height:40px;font-size:15px; font-weight: bold; float: right;" >
         <a href="<?php echo base_url('login'); ?>">Login</a>
     </li>
    </ul>
   
    

</div>

<!-- ket thuc menu -->