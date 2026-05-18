<?php
$this->load->view('widgets/head');
?>
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="loader"> 
        <div class="loader4"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
     <?php $this->load->view('widgets/header') }}
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php $this->load->view('widgets/sidebar') }}
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0 card-no-border">
                    <h4 class="mb-3">Customer Service List</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive custom-scrollbar">
                     
                      <div id="row-select-delete_wrapper" class="dataTables_wrapper"><div id="row-select-delete_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="row-select-delete"></label></div><table class="display dataTable" id="row-select-delete" role="grid" aria-describedby="row-select-delete_info">
                        <thead>
                          <tr><th rowspan="1" colspan="1">Username</th><th rowspan="1" colspan="1">Mobile Number</th><th rowspan="1" colspan="1">QQ</th><th rowspan="1" colspan="1">WeChat</th><th rowspan="1" colspan="1">Link</th><th rowspan="1" colspan="1">Work Time</th><th rowspan="1" colspan="1">Add Time</th><th rowspan="1" colspan="1">Action</th></tr>
                        </thead>
                        <tbody>
                      <?php foreach ($users as $user): ?>
                        <tr role="row" class="even" id="<?= $user['id'] ?>">
                            <td class="sorting_1 username"><?= $user['username'] ?></td>
                            <td class="sorting_1 mobileNumber"><?= $user['mobileNumber'] ?></td>
                            <td class="sorting_1 qq"><?= $user['qq'] ?></td>
                            <td class="sorting_1 weChat"><?= $user['weChat'] ?></td>
                            <td class="sorting_1 link"><?= $user['link'] ?></td>
                            <td class="sorting_1 workTime"><?= $user['workTime'] ?></td>
                            <td class="sorting_1 addTime"><?= $user['addTime'] ?></td>
                            
                            <td> 
                              <ul class="action"> 
                                <li class="edit edit-user"  data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal" data-user-id="<?= $user['id'] ?>"> <a href="#" ><i class="fas fa-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="fas fa-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                      <?php endforeach; ?>
                          </tbody>
                        
                      </table></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       <?php $this->load->view('widgets/footer') }}
       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" style="display: none;" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                      <form id="updateForm" class="row g-3" method="post" action="{{ url('custormerservicelist/update_user') }}">
                        <div class="col-md-12">
                          <label class="form-label" for="inputEmail4">Username</label>
                          <input  id="id" type="hidden"  name="id">
                          <input class="form-control" id="username" type="text"  name="username">
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="inputEmail4">Mobile Number</label>
                          <input class="form-control" id="mobileNumber" type="text"  name="mobileNumber">
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="inputEmail4">QQ</label>
                          <input class="form-control" id="qq" type="text"  name="qq">
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="inputEmail4">We Chat</label>
                          <input class="form-control" id="wechat" type="text"  name="weChat">
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="inputEmail4">Link</label>
                          <input class="form-control" id="link" type="text"  name="link">
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="inputEmail4">Work Time</label>
                          <input class="form-control" id="worktime" type="time"  name="workTime">
                        </div>
                        
                        <div class="col-md-12">
                          <label class="form-label" for="inputPassword4">Status</label>
                          <select id="statusSelect" name="status" class=" form-select btn-square digits">
                      </select>
                        </div>
                        <div class="col-12">
                          <button class="btn btn-primary" type="submit" >Update</button>
                        </div>
                      </form>
                    </div>
                  </div>
                          </div>
                        </div>
                      </div>
                    </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
      /**=====================
    Sweet-alert Start
==========================**/

        $(document).ready(function() {
         
          
          $('#updateForm').on('submit', function(event) {
                event.preventDefault();
                
                // Get form data
                var formData = $(this).serialize();

                // AJAX request
                $.ajax({
                    url: 'custormerservicelist/update_user', // Update with your controller method URL
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                      $('#exampleModal').modal('hide');
                         Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 2000 // Automatically close after 1.5 seconds
                          });
                        var ids = $('#id').val();
                          $('#'+ids+' .username').text($('#username').val());
                          $('#'+ids+' .mobileNumber').text($('#mobileNumber').val());
                          $('#'+ids+' .qq').text($('#qq').val());
                          $('#'+ids+' .weChat').text($('#wechat').val());
                          $('#'+ids+' .link').text($('#link').val());
                          $('#'+ids+' .workTime').text($('#worktime').val());
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error(xhr.responseText);
                        alert('Error updating data. Please try again.');
                    }
                });
            });
            $('.edit-user').on('click', function() {
              $('.swal-overlay').addClass('swal-overlay--show-modal');
                var userId = $(this).data('user-id');
                var activeOption = $('<option>').val('1').text('Active');
            var inactiveOption = $('<option>').val('0').text('Inactive');

            // Append options to the select element
            $('#statusSelect').append(activeOption, inactiveOption);
                // Assuming you have an AJAX call to fetch user data by ID
                $.ajax({
                    url: 'custormerservicelist/get_user_data/' + userId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                    $.each(response, function(index, user) {
                    $('#username').val(user.username);
                    $('#mobileNumber').val(user.mobileNumber);
                    $('#qq').val(user.qq);
                    $('#wechat').val(user.weChat);
                    $('#link').val(user.link);
                    $('#worktime').val(user.workTime);
                    $('#id').val(user.id);
                    var status = user.status;

                // Automatically select the corresponding option based on user status
                $('#statusSelect').val(status);
                        // Populate other form fields similarl
                    });
                  }
              });
            });
            
          });
          </script>