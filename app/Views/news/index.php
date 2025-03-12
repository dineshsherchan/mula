<p id="ajax"></p>
<script>
	function getData(slug) {
		
		// Fetch data
		fetch('https://mi-linux.wlv.ac.uk/~2125093/bhai/public/ajaxnews/' + slug)
			
		  // Convert response string to json object
		  .then(response => response.json())
		  .then(response => {

			// Copy one element of response to our HTML paragraph
			document.getElementById("ajax").innerHTML = response.name + ": " + response.email;
		  })
		  .catch(err => {
			
			// Display errors in console
			console.log(err);
		});
	}
</script>

<h2><?= esc($title) ?></h2>

<?php if ($users_list !== []): ?>

    <?php foreach ($users_list as $users_item): ?>

        <h3><?= esc($users_item['name']) ?></h3>

        <div class="main">
            <?= esc($users_item['email']) ?>
            <?= esc($users_item['password']) ?>
        </div>
        <p><a href="/users<?= esc($users_item['name'], 'url') ?>">View article</a></p>
        <p><button onclick="getData('<?= esc($users_item['name'], 'url') ?>')">View article</button></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Users</h3>

    <p>Unable to find any users for you.</p>

<?php endif ?>


