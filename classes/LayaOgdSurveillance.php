<?php // vim:set sw=4 expandtab nu:
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
 * Class to deal with Laya OGD clinical indications for Surveillance OGD
 *
 * @category Class
 * @package  CodingClinicalIndicators
 * @author   Adrian P. Ireland <email@example.com>
 * @license  http://gnu.org/licences/gpl GPL
 * @link     http://localhost/~adrian
 */
class LayaOgdSurveillance extends IndicData
{
    /**
     * Creates an array containing the information for the indication
     *
     * @author Adrian P. Ireland <author@address.com>
     */
    function __construct()
    {
        $this->data[] = $this->addMember(
            "(0026)",
            "",
            "Barrett's mucosa shorter than 3cm, without dysplasia on a previous endoscopy: benefit is for a surveillance endoscopy every 3 years"
        );

        $this->data[] = $this->addMember(
            "(0027)",
            "",
            "Barrett's mucosa, greater than 3cm, without dysplasia on a previous endoscopy: benefit is for a surveillance endoscopy every 2 years"
        );

        $this->data[] = $this->addMember(
            "(0028)",
            "",
            "Barrett's mucosa, with low-grade dysplasia on a previous endoscopy: benefit is for a surveillance endoscopy every 6 months until 2 consecutive endoscopies have no metaplasia"
        );

        $this->data[] = $this->addMember(
            "(0029)",
            "",
            "Barrett's mucosa, with high-grade dysplasia on a previous endoscopy: benefit is for a surveillance endoscopyevery 3 months"
        );

        $this->data[] = $this->addMember(
            "(0030)",
            "",
            "Gastric intestinal metaplasia/gastric epithelial dysplasia/atrophic gastritis with low-grade dysplasia: benefit is for a surveillance endoscopy every 3 years"
        );

        $this->data[] = $this->addMember(
            "(0031)",
            "",
            "Gastric intestinal metaplasia/gastric epithelial dysplasia/atrophic gastritis with high-grade dysplasia: benefit is for a surveillance endoscopy at 6 months"
        );

        $this->data[] = $this->addMember(
            "(0032)",
            "",
            "Upper GI surveillance for members with Peutz-Jeghers syndrome: benefit is for a surveillance endoscopy every 2 years from age 18 years"
        );

        $this->data[] = $this->addMember(
            "(0033)",
            "",
            "upper gi surveillance for members with juvenile polyposis: benefit is for a surveillance endoscopy every 3 years from age 18 years"
        );

        $this->data[] = $this->addMember(
            "(0034)",
            "",
            "Upper GI surveillance for members with Lynch Syndrome: benefit is for surveillance endoscopy every 2 years from age 50 years"
        );

        $this->data[] = $this->addMember(
            "(0035)",
            "",
            "Upper GI surveillance for members with MUTYH bi-allelic carriers: benefit will be provided for a 3 yearly gastrointestinal endoscopy from age 30 years"
        );
    }
}

