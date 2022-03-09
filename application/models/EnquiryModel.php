<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EnquiryModel extends CI_Model {

    public function ViewInquiryFilter($fromDate,$toDate)
    {
        
        $query = $this->db->query('CALL `ViewInquiryFilter`("'.$fromDate.'","'.$toDate.'")');
        return $query ;
    }

    public function ViewAllHorosFilter($masterId,$referenceID)
    {
        
        $query = $this->db->query('CALL `ViewAllHorosFilter`("'.$masterId.'","'.$referenceID.'")');
        return $query ;
    }

    public function InquiryMarkAsCompleted($referenceID)
    {
        
        $query = $this->db->query('CALL `InquiryMarkAsCompleted`("'.$referenceID.'")');
        return $query ;
    }

}