<?php // vim: sw=4 expandtab nu:
/**
 * Navbar template file
 *
 * Creates a nice navbar with the links set to contain $backref
 * Note we need to have set $backref so that we can reach relevant places
 * from anywhere in the tree
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
?>

<nav class="navbar">
    <div class="brand-title">Clinical Indicators</div>
    <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>
    <div class="navbar-links">
        <ul>
            <li><a href="<?php echo $backref;?>index.php">Home</a></li>
            <li><a href="<?php echo $backref;?>vhi/index.php">VHI</a></li>
            <li><a href="<?php echo $backref;?>laya/index.php">Laya</a></li>
        </ul>
    </div>
</nav>

<small><?php echo $file;?></small>
