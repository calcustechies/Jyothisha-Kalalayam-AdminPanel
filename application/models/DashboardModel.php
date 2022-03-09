<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model {


    public function ViewallHoroscope()
    {
        $fromDate =date('Y/m/d', strtotime('-7 days'));
        $toDate =date("Y/m/d");
        $withorwithout =0;
        $pendingornot   =2;

        $query  =$data = $this->db->query('CALL `ViewHoroscopeRequestsbasedonfiltering`("'.$fromDate.'","'.$toDate.'","'.$withorwithout.'","'.$pendingornot.'")');
        return $query ;
    }

    public function viewfillterbasedhoroscope($fromDate,$toDate,$withorwithout,$pendingornot)
    {
       
        $query  =$data = $this->db->query('CALL `ViewHoroscopeRequestsbasedonfiltering`("'.$fromDate.'","'.$toDate.'","'.$withorwithout.'","'.$pendingornot.'")');
        return $query ;
    }
}