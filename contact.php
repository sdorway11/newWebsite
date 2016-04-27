<?php
echo "<!DOCTYPE html>\n";
echo "<html lang=\"en\">\n";
echo "<head>\n";
echo "    <meta charset=\"utf-8\">\n";
echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n";
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
echo "    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->\n";
echo "    <meta name=\"description\" content=\"\">\n";
echo "    <meta name=\"author\" content=\"\">\n";
echo "    <title>Contact</title>\n";
echo "	\n";
echo "	<!--  Font Awesome  -->\n";
echo "	<link href=\"fonts/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">\n";
echo "	<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\">\n";
echo "	\n";
echo "	<!--  Google Font  -->\n";
echo "	<link href=\"https://fonts.googleapis.com/css?family=Titillium+Web\" rel=\"stylesheet\" type=\"text/css\">\n";
echo "    <!-- Bootstrap core CSS -->\n";
echo "    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">\n";
echo "    <!-- Custom CSS -->\n";
echo "    <link href=\"css/style.css\" rel=\"stylesheet\">\n";
echo "    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->\n";
echo "    <!--[if lt IE 9]>\n";
echo "    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>\n";
echo "    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>\n";
echo "    <![endif]-->\n";
echo "</head>\n";
echo "<body class=\"text-center\">\n";
echo "    <!--  The justified navigation menu is meant for single line per list item.\n";
echo "    Multiple lines will require custom code not provided by Bootstrap.  -->\n";
echo "	\n";


echo "    <!-- Calling Header Here!! -->\n";
include 'header.php';		 

  
echo "   \n";
echo "   \n";
echo "        \n";
echo "<!-- Start Tiles -->\n";
echo "    <div>\n";
echo "        <div class=\"row\">\n";
echo "            <div class=\"col-lg-7\" id=\"contactForm\">\n";
echo "				\n";
echo "				<p style=\"font-weight: bold; letter-spacing: 4px;\">CONTACT US!</p>\n";
echo "                    \n";
echo "                <form method=\"POST\" action=\"http://plus.allforms.mailjol.net/u/b1749119.php\">\n";
echo "					<div class=\"questions form-group\">\n";
echo "						<div id=\"selectBox\"><input id=\"Name\" type=\"text\" name=\"Name\" placeholder=\"ENTER YOUR NAME\" style=\"font-size: 60%;\" required />\n";
echo "						</div>\n";
echo "					</div>\n";
echo "					<div class=\"questions form-group\">\n";
echo "						<div id=\"selectBox\"><input id=\"Email\" type=\"text\" name=\"Email\" placeholder=\"  ENTER YOUR EMAIL: you@yourdomain.com\" style=\"font-size: 60%;\" required />\n";
echo "						</div>\n";
echo "					</div>\n";
echo "					<div class=\"questions form-group\">\n";
echo "						<div id=\"selectBox\"><input id=\"Phone\" type=\"text\" name=\"Phone\" placeholder=\"ENTER YOUR PHONE NUMBER\" style=\"font-size: 60%;\" required />\n";
echo "						</div>\n";
echo "					</div>\n";
echo "					<div class=\"questions form-group\">\n";
echo "						<div id=\"selectBox\" class=\"questions\"><textarea id=\"Message\" name=\"Message\" placeholder=\"ENTER YOUR MESSAGE\" style=\"text-align: left;\" required></textarea>\n";
echo "						</div>\n";
echo "					</div>\n";
echo "					<div class=\"questions form-group\">\n";
echo "						<div id=\"selectBox\" class=\"questions\"><input id=\"Ad\" name=\"ad\" placeholder=\"HOW DID YOU HEAR ABOUT US?\" style=\"font-size: 60%;\" required />\n";
echo "						</div>\n";
echo "					</div>\n";
echo "					<div class=\"text-center\"><button type=\"submit\" id=\"submitButton\" class=\"btn btn-default\">SUBMIT</button>\n";
echo "                        <p></p>\n";
echo "                        <br />\n";
echo "                        <br />\n";
echo "                        <br />\n";
echo "					</div>\n";
echo "				</form>\n";
echo "            </div>\n";
echo "            \n";
echo "        \n";
echo "			<!-- Contact Info -->\n";
echo "			<div class=\"col-lg-5 newTiledInfoBlack\" id=\"contactInfo\">\n";
echo "				<i class=\"fa fa-envelope fa-3x slideanim\"></i>\n";
echo "				<p>info@learncodinganywhere.com</p>\n";
echo "				<br />\n";
echo "                <br />\n";
echo "				<i class=\"fa fa-phone fa-3x slideanim\"></i>\n";
echo "				<p>503.206.6915</p>\n";
echo "				<br />\n";
echo "                <br />\n";
echo "				<i class=\"fa fa-building fa-3x slideanim\"></i><br />\n";
echo "				<p>310 SW 4th Ave Suite 412<br />Portland, OR 97204</p>\n";
echo "				<br />\n";
echo "                <br />\n";
echo "				<p>\n";
echo "				Are you in Portland?<br />\n";
echo "				Come in for a tour!<br />\n";
echo "				<em>\n";
echo "				(Fourth floor of the Board of Trade building)\n";
echo "				</em>\n";
echo "				</p>\n";
echo "			</div>\n";
echo "        </div>\n";
echo "    </div>\n";
echo "	\n";
echo "	\n";

   
echo "    <!-- Calling Footer Here!! -->\n";
include 'footer.php';		   



?>