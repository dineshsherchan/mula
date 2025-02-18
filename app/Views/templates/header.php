<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/css/style.css') ?>">
    <title>YOur wish as our wish. Feel free to use or products.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<section id="header">
    <label class ="logo"> <a href = "<?= base_url() ?>">MeloRents</a></label>
	

    <div>
        <ul id = "navbar">
            <li><a class = highlight href = "<?= base_url() ?>">Home</a></li>
            <li><a href = "<?= base_url('Mobile') ?>">Mobile</a></li>
            <li><a href = "<?= base_url('registration') ?>">registration</a></li>
            <li><a href = "<?= base_url('login') ?>">login</a></li>
            <li><a href = "<?= base_url('Laptop') ?>">Laptoo </a></li>
			<li><a href = "<?= site_url('logout') ?>">Logout</a></li>
		    <li><a href = "<?= site_url('Gagdets') ?>">Gadgets</a></li>
            
        </ul>
    </div>
</section>

<style>

#header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 18px 75px;
    background-color: rgb(165, 188, 202);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
}

.logo {
    color: blue;
    text-shadow: 0 0 10px blue;
    font-size: 25px;
    padding-right: 400px;
}

#navbar {
    display: flex;
    align-items: center;
    justify-content: center;
}

#navbar li {
    list-style: none;
    padding: 0 20px;
}

#navbar li a {
    text-decoration: none;
    font-size: 15px;
    font-weight: 550;
    color: #1a1a1a;
    transition: 0.3s ease;
}

#navbar li a:hover {
    color: #a94752;
}

#navbar li a.highlight {
    color: #088178;
} 

#navbar li a.highlight:after {
    content: "";
    width: 30%;
    height: 20%;
}

@media (max-width: 768px) {
    #header {
        flex-direction: column;
        align-items: flex-start;
        padding: 18px 20px;
    }

    .logo {
        padding-right: 0;
        margin-bottom: 10px;
    }

    #navbar {
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
    }

    #navbar li {
        padding: 10px 0;
    }

    #navbar li a {
        font-size: 18px;
    }
}

@media (max-width: 480px) {
    #header {
        padding: 10px 15px;
    }

    .logo {
        font-size: 20px;
    }

    #navbar li a {
        font-size: 16px;
    }
}

</style>


