<?php // vim: sw=4 expandtab nu:
/**
 * Main index file for finding clinical indicator codes
 *
 * Codes from the relevant documentation
 * This is the VHI main page
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

$backref = '../';
$file = __FILE__;
require $backref . '/templates/header.inc';
require $backref . '/templates/navbar.inc';
?>
  <h1>VHI clinical coding indicators</h1>
  <img src="<?php echo $backref;?>/img/vhi-logo.png" alt="VHI logo">
  <ul>
    <li><a href="ogd/index.php">OGD</a></li>
    <ul>
      <li><a href="ogd/initial/index.php">Initial</a></li>
      <li><a href="ogd/repeat/index.php">Repeat</a></li>
      <li><a href="ogd/surveillance/index.php">Surveillance</a></li>
    </ul>
    <li><a href="colon/index.php">Colonoscopy</a></li>
    <ul>
      <li><a href="colon/initial/index.php">Initial</a></li>
      <li><a href="colon/repeat/index.php">Repeat</a></li>
      <li><a href="colon/surveillance/index.php">Surveillance</a></li>
    </ul>
  </ul>

<?php
require '../templates/footer.inc';

