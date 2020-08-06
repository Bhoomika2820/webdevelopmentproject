<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <!--To make site responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Including font awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap CDN link and scripts-->
    <link rel="stylesheet" type="text/css" href="css/addevent.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="images_upload.js"></script>

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
                                <button class="btn btn-outline my-2 my-sm-0" value="Logout"type="submit " id="logout" name="logout" formaction="About1.html">
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

        <form class="form1" action ="add_event_data.php" method="post" >
            <header class="ADD_EVENT" style="margin-bottom:10px;">
                <h1>
                    Add Event
                </h1>
            </header>
            <br>
            <!--Starting date of the event-->
            <label>Start Date and time</label>
            <input class="form-control" type="datetime-local" id="start_date" name="start_date" required />

            <!--Ending date of the event-->
            <label>End Date and time</label>
            <input class="form-control" type="datetime-local" id="end_date" name="end_date" required/>

            <!--Category to which the event belong like workshop,mosaic,iris etc -->
            <label>Event Category</label>
            <input class="form-control" type="text"id="category" name="category" required />

            <!--Name of the event-->
            <label>Event Name</label>
            <input class="form-control" type="text" id="event_name" name="event_name" required/>

            <!--Caption of the event-->
            <label>Caption</label>
            <input class="form-control" type="text"id="caption" name="caption"/>


            <!--Detailed description of the event-->
            <label>Information of the event</label>
            <input class="form-control" type="text-wrap" id="info" name="info" required/>

            <!--Speaker of the event-->
            <label>Host</label>
            <input class="form-control" type="text"id="host_name" name="host_name"/> <br>

            <!--Contact details of the person to be contacted-->
            <label>Contact Person : </label>
            <div style="padding-left: 20px;">
                <label>Name</label>
                <input class="form-control" type="text" paceholder="" id="contact_person" name="contact_person" required />
                <br>
                <label>Phone number</label>
                <input class="form-control" type="number" id="phone_no" name="phone_no" required/>
                <br>
            </div>

            <!--Registration link -->
            <label>Registration link</label>
            <input class="form-control" type="url " paceholder=" " id="registration_link " name="registration_link" required/>
            <p>
                <label>Add Poster</label>
                <canvas class="form-control imageuploader" id="c1" name="c1"style="width:fit-content;height:fit-content;border: light black; margin-bottom:10px;"></canvas>
                <label>Filename :</label>
                <input type="file" id="finput"name="image" multiple="false" accept="image/*" onchange="upload()" required/>
            </p>

            <!--Submit and preview button-->
            <div style="float:right;position: relative;">

                <input type="button" class="btn-warning"value="Preview" id="preview" name="preview" style="text-align: center; width: fit-content; margin-right: 10px;" />
                <input type="button" class="btn-success"value="Submit" id="submit" name="submit" style="text-align: center; width: fit-content; margin-bottom: 50px;" />
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