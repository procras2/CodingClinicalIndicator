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
 * Class to deal with VHI clinical indications for repeat colonoscopy
 *
 * @category Class
 * @package  CodingClinicalIndicators
 * @author   Adrian P. Ireland <email@example.com>
 * @license  http://gnu.org/licences/gpl GPL
 * @link     http://localhost/~adrian
 */
class LayaColonRepeat extends IndicData
{
    /**
     * Creates an array containing the information for the indication
     *
     * @author Adrian P. Ireland <author@address.com>
     */
    function __construct()
    {
        $this->data[] = $this->addMember(
            "0046",
            "",
            "Following removal of adenomas with severe dysplasia"
        );

        $this->data[] = $this->addMember(
            "0047",
            "",
            "Multiple or large adenomas which could not be satisfactorily cleared in one endoscopy session e.g. large sessile adenomas"
        );

        $this->data[] = $this->addMember(
            "0048",
            "",
            "Pre-operative assessment of chronic inflammatory bowel disease (IBD)"
        );

        $this->data[] = $this->addMember(
            "0049",
            "",
            "Relapse of IBD following change of therapy to evaluate response"
        );

        $this->data[] = $this->addMember(
            "0050",
            "",
            "Post Colon cancer surgery at the 1st and 3rd years, thereafter every 5 years"
        );

        $this->data[] = $this->addMember(
            "0051",
            "",
            "Assessment of surgical anastomosis post resection of Crohn's disease"
        );

        $this->data[] = $this->addMember(
            "0052",
            "",
            "Complete colon examination following previous left sided colonoscopy where findings suggest that a complete colon examination is necessary to exclude: colonic polyps, colonic carcinoma, IBD"
        );

        $this->data[] = $this->addMember(
            "0053",
            "",
            "Repeat full colonoscopy when there is unexplained deterioration in symptomatology not explained by left sided colonoscopy"
        );

        $this->data[] = $this->addMember(
            "0054",
            "",
            "Left sided colonoscopy to assess disease activity following withdrawal of medication"
        );

        $this->data[] = $this->addMember(
            "0055",
            "",
            "Left colonoscopy at the time of significant symptomatic relapse"
        );

        $this->data[] = $this->addMember(
            "0056",
            "",
            "Left sided colonoscopy where there is a failure to respond to treatment and/or where there is suspicion of a secondary diagnosis such as Clostridium difficile infection with superimposed pseudomembranous colitis."
        );

        $this->data[] = $this->addMember(
            "0057",
            "",
            "Evaluation of an abdominal mass"
        );

        $this->data[] = $this->addMember(
            "0604",
            "",
            "For balloon dilatation of stricture"
        );
    }
}
