
<body>
<?php  
    if (!empty($success_msg) || !empty($error_msg)) { 
?>
    <!-- Bootstrap Modal -->
    <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="statusModalLabel">
                        <?php echo !empty($success_msg) ? 'Success' : 'Error'; ?>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                        echo !empty($success_msg) ? '<p class="text-success">'.$success_msg.'</p>' : '<p class="text-danger">'.$error_msg.'</p>'; 
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class = "card">
<div class = "card-body">


<form method ="post" action = "<?= base_url('login/do_login') ?>">
<?= csrf_field() ?>


<h1> Login here  </h1>

<div class="mb-3">
  <label for="email" class="form-label">Email address</label>
  <input name = "email" type="email" class="form-control" id="email" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="password" class="form-label">Password</label>
  <input name = "password" type="password" class="form-control" id="password" placeholder="Your password">
</div>

<div class="mb-3"><input type = "submit" value= "Login" class = "btn btn-primary" /> </div>


</form>
<p>Don't have an account? <a href="<?php echo base_url('registration'); ?>">Register</a></p>
</div>
</div>

</body>


