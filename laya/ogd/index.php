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

    <h2>OGD clinical indicators</h2>

    <ul>
      <li><a href="initial/index.php">Initial</a></li>
      <li><a href="repeat/index.php">Repeat</a></li>
      <li><a href="surveillance/index.php">Surveillance</a></li>
    </ul>

<?php
require $backref  . 'templates/footer.inc';

