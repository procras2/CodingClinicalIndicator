<?php
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * PHP version 8.0
 *
 * @category Class
 * @package  CodingClinicalIndicators
 * @author   Adrian P. Ireland <email@example.com>
 * @license  http://gnu.org/licences/gpl GPL
 * @version  SVN: $Id$
 * @link     http://localhost/~adrian
 */

/**
 * Class to deal with endocopy clinical indications 
 *
 * @category Class
 * @package  CodingClinicalIndicators
 * @author   Adrian P. Ireland <email@example.com>
 * @license  http://gnu.org/licences/gpl GPL
 * @link     http://localhost/~adrian
 */
class IndicData
{
    public $data = array();

    /**
     * Creates an array containing the information for the indication
     *
     * @param Code   $code   number used for indication
     * @param Letter $letter used for code
     * @param Desc   $desc   description of code
     *
     * @author Adrian P. Ireland <author@address.com>
     * @return Array with data
     */
    public function addMember($code, $letter, $desc)
    {
        return array(
            "Code" => $code,
            "Letter" => $letter,
            "Desc" => $desc
        );
    }

    /**
     * Outputs the nice html for table from the given array
     *
     * @author Adrian P. Ireland <author@address.com>
     * @return Nil
     */
    public function outputTable()
    {
        echo '
<table class="table">
  <thead>
    <tr>
      <th>Code</th>
      <th>Letter</th>
      <th>Desc</th>
    </tr>
  </thead>

  <tbody>' . PHP_EOL;

        foreach ($this->data as $item) {
            echo '<tr>';
            echo '<td data-label="Code">' . $item['Code'] . '</td>' . PHP_EOL;
            echo '<td data-label="Letter">' . $item['Letter'] . '</td>' . PHP_EOL;
            echo '<td data-label="Desc">' . $item['Desc'] . '</td>' . PHP_EOL;
            echo '</tr>';
        }
        echo '
  </tbody>
</table>' . PHP_EOL;
    }
}


