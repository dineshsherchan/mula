<footer>
    <div class="footer-container">
        <div class="footer-column">
            <h4>Contact Us</h4>
            <p>Phone:+44 7454220063</a></p>
            <p>Address: 98, Evans Street, WV6OQF</p>
            <p>Hours: 9:00-17:00 Monday to Friday</p>
        </div>
        <div class="footer-column">
            <h4>About the Company</h4>
            <p><a href="<?php echo base_url('about'); ?>">Find More TO Us</a></p>
        </div>
    </div>
    <div class="footer-bottom">
        
    </div>
	
	<style>
	footer {
    background-color: #2c3e50;
    color: #fff;
    padding: 20px 0;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
    flex-wrap: wrap;
}

.footer-column {
    flex: 1;
    min-width: 250px;
    margin: 10px;
}

.footer-column h4 {
    border-bottom: 2px solid #2980b9;
    padding-bottom: 5px;
    margin-bottom: 10px;
}

.footer-column p {
    margin: 10px 0;
}

.footer-column a {
    color: #bdc3c7;
    text-decoration: none;
}

.footer-column a:hover {
    color: #fff;
}

.footer-bottom {
    text-align: center;
    padding: 10px;
    background-color: #1e2f3f;
}

@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
    }
    
    .footer-column {
        max-width: 100%;
        text-align: center;
    }
}
	
	</style>
	
	
</footer>
