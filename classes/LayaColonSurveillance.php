<?php // vim: set sw=4 expandtab nu:
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
 * Class to deal with VHI clinical indications for surveillance colonoscopy
 *
 * @category Class
 * @package  CodingClinicalIndicators
 * @author   Adrian P. Ireland <email@example.com>
 * @license  http://gnu.org/licences/gpl GPL
 * @link     http://localhost/~adrian
 */
class LayaColonSurveillance extends IndicData
{
    /**
     * Creates an array containing the information for the indication
     *
     * @author Adrian P. Ireland <author@address.com>
     */
    function __construct()
    {
        $this->data[] = $this->addMember(
            "0059",
            "A",
            "Individuals who have one first-degree relative diagnosed with colorectal cancer before the age of 50 years, or two first degree relatives diagnosed with colorectal cancer at any age: Benefit is for colonoscopy from age 40 years, or 10 years before the age at diagnosis of the youngest affected relative, whichever is the first, and if normal, repeats at five-yearly intervals"
        );

        $this->data[] = $this->addMember(
            "0060",
            "A",
            "Individuals with a genetic or clinical diagnosis of hereditary non-polyposis colorectal cancer (Lynch Syndrome): Benefit is for colonoscopy on an annual basis commencing at age 20 years, or 10 years before the age of diagnosis of the youngest affected relative in the immediate family"
        );

        $this->data[] = $this->addMember(
            "0061",
            "A",
            "Individuals with one first-degree relative diagnosed with colorectal cancer after the age of 50 years: Benefit will be provided for colonoscopy from age 50 years, or 10 years before the age at diagnosis of the affected relative, whichever is the first, and if normal repeat at five-yearly intervals"
        );

        $this->data[] = $this->addMember(
            "0062",
            "A",
            "Individuals with one second-degree relative diagnosed with colorectal cancer before the age of 50: Benefit will be provided for a single colonoscopy at or after the age of 50 years. No benefit will be paid for repeat colonoscopy unless other indications have been met."
        );

        $this->data[] = $this->addMember(
            "0063",
            "A",
            "Individuals with first-degree relative diagnosed with a history of advanced adenoma: Benefit will be paid for a single colonoscopy 10 years before the age at diagnosis of the affected relative. No benefit will be paid for repeat colonoscopy unless other indications have been met."
        );

        $this->data[] = $this->addMember(
            "0064",
            "A",
            "Family history of familial adenomatous polyposis (FAP): Mutation carriers: Benefit will be provided to mutation carriers for yearly colonoscopy alternating with sigmoidoscopy from age 10, unless an adenoma(s) develops, in which case benefit will be provided for annual full colonoscopy until polyp load indicates the need for surgery"
        );

        $this->data[] = $this->addMember(
            "0065",
            "A",
            "Family history of familial adenomatous polyposis (FAP): Where no mutation can be identified, for family members at 50% risk, age 13-30 years: Benefit will be provided to mutation carriers for yearly colonoscopy alternating with sigmoidoscopy every year up to the age of 30 years"
        );

        $this->data[] = $this->addMember(
            "0066",
            "A",
            "Family history of familial adenomatous polyposis (FAP): Where no mutation can be identified, for family members at 50% risk, age 30-60 years: Benefit will be provided for colonoscopy alternating with sigmoidoscopy every 3-years up to 60 years of age"
        );

        $this->data[] = $this->addMember(
            "0067",
            "A",
            "Family History of Peutz-Jeghers Syndrome: Benefit is for a colonoscopy every 2 years commencing at age 25 years"
        );

        $this->data[] = $this->addMember(
            "0068",
            "A",
            "Family history of Juvenile polyposis: Benefit is for colonoscopy every two years starting at age 15 years"
        );

        $this->data[] = $this->addMember(
            "0069",
            "A",
            "Family history of MUTYH-associated polyposis (MAP): Benefit is for colonoscopy every 2 years starting at age 25 years"
        );

        $this->data[] = $this->addMember(
            "0070",
            "B",
            "Low risk adenoma (tubular, <1cm) identified on previous colonoscopy: Benefit will be provided for a repeat colonoscopy at 5 years (benefit is available for further endoscopy if relevant pathology is found at repeat colonoscopy)"
        );

        $this->data[] = $this->addMember(
            "0071",
            "B",
            "Intermediate risk adenomas (3-4 small adenomas or at least one >/= 1cm) identified on previous colonoscopy: Benefit will be provided for 3-yearly colonoscopies until 2 consecutive negative colonoscopies, then no further colonoscopies"
        );

        $this->data[] = $this->addMember(
            "0072",
            "B",
            "High risk adenomas (>/= 5 small adenomas or >/= 3 with at least one >/= 1cm) identified on previous colonoscopy: Benefit is for annual colonoscopy until out of this risk group, then interval colonoscopy as per intermediate risk group with 3-yearly colonoscopies until 2 consecutive negative colonoscopies"
        );

        $this->data[] = $this->addMember(
            "0073",
            "C",
            "Benefit will be provided for colonoscopic surveillance for colorectal cancer from 10 years after onset of IBD, with further follow-up for: i) Low risk: Benefit is for colonoscopy every 5 years ii) Intermediate risk (extensive colitis with mild active disease or post-inflammatory polyps or family history of colorectal cancer in a first degree relative <50 years old: Benefit is for a colonoscopy every 3 years iii) High Risk (extensive colitis with moderate to severe active disease or stricture or dysplasia in past 5 years, or concurrent primary cholangitis or colorectal cancer in a first degree relative <50 years old: Benefit is for a colonoscopy every year"
        );

        $this->data[] = $this->addMember(
            "0074",
            "D",
            "Individuals with acromomegaly: Benefit is for a colonoscopy every 3 years starting at age 40 years"
        );

        $this->data[] = $this->addMember(
            "0075",
            "D",
            "Individuals after ureterosigmoidostomy: Benefit is for an annual flexible sigmoidoscopy commencing 10 years after surgery"
        );
    }
}

