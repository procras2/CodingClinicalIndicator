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
<section class="rules">
    <h3>Laya ground rules for colonoscopy</h3>

    <p>
    Clinical Indications for Proctoscopy, Sigmoidoscopy and Colonoscopy
procedures (Codes 450,453, 454, 455, 456, 457, 530, 535, 536 & 540):
    </p>

    <p>
    <b>Initial Procedure</b>
    (Use for initial procedure only, refer to repeat and surveillance criteria
for follow-up procedures except in the instance of new and different clinical
presentation to previous initial scope)
    </p>

    <p>
    <b>Repeat Colonoscopy</b>
    No benefit is available for repeat Proctoscopy, Sigmoidoscopy and
Colonoscopy within 36 months of the initial examination except for the
following clinical indications:
    </p>


    <p>
    New clinical presentation will not be excluded by a prior colonoscopy,
please refer to initial colonoscopy clinical indications and/or submit a
detailed medical report with the claim
    </p>

    <p>
    <b>Screening</b> for Colorectal Cancer and a <b>Surveillance</b>
Colonoscopy
    </p>
    <ul>
        <li> A. HIGH RISK GENETIC GROUPS </li>
        <li> B. COLORECTAL ADENOMAS </li>
        <li>C. INFLAMMATORY BOWEL DISEASE:</li>
        <li>D. OTHER RECOMMENDED SCREENING GROUPS</li>
    </ul>

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
  <li><a href="surveillance/index.php">Surveillance</a></li>
</ul>

<?php
require $backref . 'templates/footer.inc';

