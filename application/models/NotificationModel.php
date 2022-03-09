<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotificationModel extends CI_Model {
    
    // //Push Notification Token Gen
    // public function PushNotificationTokGen($CustID,$FCMpushTok)
    // {

    //   $query =  $this->db->query('CALL `PushNotifyTokGen`("'.$CustID.'","'.$FCMpushTok.'")');

    //     return $query;
    // }

//Display Notification Gen
 public function DisplayPushNotifyToken($CustID)
    {

      $query =  $this->db->query('CALL `DisplayPushNotifyTok`("'.$CustID.'")');

        return $query;
    }

// //Customer ID From Request ID
//  public function getCustomerID($reqID)
//     {

//       $query =  $this->db->query('CALL `DisplayCusIDviaReqID`("'.$reqID.'")');

//         return $query;
//     }


public function DisplayUserIDviaReferenceCode($referenceID)
    {

      $query =  $this->db->query('CALL `DisplayUserIDviaReferenceCode`("'.$referenceID.'")');

        return $query;
    }
    
}