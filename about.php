<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome to Airlines
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<?php
			include "header.php";
		?>
        <h3>Frequently Asked Questions</h3>
    <div class="faq-container">
		<h4> General Questions</h4>
		
		<div class="faq-question" onclick="toggleFAQ('faq1')">
            <span>Q1: What is the airline reservation system?</span>
            <span class="dropdown-arrow"></span>
        </div>
        <div class="faq-answer" id="faq1">
			<p>The airline reservation system is a platform that allows users to book and manage flights online. It
				provides a convenient way for passengers to search for flights, make reservations, and handle various
                aspects of their travel.</p>
			</div>
			
			<div class="faq-question" onclick="toggleFAQ('faq2')">
				<span>Q2: How do I access the airline reservation system?</span>
				<span class="dropdown-arrow"></span>
			</div>
			<div class="faq-answer" id="faq2">
				<p>Q2: How do I access the airline reservation system?</strong><br>
                You can access our airline reservation system through our official website or mobile app. Simply visit
                <a href="home_page.php">Vande Airlines</a> or download our mobile app from the App Store or Google Play.</p>
			</div>
			
			<div class="faq-question" onclick="toggleFAQ('faq3')">
				<span>Q3:  Is my personal information secure when using the reservation system?</span>
				<span class="dropdown-arrow"></span>
			</div>
			<div class="faq-answer" id="faq3">
				<p>Q3: How do I access the airline reservation system?</strong><br>
				Yes, we prioritize the security and privacy of your personal information. Our system employs advanced encryption and security measures to safeguard your data.</p>
			</div>
			
			<h5> Booking and Reservations</h5>
			<div class="faq-question" onclick="toggleFAQ('faq4')">
				<span>Q4:  How do I book a flight?</span>
				<span class="dropdown-arrow"></span>
			</div>
			<div class="faq-answer" id="faq4">
				<p>Q4: How do I book a flight?</strong><br>
				To book a flight, visit our website or mobile app, enter your travel details (departure city, destination, dates), choose your preferred flight, and follow the on-screen instructions to complete the booking process.</p>
			</div>
			
			<div class="faq-question" onclick="toggleFAQ('faq5')">
				<span>Q5:  Can I make changes to my reservation?</span>
				<span class="dropdown-arrow"></span>
        </div>
        <div class="faq-answer" id="faq5">
			<p>Q5: Can I make changes to my reservation?</strong><br>
			Yes, you can make changes to your reservation online through the "Manage Booking" section on our website or app. However, please be aware that changes may be subject to certain fees.</p>
        </div>
		
		<div class="faq-question" onclick="toggleFAQ('faq6')">
            <span>Q6:  What is the cancellation policy?</span>
            <span class="dropdown-arrow"></span>
        </div>
        <div class="faq-answer" id="faq6">
			<p>Q6: What is the cancellation policy?</strong><br>
			Our cancellation policy varies depending on the type of ticket purchased. Please review our terms and conditions or contact our customer support for specific details about cancellations and applicable fees.</p>
        </div>

		<h5> payments and Fees</h5>
		<div class="faq-question" onclick="toggleFAQ('faq7')">
            <span>Q7:  What is the cancellation policy?</span>
            <span class="dropdown-arrow"></span>
        </div>
        <div class="faq-answer" id="faq7">
			<p>Q7: What is the cancellation policy?</strong><br>
			Our cancellation policy varies depending on the type of ticket purchased. Please review our terms and conditions or contact our customer support for specific details about cancellations and applicable fees.</p>
        </div>

		<div class="faq-question" onclick="toggleFAQ('faq8')">
            <span>Q8:  Are there any additional fees besides the ticket price?</span>
            <span class="dropdown-arrow"></span>
        </div>
        <div class="faq-answer" id="faq8">
			<p>Q8: What is the cancellation policy?</strong><br>
			Additional fees may apply for services such as seat selection, extra baggage, and other optional services. These fees will be clearly outlined during the booking process.</p>
        </div>


		<h5> Travel Information</h5>
		<div class="faq-question" onclick="toggleFAQ('faq9')">
            <span>Q9:  How do I check my flight status?</span>
            <span class="dropdown-arrow"></span>
        </div>
        <div class="faq-answer" id="faq9">
			<p>Q9: How do I check my flight status?</strong><br>
			You can check your flight status on our website or app by entering your flight details. Additionally, we provide real-time updates through email or SMS notifications.</p>
        </div>

		<div class="faq-question" onclick="toggleFAQ('faq10')">
            <span>Q10:  What should I do if my flight is delayed or canceled?</span>
            <span class="dropdown-arrow"></span>
        </div>
        <div class="faq-answer" id="faq10">
			<p>Q10: What should I do if my flight is delayed or canceled?</strong><br>
			In the event of a delay or cancellation, our airline will make every effort to notify you in advance. Please check your email, the website, or contact our customer support for assistance.</p>
        </div>
		
    </div>
	
    <script>
		function toggleFAQ(faqId) {
            var faq = document.getElementById(faqId);
            faq.style.display = (faq.style.display === 'none' || faq.style.display === '') ? 'block' : 'none';
        }
    </script>
	<style>
		body {
	font-family: Arial, sans-serif;
	/* margin: 20px; */
}

h2 {
	color: #3366cc;
}

h3 {
	color: #333;
}

p {
	color: #666;
}

.faq-container {
	width: 60%;
	margin: 0 auto;
}

.faq-question {
	cursor: pointer;
	padding: 10px;
	background-color: #f4f4f4;
	border: 1px solid #ccc;
	margin-bottom: 5px;
}

.faq-answer {
	display: none;
	padding: 10px;
	border: 1px solid #ccc;
	background-color: #fff;
}

.faq-question:hover {
	background-color: #e0e0e0;
}

/* Style the dropdown arrow */
.dropdown-arrow {
	float: right;
	margin-top: 5px;
}

.dropdown-arrow::after {
	content: '\25BC'; /* Unicode character for a downward-pointing triangle */
}

	</style>
