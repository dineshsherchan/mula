<p id="ajax"></p>
<script>
	function getData(slug) {
		
		// Fetch data
		fetch('https://mi-linux.wlv.ac.uk/~2125093/bhai/public/ajaxnews/get/' + slug)
			
		  // Convert response string to json object
		  .then(response => response.json())
		  .then(response => {

			// Copy one element of response to our HTML paragraph
			document.getElementById("ajax").innerHTML = response.title + ": " + response.text;
		  })
		  .catch(err => {
			
			// Display errors in console
			console.log(err);
		});
	}
</script>
<p><button onclick="getData('<?= esc($users_item['slug'], 'url') ?>')">View article via Ajax</button></p>

<h2><?= esc($title) ?></h2>

<?php if ($users_list !== []): ?>

    <?php foreach ($users_list as $users_item): ?>

        <h3><?= esc($users_item['title']) ?></h3>

        <div class="main">
            <?= esc($users_item['body']) ?>
        </div>
        <p><a href="/users/<?= esc($users_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Users</h3>

    <p>Unable to find any users for you.</p>

<?php endif ?>


