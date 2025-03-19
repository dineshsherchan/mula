<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="https://mi-linux.wlv.ac.uk/~2125093/bhai/public/news/new" method="post">
    <?= csrf_field() ?>

    <label for="name">Name</label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
    <br>

    <label for="email">Email</label>
    <textarea name="email" cols="45" rows="4"><?= set_value('email') ?></textarea>
    <br>

    <label for="password">Password</label>
    <div style="position: relative;">
        <input type="password" name="password" id="password" cols="45" rows="4" value="<?= set_value('password') ?>">
        <span id="toggle-password" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
            
        </span>
    </div>
    <br>
    <div><input type="submit" name="submit" value="Create users item"></div>
</form>

<script>
    // JavaScript to toggle password visibility
    document.getElementById('toggle-password').addEventListener('click', function() {
        var passwordField = document.getElementById('password');
        var type = passwordField.type === 'password' ? 'text' : 'password';
        passwordField.type = type;

        // Toggle eye icon (optional, you can change the icon when password is visible)
        this.textContent = (type === 'password') ? 
    });
</script>
