<?php
/**
 * Partial view file containing the main part of html files
 *
 * $title may be used for title and main heading
 * $SERVER['mainpart'] may be used to specify the name of an include file
 *
 * PHP Version 7
 *
 * @File      App/Views/html-first.html.php
 * @category Demo
 * @package   Small Demo
 * @author    Stephen Wardill <s5n.wardill@gmail.com>
 * @copyright 2017 Stephen Wardill
 * @license   https://www.gnu.org/licenses/gpl.txt GPL 3.1
 * @link      https://github.com/paleo9
 */

namespace Paleo9;

$title = "Test 1";

?>

<!doctype html>
<html lang="en">
<head>
<title><?= $title ?></title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1><?php= $title ?></h1>
<?php include $_SERVER['mainpart'] ?>
</body>
</html>
