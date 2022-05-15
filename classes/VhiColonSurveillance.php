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
class VhiColonSurveillance extends IndicData
{
    /**
     * Creates an array containing the information for the indication
     *
     * @author Adrian P. Ireland <author@address.com>
     */
    function __construct()
    {
        $this->data[] = $this->addMember(
            146,
            "w",
            "Individuals with one first-degree relative diagnosed with colorectal cancer before age of 60 years. Benefit will be provided for colonoscopy before age of 40 years, or 10 years before the age at diagnosis of the youngest affected relative, whichever is the first, and, if normal, repeats at five-yearly intervals"
        );

        $this->data[] = $this->addMember(
            148,
            "x",
            "Individuals with a genetic or clinical diagnosis of hereditary non-polyposis colorectal cancer (HNPCC) (Lynch Syndrome): Benefit will be provided for colonoscopy every 12 months beginning at age 20 years, or 10 years before the age at diagnosis of the youngest affected relative in the immediate family"
        );

        $this->data[] = $this->addMember(
            149,
            "y",
            "Individuals with one first-degree relative diagnosed with colorectal cancer or an advanced adenoma after the age of 60 years: Benefit will be provided for colonoscopy from age 40 years, or 10 years before the age at diagnosis of the affected relative, whichever is the first, and, if normal, repeats at five-yearly intervals"
        );

        $this->data[] = $this->addMember(
            825,
            "z",
            "Individuals with one second-degree relative diagnosed with colorectal cancer before the age of 50: Benefit will be provided for a single colonoscopy at or after age 50 years. No benefit will be paid for repeat colonoscopy unless other indications have been met"
        );

        $this->data[] = $this->addMember(
            826,
            "za",
            "Individuals with one first-degree relative with an advanced adenoma before age 60 years or two first degree relatives diagnosed with an advance adenoma at any age. Benefit will be provided for colonoscopy from age 40 years, or 10 years before the age at diagnosis of the youngest affected relative, whichever is the first, and, if normal, repeats at five-yearly interval"
        );

        $this->data[] = $this->addMember(
            720,
            "zb",
            "Family history of familial adenomatous polyposis (FAP): Mutation carriers: Benefit will be provided to mutation carriers for yearly colonoscopy alternating with sigmoidoscopy from age 10, unless an adenoma(s) develops in which case benefit will be provided for annual full colonoscopy until polyp load indicates the need for surgery"
        );

        $this->data[] = $this->addMember(
            731,
            "zc",
            "Family history of familial adenomatous polyposis (FAP): Where no mutation can be identified, for family members at 50% risk, age 13&ndash;30 years: Benefit will be provided for colonoscopy alternating with sigmoidoscopy every year up to age 30 years"
        );

        $this->data[] = $this->addMember(
            733,
            "zd",
            "Family history of familial adenomatous polyposis (FAP): where no mutation can be identified, for family members at 50% risk, age 30&ndash;60 years: Benefit will be provided for colonoscopy alternating with sigmoidoscopy every 3 years until age 60 years"
        );

        $this->data[] = $this->addMember(
            827,
            "ze",
            "Peutz-Jeghers Syndrome: Colonoscopy every 2 years starting at age 25 years"
        );

        $this->data[] = $this->addMember(
            828,
            "zf",
            "Juvenile polyposis: Colonoscopy every 2 years starting at age 15 years"
        );

        $this->data[] = $this->addMember(
            829,
            "zg",
            "MUTYH-associated polyposis (MAP): Colonoscopy every 2 years starting at age 25 years"
        );

        $this->data[] = $this->addMember(
            781,
            "zh",
            "Adenomas - Low risk adenomas (tubular, 1&ndash;2, less than 1cm with low-grade dysplasia) identified on previous colonoscopy: Benefit will be provided for a repeat colonoscopy at 5 years (further endoscopy benefits may be paid if relevant pathology found at repeat colonoscopy)"
        );

        $this->data[] = $this->addMember(
            830,
            "zi",
            "Intermediate risk adenomas (3&ndash;4 small adenomas, or at least one adenoma 10&ndash;19mm identified on previous colonoscopy or any adenoma with villous features ir high grade dysplasia. Benefit will be provided for 3-yearly colonoscopies until 2 consecutive negative colonoscopies, then no further colonoscopies"
        );

        $this->data[] = $this->addMember(
            831,
            "zj",
            "High risk adenomas (greater than or equal to 5 small or any adenoma greater than or equal to 20mm). Annual colonoscopy until out of this risk group then interval colonoscopy as per intermediate risk group i.e. benefit will be provided for 3-yearly colonoscopy until 2 negative colonoscopies."
        );

        $this->data[] = $this->addMember(
            832,
            "zk",
            "Colonoscopic surveillance for colorectal cancer from 8 years after onset of IBD: Low risk &ndash; Benefit will be provided for colonoscopy every 5 years"
        );

        $this->data[] = $this->addMember(
            833,
            "zl",
            "Colonoscopic surveillance for colorectal cancer from 8 years after onset of IBD: Intermediate risk, i.e. extensive colitis with mild active disease or post-inflammatory polyps or history of colorectal cancer in a first degree relative aged 50 years or older - Benefit will be provided for colonoscopy every 3 years"
        );

        $this->data[] = $this->addMember(
            834,
            "zm",
            "Colonoscopic surveillance for colorectal cancer from 8 years after onset of IBD: High Risk, i.e. extensive colitis with moderate/severe active disease or stricture in past 5 years, or dysplasia in past 5 years, or concurrent primary sclerosing cholangitis, or colorectal cancer in a first degree relative under 50 years old - Benefit will be provided for colonoscopy every year"
        );

        $this->data[] = $this->addMember(
            835,
            "zn",
            "Patients with Acromegaly: Benefit will be provided for colonoscopy every 3 years starting at age 40"
        );

        $this->data[] = $this->addMember(
            836,
            "zo",
            "Sigmoidoscopy Surveillance: Patients post ureterosigmoidostomy: Benefit will be provided for annual flexible sigmoidoscopy starting 10 years after surgery"
        );

        $this->data[] = $this->addMember(
            625,
            "zp",
            "After colon surgery for FAP every 6 months if some rectal tissue remains and every year if all rectal tissue has been removed and there is a small intestinal pouch"
        );
    }
}

