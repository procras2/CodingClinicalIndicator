<?php // vim: set sw=4 expandtab nu:
/**
 * VHI clinical indicator codes for repeat colonoscopy.
 *
 * Codes from the relevant documentation
 *
 * PHP version 8.0
 *
 * @category  CategoryName
 * @package   CodingClinicalIndicators
 * @author    Adrian P. Ireland <author@example.com>
 * @copyright 2012 Adrian P. Ireland
 * @license   http://www.gnu.org/LGPL LGPL
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
$table = new VhiColonRepeat();

?>
<h1>VHI</h1>
<h2>Colonoscopy clinical indicators</h2>
<h3>Repeat</h3>

<?php
// Output the html
$table->outputTable();

require $backref . 'templates/footer.inc';

