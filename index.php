<?php
    include('common.php');
    headData("Homepage");
    webHeader("Home");
?>
<head>
</head>
<div class="reviews">
    <p>Reviews</p>
    <div class="review1">
        <img class="reviewImages" src="/Images/homepage1.jpg" alt="Image of holiday reviewed">
        <h6 class="reviewTitle">"Best Holiday Ever"</h6>
        <p class="reviewSentence">Amazing time spent there</p>
        <div class="allStars">
            <div class="star checked"></div>
            <div class="star checked"></div>
            <div class="star checked"></div>
            <div class="star checked"></div>
            <div class="star checked"></div>
        </div>
    </div>

    <div class="review2">
        <img class="reviewImages" src="/Images/homepage2.jpg" alt="Image of holiday reviewed">
        <h6 class="reviewTitle">"Very enjoyable"</h6>
        <p class="reviewSentence">Great place to visit</p>
        <div class="allStars">
            <div class="star checked"></div>
            <div class="star checked"></div>
            <div class="star checked"></div>
            <div class="star checked"></div>
            <div class="star"></div>
        </div>
    </div>

    <div class="review3">
        <img class="reviewImages" src="/Images/homepage3.jpg" alt="Image of holiday reviewed">
        <h6 class="reviewTitle">"Nice and relaxing"</h6>
        <p class="reviewSentence">Magical location</p>
        <div class="allStars">
            <div class="star checked"></div>
            <div class="star checked"></div>
            <div class="star checked"></div>
            <div class="star checked"></div>
            <div class="star"></div>
        </div>
    </div>

    <div class="review4">
        <img class="reviewImages" src="/Images/homepage4.jpg" alt="Image of holiday reviewed">
        <h6 class="reviewTitle">"Good holiday spot"</h6>
        <p class="reviewSentence">Had fun there</p>
        <div class="allStars">
            <div class="star checked"></div>
            <div class="star checked"></div>
            <div class="star checked"></div>
            <div class="star checked"></div>
            <div class="star checked"></div>
        </div>
    </div>

    <div class="review5">
        <img class="reviewImages" src="/Images/homepage5.jpg" alt="Image of holiday reviewed">
        <h6 class="reviewTitle">"Pretty good"</h6>
        <p class="reviewSentence">Was a fun time</p>
        <div class="allStars">
            <div class="star checked"></div>
            <div class="star checked"></div>
            <div class="star checked"></div>
            <div class="star "></div>
            <div class="star"></div>
        </div>
    </div>

</div>

<h1 id="pageTitle">Z Travel Holidays</h1>

<div class="slideshowContainer">
    <div class="slideshow fade">
        <a href="single.php"><img id="hPic1" src="/Images/homepage1.jpg" alt="First Holiday" style="width:100%"></a>
        <div class="imageText">Holiday 1</div>
    </div>

    <div class="slideshow fade">
        <a href="single.php"><img src="/Images/homepage2.jpg" alt="Second Holiday" style="width:100%"></a>
        <div class="imageText">Holiday 2</div>
    </div>

    <div class="slideshow fade">
        <a href="single.php"><img class="picSet" src="/Images/homepage3.jpg" alt="Third Holiday" style="width:100%"></a>
        <div class="imageText">Holiday 3</div>
    </div>

    <div class="slideshow fade">
        <a href="single.php"><img class="picSet" src="/Images/homepage4.jpg" alt="Fourth Holiday" style="width:100%"></a>
        <div class="imageText">Holiday 4</div>
    </div>

    <div class="slideshow fade">
        <a href="single.php"><img class="picSet" src="/Images/homepage5.jpg" alt="Fifth Holiday" style="width:100%"></a>
        <div class="imageText">Holiday 5</div>
    </div>

    <a class="previous" onclick="nextSlide(-1)">&#10094;</a>
    <a class="next" onclick="nextSlide(1)">&#10095;</a>
</div>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>
<script src="/Scripts/index.js"></script>

<div class="featuredHols">
    <h3 id="featuredTitle">Featured Holidays</h3>
    <div class="featuredActual">
        <img class="featuredImages" src="/Images/homepage1.jpg" alt="Image of featured holiday">
        <h6 class="featuredItemTitle">Spain</h6>
        <p class="featuredItemDesc">Amazing holiday with a view</p>
        <a href="single.php" id="seeMore">See More</a>
    </div>
    <div class="featuredActual">
        <img class="featuredImages" src="/Images/homepage4.jpg" alt="Image of featured holiday">
        <h6 class="featuredItemTitle">Spain</h6>
        <p class="featuredItemDesc">Amazing holiday with a view</p>
        <a href="single.php" id="seeMore">See More</a>
    </div>
    <div class="featuredActual">
        <img class="featuredImages" src="/Images/homepage3.jpg" alt="Image of featured holiday">
        <h6 class="featuredItemTitle">Spain</h6>
        <p class="featuredItemDesc">Amazing holiday with a view</p>
        <a href="single.php" id="seeMore">See More</a>
    </div>
</div>

<div id="sideImage">
    <a href="single.php"><img src="/Images/homepage-side-image.jpg" alt="Long picture"></a>
    <p id="specialText">Special Deal</p>
</div>
<?php
    webFooter();
?>
