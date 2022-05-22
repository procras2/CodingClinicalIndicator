<?php // vim: set sw=4 expandtab nu:
/**
 * Main index file for finding clinical indicator codes
 *
 * Codes from the relevant documentation
 * This is the Laya OGD main page
 *
 * PHP version 8.0
 *
 * @category  CategoryName
 * @package   ClincalIndicators
 * @author    Adrian P. Ireland <author@example.com>
 * @copyright 2022 Adrian P. Ireland
 * @license   http://www.gnu.org/licences/gpl GPL
 * @version   SVN: $Id$
 * @link      http://localhost/~adrian
 */

$backref = '../../';
$file = __FILE__;
require $backref . 'templates/header.inc';
require $backref . 'templates/navbar.inc';
?>

    <h1>Laya</h1>

    <section class="ogd-rules">
        <h2>Laya ground rules for gastroscopy</h2>
        <p>
        Laya healthcare will provide benefit for an <a
href="initial/index.php">initial</a> upper Gastroscopy procedure code 194 for:
        </p>

        <p>
            Benefit is available for a <a href="repeat/index.php">repeat</a>
upper GI endoscopy, procedure code 194, as per the following clinical
indications.
        </p>

        <p>
        <b>Note:</b> New clinical presentation will not be excluded by a prior
endoscopy, please refer to <a href="initial/index.php">initial </a> endoscopy
clinical indicators and/or submit a detailed medical report with the claim.
        </p>

        <p>
          No Consultant or hospital benefits are payable for a <a
href="surveillance/index.php"> surveillance</a> upper GI endoscopy except for
the following clinical indications: 
        </p>

    </section>

    <ul>
      <li><a href="initial/index.php">Initial</a></li>
      <li><a href="repeat/index.php">Repeat</a></li>
      <li><a href="surveillance/index.php">Surveillance</a></li>
    </ul>

<?php
require $backref  . 'templates/footer.inc';

