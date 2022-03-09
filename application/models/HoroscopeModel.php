<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HoroscopeModel extends CI_Model {


    public function ViewonewithHoroscope($withHoroscopeID,$referenceID)
    {
        $query  =$data = $this->db->query('CALL `ViewOneWithHoroscopeRequest`("'.$withHoroscopeID.'","'.$referenceID.'")');
        return $query ;
    }

    public function upsertRemarkToWithHoroscope($referenceWithHoroscopeID,$remark)
    {
        $query  =$data = $this->db->query('CALL `upsertRemarkToWithHoroscope`("'.$referenceWithHoroscopeID.'","'.$remark.'")');
        return $query ;
    }

    public function ViewOneWithoutHoroscopeRequest($WithoutHoroscopeID)
    {
        //$WithoutHoroscopeID=4;
        $query  = $this->db->query('CALL `ViewOneWithoutHoroscopeRequest`("'.$WithoutHoroscopeID.'")');
        return $query ;
    }


    public function upsertRemarkToWithoutHoroscope($masterID,$remark)
    {
        //$WithoutHoroscopeID=4;
        $query  = $this->db->query('CALL `upsertRemarkToWithoutHoroscope`("'.$masterID.'","'.$remark.'")');
        return $query ;
    }



}
?>