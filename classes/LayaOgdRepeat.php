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
class LayaOgdRepeat extends IndicData
{
    /**
     * Creates an array containing the information for the indication
     *
     * @author Adrian P. Ireland <author@address.com>
     */
    function __construct()
    {
        $this->data[] = $this->addMember(
            "(0017)",
            "",
            "Previously confirmed diagnosis of gastric ulcer to check for healing and or re-biopsy"
        );

        $this->data[] = $this->addMember(
            "(0018)",
            "",
            "In Helicobacter pylori infection after a first or second treatment failure to carry out further susceptibility testing of antimicrobial agents"
        );

        $this->data[] = $this->addMember(
            "(0019)",
            "",
            "Coeliac Disease &ndash; in suspected refractory disease, once only. If further required, include detail on a medical report accompanying the claim"
        );

        $this->data[] = $this->addMember(
            "(0020)",
            "",
            "Monitoring of oesophageal varices"
        );

        $this->data[] = $this->addMember(
            "(0021)",
            "",
            "Stent blockage"
        );

        $this->data[] = $this->addMember(
            "(0022)",
            "",
            "Gastric polyp, other than those associated with a polyposis syndrome"
        );

        $this->data[] = $this->addMember(
            "(0023)",
            "",
            "Follow-up investigation of those with gastric or oesophageal cancer as clinically indicated"
        );

        $this->data[] = $this->addMember(
            "(0024)",
            "",
            "Following a major bleed where the initial gastroscopy failed to identify the source of bleeding"
        );

        $this->data[] = $this->addMember(
            "(0025)",
            "",
            "Post treatment of bleeding ulcer or Mallory Weiss tear"
        );
    }
}

