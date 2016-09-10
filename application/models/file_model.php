<?php
class file_model extends CI_Model
{
    public function __construct(){
		parent::__construct();
	}
    
	public function insert_file($payment_id,$event_id,$MEMBER_ID,$mode,$pnumber,$amount,$bname,$currency,$Pdate,$filename,$extension)
    {
         $data=array
		 (
		 	'payment_id'=>$payment_id,
		 	'event_id'=>$event_id,
		    'MEMBER_ID' =>$MEMBER_ID,
			'mode'=>$mode,
			'reciept_number'=>$pnumber,
			'amount'=>$amount,
			'bank_branch'=>$bname,
			'currency'=>$currency,
			'payment_date'=>$Pdate,
			
		    'PaymentProof'=> $filename,
		    'extension'=>$extension    			
		 );
		    $this->db->insert('member',$data);
			return TRUE;
	 }

	 
	 public function update_filename()
    {
    	$this->db->select_max('payment_id');
		$this->db->from('member');
		$query=$this->db->get();
	    if($result=$query->result_array())
	    	return $result;
	    else
	    	return 0;
	}
	 

}


?>