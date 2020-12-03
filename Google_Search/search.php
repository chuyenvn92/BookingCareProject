<?php $search = $_GET['search']; ?>
<link rel="stylesheet" href="index.css"/>
<div id="header">
    <div id="topbar">
        <img id="searchbarimage" src="https://www.google.com.vn/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" />
        <form action="search.php" method="GET">
            <div id="searchbar" type="text">
                <input id="search" type="text" value="<?php echo $search ?>" name="search"/>
                <button id="searchbarmic">
                    <i class="fas fa-microphone"></i>
                </button>
                <button id="searchbarbutton">
                    <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                        </path>
                    </svg>
                </button>
            </div>
        </form>
        <div id="boxesicon"></div>
        <div id="bellicon"></div>
        <img id="profileimage" src="https://lh3.googleusercontent.com/ogw/ADGmqu_H83kmSWBPHFqIW87dh4I2Teqyguf7o08rmFBLoA=s32-c-mo" />
    </div>
    <div id="optionsbar">
        <ul id="optionsmenu1">
            <li id="optionsmenuactive">Tất cả</li>
            <li>Tin tức</li>
            <li>Video</li>
            <li>HÌnh ảnh</li>
            <li>Bản đồ</li>
            <li>Khám phá</li>
        </ul>

        <ul id="optionsmenu2">
            <li>Cài đặt</li>
            <li>Công cụ</li>
        </ul>
    </div>
</div>
<div id="searchresultsarea">
    <?php
    $button = $_GET['submit'];


    //connect to DB medkee

    $con = mysqli_connect('localhost', 'root', 'chuyenvn99', 'medkee');

    $sql = "SELECT * FROM benhvien WHERE ten LIKE '%$search%' or gioithieu LIKE '%$search%'";
    $getquery = mysqli_query($con, $sql);
    $found = mysqli_num_rows($getquery);

    if ($found == 0) {
        echo "<h1 id='searchresultsnumber'> Không tìm thấy kết quả cho từ khóa $search </h1>";
    } else {
//            $sql = "SELECT * FROM benhvien WHERE gioithieu like '%$search%'";
//            $getquery = mysqli_query($con, $sql);
        echo "<h1 id='searchresultsnumber'> Có $found kết quả cho từ khóa $search </h1>";
        while ($runrow = mysqli_fetch_array($getquery)) {
            echo "<div class='searchresult'>";
            echo "<a href='/'><h2>" . $runrow["ten"] . "</h2></a>";
            echo "<a href=''>" . $runrow["diachi"] . "</a><button>▼</button>";
            echo "<p>" . $runrow["gioithieu"] . "</p>";
            echo "</div>";
        }
    }
    ?>
    <div class="relatedsearches">
        <h3>Các tìm kiếm liên quan</h3>
        <div class="relatedlists">
            <ul class="relatedleft">
                <li>Bệnh viện<b> Việt Đức</b> khám bệnh</li>
                <li><b>Bệnh viện</b> Việt Đức</li>
                <li><b>Việt</b> Đức</li>
                <li><b>Bác sĩ</b> Việt Đức</li>
            </ul>
            <ul class="relatedright">
                <li><b>Việt Đức</b> đội ngũ</li>
                <li><b>khám cột sống</b> bệnh viện Việt Đức</li>
                <li><b>khoa chấn thương sọ não</b> bệnh viện Việt Đức</li>
                <li><b>bác sĩ giỏi</b> Việt Đức</li>
            </ul>
        </div>
    </div>

    <div class="pagebar">
        <ul class="pagelist">
            <li class="pagelistprevious">Trang trước</li>
            <li class="pagelistfirst">1</li>
            <li class="pagelistnumber">2</li>
            <li class="pagelistnumber">3</li>
            <li class="pagelistnumber">4</li>
            <li class="pagelistnumber">5</li>
            <li class="pagelistnumber">6</li>
            <li class="pagelistnumber">7</li>
            <li class="pagelistnumber">8</li>
            <li class="pagelistnumber">9</li>
            <li class="pagelistnumber">10</li>
            <li class="pagelistnext">Tiếp</li>
        </ul>
    </div>
</div>

<div id="footer">
    <div id="footerlocation">
        <p>Việt Nam   </p>
        <p>  Dựa trên hoạt động trước đây của bạn - Sử dụng vị trí chính xác - Tìm hiểu thêm</p>
    </div>

    <ul id="footermenu">
        <li>Trợ giúp</li>
        <li>Phản hồi</li>
        <li>Chính sách</li>
        <li>Điều khoản</li>
    </ul>
</div>


