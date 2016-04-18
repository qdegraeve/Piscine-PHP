<?php 
session_start();
include('auth.php');
include('create.php');
include('get_datas.php');
include('add_to_basket.php');
include('modif.php');

$users = get_users();
$articles = get_articles();
$basket = get_basket();
$categories = get_categorie();

if (isset($_GET['name']) && isset($_POST))
	unset($_POST);

if (isset($_POST['submit']))
{
	$sub = $_POST['submit'];
	if ($sub == 'LOGIN')
	{
		if (($key = auth($_POST['login'], $_POST['passwd'], $users)) !== FALSE)
		{
			$_SESSION['user'] = $users[$key];
		}
	}
	elseif ($sub == '-')
		$basket = quantity_minus($_POST['id'], $basket);
	elseif ($sub == '+')
		$basket = quantity_more($_POST['id'], $basket);
	elseif ($sub == 'x')
		$basket = delete_product($_POST['id'], $basket);
	elseif ($sub == 'Pas encore inscrit ?')
		$create = 1;
	elseif ($sub == 'Ajouter un produit')
		$create = 2;
	elseif ($sub == 'creer mon produit')
		$articles = create_article($articles, $categories);
	elseif ($sub == 'modifier mon compte')
		$modif = 1;
	elseif ($sub == 'Commander')
	{
		if (!isset($_SESSION['user']))
			$_SESSION['error'] = "Veuillez vous connecter avant de passer commande";
		else
			$_SESSION['error'] = "Commande validee";
	}

	elseif ($sub == 'Section administrateur'  || $sub == 'Modifier l\'utilisateur' || $sub == 'Modifier le produit' || $sub == 'Modifier la categorie' || $sub == 'Modifier cet utilisateur' || $sub == 'Modifier ce produit' || $sub == 'Modifier cette categorie' || $sub == 'Ajouter une categorie')
	{
		$admin = 1;
		if ($sub == 'Modifier l\'utilisateur')
			$users = modif_user($users);
		elseif ($sub == 'Modifier le produit')
			$articles = modif_articles($articles, $categories);
		elseif ($sub == 'Modifier la categorie')
			$categories = modif_categories($categories);
		elseif ($sub == 'Ajouter cette categorie')
			$categories = create_category($categories);
	}
	elseif ($sub == 'Ajouter au panier')
		$basket = add_to_basket($_POST['id'], $articles, $basket);
	elseif ($sub == "CREATE")
		create_user($users);
}

?>

<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/product.css">
	<title>CACA</title>
</head>

<body>
	<div id="frame">

	<?php if (isset($_SESSION['error'])) : ?>
	<h1><?php echo $_SESSION['error']; ?></h1>
	<?php endif ?>
	<?php unset($_SESSION['error']); ?>

		<?php include('header.php'); ?>

		<div class="container">
			<div class="main">
<?php 
if ($create == 1)
	include('create.html');
elseif ($modif == 1)
	include('modif.html');
elseif ($create == 2)
	include('add_article.php');
elseif ($admin == 1)
	include('admin.php');
elseif (isset($_GET['name']) && $_GET['name'] != 'home')
	include('products.php');
else
	include('home.php')
	?>
			</div>
			<aside class="right">
				<?php include('connect.php'); ?>
			</aside>
		</div>
	</div>
</body>
</html>
