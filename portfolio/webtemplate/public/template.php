<?php
require_once('../private/initialize.php');
//require login
if(!isset($_SESSION['user_id'])){
    $url="login.php";
    redirect_to($url);
}
include_once("../private/shared/header.php");
?>

<div class="hero1">
	<div class="hero-text">
			<h1>Templates</h1>
	</div>

	</div>
<?php
$fileswithparent = scandir('templates/');
$filesnoparent = array_diff($fileswithparent, array('.', '..'));
foreach($filesnoparent as $file){ ?>
    <section class="section-light">
    <p> Template <?php echo $file; ?>&nbsp;</p>
    <a href="../public/templates/<?php echo $file; ?>" download="<?php echo $file; ?>">
    	<img src="../public/images/download-solid.svg" alt="download Template">
    </a>
    </section>
    <?php }?>
<?php
require_once("../private/shared/footer.php");
?>
