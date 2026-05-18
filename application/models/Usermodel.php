<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model {

    public function get_recharge_list() {
        return $this->db->order_by('id','DESC')->get('rechargelist')->result_array();
    }
    public function get_recharge_list_with_userID($uid) {
        return $this->db->where('userId', $uid)->order_by('id','DESC')->get('rechargelist')->result_array();
    }
    public function get_recharge_list_with_userName($username) {
        $query = $this->db->where('username', $username)->get('members');
        if ($query->num_rows() > 0) {
            $userid = $query->row()->id;
            return $this->db->where('userId', $userid)->order_by('id','DESC')->get('rechargelist')->result_array();
        }
        
    }
    public function get_rechargelist_list($user_id) {
        // Fetch data from the "users" table
        $this->db->where('userId',$user_id);
        $query = $this->db->order_by('id','DESC')->get('rechargelists');

        // Check if there are any rows returned
        if ($query->num_rows() > 0) {
            // Return the result as an array
            return $query->result_array();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return array();
        }
    }
    public function get_order_list($user_id) {
        // Fetch data from the "users" table
        $this->db->where('userId',$user_id);
        $query = $this->db->order_by('id','DESC')->get('withdrawlists');

        // Check if there are any rows returned
        if ($query->num_rows() > 0) {
            // Return the result as an array
            return $query->result_array();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return array();
        }
    }

    public function get_withdrawal_list() {
        // Fetch data from the "users" table
        $query = $this->db->order_by('id','DESC')->get('withdrawlists');

        // Check if there are any rows returned
        if ($query->num_rows() > 0) {
            // Return the result as an array
            return $query->result_array();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return array();
        }
    }
    public function get_withdrawal_list_with_userName($username) {
        // Fetch data from the "users" table
        $query = $this->db->where('username', $username)->order_by('id','DESC')->get('withdrawlists');

        // Check if there are any rows returned
        if ($query->num_rows() > 0) {
            // Return the result as an array
            return $query->result_array();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return array();
        }
    }
    public function get_withdrawal_list_with_userID($uid) {
        // Fetch data from the "users" table
        $query = $this->db->where('userId', $uid)->order_by('id','DESC')->get('withdrawlists');

        // Check if there are any rows returned
        if ($query->num_rows() > 0) {
            // Return the result as an array
            return $query->result_array();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return array();
        }
    }

    

    public function register($data) {
        $this->db->insert('members', $data);
        return $this->db->insert_id();
    }
    public function customerRegister($data) {
        $this->db->insert('customerservicelist', $data);
    }
    public function passwordupdate($data)
    {
        $query = $this->db->get_where('members', array('username' => $data['datas']['username'], 'password' => $data['datas']['password']));
        if ($query->num_rows() > 0) {
            $dats = array(
                'password' => $data['datas']['newfpassword']
            );
            $this->db->where('username', $data['datas']['username']);
            $this->db->update('members',$dats);
            return array('success' => 'Your Password Updated');
        }else{
            return array('bad' => 'Your Old Password Wrong');
        }
    }
    public function getTextmanagement($pagename) {
        return $this->db->where('pageName',$pagename)->get('textmanagements')->row();
    }
    public function getfrontUser($username) {
        return $this->db->where('username',$username)->get('members')->row();
    }
    public function getProductWithId($id) {
        return $this->db->where('id',$id)->get('products')->row();
    }
    public function insertProductData($data) {
        $this->db->insert('productorder', $data);
    }
    public function productOrderUpdate($id)
    {
        $this->db->where('id', $id);
        $dats = array(
            'status' => 1
       );
       $this->db->update('productorder', $dats);
    }
    public function getProductPendingAll($userid) {
        $query = $this->db->order_by('id','DESC')->get_where('productorder', array('userId' => $userid));
        if ($query->num_rows() > 0) {
           return $query->result_array();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return array();
        }

    }
    public function getProductOrderWithId($id) {
        $query = $this->db->get_where('productorder', array('id' => $id, 'status' => 0));
        if ($query->num_rows() > 0) {
           return $query->row();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return null;
        }

    }public function getProductPending($userid) {
        $query = $this->db->get_where('productorder', array('userId' => $userid, 'status' => 0));
        if ($query->num_rows() > 0) {
           return $query->row();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return null;
        }

    }
    public function getProduct($balance) {
        $this->db->where('productPrice <', $balance);
        $this->db->order_by('id', 'RANDOM');
        $this->db->limit(1);
        $query = $this->db->get('products');
       if ($query->num_rows() > 0) {
           return $query->row();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return null;
        }
    }
    public function insertTodayReward($data)
    {
       $this->db->insert('todayrewards', $data);
    }
    public function totalTodayReward($data)
    {
       $query = $this->db->where('userId', $data)->get('todayrewards');
       if ($query->num_rows() > 0) {
           return $query->num_rows();
       }else{
        return null;
       }
    }
    public function continuousordersNumber($data)
    {
       $query = $this->db->where('status','0')->where('userId', $data)->order_by('id', 'ASC')->limit(1)->get('continuousorders');
       if ($query->num_rows() > 0) {
           return $query->row();
       }else{
            return null;
       }
    }

    public function totalJourney($userid)
    {
        return $this->db->where('userId', $userid)->get('todayrewards')->num_rows();
    }
    public function totalReward($userid)
    {
        $query =  $this->db->where('userId', $userid)->get('todayrewards');
        if ($query->num_rows() > 0) {
            // Return the result as an array
            return $query->result_array();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return array();
        }
    }
    public function getTodayReward($id) {
       $query = $this->db->get_where('todayrewards', array('userId' => $id, 'created_at' => date('Y-m-d')));
       if ($query->num_rows() > 0) {
           return $query->result_array();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return array();
        }
    }
    public function get_system_users() {
        return $this->db->order_by('id','DESC')->get('systemuser')->result_array();
    }
    public function insert_system_user($data) {
        $this->db->insert('systemuser', $data);
    }
    public function get_system_user($user_id) {
        // Fetch data from the "users" table
        $this->db->where('id',$user_id);
        $query = $this->db->get('systemuser');

        // Check if there are any rows returned
        if ($query->num_rows() > 0) {
            // Return the result as an array
            return $query->result_array();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return array();
        }
    }
    public function getSystemById($userId) {
        $query = $this->db->get_where('systemuser', array('id' => $userId));
        return $query->row(); // Return single row
    }
    public function update_system_users($data) {
        $this->db->where('id', $data['id']);
        unset($data['id']); // Remove ID from the data array
        $this->db->update('systemuser', $data);
        return $this->db->affected_rows(); // Return the number of affected rows
    }
    public function deleteSystemUser($userId) {
    $this->db->where('id', $userId);
    $this->db->delete('systemuser');

    return $this->db->affected_rows() > 0;
}
     public function getUserById($userId) {
        $query = $this->db->get_where('customerservicelist', array('id' => $userId));
        return $query->row(); // Return single row
    }
    public function updateUserStatus($userId, $data) {
        $this->db->where('id', $userId);
        $this->db->update('customerservicelist', $data);
        return $this->db->affected_rows() > 0; // Return TRUE if at least one row is affected
    }
    public function deleteUser($userId) {
    $this->db->where('id', $userId);
    $this->db->delete('customerservicelist');

    return $this->db->affected_rows() > 0;
}
    public function get_user_data($user_id) {
        // Fetch data from the "users" table
        $this->db->where('id',$user_id);
        $query = $this->db->get('customerservicelist');

        // Check if there are any rows returned
        if ($query->num_rows() > 0) {
            // Return the result as an array
            return $query->result_array();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return array();
        }
    }
    public function get_mall_datas($id) {
        // Fetch data from the "users" table
        $this->db->where('id',$id);
        $query = $this->db->get('announcements');

        // Check if there are any rows returned
        if ($query->num_rows() > 0) {
            // Return the result as an array
            return $query->result_array();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return array();
        }
    }
    public function get_text_data() {
        return $this->db->get('textmanagement')->result_array();
    }
    public function get_text_datas($id) {
        // Fetch data from the "users" table
        $this->db->where('id',$id);
        $query = $this->db->get('textmanagement');

        // Check if there are any rows returned
        if ($query->num_rows() > 0) {
            // Return the result as an array
            return $query->result_array();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return array();
        }
    }
    public function update_text($data) {
        $this->db->where('id', $data['id']);
        unset($data['id']); // Remove ID from the data array
        $this->db->update('textmanagement', $data);
        return $this->db->affected_rows(); // Return the number of affected rows
    }
    public function get_product_rows() {
        return $this->db->order_by('id','DESC')->get('products')->num_rows();
    }
    public function get_product_data($limit, $offset) {
        return $this->db->order_by('id','DESC')->get('products', $limit, $offset)->result_array();
    }
    public function insert_product_data($data) {
        $this->db->insert('products', $data);
    }
    public function get_product_datas($id) {
        // Fetch data from the "users" table
        $this->db->where('id',$id);
        $query = $this->db->get('products');

        // Check if there are any rows returned
        if ($query->num_rows() > 0) {
            // Return the result as an array
            return $query->result_array();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return array();
        }
    }
    public function productgetImagePath($id) {
        $this->db->select('productImage');
        $this->db->where('id', $id);
        $query = $this->db->get('products');
        $result = $query->row_array();
        return $result['productImage'];
    }
    public function product_content_update($data) {
        $this->db->where('id', $data['id']);
        unset($data['id']);
        $this->db->update('products', $data);
    }
    public function delete_products($userId) {
    $this->db->where('id', $userId);
    $this->db->delete('products');

    return $this->db->affected_rows() > 0;
    }
    public function reset_data($userId) {
    $this->db->where('userId', $userId);
    $this->db->delete('todayrewards');

    return $this->db->affected_rows() > 0;
    }
    public function get_category_data() {
        return $this->db->order_by('id','DESC')->get('productcategories')->result_array();
    }

    public function insert_category_data($data) {
        $this->db->insert('productcategories', $data);
    }
    public function get_category_datas($id) {
        // Fetch data from the "users" table
        $this->db->where('id',$id);
        $query = $this->db->get('productcategories');

        // Check if there are any rows returned
        if ($query->num_rows() > 0) {
            // Return the result as an array
            return $query->result_array();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return array();
        }
    }
    public function update_category($data) {
        $this->db->where('id', $data['id']);
        unset($data['id']); // Remove ID from the data array
        $this->db->update('productcategories', $data);
        return $this->db->affected_rows(); // Return the number of affected rows
    }
    public function delete_categorys($userId) {
    $this->db->where('id', $userId);
    $this->db->delete('productcategories');

    return $this->db->affected_rows() > 0;
    }
    public function get_bulletin_data() {
        return $this->db->order_by('id','DESC')->get('announcements')->result_array();
    }
    public function insert_bulletin_data($data) {
        $this->db->insert('announcements', $data);
    }
    public function get_bulletin_datas($id) {
        // Fetch data from the "users" table
        $this->db->where('id',$id);
        $query = $this->db->get('announcements');

        // Check if there are any rows returned
        if ($query->num_rows() > 0) {
            // Return the result as an array
            return $query->result_array();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return array();
        }
    }
    public function update_bulletin($data) {
        $this->db->where('id', $data['id']);
        unset($data['id']); // Remove ID from the data array
        $this->db->update('announcements', $data);
        return $this->db->affected_rows(); // Return the number of affected rows
    }
    public function delete_bulletins($userId) {
    $this->db->where('id', $userId);
    $this->db->delete('announcements');

    return $this->db->affected_rows() > 0;
}
    public function get_mall_data() {
        return $this->db->order_by('id','DESC')->get('homerotators')->result_array();
    }
    public function mall_image_title($title, $image_path) {
        $data = array(
            'title' => $title,
            'image' => base_url().'assets/uploads/img/'.$image_path,
            'addTime' => time()
        );
        $this->db->insert('homerotators', $data);
    }
    public function mall_image_title_update($id,$title, $image_path) {
        $data = array(
            'title' => $title,
            'image' => base_url().'assets/uploads/img/'.$image_path
        );
        $this->db->where('id', $id);
        $this->db->update('homerotators', $data);
    }
    public function mall_title_update($id,$title) {
        $data = array(
            'title' => $title
        );
        $this->db->where('id', $id);
        $this->db->update('homerotators', $data);
    }
    public function mallgetImagePath($id) {
        $this->db->select('image');
        $this->db->where('id', $id);
        $query = $this->db->get('homerotators');
        $result = $query->row_array();
        return $result['image'];
    }
    public function update_mall($data) {
        $this->db->where('id', $data['id']);
        unset($data['id']); // Remove ID from the data array
        $this->db->update('homerotators', $data);
        return $this->db->affected_rows(); // Return the number of affected rows
    }
    public function mallimgdelete($id) {
        $this->db->where('id', $id);
        $this->db->delete('homerotators');
    }
    public function update_user($data) {
        $this->db->where('id', $data['id']);
        unset($data['id']); // Remove ID from the data array
        $this->db->update('customerservicelist', $data);
        return $this->db->affected_rows(); // Return the number of affected rows
    }
    public function is_username_unique_customer($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('customerservicelist');
        return $query->num_rows() == 0;
    }
    public function get_system_role() {
        return $this->db->order_by('id','DESC')->get('addrole')->result_array();
    }
    public function insert_role_data($data) {
        $this->db->insert('addrole', $data);
    }
    public function get_role_datas($id) {
        // Fetch data from the "users" table
        $this->db->where('id',$id);
        $query = $this->db->get('addrole');

        // Check if there are any rows returned
        if ($query->num_rows() > 0) {
            // Return the result as an array
            return $query->row_array();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return array();
        }
    }
    public function update_role($data) {
        $this->db->where('id', $data['id']);
        unset($data['id']); // Remove ID from the data array
        $this->db->update('addrole', $data);
        return $this->db->affected_rows(); // Return the number of affected rows
    }
    public function delete_role($userId) {
    $this->db->where('id', $userId);
    $this->db->delete('addrole');

    return $this->db->affected_rows() > 0;
}
    public function get_system_setting() {
        return $this->db->get('systemsettings')->result_array();
    }
    public function get_users_role() {
        return $this->db->order_by('id','DESC')->get('addrole')->result_array();
    }
    public function get_users() {
        return $this->db->order_by('id','DESC')->get('customerservicelist')->result_array();
    }
    public function get_agent_list() {
        return $this->db->where('memberAgent','1')->order_by('id','DESC')->get('members')->result_array();
    }
    public function get_agent_list_with_userName($usern) {
        return $this->db->where('username', $usern)->where('memberAgent','1')->order_by('id','DESC')->get('members')->result_array();
    }
    public function get_agent_list_with_userNumber($usern) {
        return $this->db->where('phN', $usern)->where('memberAgent','1')->order_by('id','DESC')->get('members')->result_array();
    }
    public function total_members_rows() {
        return $this->db->where('memberAgent','0')->order_by('id','DESC')->get('members')->num_rows();
    }
    public function get_members_list($limit, $offset) {
        return $this->db->where('memberAgent','0')->order_by('id','DESC')->get('members', $limit, $offset)->result_array();
    }
    public function get_members_list_with_userName($usern) {
        return $this->db->where('username', $usern)->where('memberAgent','0')->order_by('id','DESC')->get('members')->result_array();
    }

    public function get_members_list_with_userNumber($usern) {
        return $this->db->like('phN', $usern, 'both')->where('memberAgent','0')->order_by('id','DESC')->get('members')->result_array();
    }
    public function get_members_data($user_id) {
        // Fetch data from the "users" table
        $this->db->where('level',$user_id);
        $query = $this->db->get('memberlevels');

        // Check if there are any rows returned
        if ($query->num_rows() > 0) {
            // Return the result as an array
            return $query->result_array();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return array();
        }
    }
    public function getMemberStatus($userId) {
        $query = $this->db->get_where('members', array('id' => $userId));
        return $query->row(); // Return single row
    }
    public function update_member_status($data) {
        $this->db->where('id', $data['id']);
        unset($data['id']); // Remove ID from the data array
        $this->db->update('members', $data);
        return $this->db->affected_rows(); // Return the number of affected rows
    }
    public function update_member($data) {
        $this->db->where('id', $data['id']);
        unset($data['id']); // Remove ID from the data array
        $this->db->update('members', $data);
        return $this->db->affected_rows(); // Return the number of affected rows
    }
    public function extraRewadUpdate($userid)
    {
        $total = $this->totalTodayReward($userid);
    
        $query = $this->db->where('userId', $userid)->where('continuous', $total)->where('status','0')->order_by('id','ASC')->get('continuousorders');
        if ($query->num_rows() > 0) {

            $dats = array(
                'status' => 1
           );
       $where = array(
        'id' => $query->row()->id,
        'userId' => $userid,
        'status' => 0
       );
       $this->db->where($where);
       $this->db->update('continuousorders', $dats);
        }
    }
    public function memberBalanceUpdate($id,$newBalance,$parentCommssions)
    {
       $parentUser = $this->db->where('id', $id)->get('members')->row();
       $parentRefCode = $parentUser->inviteCode;
       $parentUserGetID  = $this->db->where('myCode', $parentRefCode)->get('members')->row();

       $parentUserID = $parentUserGetID->id;
       $parentUserCurrentBalance = $parentUserGetID->balance;
       $parentUserNewBalance = $parentUserCurrentBalance + $parentCommssions;
       $parentData = array(
            'balance' => $parentUserNewBalance
       );
       
    //    $this->db->where('id', $parentUserID);
    //    $this->db->update('members', $parentData);


       $this->db->where('id', $id);
       $dats = array(
            'balance' => $newBalance
       );
       $this->db->update('members', $dats);
    }
    public function withdrawalRequest($data)
    { 
        $memberBalance = $this->get_balance_user($data['userId']);
        $oldBalance = $memberBalance->balance;
        $orderAmounts = $data['orderAmount'];
        $newBalance = $oldBalance - $orderAmounts;

        $this->db->where('id', $data['userId']);
       $dats = array(
            'balance' => $newBalance
       );
       $this->db->update('members', $dats);
       
        $bankDetail = $this->getMemberBankById($data['userId']);
        $s = array(
            'userId' => $data['userId'],
            'username' => $data['username'],
            'orderAmount' => $data['orderAmount'],
            'mobile' => $bankDetail->phoneNumber,
            'bankCard' => $bankDetail->cardNumber,
            'bankName' => $bankDetail->bankName,
            'name' => $bankDetail->name,
            'created_at' => time(),
            'oprate' => 0,
        );
        $this->db->insert('withdrawlists', $s);
        return array('success' => 'Your Order Submited');
    }
    public function getMemberBankById($userId) {
        $query = $this->db->get_where('userbankinfos', array('userId' => $userId));
        return $query->row(); // Return single row
    }
    public function banksupdate($data)
    {
        $query = $this->db->get_where('userbankinfos', array('userId' => $data['userId']));
        $dats = array(
                'name' => $data['name'],
                'cardNumber' => $data['cardNumber'],
                'bankName' => $data['bankName'],
                'phoneNumber' => $data['phoneNumber']
            );
        if ($query->num_rows() > 0) {
            
            $this->db->where('userId', $data['userId']);
            $this->db->update('userbankinfos',$dats);
            return array('success' => 'Your Bank Info Updated');
        }else{
            $dats['userId'] = $data['userId'];
            $this->db->insert('userbankinfos', $dats);
            return array('success' => 'Your Bank Data Inserted');
        }
    }
    public function bankupdate($data)
    {
        $query = $this->db->get_where('userbankinfos', array('userId' => $data['datas']['id']));
        $dats = array(
                'name' => $data['datas']['fullname'],
                'cardNumber' => $data['datas']['wallet'],
                'bankName' => $data['datas']['network'],
                'phoneNumber' => $data['datas']['number']
            );
        if ($query->num_rows() > 0) {
            
            $this->db->where('userId', $data['datas']['id']);
            $this->db->update('userbankinfos',$dats);
            return array('success' => 'Your Bank Info Updated');
        }else{
            $dats['userId'] = $data['datas']['id'];
            $this->db->insert('userbankinfos', $dats);
            return array('success' => 'Your Bank Data Inserted');
        }
    }
    public function balance_update($userId) {
        $query = $this->db->get_where('userbankinfos', array('userId' => $userId));
        return $query->row(); // Return single row
    }
    public function get_balance_user($data) {

        $this->db->where('id', $data);
        $query = $this->db->get('members');

        // Check if there are any rows returned
        if ($query->num_rows() > 0) {
            // Return the result as an array
            return $query->row();
        } else {
            // If no rows are found, return an empty array or any other indication as needed
            return false;
        }
        
    }
    
     public function user_balance_down($data)
    {
       $this->db->where('id', $data['id']);
       $query = $this->db->get('members');
       $oldBalance = $query->row();
       $newBalance = $oldBalance->balance - $data['balance'];

       $datas = array(
        'userId' => $oldBalance->id,
        'username' => $oldBalance->username,
        'orderAmout' => -(float)$data['balance'],
        'created_at' => time(),
       );
       $this->db->insert('rechargelist', $datas);
       $this->db->where('id', $data['id']);
       $dats = array(
            'balance' => $newBalance
       );
       $this->db->update('members', $dats);
       return $this->db->affected_rows();
    }
    public function user_balance_ups($data)
    {
       $this->db->where('id', $data['id']);
       $query = $this->db->get('members');
       $oldBalance = $query->row();
       $newBalance = $oldBalance->balance + $data['balance'];

       $datas = array(
        'userId' => $oldBalance->id,
        'username' => $oldBalance->username,
        'orderAmout' => $data['balance'],
        'created_at' => time(),
       );
       $this->db->insert('rechargelist', $datas);
       $this->db->where('id', $data['id']);
       $dats = array(
            'balance' => $newBalance
       );
       $this->db->update('members', $dats);
       return $this->db->affected_rows();
    }
    public function get_grade_list() {
        return $this->db->order_by('id','ASC')->get('memberlevels')->result_array();
    }

    public function update_grade($data) {
        $this->db->where('id', $data['id']);
        unset($data['id']); // Remove ID from the data array
        $this->db->update('memberlevels', $data);
        return $this->db->affected_rows(); // Return the number of affected rows
    }
    public function deletegrade($userId) {
    $this->db->where('id', $userId);
    $this->db->delete('memberlevels');

    return $this->db->affected_rows() > 0;
}
    public function generate_unique_invitation_code() {
        $code = ''; // Initialize the code

        do {
            $code = strtoupper(substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 6)); // Generate a random 6-character code
            $this->db->where('myCode', $code);
            $query = $this->db->get('members');
        } while ($query->num_rows() > 0); // Repeat until a unique code is found

        return $code;
    }
     public function is_username_uniques($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('members');
        return $query->num_rows() == 0;
    }
    public function is_email_unique($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('members');
        return $query->num_rows() == 0;
    }
    public function is_invitation_code_valid($invitation_code) {
        $this->db->where('myCode', $invitation_code);
        $query = $this->db->get('members');
        return $query->num_rows() == 1; // Return TRUE if the code is valid and active
    }
}
