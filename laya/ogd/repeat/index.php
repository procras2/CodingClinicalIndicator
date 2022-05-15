<?php // vim: set sw=4 expandtab nu:
/**
 * Index file for finding clinical indicator codes
 *
 * Codes from the relevant documentation
 * for Laya gastroscopy repeat endoscopy
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
$table = new LayaOgdRepeat();

?>
<h1>Laya</h1>
<h2>OGD clinical indicators</h2>
<h3>Indicator codes for a repeat gastroscopy</h3>

<p>
    Benefit is available for a repeat upper GI endoscopy, procedure code 194,
    as per the following clinical indications.
</p>

<p>
    <b>Note:</b> New clinical presentation will not be excluded by a prior
    endoscopy, please refer to <a href="../initial/index.php">initial endoscopy
    clinical indicators</a> and/or submit a detailed medical report with the claim.
</p>

<?php
// Output the html
$table->outputTable();

require $backref . 'templates/footer.inc';

