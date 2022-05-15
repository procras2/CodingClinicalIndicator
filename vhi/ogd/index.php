<?php // vim: set sw=4 expandtab nu:
/**
 * Main index file for finding clinical indicator codes
 *
 * Codes from the relevant documentation
 * This is the VHI OGD main page
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

$backref='../../'; // Backref from this depth for navbar
require $backref . 'templates/header.inc';
$file = __FILE__;  // The name of this file for navbar
require $backref . 'templates/navbar.inc';
?>

<h1>VHI</h1>
<!-- <img src="<?php echo $backref;?>/img/vhi-logo.png" alt="VHI logo"> -->

<section class="rules">

<h3>VHI ground rules for gastroscopy</h3>
<p>
Clinical Indications for an upper G.I. endoscopy, procedure code 194, are listed
below.
</p>

<p>
No Consultant or hospital benefits are payable for a repeat upper G.I. endoscopy
<em>within a 12 month period</em> except for those clinical indications listed below
as <a href="repeat/index.php">"Repeat endoscopy".</a>
</p>

<p>
New clinical indications unrelated to the indications(s) for an earlier endoscopy
<em>within the 12 month period</em>, themselves identified indication(s) for
endoscopy, will not be excluded by a prior endoscopy.
</p>

<p>
No Consultant or hospital benefits are payable for a surveillance upper G.I.
endoscopy except for those clinical indications listed below as
<a href="surveillance/index.php">"Surveillance endoscopy".</a>
</p>

<p>
Procedure code 194 is not claimable in conjunction with procedure codes 198, 202 or
271.
</p>

</section>

<h2>OGD clinical indicators</h2>
<!-- <img src="<?php echo $backref;?>/img/ogd.jpg" alt="Gastroscopy">-->

<ul>
  <li><a href="initial/index.php">Initial</a></li>
  <li><a href="repeat/index.php">Repeat</a></li>
  <li><a href="surveillance/index.php">Surveillance</a></li>
</ul>

<?php
require $backref . 'templates/footer.inc';

