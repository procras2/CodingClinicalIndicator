<?php // vim: sw=4 expandtab nu:
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
 * Class to deal with VHI clinical indications for intial colonoscopy
 *
 * @category Class
 * @package  CodingClinicalIndicators
 * @author   Adrian P. Ireland <email@example.com>
 * @license  http://gnu.org/licences/gpl GPL
 * @link     http://localhost/~adrian
 */
class LayaColonInitial extends IndicData
{
    /**
     * Creates an array containing the information for the indication
     *
     * @author Adrian P. Ireland <author@address.com>
     */
    function __construct()
    {
        $this->data[] = $this->addMember(
            "0036",
            "",
            "A sustained alteration in bowel habit"
        );

        $this->data[] = $this->addMember(
            "0037",
            "",
            "Rectal bleeding - occult, overt or profuse"
        );

        $this->data[] = $this->addMember(
            "0038",
            "",
            "Iron deficiency Anaemia, or other unexplained anaemia"
        );

        $this->data[] = $this->addMember(
            "0039",
            "",
            "Persistent unexplained lower abdominal pain, where the diagnosis is inconclusive following comprehensive clinical/radiological investigation"
        );

        $this->data[] = $this->addMember(
            "0040",
            "",
            "Abdominal mass"
        );

        $this->data[] = $this->addMember(
            "0041",
            "",
            "Obstructive symptoms"
        );

        $this->data[] = $this->addMember(
            "0042",
            "",
            "Abnormal GIT imaging"
        );

        $this->data[] = $this->addMember(
            "0043",
            "",
            "Assessment of disease severity in Colitis"
        );

        $this->data[] = $this->addMember(
            "0044",
            "",
            "Tattooing margins of colonic polyp or colonic neoplasm prior to laparoscopic resection"
        );

        $this->data[] = $this->addMember(
            "0045",
            "",
            "Unexplained weight loss"
        );
    }
}

