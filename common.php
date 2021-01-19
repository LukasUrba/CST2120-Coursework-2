
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
        echo '<li ><a class="headerLinks leftLinks" ';
        if ($leftLinkNames[$x] == $pageName){
            echo 'id="selected" ';
        }
        echo 'href ="' .$leftLinkAddress[$x]. '">' .$leftLinkNames[$x]. '</a></li>';
    }

    echo '<li style="float:right"><a class="headerLinks rigthLinks" ';
    if($pageName == "Profile" || $pageName == "Register") {
        echo 'id="selected" ';
    }
    echo 'href ="profile.php">User</a>';
    echo '<ul>';
    for ($x = 0; $x <count($dropDownNames); $x++) {
        echo '<li><a class="dropdownLinks headerLinks" href="' .$dropDownLinks[$x]. '">' .$dropDownNames[$x]. '</a></li>';
    }
    echo '</ul>';

    echo '<li style="float:right"><a class="headerLinks rigthLinks" ';
    if($pageName == "Basket") {
        echo 'id="selected" ';
    }
    echo 'href ="basket.php">Basket</a></li>';
    echo '</ul>';

    echo '</div>';
}

?>
