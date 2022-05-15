<?php // vim: set sw=4 expandtab nu:
/**
 * Main index file for finding clinical indicator codes
 *
 * Codes from the relevant documentation
 *
 * PHP version 8.0
 *
 * @category  CategoryName
 * @package   Packagename
 * @author    Adrian P. Ireland <author@example.com>
 * @copyright 2012 Adrian P. Ireland
 * @license   http://www.gnu.org/LGPL LGPL
 * @version   SVN: $Id$
 * @link      http://localhost/~adrian
 */

$backref = '';
$file = __FILE__;
require 'templates/header.inc';
require 'templates/navbar.inc';
?>

<h1>Endoscopy Coding Clinical Indicators</h1>

<h2>Hypertext look up</h2>
<ul>
    <li><a href="vhi/index.php">VHI</a></li>
    <ul>
        <li><a href="vhi/ogd/index.php">OGD</a></li>
        <ul>
            <li><a href="vhi/ogd/initial/index.php">Initial</a></li>
            <li><a href="vhi/ogd/repeat/index.php">Repeat</a></li>
            <li><a href="vhi/ogd/surveillance/index.php">Surveillance</a></li>
        </ul>
        <li><a href="vhi/colon/index.php">Colonoscopy</a></li>
        <ul>
            <li><a href="vhi/colon/initial/index.php">Initial</a></li>
            <li><a href="vhi/colon/repeat/index.php">Repeat</a></li>
            <li><a href="vhi/colon/surveillance/index.php">Surveillance</a></li>
        </ul>
    </ul>
    <li><a href="laya/index.html">Laya</a></li>
    <ul>
        <li><a href="laya/ogd/index.php">OGD</a></li>
        <ul>
            <li><a href="laya/ogd/initial/index.php">Initial</a></li>
            <li><a href="laya/ogd/repeat/index.php">Repeat</a></li>
            <li><a href="laya/ogd/surveillance/index.php">Surveillance</a></li>
        </ul>
        <li><a href="laya/colon/index.php">Colonoscopy</a></li>
    </ul>
</ul>

<h2>Plain text files with documentation</h2>
<ul>
    <li><a href="doc/vhiOGDIndicators.txt">VHI OGD indicators text file</a></li>
    <li><a href="doc/layaOGDIndicators.txt">Laya OGD indicators text file</a></li>
    <li><a href="doc/vhiColonIndicators.txt">VHI colon indicators text file</a></li>
    <li><a href="doc/layaColonIndicators.txt">Laya colon indicators text file</a></li>
</ul>

<?php
require 'templates/footer.inc';

