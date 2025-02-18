<body>
<div class="card">
    <div class="card-body">
        <form id="myForm" method="post" action="<?= site_url("registration/do_register") ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" required type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" required type="password" class="form-control" id="password" placeholder="Your password">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile Number</label>
                <input name="mobile" type="text" class="form-control" id="mobile" placeholder="Mobile Number">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input name="address" type="text" class="form-control" id="address" placeholder="Address">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input name="dob" type="date" class="form-control" id="dob">
            </div>
            <div class="mb-3">
                
                <?= csrf_field() ?>
                <input type="submit" value="Register" class="btn btn-primary" />
            </div>
        </form>
    </div>
</div>
</body>