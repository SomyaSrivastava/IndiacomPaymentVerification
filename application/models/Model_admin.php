<?php
class Model_admin extends CI_MODEL{
 
  
	public function get_contents()
	{
		$this->db->select('payment_id,event_id,MEMBER_ID,mode,reciept_number,bank_branch,amount,currency,payment_date,dateOfRequest,PaymentProof,extension,verify,comments');
		$this->db->from('member');
		$query=$this->db->get();
	    return $result=$query->result(); 
	    					 
	}
	
	public function count_member()
	{
		return $this->db->count_all('member');
	}
		

	public function get_contentsByID($MEMBER_ID)
	{
		$this->db->select('payment_id,event_id,MEMBER_ID,mode,reciept_number,bank_branch,amount,currency,payment_date,dateOfRequest,PaymentProof,extension,verify,comments');
		$this->db->from('member');
		$this->db->where('MEMBER_ID', $MEMBER_ID);
		$query=$this->db->get();
	    return $result=$query->result(); 					 
	}
	public function get_pending_content()
	{
		$verify = array('successfull', 'unsuccessfull');
		$this->db->select('payment_id,event_id,MEMBER_ID,mode,reciept_number,bank_branch,amount,currency,payment_date,dateOfRequest,PaymentProof,extension,verify');
		$this->db->from('member');
        $this->db->where(array('verify' => NULL));
		$query=$this->db->get();
	    return  $result=$query->result();
	}
    
	public function search_member($searchmember)
	{
		$this->db->select('payment_id,event_id,MEMBER_ID,mode,reciept_number,bank_branch,amount,currency,payment_date,dateOfRequest,PaymentProof,extension,verify,comments');
		$this->db->from('member');
		$this->db->like('MEMBER_ID',$searchmember);
		$query=$this->db->get();
		if($query->num_rows() > 0	)
		{
			return $query->result();
		}
		else
		{
			return $query->result();
		}
	}

    public function getalldata($MEMBER_ID,$data)	   
	{
	   $this->db->where('MEMBER_ID',$MEMBER_ID);
	   $this->db->update('member',$data);
	}



}

?>