<div class="content_left" style="width:auto;">
    <div class="box2 widthloaitin">
        <ul>
            <?php
            foreach ($news as $dong) {
                ?>
                <img src="<?php echo base_url('news') . '/' . $dong['anhminhhoa'] ?>" width="80" height="80"  style="float:left;"/>
                <li style="list-style:none; font-size:16px"><a href="<?php echo site_url('news/detail') . '/' . $dong['idbaiviet']; ?>"><?php echo $dong['tenbaiviet'] ?></a></li>
                <p class="tomtatloaitin"><?php echo stripcslashes($dong['tomtat']) ?></p>
                <div class="clear"></div>
                <?php
            }
            ?>
        </ul>
    </div>
</div>