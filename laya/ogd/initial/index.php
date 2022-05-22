<?php // vim: set sw=4 expandtab nu:
/**
 * Laya clinical indicator codes for initial gastroscopy.
 *
 * Codes from the relevant documentation
 *
 * PHP version 8.0
 *
 * @category  CategoryName
 * @package   CodingClinicalIndicators
 * @author    Adrian P. Ireland <author@example.com>
 * @copyright 2022 Adrian P. Ireland
 * @license   http://www.gnu.org/licences/gpl GPL
 * @version   SVN: $Id$
 * @link      http://localhost/~adrian
 */

$backref = '../../../';
$file = __FILE__;
require $backref . 'templates/header.inc';
require $backref . 'templates/navbar.inc';

spl_autoload_register(
    function ($class_name) {
        $string = '../../../classes/' . $class_name . '.php';
        include $string;
    }
);

// Instantiate the class
$table = new LayaOgdInitial();

?>
<h1>Laya</h1>
<h2>OGD clinical indicators</h2>

<h3>Indicator codes for the initial gastroscopy</h3>

<?php
// Output the html
$table->outputTable();

require $backref . 'templates/footer.inc';

