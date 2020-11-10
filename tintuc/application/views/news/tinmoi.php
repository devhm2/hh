<?php
$dong = $tinmoi[0];
?>
<div class="box1">
    <img src="<?php echo base_url('news') . '/' . $dong['anhminhhoa'] ?>" width="350" height="250" />
    <p class="tieude"><a href="<?php echo site_url('news/detail') . '/' . $dong['idbaiviet']; ?>"><?php echo $dong['tenbaiviet'] ?></a></p>
    <p class="tomtat" ><?php echo $dong['tomtat'] ?></p>
</div>
<div class="box2">
    <ul>
        <?php
        $count = count($tinmoi);
        for ($i = 1; $i < $count; $i++) {
            $dong = $tinmoi[$i];
            ?>
            <li><a href="<?php echo site_url('news/detail') . '/' . $dong['idbaiviet']; ?>">
                    <?php echo $dong['tenbaiviet'] ?>
                </a></li>
            <?php
        }
        ?>
    </ul>
</div>
<div class="clear"></div>