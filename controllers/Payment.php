<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller{

    function __construct() {
        parent::__construct();
       $this->load->model('crud_model');
       $this->load->model('common_model');
        $this->load->model('payment_model');
    }

//***********************Payment Success**************************** 
function successPayment(){

$status=$this->input->post("status");
$firstname=$this->input->post("firstname");
$amount=$this->input->post("amount");
$txnid=$this->input->post("txnid");
$posted_hash=$this->input->post("hash");
$key=$this->input->post("key");
$productinfo=$this->input->post("productinfo");
$email=$this->input->post("email");
$salt="";

// Salt should be same Post Request 

If (isset($this->input->post("additionalCharges")) {
    $additionalCharges=$this->input->post("additionalCharges");
    $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
    $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
           if ($hash != $posted_hash) {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-warning">Invalid Transaction. Please try again</div>');
                         redirect('payment/paymentForm');
                    } else {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-success"><h3>Thank You. Your order status is '. $status .'.</h3></div>');
                        redirect('payment/paymentForm');
                    }
    
//       if ($hash != $posted_hash) {
//	       echo "Invalid Transaction. Please try again";
//		   } else {
//          echo "<h3>Thank You. Your order status is ". $status .".</h3>";
//          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
//          echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
//		   }
}
    
    
//***********************Payment form****************************    
function formPayment(){
    
$MERCHANT_KEY = "";
$SALT = "";
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($this->input->post())) {
    //print_r($_POST);
  foreach($this->input->post() as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
}

//***********************Payment Failure**************************** 
function failurePayment(){
    
    $status=$this->input->post("status");
$firstname=$this->input->post("firstname");
$amount=$this->input->post("amount");
$txnid=$this->input->post("txnid");

$posted_hash=$this->input->post("hash");
$key=$this->input->post("key");
$productinfo=$this->input->post("productinfo");
$email=$this->input->post("email");
$salt="";

// Salt should be same Post Request 

If (isset($this->input->post("additionalCharges"])) {
       $additionalCharges=$this->input->post("additionalCharges");
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
  
         if ($hash != $posted_hash) {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-warning">Invalid Transaction. Please try again</div>');
                         redirect('payment/paymentForm');
                    } else {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-success"><h3>Thank You. Your order status is '. $status .'.</h3></div>');
                        redirect('payment/paymentForm');
                    }
}
    
}
