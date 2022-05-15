<?php // vim:set sw=5 expandtab nu:
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
 * Class to deal with VHI OGD clinical indications for Repeat OGD
 *
 * @category Class
 * @package  CodingClinicalIndicators
 * @author   Adrian P. Ireland <email@example.com>
 * @license  http://gnu.org/licences/gpl GPL
 * @link     http://localhost/~adrian
 */
class VhiOgdRepeat extends IndicData
{
    /**
     * Creates an array containing the information for the indication
     *
     * @author Adrian P. Ireland <author@address.com>
     */
    function __construct()
    {
        $this->data[] = $this->addMember(
            1,
            "q",
            "Previously diagnosed Grade D oesophagitis or gastric or oesophageal ulcer: Benefit will be provided for repeat endoscopy to check for healing or to re-biopsy until healed"
        );

        $this->data[] = $this->addMember(
            809,
            "r",
            "Patients diagnosed with an atypical (non-H. pylori-associated) or high-risk duodenal ulcer: Benefit will be provided for one repeat endoscopy to re-biopsy (except by report)"
        );

        $this->data[] = $this->addMember(
            2,
            "s",
            "Coeliac Disease &ndash; re-check for healing 3 &ndash; 12 months after diagnosis (once only)"
        );

        $this->data[] = $this->addMember(
            4,
            "t",
            "Monitoring of oesophageal varices in patients with portal hypertension"
        );

        $this->data[] = $this->addMember(
            5,
            "u",
            "Stent blockage"
        );

        $this->data[] = $this->addMember(
            810,
            "v",
            "Follow up of patients post gastric or oesophageal cancer: Benefit will be provided for endoscopies as clinically indicated"
        );

        $this->data[] = $this->addMember(
            811,
            "w",
            "Gastric polyp (except fundic gland polyp): Benefit will be provided for repeat endoscopy at 1 year"
        );

        $this->data[] = $this->addMember(
            718,
            "x",
            "Patient with a major bleed in whom the initial gastroscopy failed to identify the source of bleeding"
        );

        $this->data[] = $this->addMember(
            719,
            "y",
            "Post treatment of bleeding ulcer or Mallory-Weiss tear"
        );
    }
}

