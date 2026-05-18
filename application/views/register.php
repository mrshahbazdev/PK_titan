<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#register-form').submit(function(event) {
        event.preventDefault(); // Prevent form submission

        $.ajax({
            url: '<?php echo base_url("auth/register"); ?>', // Replace this with a static URL or use inline PHP
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
            success: function(response) {
                console.log(response);
                if (response.status) {
                    $('#message').html('<div class="alert alert-success">' + response.message + '</div>');
                    $('#register-form')[0].reset(); // Reset form
                } else {
                    $('#message').html('<div class="alert alert-danger">' + response.message + '</div>');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    });
}); 

</script>
</head>
<body>

<div id="message"></div>

<form id="register-form" action="<?php echo base_url('auth/register'); ?>" method="post">
    <!--  -->    
    <label for="invitation_code">Invitation Code:</label>
    <input type="text" id="invitation_code" name="invitation_code"><br><br>
    <label for="phone_number">Phone Number:</label>
    <input type="text" id="phone_number" name="phone_number"><br><br>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>

    <input type="submit" value="Register">
</form>

</body>
</html>
