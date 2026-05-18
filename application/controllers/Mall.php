<?php 
/**
 * 
 */
class Mall extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('usermodel');
		$this->load->helper(array('form', 'url')); 
        if ($_SESSION['shoppingMallManagement'] == '1') {}else{
            redirect('admin');
        }
	}
	public function text()
	{
		$data['users'] = $this->usermodel->get_text_data();
   		$this->load->view('textManage',$data);
	}
	public function get_texts_data($id)
    {
    	$user_data = $this->usermodel->get_text_datas($id);
        echo json_encode($user_data);
    }
    public function update_texts()
    {
    	$data = array(
    		'id' => $this->input->post('id'),
            'TextContent' => $this->input->post('edpcontent')
        );


        // Update user data
        $affected_rows = $this->usermodel->update_text($data);
        if ($affected_rows > 0) {
            $response = array('status' => 'success', 'message' => 'User data updated successfully');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to update user data');
        }

        // Return JSON response
        echo json_encode($response);
    }
	public function product()
    {
        $results_per_page = 10;
        $number_of_results = $this->usermodel->get_product_rows();
        $number_of_pages = ceil($number_of_results / $results_per_page);
        if (!isset($_GET['page'])) {
            $page = 1;
        }else {
            $page = $_GET['page'];
        }
        $this_page_first_result = ($page - 1) * $results_per_page;
        $pages = '';
            for ($page = 1; $page <= $number_of_pages; $page++) {
                $pages .= '<a href="mall/product?page=' . $page . '"><div class="n-pagination-item n-pagination-item--active">' . $page . '</div></a> ';
            }
        $data['pages'] = $pages;

        $data['category'] = $this->usermodel->get_category_data();
        $data['users'] = $this->usermodel->get_product_data($results_per_page, $this_page_first_result);
        $this->load->view('productList',$data);
    }
	public function insertProduct() {
	 	
        $pcategory = $this->input->post('pcategory');
        $pname = $this->input->post('pname');
        $pprice = $this->input->post('pprice');
        $pcontent = $this->input->post('pcontent');
        $sname = $this->input->post('sname');

        $config['upload_path']          = 'assets/uploads/img/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 3048; // 2MB

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $image_path = $data['upload_data']['file_name'];
            $imagepath = base_url().'assets/uploads/img/'.$image_path;
            $data = array(
            'productCategory' => $pcategory,
            'productName' => $pname,
            'productPrice' => $pprice,
            'productContent' => $pcontent,
            'storeName' => $sname,
            'productImage' => $imagepath,
            'addTime' => time(),
            'updateTime' => time()
        );
            $this->usermodel->insert_product_data($data);
            echo json_encode(array('success' => 'Data uploaded successfully.'));
        }
    }
    public function get_product_data($id)
    {
    	$user_data = $this->usermodel->get_product_datas($id);
        echo json_encode($user_data);
    }
    public function update_product()
    {

    	$config['upload_path']          = 'assets/uploads/img/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 3048; // 2MB
    	$this->load->library('upload', $config);
    	
    	$id = $this->input->post('editid');
    	$pcategory = $this->input->post('pcategory');
        $pname = $this->input->post('pname');
        $pprice = $this->input->post('pprice');
        $pcontent = $this->input->post('edpcontent');
        $sname = $this->input->post('sname');

    	$file_name = $_FILES['image']['name'];
    	 // Get image path from database
        
    	if ($file_name) {
    		$image_path = $this->usermodel->productgetImagePath($id);
	         // Assuming your images are stored in a directory named 'uploads'
		    $uploads_dir = 'assets/uploads/img/';
		    
		    // Extract filename from URL
		    $file_names = basename($image_path);
		    
		    // Construct file path
		    $file_path = $uploads_dir . $file_names;
		    
		    // Check if file exists
		    if (file_exists($file_path)) {
		        // Attempt to delete the file
		        unlink($file_path);
		        
			}
    		if (!$this->upload->do_upload('image')) {
	            $error = array('error' => $this->upload->display_errors());
	            echo json_encode($error);
	        } else {
	            $data = array('upload_data' => $this->upload->data());
	            $image_path = $data['upload_data']['file_name'];
	            $img = base_url().'assets/uploads/img/'.$image_path;
	            $data = array(
			            'id' => $id,
			            'productImage' => $img,
			           // 'productCategory' => $pcategory,
			            'productName' => $pname,
			            'productPrice' => $pprice,
			            'productContent' => $pcontent,
			            'storeName' => $sname,
			            'updateTime' => time()
			        );
	            $this->usermodel->product_content_update($data);
	            $response = array('status' => 'success', 'message' => 'Data update successfully','path'=>$image_path);
	        }
        } else {
        	
    		$data = array(
            'id' => $id,
            //'productCategory' => $pcategory,
            'productName' => $pname,
            'productPrice' => $pprice,
            'productContent' => $pcontent,
            'storeName' => $sname,
            'updateTime' => time()
        );
    		$this->usermodel->product_content_update($data);
            $response = array('status' => 'success', 'message' =>  'Data update successfully');
        }


        // Return JSON response
        echo json_encode($response);
    }
    public function delete_product() {
    $userId = $this->input->post('userId');

    // Call your model method to delete the user
    $result = $this->usermodel->delete_products($userId);

    if($result) {
        echo "User deleted successfully";
    } else {
        echo "Failed to delete user";
    }
}
	public function category()
	{
	$data['users'] = $this->usermodel->get_category_data();
   	$this->load->view('productCategory',$data);
	}
	public function category_insert_data()
    {
    	$data = array(
            'CategoryName' => $this->input->post('title'),
            'CategoryProfile' => $this->input->post('content'),
            'addTime' => time()	
        );


        // Update user data
        $this->usermodel->insert_category_data($data);
       
          $response = array('status' => 'success', 'message' => 'User data insert successfully');
        

        // Return JSON response
        echo json_encode($response);
    }
    public function get_category_data($id)
    {
    	$user_data = $this->usermodel->get_category_datas($id);
        echo json_encode($user_data);
    }
    public function update_category()
    {
    	$data = array(
    		'id' => $this->input->post('id'),
            'CategoryName' => $this->input->post('edtitle'),
            'CategoryProfile' => $this->input->post('edcontent')
        );


        // Update user data
        $affected_rows = $this->usermodel->update_category($data);
        if ($affected_rows > 0) {
            $response = array('status' => 'success', 'message' => 'User data updated successfully');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to update user data');
        }

        // Return JSON response
        echo json_encode($response);
    }
    public function delete_category() {
    $userId = $this->input->post('userId');

    // Call your model method to delete the user
    $result = $this->usermodel->delete_categorys($userId);

    if($result) {
        echo "User deleted successfully";
    } else {
        echo "Failed to delete user";
    }
}
   public function bulletin()
   {
   	$data['users'] = $this->usermodel->get_bulletin_data();
   	$this->load->view('bulletin',$data);
   }
    public function bulletin_insert_data()
    {
    	$data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'addTime' => time()	
        );


        // Update user data
        $this->usermodel->insert_bulletin_data($data);
       
          $response = array('status' => 'success', 'message' => 'User data insert successfully');
        

        // Return JSON response
        echo json_encode($response);
    }
    public function get_bulletin_data($id)
    {
    	$user_data = $this->usermodel->get_mall_datas($id);
        echo json_encode($user_data);
    }
     public function update_bulletin()
    {
    	$data = array(
    		'id' => $this->input->post('id'),
            'title' => $this->input->post('edtitle'),
            'content' => $this->input->post('edcontent')
        );


        // Update user data
        $affected_rows = $this->usermodel->update_bulletin($data);
        if ($affected_rows > 0) {
            $response = array('status' => 'success', 'message' => 'User data updated successfully');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to update user data');
        }

        // Return JSON response
        echo json_encode($response);
    }
    public function delete_bulletin() {
    $userId = $this->input->post('userId');

    // Call your model method to delete the user
    $result = $this->usermodel->delete_bulletins($userId);

    if($result) {
        echo "User deleted successfully";
    } else {
        echo "Failed to delete user";
    }
}
	public function swiper()
	{
		$data['users'] = $this->usermodel->get_mall_data();
		$this->load->view('homePageCarousel',$data);
	}
	 public function upload() {
	 	
        $title = $this->input->post('title');

        $config['upload_path']          = 'assets/uploads/img/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 3048; // 2MB

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $image_path = $data['upload_data']['file_name'];

            $this->usermodel->mall_image_title($title, $image_path);
            echo json_encode(array('success' => 'Data uploaded successfully.'));
        }
    }

    public function get_mall_data($id)
    {
    	$user_data = $this->usermodel->get_mall_datas($id);
        echo json_encode($user_data);
    }

    public function update_mall()
    {
    	$config['upload_path']          = 'assets/uploads/img/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 3048; // 2MB
    	$this->load->library('upload', $config);
    	// $data = array(
     //        'id' => $this->input->post('id'),
     //        'title' => $this->input->post('title')
     //    );
    	$title = $this->input->post('edittitle');
    	$id = $this->input->post('editid');
    	$file_name = $_FILES['editfile']['name'];
    	 // Get image path from database
        
    	if ($file_name) {
    		$image_path = $this->usermodel->mallgetImagePath($id);
	         // Assuming your images are stored in a directory named 'uploads'
		    $uploads_dir = 'assets/uploads/img/';
		    
		    // Extract filename from URL
		    $file_names = basename($image_path);
		    
		    // Construct file path
		    $file_path = $uploads_dir . $file_names;
		    
		    // Check if file exists
		    if (file_exists($file_path)) {
		        // Attempt to delete the file
		        unlink($file_path);
		        
			}
    		if (!$this->upload->do_upload('editfile')) {
	            $error = array('error' => $this->upload->display_errors());
	            echo json_encode($error);
	        } else {
	            $data = array('upload_data' => $this->upload->data());
	            $image_path = $data['upload_data']['file_name'];

	            $this->usermodel->mall_image_title_update($id,$title, $image_path);
	            $response = array('status' => 'success', 'message' => 'Data update successfully','path'=>$image_path);
	        }
        } else {
        	$title = $this->input->post('edittitle');
    		$id = $this->input->post('editid');
    		
    		$this->usermodel->mall_title_update($id,$title);
            $response = array('status' => 'success', 'message' =>  'Data update successfully');
        }


        // Return JSON response
        echo json_encode($response);
    }
    public function malldelete($id) {
        // Get image path from database
        $image_path = $this->usermodel->mallgetImagePath($id);
         // Assuming your images are stored in a directory named 'uploads'
	    $uploads_dir = 'assets/uploads/img/';
	    
	    // Extract filename from URL
	    $file_name = basename($image_path);
	    
	    // Construct file path
	    $file_path = $uploads_dir . $file_name;
	    
	    // Check if file exists
	    if (file_exists($file_path)) {
	        // Attempt to delete the file
	        unlink($file_path);
	        
		}
        
        // Delete data from database
        $this->usermodel->mallimgdelete($id);
        
        echo json_encode(array('path' => $file_path, 'success' => 'Data deleted successfully.'));
    }
}