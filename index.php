<?php
session_start();

/*---------- ---------------------------*/

$pages = scandir('pages');
$page = $_GET['page'];

if (!empty($page) AND in_array($page . '.php' ,$pages))
{
	$content = 'pages/' . $page . '.php';

}else header("location:index.php?page=home");

/*------------------------------------------*/

include 'includes/config.php';

include 'includes/header.php';

echo '<div class="container main-section border-primary">';
        include $content;
echo '</div>';

include 'includes/footer.php';

include 'includes/social.php';

?>


</div>


<?php   ?>

