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
 * Class to deal with VHI clinical indications for repeat colonoscopy
 *
 * @category Class
 * @package  CodingClinicalIndicators
 * @author   Adrian P. Ireland <email@example.com>
 * @license  http://gnu.org/licences/gpl GPL
 * @link     http://localhost/~adrian
 */
class VhiColonRepeat extends IndicData
{
    /**
     * Creates an array containing the information for the indication
     *
     * @author Adrian P. Ireland <author@address.com>
     */
    function __construct()
    {
        $this->data[] = $this->addMember(
            14,
            "k",
            "Following incomplete polypectomy, where multiple or large adenomas could not be satisfactorily cleared in one endoscopy session"
        );

        $this->data[] = $this->addMember(
            15,
            "l",
            "Pre-operative assessment of chronic inflammatory bowel disease (IBD)"
        );

        $this->data[] = $this->addMember(
            16,
            "m",
            "Relapse or flare up of IBD or following change of therapy to assess response"
        );

        $this->data[] = $this->addMember(
            824,
            "n",
            "Ileo-colonoscopy 6&ndash;12, months post resection of Crohn's disease to assess surgical anastomosis"
        );

        $this->data[] = $this->addMember(
            17,
            "o",
            "Post-colonic cancer surgery at years 1 and 3 and then every 5 years thereafter"
        );

        $this->data[] = $this->addMember(
            19,
            "p",
            "Where the patient's presenting symptoms indicate that a left-sided colonoscopy or sigmoidoscopy/proctoscopy is necessary and where the findings from that procedure suggest the possibility of disease elsewhere in the colon necessitating complete colon examination. The findings are as follow: &ndash; Colonic polyps, &ndash; Colonic carcinoma, &ndash; Inflammatory bowel disease, &ndash; Blood-stained mucus or stool coming from beyond the range of a sigmoidoscopy/proctoscopy examination"
        );

        $this->data[] = $this->addMember(
            20,
            "q",
            "Repeat full colonoscopy when there is unexplained deterioration in symptomatology not explained by left-sided colonoscopy"
        );

        $this->data[] = $this->addMember(
            21,
            "r",
            "Left-sided colonoscopy to assess disease activity at the time of significant reduction or withdrawal of medication"
        );

        $this->data[] = $this->addMember(
            22,
            "s",
            "Left-sided colonoscopy at the time of significant symptomatic relapse"
        );

        $this->data[] = $this->addMember(
            23,
            "t",
            "Left-sided colonoscopy where there is a failure to respond to treatment or where there is suspicion of a second diagnosis such as Clostridium difficile infection with superimposed pseudomembranous colitis"
        );

        $this->data[] = $this->addMember(
            316,
            "u",
            "Evaluation of an abdominal mass"
        );

        $this->data[] = $this->addMember(
            783,
            "v",
            "Other exceptional reasons provided a comprehensive medical report accompanies the claim outlining the medical necessity for the procedure e.g. repeat endoscopy recommended on pathology report"
        );
    }
}

