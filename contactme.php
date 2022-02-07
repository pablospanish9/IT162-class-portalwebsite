<?php include "includes/header.php";?>
 
<!-- This is a template to start new pages -->
<div>
<!-- <h2 class="subheader">Please contact me and send me a message</h2> -->


<!-- <body> -->
    <!-- This is left over code from copying code, possibly a duplicate of an old nav: -->
	<!-- <header role="banner">
		<h1 class="masthead">Our Website</h1>
		<nav>
			<ul>
				<li><a href="#">Link 1</a></li>
				<li><a href="#">Link 2</a></li>
				<li><a href="#">Link 3</a></li>
				<li><a href="#">Link 4</a></li>
				<li><a href="#">Link 5</a></li>
				<li><a href="#">Link 6</a></li>
			</ul>
		</nav>
	</header> -->
    <main role="main">
        <!-- Below is left over code from copying. Not needed, I already have a header: -->
	 <!-- <header><h3>Contact Us!</h3></header> -->
<!-- Below paragraph, left from copying code, seems to be only a message, not part of the website. -->
    <!-- <p>Inside the source of this file, you can un-comment and test 
        2 different types of forms:
        <div class="indent">
            <ul>
                <li><b>loadContact('simple.php');</b> - a simple contact form with reCAPTCHA</li>
                <li><b>loadContact('multiple.php');</b> - a complex form with reCAPTCHA</li>
            </ul>
        </div>    
    </p>     -->
    <!-- Below begins code for Forms and reCaptcha -->
	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!
         * Pablo's response: I only see one, nothing else to comment out.       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "pablosep@msn.com";  //place your/your client's email address here
        $toName = "Pablo Sep"; //place your client's name here
        $website = "pabsep2.dreamhosters.com";  //place NAME of your client's website



        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
     </main>


</body>
</div>

<?php include "includes/footer.php";?>