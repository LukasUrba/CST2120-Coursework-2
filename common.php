
<?php
function headData($title) {
    echo '<!DOCTYPE html>';
    echo '<html>';

    echo '<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="Styles/style.css"> 
            <title>' .$title. '</title>
            </head>';
    echo '<body>';

}

function webHeader($pageName) {
    echo '<div id="header">';
    echo '<img id="logo" src="/Images/Logo2.png" alt="Logo">';

    $leftLinkNames = array("Home","Search");
    $leftLinkAddress = array("index.php","search.php");

    $dropDownNames = array("Profile","Login","Register","Admin");
    $dropDownLinks = array("profile.php","#","register.php","#");

    echo '<ul>';
    for($x = 0; $x < count($leftLinkNames); $x++) {
        echo '<li class="headerLinks"><a class="leftLinks" ';
        if ($leftLinkNames[$x] == $pageName){
            echo 'id="selected" ';
        }
        echo 'href ="' .$leftLinkAddress[$x]. '">' .$leftLinkNames[$x]. '</a></li>';
    }

    echo '<li class="headerLinks" style="float:right"><a class="rightLinks" ';
    if($pageName == "Profile" || $pageName == "Register") {
        echo 'id="selected" ';
    }
    echo 'href ="profile.php">User</a>';
    echo '<ul>';
    for ($x = 0; $x <count($dropDownNames); $x++) {
        echo '<li class="headerLinks"><a class="dropdownLinks" href="' .$dropDownLinks[$x]. '">' .$dropDownNames[$x]. '</a></li>';
    }
    echo '</ul>';

    echo '<li class="headerLinks" style="float:right"><a class="rightLinks" ';
    if($pageName == "Basket") {
        echo 'id="selected" ';
    }
    echo 'href ="basket.php">Basket</a></li>';
    echo '</ul>';

    echo '</div>';
}

function webFooter() {

    $pageNames = array("Home","Search","Basket","Profile","Register","Contact");
    $pageLinks = array("index.php","search.php","basket.php","profile.php","register.php","contact.php");

    echo '<div id="footer">';
    echo '<ul class="hyperlinks">';
    for ($x = 0; $x < count($pageNames); $x++) {
        echo '<li class="hyperlinks"><a  href="' .$pageLinks[$x]. '">' .$pageNames[$x]. '</a></li>';
    }
    echo '</ul>';

    echo '<div id="copyrightText">';
        echo'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rhoncus, sapien in congue aliquam,
                justo erat gravida mi, vitae consectetur ante lectus eget erat. Aliquam sodales pharetra magna, 
                vel pharetra elit dapibus id. Nullam molestie ut dolor in sodales. 
                Quisque maximus eget dolor laoreet varius. Aenean iaculis nisi tristique eros sodales dignissim. 
                Sed tellus nisi, vulputate non quam ut, eleifend ultricies justo. Sed auctor scelerisque congue. 
                Pellentesque convallis quis lacus sed congue.
            </p>';
    echo '</div>';
    
    echo '<ul class="footerLogos">';
        echo '<li><a href="https://github.com/">
            <img  class="footerLogosEach" src="/Images/github-logo.png" alt="Github logo as a link"></a></li>';
        echo '<li><a href="https://www.instagram.com/">
            <img  class="footerLogosEach" src="/Images/insta-logo.png" alt="Instagram logo as a link"></a></li>';
        echo '<li><a href="https://www.trustpilot.com/">
            <img  id="trustpilot" class="footerLogosEach" src="/Images/trustpilot-logo.png" alt="Trustpilot logo as a link"></a></li>';       
    echo '</ul>';

    echo '</div>';
    echo '</body>';
    echo '</html>';
}

?>
