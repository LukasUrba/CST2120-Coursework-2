
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
    //"Register", "Profile"
    //"register.php","profile.php"
    for($x = 0; $x < count($leftLinkNames); $x++) {
        echo '<a class="headerLinks leftLinks" ';
        if ($leftLinkNames[$x] == $pageName){
            echo 'id="selected" ';
        }
        echo 'href ="' .$leftLinkAddress[$x]. '">' .$leftLinkNames[$x]. '</a>';
    }

    echo '<a class="headerLinks rigthLinks" ';
    if($pageName == "Basket") {
        echo 'id="selected" ';
    }
    echo 'href ="basket.php">Basket</a>';

    echo '<a class="headerLinks rigthLinks" ';
    if($pageName == "Profile") {
        echo 'id="selected" ';
    }
    echo 'href ="profile.php">Profile</a>';

    echo '</div>';
}

?>
