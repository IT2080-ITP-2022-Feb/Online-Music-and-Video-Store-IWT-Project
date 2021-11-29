<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/collstyle.css">
    <title> Video player</title>
</head>
<?php include('../php/navigation.php');?>

<body oncontextmenu="return false">
<br><br><br><br><br><br>
    <div class="container"><br><br><br><br><br><br>
        <h1>Watch Our Videos</h1>
        <div id="video_player">
            <video controls poster="" class="video" id="video">
                <source src="../upload/Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4" type="video/mp4">
                <source src="../upload/Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4" type="video/mp4">
            </video>
            <div class="scrollBox">
                <div class="box">
                    <img src="../image/videos.png">
                    <div class="box-content">
                        <h3>Zik Music</h3>
                        <a href="../upload/Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4" class="btn">Watch Now</a>
                    </div>
                </div>
                <div class="box">
                    <img src="../image/videos.png">
                    <div class="box-content">
                        <h3>Zik Music</h3>
                        <a href="../upload/Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4" class="btn">Watch Now</a>
                    </div>
                </div>
                <div class="box">
                    <img src="../image/videos.png">
                    <div class="box-content">
                        <h3>Zik Music</h3>
                        <a href="../upload/Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4" class="btn">Watch Now</a>
                    </div>
                </div>
                <div class="box">
                    <img src="../image/videos.png">
                    <div class="box-content">
                        <h3>Zik Music</h3>
                        <a href="../upload/Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4" class="btn">Watch Now</a>
                    </div>
                </div>
                <div class="box">
                    <img src="../image/videos.png">
                    <div class="box-content">
                        <h3>Zik Music</h3>
                        <a href="../upload/Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4"class="btn">Watch Now</a>
                    </div>
                </div>
                <div class="box">
                    <img src="../image/videos.png">
                    <div class="box-content">
                        <h3>Zik Music</h3>
                        <a href="../upload/Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4" class="btn">Watch Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ###########################javascript for vidoe Player################ -->

    <script type="text/javascript">
        let anchors = document.querySelectorAll('div .btn');
    let links = [...anchors];
    
    for (let i=0; i<links.length; i++) {
        links[i].onclick = handler;
    }
    function handler(e) {
        e.preventDefault();
        let videotarget = this.getAttribute("href");
        let filename = videotarget.substr(0, videotarget.lastIndexOf('.'));
        let video = document.getElementById("video");
        video.removeAttribute("poster");
        let source = document.querySelectorAll("#video_player video source");
        source[0].src = filename + ".mp4";
        source[1].src = filename + ".m4v";
        video.load();
        video.play();
    }
    </script>
</body>
</html>