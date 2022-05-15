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
 * Class to deal with Laya OGD clinical indications for intial OGD
 *
 * @category Class
 * @package  CodingClinicalIndicators
 * @author   Adrian P. Ireland <email@example.com>
 * @license  http://gnu.org/licences/gpl GPL
 * @link     http://localhost/~adrian
 */
class LayaOgdInitial extends IndicData
{
    /**
     * Creates an array containing the information for the indication
     *
     * @author Adrian P. Ireland <author@address.com>
     */
    function __construct()
    {
        $this->data[] = $this->addMember(
            "(0001)",
            "",
            "Suspected treatment failure in patients who remain symptomatic and are serologically positive for Helicobacter pylori infection, have received treatment with PPIs and where 4 weeks have lapsed following completion of treatment"
        );

        $this->data[] = $this->addMember(
            "(0002)",
            "",
            "Presentation with signs or symptoms suggesting serious organic disease (e.g. anorexia, weight loss) or in patients with upper abdominal symptoms > 45 years old"
        );

        $this->data[] = $this->addMember(
            "(0003)",
            "",
            "Dysphagia or odynophagia"
        );

        $this->data[] = $this->addMember(
            "(0004)",
            "",
            "Oesophageal reflux symptoms that are persistent or recurrent despite treatment"
        );

        $this->data[] = $this->addMember(
            "(0005)",
            "",
            "Persistent vomiting, unknown aetiology"
        );

        $this->data[] = $this->addMember(
            "(0006)",
            "",
            "Biopsy for suspected coeliac disease after positive tTGA and EMA serology testing"
        );

        $this->data[] = $this->addMember(
            "(0007)",
            "",
            "Other diseases in which the presence of upper GI pathology might modify treatment options in: a) those scheduled for organ transplantation who have a history of upper GI bleeding, b) those on long term anti-coagulation, c) those on long-term non-steroidal anti-inflammatory drug therapy for arthritis, and d) those with cancer of the head and neck"
        );

        $this->data[] = $this->addMember(
            "(0008)",
            "",
            "To confirm and secure histological diagnosis of radiological findings of suspected upper gastro-intestinal tract lesions"
        );

        $this->data[] = $this->addMember(
            "(0009)",
            "",
            "GI haemorrhage in patients with active or recent blood loss"
        );

        $this->data[] = $this->addMember(
            "(0010)",
            "",
            "Presumed chronic blood loss: when the clinical situation suggests an upper GI bleeding source or when colonoscopy results are negative"
        );

        $this->data[] = $this->addMember(
            "(0011)",
            "",
            "Iron deficiency anaemia"
        );

        $this->data[] = $this->addMember(
            "(0012)",
            "",
            "Pernicious anaemia (further planned endoscopy is on an individual basis on the submission of a medical report)"
        );

        $this->data[] = $this->addMember(
            "(0013)",
            "",
            "To assess acute injury after ingestion of a corrosive substance"
        );

        $this->data[] = $this->addMember(
            "(0014)",
            "",
            "Therapeutic management of bleeding lesions such as ulcers, tumours, vascular abnormalities (e.g. electro-coagulation, heater probe, laser photocoagulation, or injection therapy)"
        );

        $this->data[] = $this->addMember(
            "(0015)",
            "",
            "Diagnosis and further investigation of achalasia"
        );

        $this->data[] = $this->addMember(
            "(0016)",
            "",
            "In exceptional instances where the clinical need is detailed in a medical report that accompanies the claim form on submission"
        );
    }
}

