<?php
	session_start();
	?>
<html>
	<head>
		<title>
			Welcome to Airlines
		</title>
	<style>
	#slider-container {
	width: 100%;
	margin: auto;
	overflow: hidden;
	}
	
	#slider {
	display: flex;
	transition: transform 1s ease-in-out;
	}
	
	.slide {
	min-width: 100%;
	margin-top: 10px;
	}
	
	#img-slide {
	width: 60%;
	height: auto;
	}

	#img-key{
		width:90%;
	}
	
	
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<?php
			include "header.php";
		?>
		
		

		<!--check out addling local host in links and other places

			shift login/logout buttons to right side
		-->
	</body>
	
            <center>
            <div id="slider-container">

                <div id="slider">
                    <div class="slide">
                        <img id="img-slide" src="images/agra.jpeg" alt="Image 1">
                    </div>
                    <div class="slide">
                        <img id="img-slide" src="images/kasol.jpeg" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img id="img-slide" src="images/kerela.jpeg" alt="Image 3">
                    </div>
                    <div class="slide">
                        <img id="img-slide" src="images/leh.jpeg" alt="Image 4">
                    </div>
                    <div class="slide">
                        <img id="img-slide"src="images/meghalaya.jpeg" alt="Image 5">
                    </div>
                    <div class="slide">
                        <img id="img-slide" src="images/otty.jpeg" alt="Image 6">
                    </div>
                    <div class="slide">
                        <img id="img-slide" src="images/rishikesh.jpeg" alt="Image 7">
                    </div>
                    <div class="slide">
                        <img id="img-slide" src="images/tamil.jpeg" alt="Image 8">
                    </div>
                    <!-- Add more slides as needed -->
                </div>
            </div>
        </center>
        


    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('.slide');

        function showSlide(index) {
            if (index < 0) {
                currentIndex = slides.length - 1;
            } else if (index >= slides.length) {
                currentIndex = 0;
            } else {
                currentIndex = index;
            }

            const translateValue = -currentIndex * 100 + '%';
            document.getElementById('slider').style.transform = 'translateX(' + translateValue + ')';
        }

        function prevSlide() {
            showSlide(currentIndex - 1);
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        // Optional: Auto slide
        setInterval(nextSlide, 3000);
    </script>

	<div class="main" style="color:#000000">
		<center>
			<h2>
			Millions of cheap flights One simple search.
			</h2>
			<p style="margin:30px; font-size:x-large;"> Welcome to our cutting-edge Airline Reservation System, your one-stop solution for seamless travel planning and booking. Our robust platform is designed to provide users with a hassle-free and efficient way to discover, book, and manage flights, ensuring a stress-free travel experience.</p><br>
		</center>
		<h2 style="margin:30px;color:#224C98">
			<!-- Key features: -->
		</h2>
		
	</div>
	<?php
		// include "footer.php"
	?> 
</body>

</html>
