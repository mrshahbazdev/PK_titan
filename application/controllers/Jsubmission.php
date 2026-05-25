<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Jsubmission extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); 
        if (isset($_SESSION["username"])) {
        } else {
            redirect("auth/login");
        }
        $check_user = $this->db->where('user_id', $_SESSION['id'])->where('is_verified', 1)->get('user_verifications');
        if ($check_user->num_rows() > 0) {}else{
			redirect('verification/send_otp');
		}
    }

    public function index()
    {
        $this->load->model("usermodel");
        $userName = $_SESSION["username"];
        $id = $_SESSION["id"];
        $data["query"] = $this->db->get("systemsettings")->row();
        $data["user"] = $this->usermodel->getfrontUser($userName);
        $mylevel = $this->db
            ->where("level", $data["user"]->memberLevel)
            ->get("memberlevels")
            ->row();
        $data["rewardd"] = $this->usermodel->getTodayReward($id);
        $data["totals"] = $this->usermodel->totalJourney($id);

        $today = date("Y-m-d");
        $totalTasksToday = $this->db
            ->where("userId", $id)
            ->where("created_at", $today)
            ->get("todayrewards")
            ->num_rows();
            $dailyLimit = $mylevel->orderReciveLimit;
            $check_trail = $this->db->where('user_id', $id)->where('payment_status', 'pending')->get('user_trials');
            if ($check_trail->num_rows() > 0) {
                $trial = $check_trail->row();
                $currentDate = date('Y-m-d');
                if ($currentDate > $trial->trial_end_date) {
                    if ($trial->payment_status == 'pending') {
                        $data["totals"] = $this->usermodel->totalJourney($id);
                        $data["reward"] = $this->usermodel->totalReward($id);
                        $data["errortoday"] = "Your trial period has expired. Please purchase a product to unlock your tasks. Thank you!";
                        $this->load->view("front/journey", $data);
                    }
                } else {
                    $trial_daily_tasks = $this->db->get('trial_periods')->row();
                    if ($totalTasksToday >= $trial_daily_tasks->tasks) {
                        $data["totals"] = $this->usermodel->totalJourney($id);
                        $data["reward"] = $this->usermodel->totalReward($id);
    
                        $data["errortoday"] = "Your Daily tasks limit has been reached. Please come back tomorrow.";
                        $this->load->view("front/journey", $data);
                    } else {
                        $data["reward"] = $this->usermodel->getTodayReward($id);
                        $pendingProduct = $this->usermodel->getProductPending($id);
                        if ($data["user"]->orderStatus !== "0") {
                            if ($pendingProduct !== null) {
                                $data["rewards"] = $this->usermodel->getProductWithId(
                                    $pendingProduct->productId
                                );
                                $data["pendingProduts"] = $pendingProduct;
                                $this->load->view("front/jsubmission", $data);
                            } else {
                                $data["rewards"] = $this->usermodel->getProduct(
                                    $mylevel->minimumBalanceLimit
                                );
                                if ($data["rewards"] !== null) {
                                        
                                    
                                            $memberLevelData = $this->usermodel->get_members_data(
                                                $data["user"]->memberLevel
                                            );
                                            $commissionRate =
                                                $memberLevelData[0]["commissionRate"];
                                            $price = $data["rewards"]->productPrice;
                                            $productId = $data["rewards"]->id;
                                            $userId = $data["user"]->id;
                                            $userBalance = $data["user"]->balance;
    
                                            // $commsion =
                                            //     $price * ($commissionRate / 100);
                                            // $parentCommssions = (30 / 100) * $commsion;
                                            $commsion = $commissionRate;
                                            $parentCommssions = $commissionRate;
    
                                            $productData = [
                                                "userId" => $id,
                                                "productId" => $productId,
                                                "price" => $price,
                                                "comission" => $commsion,
                                                "status" => 0,
                                                "time" => time(),
                                            ];
                                            $newBalance = $userBalance - $price;
                                            $this->usermodel->insertProductData(
                                                $productData
                                            );
                                            $this->usermodel->memberBalanceUpdate(
                                                $id,
                                                $newBalance,
                                                $parentCommssions
                                            );
                                            $pendingProducts = $this->usermodel->getProductPending(
                                                $id
                                            );
                                            $data["pendingProduts"] = $pendingProducts;
                                            $this->load->view(
                                                "front/jsubmission",
                                                $data
                                            );
                                    
                                } else {
                                    $data["error"] = "Please Wait No More Ticket";
                                    $this->load->view("front/journey", $data);
                                }
                            }
                        } else {
                            redirect("journey", "refresh");
                        }
    
                        $data["totalRewards"] = $this->usermodel->totalReward($id);
                        
                    }
                }
            }else{
                if ($totalTasksToday >= $dailyLimit) {
                    $data["totals"] = $this->usermodel->totalJourney($id);
                    $data["reward"] = $this->usermodel->totalReward($id);

                    $data["errortoday"] = "Your Daily tasks limit has been reached. Please come back tomorrow.";
                    $this->load->view("front/journey", $data);
                } else {
                    $data["reward"] = $this->usermodel->getTodayReward($id);
                    $pendingProduct = $this->usermodel->getProductPending($id);
                    if ($data["user"]->orderStatus !== "0") {
                        if ($pendingProduct !== null) {
                            $data["rewards"] = $this->usermodel->getProductWithId(
                                $pendingProduct->productId
                            );
                            $data["pendingProduts"] = $pendingProduct;
                            $this->load->view("front/jsubmission", $data);
                        } else {
                            $data["rewards"] = $this->usermodel->getProduct(
                                $mylevel->minimumBalanceLimit
                            );
                            if ($data["rewards"] !== null) {
                                    
                                
                                        $memberLevelData = $this->usermodel->get_members_data(
                                            $data["user"]->memberLevel
                                        );
                                        $commissionRate =
                                            $memberLevelData[0]["commissionRate"];
                                        $price = $data["rewards"]->productPrice;
                                        $productId = $data["rewards"]->id;
                                        $userId = $data["user"]->id;
                                        $userBalance = $data["user"]->balance;

                                        // $commsion =
                                        //     $price * ($commissionRate / 100);
                                        // $parentCommssions = (30 / 100) * $commsion;
                                        $commsion = $commissionRate;
                                        $parentCommssions = $commissionRate;

                                        $productData = [
                                            "userId" => $id,
                                            "productId" => $productId,
                                            "price" => $price,
                                            "comission" => $commsion,
                                            "status" => 0,
                                            "time" => time(),
                                        ];
                                        $newBalance = $userBalance - $price;
                                        $this->usermodel->insertProductData(
                                            $productData
                                        );
                                        $this->usermodel->memberBalanceUpdate(
                                            $id,
                                            $newBalance,
                                            $parentCommssions
                                        );
                                        $pendingProducts = $this->usermodel->getProductPending(
                                            $id
                                        );
                                        $data["pendingProduts"] = $pendingProducts;
                                        $this->load->view(
                                            "front/jsubmission",
                                            $data
                                        );
                                
                            } else {
                                $data["error"] = "Please Wait No More Ticket";
                                $this->load->view("front/journey", $data);
                            }
                        }
                    } else {
                        redirect("journey", "refresh");
                    }

                    $data["totalRewards"] = $this->usermodel->totalReward($id);
                    
                }
            }
        $this->load->view("front/sidebar", $data);
    }
}

/* End of file Jsubmission.php */
/* Location: ./application/controllers/Jsubmission.php */
