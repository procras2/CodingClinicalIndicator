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
 * Class to deal with VHI OGD clinical indications for Surveillance OGD
 *
 * @category Class
 * @package  CodingClinicalIndicators
 * @author   Adrian P. Ireland <email@example.com>
 * @license  http://gnu.org/licences/gpl GPL
 * @link     http://localhost/~adrian
 */
class VhiOgdSurveillance extends IndicData
{
    /**
     * Creates an array containing the information for the indication
     *
     * @author Adrian P. Ireland <author@address.com>
     */
    function __construct()
    {
        $this->data[] = $this->addMember(
            780,
            "z",
            "Barrett's mucosa (columnar-lined oesophagus) of less than 3 cms without dysplasia on previous endoscopy: Repeat endoscopy every 3 years"
        );

        $this->data[] = $this->addMember(
            812,
            "za",
            "Barrett's mucosa (columnar-lined oesophagus) of greater than 3 cms without dysplasia on previous endoscopy: Repeat endoscopy every 2 years"
        );

        $this->data[] = $this->addMember(
            813,
            "zb",
            "Barrett's mucosa (columnar-lined oesophagus) with low-grade dysplasia on previous endoscopy: Repeat endoscopy every 6 months until 2 consecutive endoscopies with no dysplasia."
        );

        $this->data[] = $this->addMember(
            814,
            "zc",
            "Barrett's mucosa (columnar-lined oesophagus) with high-grade dysplasia on previous endoscopy: Repeat endoscopy every 3 months"
        );

        $this->data[] = $this->addMember(
            930,
            "zcc",
            "Surveillance post endoscopic treatment (RFA/EMA) of Barrett's oesophagus &ndash; Benefit allowed every 3 months"
        );

        $this->data[] = $this->addMember(
            815,
            "zd",
            "Gastric intestinal metaplasia/atrophic gastritis with no dysplasia: Repeat endoscopy every 3 years"
        );

        $this->data[] = $this->addMember(
            816,
            "ze",
            "Gastric intestinal metaplasia/gastric epithelial dysplasia/atrophic gastritis with low-grade dysplasia: Repeat endoscopy at 12 months"
        );

        $this->data[] = $this->addMember(
            817,
            "zf",
            "Gastric intestinal metaplasia/gastric epithelial dysplasia/atrophic gastritis with high-grade dysplasia: Repeat endoscopy at 6 months"
        );

        $this->data[] = $this->addMember(
            818,
            "zg",
            "Familial adenomatous polyposis (FAP): OGD every 2 years starting at age 18 years"
        );

        $this->data[] = $this->addMember(
            819,
            "zh",
            "Peutz-Jeghers syndrome: OGD every 2 years starting at age 18 years"
        );

        $this->data[] = $this->addMember(
            820,
            "zi",
            "Juvenile polyposis: OGD every 3 years starting at age 18 years"
        );

        $this->data[] = $this->addMember(
            821,
            "zj",
            "Lynch Syndrome: OGD every 2 years starting at age 50 years"
        );

        $this->data[] = $this->addMember(
            822,
            "zk",
            "MUTYH-associated polyposis (MAP): OGD every 3 years starting at age 30 years"
        );
    }
}

