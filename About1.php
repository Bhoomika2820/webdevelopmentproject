Change 1 -->
<?php
	$conn = mysqli_connect("localhost", "root", "", "site");
	$res = $conn->query("SELECT * FROM candidate_visible");
?>
<!-- end 1 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--To make site responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<!--Including font awesome icons-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Bootstrap CDN link and scripts-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<!-- Change 2 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="ajax.js"></script>
	<style>
		.carousel-inner img {
			width: 100%;
			height: 100%;
		}
	</style>
	<!-- end 2 -->
</head>
<body>
	<header>
		<div>
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#FF8C00">
				<h2><a class="navbar-brand" href="#">St. Francis Institute of Technology</a></h2>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
							</button>
				<div class="collapse navbar-collapse navbar-nav-scroll" id="navbarSupportedContent">
					<ul class=" navbar-nav bd-navbar-nav flex-row  mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="About1.php">Home<span class="sr-only"></span></a>
						</li>
						<li class="nav-item" style="cursor: pointer;">
							<a class="nav-link" onclick="document.querySelector('.modal1').style.display = 'flex'; document.querySelector('body').style.overflow = 'hidden'" style="width:auto;">Add event</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<div class="container-fluid " style="padding-top: 65px; box-shadow: 0px 10px 8px 2px #FF8C00;"> <!-- Change 3 -->
		<div class="row ">
			<div class="carousel slide carousel-fade" style="position: relative; margin: auto; margin-top: 7px;"> <!-- Change 4 -->
				<div class="image_wrapper" style="width: 99vw;"> <!-- Change 5 -->
					<!-- Change 6 -->
					<div id="demo" class="carousel slide" data-ride="carousel" style="margin: auto; width: 99vw;">
						<!-- Indicators -->
						<ul class="carousel-indicators">
						<?php
							$i = 0;
							foreach ($res as $row) {
								$actives = " ";
								if($i == 0) {
									$actives = 'active';
								}
						?>
							<li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>
							<?php $i++; }?>
						</ul>
						<!-- The slideshow -->
						<div class="carousel-inner">
							<?php
								$i = 0;
								foreach ($res as $row) {
									$actives = " ";
									if($i == 0) {
										$actives = 'active';
									}
							?>
							<div class="carousel-item <?= $actives; ?>">
								<?php
									echo "<img id=".$row['title']." src='data:image;base64, ".Base64_encode($row["image"])."' style='height: 900px;'>";
								?>
							</div>
							<?php 
								$i++; } 
							?>
							<form method="post">
								<div class="bg-modal">
									<div class="modal-contents animate">
										<span onclick="document.querySelector('.bg-modal').style.display='none';" class="close">&times;</span>
										<div id="displaydata"></div>
									</div>
								</div>
							</form>
						</div>
						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#demo" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#demo" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>
					</div>
					<div class="carousel-caption" style="padding: 0; left: 0%; right: 0%; margin-bottom: 40px;">
						<div class="col-10 align-center align-top" style="margin: auto; padding: 0px;">
							<div class="mbr-section-btn" buttons="0">
								<!-- <a class="btn display-4 btn-dark " href="#" name="info" id="info" style=" margin: 10px; ">Info</a> -->
								<button id="info" type="button" class="btn btn-dark display-4" style=" margin: 10px; ">Info</button>
								<a class="btn display-4 btn-dark " id="register " href=" # " style="margin: 10px; ">  Register </a>
							</div>
						</div>
					</div>
					<!-- end 6 -->
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid ">
		<div class="row " style="padding:40px;box-shadow: 0px 10px 8px 2px #FF8C00; ">
			<img class="committee_image img-responsive " src=" images/codex_image.jfif " alt="img-responsive " />
			<div class=" content " style="padding-left: 20px;width:66vw; ">
				<a href="# " style=color:black;>
					<h1 class="committee_head ">Codex</h1>
				</a>
				<p><b>Founder’s Talk:</b> While I have always been excited about all innovations in technology as a young computer engineer, some things bothered me. My primary concern is the ever increasing gap between industry standards and curriculum.
					Companies spend a huge amount to train students who then are of value to them. While our education system provides reasonable knowledge in all the aspects of computation, we still lack in their Application. CodeX is, therefore, an
					initiative to taper the gap in knowledge required by our industries and that promulgated to the students at SFIT. We, at SFIT, engage students with new technologies, coding strategies, and industry standards, so we together can contribute
					towards the realization of India's Dream in Technological Advancement.</p>
			</div>
		</div>
		<div class="row " style="padding:40px;box-shadow: 0px 10px 8px 2px #FF8C00; ">
			<div class=" content " style="padding-left: 20px; padding-right: 20px; width:66vw; ">
				<a href="# " style=color:black;>
					<h1 class="committee_head ">ITSA</h1>
				</a>
				<p>
					ITSA is a departmental organization for Information Technology. Founded in the year 2011-12, our committee organizes events to bridge the gap between classroom education and the technical skills required by students to be industry ready. Our workshops
					foster students’ exposure to leading domains in technology to offer a headstart. We focus on holistic growth, so our students become complete engineers.
				</p>
			</div>
			<img class="committee_image img-responsive " src="images/itsa_image.png " alt="img-responsive " />

		</div>
		<div class="row " style="padding:40px;box-shadow: 0px 10px 8px 2px #FF8C00; ">
			<img class="committee_image img-responsive " src="images/CSI_IMAGE.jfif " alt="img-responsive " />
			<div class=" content " style="padding-left: 20px;width:66vw; ">
				<a href="# " style=color:black;>
					<h1 class="committee_head ">CSI</h1>
				</a>
				<p>
					CSI is the largest and one of the most professionally managed association of India for CS and IT professionals. CSI SFIT, since its inception, has proven to be a great source of knowledge by providing hands-on technical training and has worked towards
					the goal of transforming students into technical and competent professionals. It conducts events such as technical workshops, informative seminars, conferences, industry-academia interactions, technical competitions, student initiative
					programs and industrial visits which prove to be a gateway to technical expertise.
				</p>
			</div>
		</div>
		<div class="row " style="padding:40px;box-shadow: 0px 10px 8px 2px #FF8C00; ">
			<div class=" content " style="padding-left: 20px;width:66vw; ">
				<a href="# " style=color:black;>
					<h1 class="committee_head ">ISTE</h1>
				</a>
				<p>The Indian Society for Technical Education (ISTE) is the leading National Professional non-profit making Society for the Technical Education System in our country with the motto of Career Development of Teachers and Personality Development
					of Students and overall development of our Technical Education System. At present, ISTE has a very large and an effective membership base consisting of more than 1,02,985 Life Members, 5,54,094 Student Members, 2410 Institutional Members
					(including IITs, IISc.., NITs and other leading technical institutions), 1214 Faculty Chapters and 1322 Students’ Chapters and 17 Sections throughout the country.</p>
			</div>
			<img class="committee_image img-responsive " class="committee_image " src="images/iste.jpeg " alt="img-responsive " />
		</div>
		<div class="row " style="padding:40px;box-shadow: 0px 10px 8px 2px #FF8C00; ">
			<img class="committee_image img-responsive " src="images/mesa.jpeg " alt="img-responsive " />
			<div class=" content " style="padding-left: 20px;width:66vw; ">
				<a href="# " style=color:black;>
					<h1 class="committee_head ">MESA</h1>
				</a>
				<p>
					MESA is the association for mechanical engineering students that was founded in the year 20192020 MESA acts as a bridge between the academics and the practical industry experience. It helps in building aptitude and attitude suitable for demands of today's
					industries with the help of seminars, hands-on-workshops and visits to various exhibitions and industries.
				</p>
			</div>
		</div>
		<div class="row " style="padding:40px;box-shadow: 0px 10px 8px 2px #FF8C00; ">
			<div class=" content " style="padding-left: 20px;width:66vw; ">
				<a href="# " style=color:black;>
					<h1 class="committee_head ">ISSB</h1>
				</a>
				<p>
					The Institute of Electrical and Electronics Engineers (IEEE) is a professional association headquartered in New York City that is dedicated to advancing technological innovation and excellence. The ISSB branch functions @SFIT and the purpose of the organization
					is to achieve overall development of students.
				</p>
			</div>
			<img class="committee_image " src="images/issb_image.png " alt="img-responsive " />
		</div>
		<div class="row " style="padding:40px;box-shadow: 0px 10px 8px 2px #FF8C00; ">
			<img class="committee_image " src="images/eesa.jpeg " alt="img-responsive " />
			<div class=" content " style="padding-left: 20px;width:66vw; ">
				<a href="# " style=color:black;>
					<h1 class="committee_head ">EESA</h1>
				</a>
				<p>
					The prime motto of the Electrical Engineering department is to provide quality education through the student-centered teaching methodology. The students are given a strong foundation in Electrical Engineering along with the problem-solving techniques
					which will be helpful in clearing competitive exams like GATE, which is a qualified test for government jobs. The department encourages our students to develop new project ideas, which would be useful in the day to day life. They are
					also encouraged to undergo winter/summer internship in companies related to electrical stream. While the faculty members train the students to excel in various fields with the help of all modern teaching methods and advanced laboratory
					facilities, the Electrical Engineering Students Association (EESA) organizes various Competitions, Seminars, Industrial Visits, and guest lectures for the students. The primary focus of EESA is to add more fun and value to the already
					high-quality teachings provided by the faculty members by organizing such events. This helps bridge the gap between academics and industry as well as inculcate a sense of responsibility and develop qualities like competitiveness and
					initiative amongst them.
				</p>
			</div>
		</div>
		<div class="row " style="padding:40px;box-shadow: 0px 10px 8px 2px #FF8C00; ">
			<div class=" content " style="padding-left: 20px;width:66vw; ">
				<a href="# " style=color:black;>
					<h1 class="committee_head ">NSS</h1>
				</a>
				<p>
					NSS means National Service Scheme. The program aims to inculcate social welfare in students and to provide service to society without bias. NSS primarily focuses on personality development through community service NSS is the only committee in SFIT which
					is purely non-technical and which gives you experiences outside the college. Through NSS you get to organise and be a part of exciting events like flashmobs, blood donations, plantations, cleanups, visits to oldage homes and various
					workshops like self defence, yoga, sexual abuse and the ultimate NSS camp. It is a 7 day camp organised to experience the village life style and help them with their work. Benefits of attending the camp: You understand ground realities
					Discipline Get rid of stage fear Time management You learn to socialise Learn the fact that “sharing is caring” And most importantly it is a one time experience and you will definitely cherish all the memories forever By being a part
					of NSS you will also develop skills of teamwork, confidence, public speaking, time management and most importantly putting the needs of others before yours. You get know society very closely, meet new people, understand their needs
					do good in whatever means possible.
				</p>
			</div>
			<img class="committee_image " src="images/nss.jpeg " alt="img-responsive " />
		</div>
	</div>
	<div id="id01" class="modal1">
		<form class="modal-content1 animate" action="login_page.php" method="post">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'; document.querySelector('body').style.overflow = 'auto'" class="close">&times;</span>
				<img src="images/profile_pic.svg" alt="Avatar" class="avatar">
			</div>
			<div class="container">
				<label for="uname"><b>Username</b></label>
				<input id="username" type="text" placeholder="Enter Username" name="uname" required>
				<label for="psw"><b>Password</b></label>
				<input id="password" type="password" placeholder="Enter Password" name="psw" required>
				<button id="login" name="login" class="button" type="submit">Login<i class="fa fa-sign-in" aria-hidden="true"></i></button>
			</div>
		</form>
	</div>
</body>
<footer class="page-footer font-small footer-fixed ">
	<div class=" flex-center text-center py-5 " style="background-color:#1D2951; ;color:white; ">
		<i class="fa fa-facebook-f fa-lg white mr-md-3 mr-3 fa-2x "> </i>
		<i class="fa fa-twitter fa-lg white mr-md-3 mr-3 fa-2x "> </i>
		<i class="fa fa-instagram fa-lg white mr-md-3 mr-3 fa-2x "> </i>
		<i class="fa fa-pinterest fa-lg white fa-2x "> </i>
	</div>
	<div class="footer-copyright flex-center text-center py-1 " style="background-color:#22305f; ;color:white; ">© 2020 Copyright
	</div>
</footer>
<?php
	include(ajax.js);
?>
</html>