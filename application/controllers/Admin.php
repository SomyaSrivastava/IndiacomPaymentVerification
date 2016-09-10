<?php 
class Admin extends MY_Controller 
{
     public function __construct()
     {
		parent::__construct();
		
	 }


	public function index()
	{

        $data   = array();
        $this->load->model('model_admin');
        $data['result'] = $this->model_admin->get_contents();
        $this->load->view('admin/paydetail', $data);
		
	}

	public function proof($MEMBER_ID)
	{
	    $data   = array();
        $this->load->model('model_admin');
		if($MEMBER_ID!=null && (intval($MEMBER_ID) > 0) )
		{
			$data['result'] = $this->model_admin->get_contentsByID($MEMBER_ID);
			if(!empty($data['result']))
			{
				$data['result'] = $data['result'][0];
			}
	    } else{
			$data['result'] = null;
		}
		//$data[message]='';
		$this->load->view('admin/proof',$data);
	}
    
	public function pending()
	{
		//$verify=array();
	    $data   = array();
        $this->load->model('model_admin');
		$data['result'] = $this->model_admin->get_pending_content(); 
		$this->load->view('admin/pending',$data);
	}

	public function amount($MEMBER_ID)
	{
	    $data   = array();
        $this->load->model('model_admin');

		if($MEMBER_ID!=null && (intval($MEMBER_ID) > 0) )
		{
			$data['result'] = $this->model_admin->get_contentsByID($MEMBER_ID);
			if(!empty($data['result']))
			{
				$data['result'] = $data['result'][0];
			}
	    } else{
			$data['result'] = null;
		}
		$this->load->view('admin/detail',$data);
	}
		
	public function search_member()
	{
		$this->load->model('model_admin');
		$searchmember=$this->input->post('search');
		
		if(isset($searchmember) and !empty($searchmember))
		{  
	        
			$data['result']=$this->model_admin->search_member($searchmember);
			$data['link']='';
			$this->load->view('admin/paydetail', $data);
		}
        else {
			$data['result']=null;
			$this->load->view('admin/paydetail', $data);
			
		}
	}
	
	public function payment_verification()
	{  
	 $MEMBER_ID=$this->input->post('mid');

	 $data=array
		(
		'verify'=>$this->input->post('verify'),
		'comments'=>$this->input->post('comments')
		);

		$this->load->model('model_admin');
		$this->model_admin->getalldata($MEMBER_ID,$data);
		$this->index();
    }


    
  
}

?>



       <!--$data   = array();
        $this->load->library('pagination');
        $this->load->model('model_admin');
        $data['result'] = $this->model_admin->get_contents();
       
		$config ['base_url']=base_url().'Admin/paydetail';	  
		$config ['total_rows']= $this->model_admin->count_member();      
		$config ['per_page']=3;
		if(!$this->pagination->initialize($config))
			print_r($config);
		$data['result'] = $this->model_admin->get_contents($config['per_page'], $this->uri->segment(3));
		$this->load->view('admin/paydetail', $data);

-->
       