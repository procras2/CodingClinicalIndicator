<?php // vim:set ts=4 expandtab nu:
/**
 * Main index file for finding clinical indicator codes
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
$table = new LayaOgdSurveillance();

?>
<h1>Laya</h1>
<h2>OGD clinical indicators</h2>
<h3>Surveillance</h3>

<p>
  No Consultant or hospital benefits are payable for a surveillance upper GI
  endoscopy except for the following clinical indications: 
</p>

<?php
// Output the html
$table->outputTable();

require $backref . 'templates/footer.inc';

