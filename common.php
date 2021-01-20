
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

    $dropDownNames = array("Profile","Login","Register");
    $dropDownLinks = array("profile.php","#","register.php");

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
    echo '<ul id="hyperlinks">';
    for ($x = 0; $x < count($pageNames); $x++) {
        echo '<li class="hyperlinks"><a  href="' .$pageLinks[$x]. '">' .$pageNames[$x]. '</a></li>';
    }
    echo '</ul>';

    echo '<div align="center" class="copyrightText">';
    echo '<p>A</p>';
    echo '</div>';

    echo '</body>';
    echo '</html>';
}

?>
