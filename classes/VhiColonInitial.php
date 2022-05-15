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
 * Class to deal with VHI clinical indications for intial colonoscopy
 *
 * @category Class
 * @package  CodingClinicalIndicators
 * @author   Adrian P. Ireland <email@example.com>
 * @license  http://gnu.org/licences/gpl GPL
 * @link     http://localhost/~adrian
 */
class VhiColonInitial extends IndicData
{
    /**
     * Creates an array containing the information for the indication
     *
     * @author Adrian P. Ireland <author@address.com>
     */
    function __construct()
    {
        $this->data[] = $this->addMember(
            683,
            "a",
            "A sustained alteration in bowel habit &ndash; either constipation, diarrhoea or alternating constipation and diarrhoea"
        );

        $this->data[] = $this->addMember(
            684,
            "b",
            "Rectal bleeding"
        );

        $this->data[] = $this->addMember(
            685,
            "c",
            "Unexplained anaemia"
        );

        $this->data[] = $this->addMember(
            686,
            "d",
            "Persistent unexplained lower abdominal pain"
        );

        $this->data[] = $this->addMember(
            687,
            "e",
            "Abdominal mass"
        );

        $this->data[] = $this->addMember(
            688,
            "f",
            "Obstructive symptoms"
        );

        $this->data[] = $this->addMember(
            689,
            "g",
            "Abnormal gastrointestinal imaging"
        );

        $this->data[] = $this->addMember(
            690,
            "h",
            "Assessment of geography and severity of colitis"
        );

        $this->data[] = $this->addMember(
            691,
            "i",
            "Tattooing margins of colonic polyp or colonic neoplasm prior to laparoscopic resection"
        );

        $this->data[] = $this->addMember(
            823,
            "j",
            "Investigation of unexplained weight loss"
        );

        $this->data[] = $this->addMember(
            623,
            "ja",
            "Rectal mass"
        );

        $this->data[] = $this->addMember(
            624,
            "jb",
            "Unexplained anal mass or unexplained anal ulceration"
        );
    }
}

