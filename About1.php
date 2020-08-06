
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <div>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#FF8C00">
                <h2><a class="navbar-brand" href="https://www.sfit.ac.in/">St. Francis Institute of Technology</a></h2>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>

                <div class="collapse navbar-collapse navbar-nav-scroll" id="navbarSupportedContent">
                    <ul class=" navbar-nav bd-navbar-nav flex-row  mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="About1.html">Home<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item" style="cursor: pointer;">
                            <a class="nav-link" onclick="document.querySelector('.modal1').style.display = 'block'; document.querySelector('body').style.overflow = 'hidden'" style="width:auto;">Add event</a>
                        </li>
                    </ul>

                </div>
            </nav>

        </div>

    </header>
    <div class="container-fluid " style="padding-top: 65px;">
        <div class="row ">
            <div class="carousel slide carousel-fade " style="position: relative;">
                <div class="image_wrapper ">
                    <div class="mbr-overlay "><img src="images/bg.PNG" class="img-fluid img-responsive" alt="Responsive image" style="width:100vw;height:100%;align-items: center;justify-content: center; ">

                    </div>
                    <div class="carousel-caption justify-content-center ">
                        <div class="col-10 align-center align-top ">
                            <div class="mbr-section-btn " buttons=" 0 ">
                                <a class="btn display-4 btn-dark " href="#" id="info" onclick="document.querySelector('.bg-modal').style.display = 'flex' " style=" margin: 10px; ">Info </a>
                                <a class="btn display-4 btn-dark " id="register " href=" # " style="margin: 10px; ">  Register </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row " style="padding:40px;box-shadow: 10px 10px 8px 2px #FF8C00; ">
            <img class="commitee_image img-responsive " src=" images/codex_image.jfif " alt="img-responsive "style="height:auto;" />
            <div class="content" style="padding-left: 20px;width:60vw; ">
                <a href="http://codex.sfit.ac.in/" style=color:black;>
                    <h1 class="commitee_head ">Codex</h1>
                </a>
                <p><b>Founder’s Talk:</b> While I have always been excited about all innovations in technology as a young computer engineer, some things bothered me. My primary concern is the ever increasing gap between industry standards and curriculum.
                    Companies spend a huge amount to train students who then are of value to them. While our education system provides reasonable knowledge in all the aspects of computation, we still lack in their Application. CodeX is, therefore, an
                    initiative to taper the gap in knowledge required by our industries and that promulgated to the students at SFIT. We, at SFIT, engage students with new technologies, coding strategies, and industry standards, so we together can contribute
                    towards the realization of India's Dream in Technological Advancement.</p>
            </div>
        </div>
        <div class="row " style="padding:40px;box-shadow: 10px 10px 8px 2px #FF8C00; ">
            <div class=" content " style="padding-left: 20px; padding-right: 20X; width:60vw; ">
                <a href="https://itsa.sfit.ac.in/" style=color:black;>
                    <h1 class="commitee_head ">ITSA</h1>
                </a>
                <p>
                    ITSA is a departmental organization for Information Technology. Founded in the year 2011-12, our committee organizes events to bridge the gap between classroom education and the technical skills required by students to be industry ready. Our workshops
                    foster students’ exposure to leading domains in technology to offer a headstart. We focus on holistic growth, so our students become complete engineers.
                </p>
            </div>
            <img class="commitee_image img-responsive " src="images/itsa_image.png " alt="img-responsive " />

        </div>
        <div class="row " style="padding:40px;box-shadow: 10px 10px 8px 2px #FF8C00; ">
            <img class="commitee_image img-responsive " src="images/CSI_IMAGE.jfif " alt="img-responsive " />
            <div class=" content " style="padding-left: 20px;width:60vw; ">
                <a href="https://www.csi.sfit.ac.in/" style=color:black;>
                    <h1 class="commitee_head ">CSI</h1>
                </a>
                <p>
                    CSI is the largest and one of the most professionally managed association of India for CS and IT professionals. CSI SFIT, since its inception, has proven to be a great source of knowledge by providing hands-on technical training and has worked towards
                    the goal of transforming students into technical and competent professionals. It conducts events such as technical workshops, informative seminars, conferences, industry-academia interactions, technical competitions, student initiative
                    programs and industrial visits which prove to be a gateway to technical expertise.
                </p>
            </div>
        </div>
        <div class="row " style="padding:40px;box-shadow: 10px 10px 8px 2px #FF8C00; ">
            <div class=" content " style="padding-left: 20px;width:60vw; ">
                <a href="# " style=color:black;>
                    <h1 class="commitee_head ">ISTE</h1>
                </a>
                <p>The Indian Society for Technical Education (ISTE) is the leading National Professional non-profit making Society for the Technical Education System in our country with the motto of Career Development of Teachers and Personality Development
                    of Students and overall development of our Technical Education System. At present, ISTE has a very large and an effective membership base consisting of more than 1,02,985 Life Members, 5,54,094 Student Members, 2410 Institutional Members
                    (including IITs, IISc.., NITs and other leading technical institutions), 1214 Faculty Chapters and 1322 Students’ Chapters and 17 Sections throughout the country.</p>
            </div>
            <img class="commitee_image img-responsive " class="commitee_image " src="images/iste.jpeg " alt="img-responsive " />

        </div>
        <div class="row " style="padding:40px;box-shadow: 10px 10px 8px 2px #FF8C00; ">
            <img class="commitee_image img-responsive " src="images/mesa.jpeg " alt="img-responsive " />
            <div class=" content " style="padding-left: 20px;width:60vw; ">
                <a href="# " style=color:black;>
                    <h1 class="commitee_head ">MESA</h1>
                </a>
                <p>
                    MESA is the association for mechanical engineering students that was founded in the year 20192020 MESA acts as a bridge between the academics and the practical industry experience. It helps in building aptitude and attitude suitable for demands of today's
                    industries with the help of seminars, hands-on-workshops and visits to various exhibitions and industries.
                </p>
            </div>
        </div>
        <div class="row " style="padding:40px;box-shadow: 10px 10px 8px 2px #FF8C00; ">
            <div class=" content " style="padding-left: 20px;width:60vw; ">
                <a href="http://issb.sfit.ac.in/" style=color:black;>
                    <h1 class="commitee_head ">ISSB</h1>
                </a>
                <p>
                    The Institute of Electrical and Electronics Engineers (IEEE) is a professional association headquartered in New York City that is dedicated to advancing technological innovation and excellence. The ISSB branch functions @SFIT and the purpose of the organization
                    is to achieve overall development of students.
                </p>
            </div>
            <img class="commitee_image " src="images/issb_image.png " alt="img-responsive " />

        </div>
        <div class="row " style="padding:40px;box-shadow: 10px 10px 8px 2px #FF8C00; ">

            <img class="commitee_image " src="images/eesa.jpeg " alt="img-responsive " />
            <div class=" content " style="padding-left: 20px;width:60vw; ">
                <a href="# " style=color:black;>
                    <h1 class="commitee_head ">EESA</h1>
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
        <div class="row " style="padding:40px;box-shadow: 10px 10px 8px 2px #FF8C00; ">
            <div class=" content " style="padding-left: 20px;width:60vw; ">
                <a href="# " style=color:black;>
                    <h1 class="commitee_head ">NSS</h1>
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
            <img class="commitee_image " src="images/nss.jpeg " alt="img-responsive " />

        </div>

    </div>
    <div class="bg-modal">
        <div class="modal-contents animate ">
            <span onclick="document.querySelector( '.bg-modal').style.display='none' " class="close">&times;</span>


            <label id="event_name " style="text-align:center; "><strong>Event Name</Strong></label>

            <div id="date ">
                <label>Start Date :</label>
                <label id="start_date "></label>
                <br>
                <label>End Date : </label>
                <label id="end_date "></label>
            </div>
            <div>
                <label>Event Category : </label>
                <label id="event_category "></label>
            </div>

            <div>
                <label>Information</label>
                <label id="information "></label>
            </div>
            <div>
                <label>Speaker</label>
                <label id="speaker "></label>
            </div>
            <div>
                <label>Contact Person</label>
                <br>
                <label>Name : </label>
                <label id="contact_name "></label>
                <br>
                <label>Phone No:</label>
                <label id="phone_no "></label>
            </div>
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
                <input id="uname" type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input id="psw" type="password" placeholder="Enter Password" name="psw" required>

                <button id="login" name="login"class="button" type="submit">Login<i class="fa fa-sign-in" aria-hidden="true"></i></button>
                <div id="message"></div>

            </div>
        </form>
    </div>
</body>

<footer class="page-footer font-small footer-fixed ">

    <div class=" flex-center text-center py-5 " style="background-color:#1D2951; ;color:white; ">
        <a href="https://www.facebook.com/st.fit"><i class="fa fa-facebook-f fa-lg white mr-md-3 mr-3 fa-2x "> </i></a>
        <a href="https://mobile.twitter.com/sfitborivali"><i class="fa fa-twitter fa-lg white mr-md-3 mr-3 fa-2x "> </i></a>

        <a href="https://www.linkedin.com/school/sfit/"><i class="fa fa-linkedin fa-lg white mr-md-3 mr-3 fa-2x "> </i></a>

        <a href="https://www.instagram.com/sfit_engg_official/?igshid=1vjrvw901u897"><i class="fa fa-instagram fa-lg white mr-md-3 mr-3 fa-2x "> </i></a>

        <a href="https://www.youtube.com/channel/UCUT6MM1-O5vGnX3V6fpCTEQ"><i class="fa fa-youtube-play fa-lg white fa-2x "> </i></a>
    </div>

    <div class="footer-copyright flex-center text-center py-1 " style="background-color:#22305f; ;color:white; ">© 2020 Copyright
    </div>
</footer>

</html>