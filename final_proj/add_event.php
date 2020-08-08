<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!--To make site responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Including font awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap CDN link and scripts-->
    <link rel="stylesheet" type="text/css" href="css/event.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="http://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>
    <script src="js/images_style.js"></script>
    <script>
        function upload() {
            var fileinput = document.getElementById("finput");
            var imgcanvas = document.getElementById("c1");
            var image = new SimpleImage(fileinput);
            imgcanvas.width = image.width;
            imgcanvas.height = Image.height;
            image.drawTo(imgcanvas);
        }
    </script>

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
                        <li class="nav-item ">
                            <a class="nav-link" href="About1.php">Home<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="add_event.php">Add event</a>
                        </li>
                    </ul>
                    <ul id="loginlist" class="navbar-nav">
                        <li class="nav-item">
                            <form class="form-inline justify-content-between logform">
                                <button class="btn btn-outline my-2 my-sm-0" type="submit " id="logout" formaction="About1.php">
                                    <strong>Logout</strong>
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                </button>
                                <i id="user" class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>

    </header>
    <div class="container" style="padding-top:69px;">

        <form class="form1 formcontainer" style="padding-bottom: 50px;">
            <header class="ADD_EVENT" style="margin-bottom:10px;">
                <h1>
                    Add Event
                </h1>
            </header>
            <br>
            <!--Starting date of the event-->
            <label>Start Date and time</label>
            <input class="form-control" type="datetime-local" id="start_date" />
            <!--Ending date of the event-->
            <label>End Date and time</label>
            <input class="form-control" type="datetime-local" id="end_date" />
            <!-- Committee conducting the event -->
            <label>Committee</label>
            <input class="form-control" type="text" id="committee" />
            <!--Category to which the event belong like workshop,mosaic,iris etc -->
            <label>Event Category</label>
            <input class="form-control" type="text" placeholder="" id="category" />
            <!--Name of the event-->
            <label>Event Name</label>
            <input class="form-control" type="text" placeholder="" id="event_name" />
            <!--Caption of the event-->
            <label>Caption</label>
            <input class="form-control" type="text" placeholder="" id="caption" />
            <!--Detailed description of the event-->
            <label>Information of the event</label>
            <input class="form-control" type="text-wrap" placeholder="" id="info" />
            <!--Host of the event-->
            <label>Host</label>
            <input class="form-control" type="text" placeholder="" id="host_name" />
            <br>
            <!--Contact details of the person to be contacted-->
            <label>Contact Person : </label>
            <div style="padding-left: 20px;">

                <label>Name</label>
                <input class="form-control " type="text " placeholder=" " id="contact_person " />
                <br>
                <label>Phone number</label>
                <input class="form-control " type="number " id="phone_no " />
                <br>
            </div>
            <!--Registration link -->
            <label>Registration link</label>
            <input class="form-control " type="url " placeholder=" " id="registration_link " />
            <p>
                <label>Add Poster</label>
                <canvas class="form-control imageuploader" id="c1" style="width:fit-content;height:fit-content;border: light black; margin-bottom:10px;"></canvas>
                <label>Filename :</label>
                <input type="file" id="finput" multiple="false" accept="image/*" onchange="upload()" />
            </p>
            <!--Submit and preview button-->
            <div style="float:right;position: relative;">

                <input type="button" class="preview btn-warning" placeholder="preview" value="Preview" style="text-align: center; width: fit-content; margin-right: 10px;" />
                <input type="button" class="btn-success" placeholder="submit" value="Submit" style="text-align: center; width: fit-content; margin-bottom: 50px;" />
            </div>
        </form>
    </div>
    <div class="event-modal">
        <div class="event-modal-contents animate" >
            <span onclick="document.querySelector('.event-modal').style.display='none';" class="close">&times;</span>
            <label class="center" id="name" style="text-align: center; "><strong></strong></label>
            <div>
                <label>Caption: </label>
                <label id="cap"></label>
            </div>
            <div id="date ">
                <label>Start Date: </label>
                <label id="sdate"></label>
                <br>
                <label>End Date: </label>
                <label id="edate "></label>
            </div>
            <div>
                <label>Event Category: </label>
                <label id="event_category"></label>
            </div>
            <div>
                <label>Information: </label>
                <label id="information"></label>
            </div>
            <div>
                <label>Host: </label>
                <label id="speaker"></label>
            </div>
            <div>
                <label><strong>Contact Person</strong></label>
                <br>
                <label>Name: </label>
                <label id="contact_name"></label>
                <br>
                <label>Phone No: </label>
                <label id="phone"></label>
            </div>
            <div>
                <label>Registration Link: </label>
                <label id="reg_link"></label>
            </div>
        </div>
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
<script>
        $(document).ready(function () {
            $('.preview').click(function (e) {
                document.querySelector('.event-modal').style.display = 'block';
                e.preventDefault();
                var name = document.getElementById('event_name').value;
                document.getElementById('name').innerHTML = name;

                var cap = document.getElementById('caption').value;
                document.getElementById('cap').innerHTML = cap;

                var start_date = document.getElementById('start_date').value;
                document.getElementById('sdate').innerHTML = start_date;

                var end_date = document.getElementById('end_date').value;
                document.getElementById('edate').innerHTML = end_date;

                var category = document.getElementById('category').value;
                document.getElementById('event_category').innerHTML = start_date;

                var info = document.getElementById('info').value;
                document.getElementById('information').innerHTML = info;

                var host = document.getElementById('host_name').value;
                document.getElementById('speaker').innerHTML = host;

                var con_name = document.getElementById('contact_person').value;
                document.getElementById('contact_name').innerHTML = con_name;

                var phone = document.getElementById('phone_no').value;
                document.getElementById('phone').innerHTML = phone;

                var link = document.getElementById('registration_link').value;
                document.getElementById('reg_link').innerHTML = link;
                
            })
        });
    </script>
</html>