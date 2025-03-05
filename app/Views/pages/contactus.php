
<body>

<section id ="contact" class="section-p2">
<div class="details">
<span> GET IN TOUCH</span>
<h2>Visit one of our locations  or contact us today</h2>
<h3> Branch office </h3>
<div>
<ul>
<li>
<i class="fa fa-map-marker"></i>
<p>98 Evans Street, WV6 0QF</p>
</li>
<li>
<i class ="far fa-envelope"></i>
<p>Dineshsherchan337@gmail.com</p>
</li>
<li>
<i class ="fas fa-phone-alt"></i>
<p>+44 7454220063</p>
</li>
<li>
<i class ="far fa-clock"></i>
<p>98 Evans Street, WV6 0QF</p>
</li>
</ul>
</div>
</div>




<div class="contactform">
    <div class="contactform-body">
        <form id="myForm" method="post" action="<?= site_url('contactus/do_contact') ?>">
		<p>Fill in the forms to stay with us </p>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                <span class="error" id="name_error"></span> 
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" required type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone number</label>
                <input name="phone" required type="tel" class="form-control" id="phone" placeholder="Your phone number">
            </div>
            <div class="mb-3">
                <!-- Include CSRF token field -->
                <?= csrf_field() ?>
                <input type="submit" value="submit" class="btn btn-primary" />
            </div>
			
        </form>
    </div>
</div>


</section>



<p> Alternatively <a href = "<?= base_url('terms') ?>">Click here </a> To read our Terms and Conditons. </p>

<style>
.section-p2 {
    padding: 60px 200px 20px 40px;
}

#contact {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

#contact .details {
    width: 40%;
}

#contact .details span {
    font-size: 12px;
}

#contact .details h2 {
    font-size: 26px;
    line-height: 35px;
    padding: 20px 0;
}

#contact .details h3 {
    font-size: 26px;
    padding-bottom: 15px;
}

#contact .details li {
    list-style: none;
    display: flex;
    padding: 10px 0;
}

#contact .details li i {
    font-size: 14px;
    padding-right: 22px;
}

#contact .details li p {
    margin: 0;
    font-size: 14px;
}

#contact .contactform {
    padding-left: 20px;
    padding-right: 20px;
    background-color: #f2ebdd;
}

#contact .contactform .contactform-body {
    padding: 10px;
}

@media (max-width: 768px) {
    .section-p2 {
        padding: 20px;
    }

    #contact {
        flex-direction: column;
    }

    #contact .details,
    #contact .contactform {
        width: 100%;
        padding: 10px;
    }

    #contact .details h2,
    #contact .details h3 {
        font-size: 22px;
    }

    #contact .details span,
    #contact .details li p {
        font-size: 14px;
    }

    #contact .details li i {
        font-size: 16px;
        padding-right: 12px;
    }
}

@media (max-width: 480px) {
    #contact .details h2,
    #contact .details h3 {
        font-size: 20px;
    }

    #contact .details span,
    #contact .details li p {
        font-size: 12px;
    }

    #contact .details li i {
        font-size: 14px;
        padding-right: 10px;
    }
}
</style>


</body>

