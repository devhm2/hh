<?php
$dong = $news;
?>
<div class="content_left row" style="    width: 100%;
    text-align: justify;
    float: right;
    margin-right: 150px;
}" >
    <?php echo $dong['tenbaiviet'] ?>
    <?php
    echo stripcslashes($dong['noidung']);
    ?>
    <?php
    $lienquan = array();
    $lienquan['idloaitin'] = $dong['idloaitin'];
    $lienquan['cur_id'] = $dong['idbaiviet'];
    $this->load->view('news/tinlienquan', $lienquan);
    ?>
    <div class="scroll-to-top" style="position:fixed;bottom:20%;left:80%;cursor:pointer;display:none;">
        <img src="imgs/Scroll to top.gif" width="40" height="40" />
    </div>
</div>