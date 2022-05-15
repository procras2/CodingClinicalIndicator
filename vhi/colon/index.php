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
 * @copyright 2012 Adrian P. Ireland
 * @license   http://www.gnu.org/licences/gpl GPL
 * @version   SVN: $Id$
 * @link      http://localhost/~adrian
 */

$backref = '../../';
$file = __FILE__;
require $backref . 'templates/header.inc';
require $backref . 'templates/navbar.inc';
?>

<h1>VHI</h1>
<!--  <img src="<?php echo $backref;?>/img/vhi-logo.png" alt="VHI logo">-->
<section class="rules">
  <h3>VHI ground rules for colonoscopy</h3>
  <p>
  No Consultant or hospital benefits are payable for repeat colonsocopic, proctoscopic
  or sigmoidoscopic examinations <em>within 36 months</em> of an initial examination
  except for those clinical indication listed below as
  <a href="repeat/index.php">"Repeat Colonoscopy"</a>.
  </p>

  <p>
  New clinical indications unrelated to the indication(s) for an earlier endoscopy
  <em>within the 36 month period</em>, themselves identified indication(s) for
  endoscopy, will not be excluded by a prior endoscopy.
  </p>

  <p>
  No Consultant or hospital benefits are payable for a surveillance colonscopic,
  proctoscopic or sigmoidosccopic examaninations except for those clinical indications
  listed below as <a href="surveillance/index.php">"Surveillance Colonoscopy"</a>.
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

