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
 * Class to deal with VHI OGD clinical indications for intial OGD
 *
 * @category Class
 * @package  CodingClinicalIndicators
 * @author   Adrian P. Ireland <email@example.com>
 * @license  http://gnu.org/licences/gpl GPL
 * @link     http://localhost/~adrian
 */
class VhiOgdInitial extends IndicData
{
    /**
     * Creates an array containing the information for the indication
     *
     * @author Adrian P. Ireland <author@address.com>
     */
    function __construct()
    {
        $this->data[] = $this->addMember(
            692,
            'a',
            "Upper abdominal/Oesophageal refux symptoms that persist in patients that have been tested and received treatment for <em>Helicobacter pylori</em>"
        );

        $this->data[] = $this->addMember(
            693,
            'b',
            "Upper abdominal symptoms or signs suggesting organic disease in patients &gt; 45 years old"
        );

        $this->data[] = $this->addMember(
            694,
            "c",
            "Dysphagia or Odynophagia"
        );

        $this->data[] = $this->addMember(
            695,
            "d",
            "Upper abdominal/Oesophageal reflux symptoms that are persistent or recurrent in patients who have been treated with a trial of PPIs for 6 weeks or more"
        );

        $this->data[] = $this->addMember(
            696,
            "e",
            "Persistent vomiting of unknown cause"
        );

        $this->data[] = $this->addMember(
            697,
            "f",
            "Biopsy for suspected coeliac disease"
        );

        $this->data[] = $this->addMember(
            698,
            "g",
            "Other diseases in which the presence of upper GI pathologic conditions might modify other planned management (i.e. patients who have a history of ulcer or GI bleeding who are scheduled for organ transplantation, long term anti-coagulation or long-term non-steroidal anti-inflammatory drug therapy for arthritis, and those with cancer of the head and neck)"
        );

        $this->data[] = $this->addMember(
            712,
            "h",
            "For confirmation and specific histological diagnosis of radiologically demonstrated suspected or suspected upper GI tract lesion"
        );

        $this->data[] = $this->addMember(
            701,
            "i",
            "Patients with active/recent GI bleeding"
        );

        $this->data[] = $this->addMember(
            713,
            "j",
            "Iron deficiency anaemia"
        );

        $this->data[] = $this->addMember(
            702,
            "k",
            "Patients with suspected portal hypertension to document or treat oesophageal varices"
        );

        $this->data[] = $this->addMember(
            703,
            "l",
            "To assess acute injury after caustic ingestion"
        );

        $this->data[] = $this->addMember(
            704,
            "m",
            "Treatment of bleeding lesions such as ulcers, tumours, vascular abnormalities (e.g. electro-coagulation, heater probe, laser photocoagulation, or injection therapy)"
        );

        $this->data[] = $this->addMember(
            709,
            "n",
            "Further investigation of suspected achalasia"
        );

        $this->data[] = $this->addMember(
            808,
            "o",
            "Pernicious Anaemia: Benefit will be provided for a single endoscopy"
        );

        $this->data[] = $this->addMember(
            782,
            "p",
            "Other exceptional reasons will be considered provided a comprehensive medical report accompanies the claim outlining the medical necessity for the procedure"
        );

        $this->data[] = $this->addMember(
            620,
            "pa",
            "Unexplained weight loss"
        );

        $this->data[] = $this->addMember(
            621,
            "pb",
            "Further investigation of an upper abdominal mass"
        );

        $this->data[] = $this->addMember(
            622,
            "pc",
            "Early satiety"
        );

    }
}

