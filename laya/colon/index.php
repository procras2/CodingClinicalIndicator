<?php // vim: set sw=4 expandtab nu:
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
<section class="colon-rules">
    <h3>Laya ground rules for colonoscopy</h3>

    <p>
    Clinical Indications for Proctoscopy, Sigmoidoscopy and Colonoscopy
procedures (Codes 450,453, 454, 455, 456, 457, 530, 535, 536 & 540):
    </p>

    <h4><a href="initial/index.php">Initial Procedure</a></h4>
    <p>

    (Use for initial procedure only, refer to <a
href="repeat/index.php">repeat</a> and <a
href="surveillance/index.php">surveillance</a> criteria for follow-up
procedures except in the instance of new and different clinical presentation to
previous initial scope)

    </p>

    <h4><a href="repeat/index.php">Repeat Colonoscopy</a></h4>
    <p>
    No benefit is available for repeat Proctoscopy, Sigmoidoscopy and
Colonoscopy within 36 months of the initial examination except for the
following clinical indications:
    </p>

    <p> New clinical presentation will not be excluded by a prior colonoscopy,
please refer to <a href="initial/index.php">initial</a> colonoscopy clinical
indications and/or submit a detailed medical report with the claim </p>

    <h4><a href="surveillance/index.php">
        Screening for Colorectal Cancer and a Surveillance Colonoscopy
    </a></h4>
    <p>
        <ul style="list-style-type: upper-alpha">
            <li>HIGH RISK GENETIC GROUPS </li>
            <li>COLORECTAL ADENOMAS </li>
            <li>INFLAMMATORY BOWEL DISEASE:</li>
            <li>OTHER RECOMMENDED SCREENING GROUPS</li>
        </ul>
    </p>

    <p>
    No benefit is available for a surveillance Proctoscopy, Sigmoidoscopy and
Colonoscopy except for the following clinical indications:
    </p>

</section>

<h2>Colonoscopy clinical indicators</h2>
<!-- <img src="<?php echo $backref;?>/img/colon.jpg" alt="Colonoscope">-->

<ul>
  <li><a href="initial/index.php">Initial</a></li>
  <li><a href="repeat/index.php">Repeat</a></li>
  <li><a href="surveillance/index.php">Screening & Surveillance</a></li>
</ul>

<?php
require $backref . 'templates/footer.inc';

