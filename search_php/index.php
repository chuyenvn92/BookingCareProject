<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Search Google</title>
</head>
<body>
<div id="header">
        <div id="topbar">
            <img id="searchbarimage" src="https://www.google.com.vn/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" />
            <form action="" method="GET">
            <div id="searchbar" type="text">
                <input id="searchbartext" type="text" value="" name="seacrh"/>
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
            <img id="profileimage" src="images/photo.png" />
        </div>
        <div id="optionsbar">
            <ul id="optionsmenu1">
                <li id="optionsmenuactive">All</li>
                <li>News</li>
                <li>Videos</li>
                <li>Images</li>
                <li>Maps</li>
                <li>More</li>
            </ul>

            <ul id="optionsmenu2">
                <li>Settings</li>
                <li>Tools</li>
            </ul>
        </div>
    </div>
    <div id="searchresultsarea">
        <p id="searchresultsnumber">About 155,000 results (0.56 seconds) </p>

        <?php
        $search_value = $_GET["search"];
        $con = new mysqli(localhost, root, chuyenvn99, medkee);
        if($con->connect_error){
            echo 'Connection Faild: '.$con->connect_error;
                }else{
        $sql="select * from benhvien where ten like '%$search_value%'";

        $res=$con->query($sql);
        }
        ?>
        <div class="searchresult">
            <h2>Demo</h2>
            <a>https://en.wikipedia.org/wiki/Lock_(computer_science)</a> <button>▼</button>
            <p>In computer science, a lock or mutex (from mutual exclusion) is a synchronization mechanism for enforcing limits on access to a resource in an</p>
            <p> environment where there are many threads of execution.</p>
        </div>
        <div class="relatedsearches">
            <h3>Searches related to computer engineering mutex concept</h3>
            <div class="relatedlists">
                <ul class="relatedleft">
                    <li>what is <b>mutex</b> and semaphore</li>
                    <li><b>mutex</b> lock c++</li>
                    <li><b>mutex</b> java</li>
                    <li><b>mutex</b> c++</li>
                </ul>
                <ul class="relatedright">
                    <li><b>mutex</b> vs lock</li>
                    <li><b>mutex</b> semaphore example</li>
                    <li><b>mutex</b> and semaphore example in c</li>
                    <li><b>mutex</b> c#</li>
                </ul>
            </div>
        </div>

        <div class="pagebar">
            <ul class="pagelist">
                <li class="pagelistprevious">Previous</li>
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
                <li class="pagelistnext">Next</li>
            </ul>
        </div>
    </div>

    <div id="footer">
        <div id="footerlocation">
            <p>Somewhere, Moon </p>
            <p> - From your phone (Location History) - Use precise location - Learn more</p>
        </div>

        <ul id="footermenu">
            <li>Help</li>
            <li>Send feedback</li>
            <li>Privacy</li>
            <li>Terms</li>
        </ul>
    </div>
</body>
</html>