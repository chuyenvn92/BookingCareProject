<ul class="nav nav-pills">
    <li>
        <a target='_blank' title="Google apps" class="firstsbuttons" href=""><img class="quad" src="https://lh3.googleusercontent.com/ogw/ADGmqu_H83kmSWBPHFqIW87dh4I2Teqyguf7o08rmFBLoA=s32-c-mo" height="40" width="40" alt=""></a>
    </li>
    <li><a target='_blank' class="firstsbuttons" href="">Images</a></li>
    <li><a target='_blank' class="firstsbuttons" href="">Gmail</a></li>
</ul>
<div class="page">
    <img class="logo" alt="" src="https://www.google.it/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png">
    <br>
    <form action="<?php echo Yii::app()->createUrl("benhvien/search") ?>" method="GET">
<!--<input type="hidden" name="r" type="text" value="benhvien/search">-->
        <input id="searchme" name="search" class="search" title="Search" type="text" required><br>
        <div class="Bcontainer">
            <input class="button left" type="submit" value="Tìm với Google" type="submit">
            <div class="button">Xem trang đầu tiên tìm được</div>
        </div>
    </form>
</div>