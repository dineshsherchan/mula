<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="https://mi-linux.wlv.ac.uk/~2125093/bhai/public/news/new" method="post">
    <?= csrf_field() ?>

    <label for="name">Name</label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="email">Email</label>
    <textarea name="email" cols="45" rows="4"><?= set_value('email') ?></textarea>
    <br>
    <label for="password">Password</label>
    <textarea name="password" cols="45" rows="4"><?= set_value('password') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create users item">
</form>