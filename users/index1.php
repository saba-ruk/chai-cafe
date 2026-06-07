<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chai Cafe Bhatkal</title>
    <link rel="stylesheet" href="../style3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
    <link rel="icon" type="image/x-icon" href="../logo.png">
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,355;1,355&display=swap" rel="stylesheet">
    <script src="../categories.js"></script>
</head>

<body>
    <!-- navbar -->
    <section id="header">

        <div class="imgg">
            <a href="#"><img src="../logo.png" id="logo1" height="50px" width="60px"></a>
        </div>



        <ul id="navbar">
            <li><a class="active" href="#bgimage"><i class="fa-solid fa-house-chimney size"></i> Home</a></li>
            <li><a href="#contact"><i class="fa-solid fa-address-book size"></i> Contact</a></li>
            <li><a href="index.php"><i class="fa-solid fa-book size"></i> Menu</a></li>

            <li class="nav-item">
                <a href="logout.php" class="text-decoration-none" style="position:relative;bottom:-1px"><img src="../logout.png" style="position:relative;" height="23px" width="25px"></i>Logout</a>
            </li>
        </ul>

    </section>

    <!-- front page image -->
    <section id="bgimage" style="background-image : url(../chaii.jpeg); background-size : cover; position:relative;">

        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center; width: 100%;" class="wlcm_txt">

            <p class="font">Time To Drink Chai</p>
            <p class="dscrptn">𝐌𝐚𝐝𝐞 𝐟𝐫𝐞𝐬𝐡𝐥𝐲 𝐟𝐫𝐨𝐦 𝐠𝐫𝐨𝐮𝐧𝐝 𝐭𝐞𝐚 𝐥𝐞𝐚𝐯𝐞𝐬,<br>𝗰𝗼𝗹𝗱 𝗯𝗿𝗲𝘄 𝗰𝗼𝗳𝗳𝗲𝗲 𝗳𝗼𝗿 𝗵𝗼𝘁 𝘀𝘂𝗺𝗺𝗲𝐫 𝗼𝗿 𝗽𝗲𝗿𝗳𝗲𝗰𝘁 𝗳𝗶𝗹𝗲𝗿𝘁𝗲𝗱
                𝗰𝗵𝗮𝗶 𝗳𝗼𝗿 𝗰𝗼𝗹𝗱 𝘄𝗶𝗻𝘁𝗲𝗿</p>
            <button class="custom-btn btn-5"><span>Read More</span></button>
        </div>

    </section>






    <!-- naming -->
    <section>
        <div class="deals-info">
            <div class="linee"></div>
            <p style="color:#715940">Sips & Savories</p>
            <div class="linee"></div>
        </div>
    </section>
    <!-- card menu -->
    <section id="start">
    <div>
        <center>
            <div class="men">
                <div class="box-container">
                    <div class="main1">
                        <img src="../pics/ms chai.jpg" alt="Image">
                    </div>
                    <div class="hello">CHAI VARIETIES</div>
                </div>

                <div class="box-container">
                    <div class="main1">
                        <img src="../pics/dahi puri1 .jpg" alt="Image">
                    </div>
                    <div class="hello"> SNACKS</div>
                </div>

                <div class="box-container">
                    <div class="main1">
                        <img src="../pics/oreo drink1.jpg" alt="Image">
                    </div>
                    <div class="hello">MILKSHAKES </div>
                </div>

                <div class="box-container">
                    <div class="main1">
                        <img src="../pics/lemon mint mojito 65.jpg" alt="Image">
                    </div>
                    <div class="hello">MOJITOS</div>
                </div>
            </div>
        </center>
    </div>
</section>




    <!-- map and about us -->
    <section id="header1">
        <div class="menu-toggle">
            <div class="hamburger"></div>
        </div>

        <div class="container">


            <div class="deals-info location_container" style="padding: 0;">
                <div class="linee"></div>
                <p id="location_txt" style="color:#715940">Location</p>
                <div class="linee"></div>
            </div>



            <section class="section2 clearfix">
                <div class="col2 column1 first">
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                    <div class="sec2map" style='overflow:hidden;height:550px;width:100%;'>
                        <div id='gmap_canvas' style='height:90%;width:85%;'></div>
                        <div><small><a href="http://embedgooglemaps.com"> </a></small></div>
                        <div><small><a href="http://freedirectorysubmissionsites.com/"></a></small></div>
                        <style>
                            #gmap_canvas img {
                                max-width: none !important;
                                background: none !important
                            }
                        </style>
                    </div>
                    <script type='text/javascript'>
                        function init_map() {
                            var myOptions = {
                                zoom: 14,
                                center: new google.maps.LatLng(13.98534000, 74.55531000),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                            marker = new google.maps.Marker({
                                map: map,
                                position: new google.maps.LatLng(13.98534000, 74.55531000)
                            });
                            infowindow = new google.maps.InfoWindow({
                                content: '<strong>My Location</strong><br>Chai Cafe<br>'
                            });
                            google.maps.event.addListener(marker, 'click', function() {
                                infowindow.open(map, marker);
                            });
                            infowindow.open(map, marker);
                        }
                        google.maps.event.addDomListener(window, 'load', init_map);
                    </script>
                </div>
                <div class="sec2contactform">
                    <h2>About Us</h2>
                    <!-- 	abut us info		 -->
                    <p class="about" style="font-weight:500;color:#323232">At chai cafe, our love for chai runs
                        deep. Inspired by a passion for bringing people together over a steaming cup of fragrant
                        spices, we embarked on a journey to create something truly special. Nestled in
                        Bhatkal,Karnataka our first branch is a haven where craftsmanship meets community. Each
                        cup of chai is a work of art, meticulously crafted with the finest tea leaves and spices
                        to offer a taste of tradition with a touch of innovation.As you step into our cozy
                        space, you're not just entering a cafe you're becoming part of a warm and welcoming
                        family. We're dedicated to creating an experience that delights the senses and nourishes
                        the soul.</p>
                </div>


            </section>

        </div>



        </div>

        </div>
    </section>



    <!-- slider/carosal -->


    <div class="container" style="padding-bottom: 100px;position:relative; bottom:20px">
        <div class="deals-info categories">
            <div class="linee"></div>
            <p class="font" style="color:#715940">Categories</p>
            <div class="linee"></div>

        </div>

    </div>

    <section id="categories_section" style="position:relative; bottom:130px">
        <div class="cont">
            <div class="row">
                <div class="splide">
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="col-sm-12 col-md-2 splide__slide m-2">
                                <div class="card .bg-light .bg-dark">
                                    <div class="card-body">
                                        <img src="../pics/Tea.jpg" alt="tea">
                                        <h5 class="card-title mt-2">Chai</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 splide__slide m-2">
                                <div class="card .bg-light .bg-dark">
                                    <div class="card-body">
                                        <img src="../pics/coffee.jpg" alt="Image 2">
                                        <h5 class="card-title mt-2">Coffee</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 splide__slide m-2">
                                <div class="card .bg-light .bg-dark">
                                    <div class="card-body">
                                        <img src="../pics/kshaya tea.jpg" alt="Image 3">
                                        <h5 class="card-title mt-2">Kshaya</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 splide__slide m-2">
                                <div class="card .bg-light .bg-dark">
                                    <div class="card-body">
                                        <img src="../pics/samosa (1).jpg" alt="Image 4">
                                        <h5 class="card-title mt-2">Samosa</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 splide__slide m-2">
                                <div class="card .bg-light .bg-dark">
                                    <div class="card-body">
                                        <img src="../pics/burger.jpg" alt="Image 5">
                                        <h5 class="card-title mt-2">Burger</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 splide__slide m-2">
                                <div class="card .bg-light .bg-dark">
                                    <div class="card-body">
                                        <img src="../pics/bread sadwich.jpg" alt="Image 6">
                                        <h5 class="card-title mt-2">Sandwich</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 splide__slide m-2">
                                <div class="card .bg-light .bg-dark">
                                    <div class="card-body">
                                        <img src="../pics/maggie.jpg" alt="Image 7">
                                        <h5 class="card-title mt-2">Noodles</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <!-- footer of bubbles -->
    <section id="bubb">
      <div class="footer" id="contact">
        <div class="bubbles">
          <script>
            for (var i = 0; i < 128; i++) {
              const bubble = document.createElement("div");
              bubble.classList.add("bubble");
              bubble.style.setProperty("--size", `${2 + Math.random() * 4}rem`);
              bubble.style.setProperty(
                "--distance",
                `${6 + Math.random() * 4}rem`
              );
              bubble.style.setProperty(
                "--position",
                `${-5 + Math.random() * 110}%`
              );
              bubble.style.setProperty("--time", `${2 + Math.random() * 2}s`);
              bubble.style.setProperty(
                "--delay",
                `${-1 * (2 + Math.random() * 2)}s`
              );
              document.querySelector(".bubbles").appendChild(bubble);
            }
          </script>
        </div>
        <!-- logo -->
        <div class="content5">
          <div class="thanks">
            <p>
              Thank you for visiting our chai cafe! We hope you savored the
              diverse varieties of chai, each one carefully crafted to offer an
              enriched flavor experience.
            </p>
          </div>
          <div class="details">
            <div class="info">
              <p>Email: abc@gmail.com</p>
              <p>Phone no: 123456789</p>
              <p>Location: NH16 Goodluck Road</p>
              <p>Opposite to bus stand,</p>
              <p>Bhatkal, Karnataka.</p>
            </div>

            <div class="follow">
              <div class="top">
                <p>Follow Us</p>
              </div>

              <div class="bottom">
                <a href="#"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    x="0px"
                    y="0px"
                    width="54"
                    height="54"
                    viewBox="0 0 24 24"
                    style="fill: #1a1a1a"
                    class="icons"
                  >
                    <path
                      d="M11.666,2.005C6.62,2.17,2.374,6.251,2.025,11.288c-0.369,5.329,3.442,9.832,8.481,10.589V14.65H8.892 c-0.726,0-1.314-0.588-1.314-1.314v0c0-0.726,0.588-1.314,1.314-1.314h1.613v-1.749c0-2.896,1.411-4.167,3.818-4.167 c0.357,0,0.662,0.008,0.921,0.021c0.636,0.031,1.129,0.561,1.129,1.198v0c0,0.663-0.537,1.2-1.2,1.2h-0.442 c-1.022,0-1.379,0.969-1.379,2.061v1.437h1.87c0.591,0,1.043,0.527,0.953,1.111l-0.108,0.701c-0.073,0.47-0.477,0.817-0.953,0.817 h-1.762v7.247C18.235,21.236,22,17.062,22,12C22,6.366,17.341,1.821,11.666,2.005z"
                    ></path></svg
                ></a>
                <a href="#"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    x="0px"
                    y="0px"
                    width="54"
                    height="54"
                    viewBox="0 0 32 32"
                    class="icons"
                  >
                    <path
                      d="M 28 8.558594 C 27.117188 8.949219 26.167969 9.214844 25.171875 9.332031 C 26.1875 8.722656 26.96875 7.757813 27.335938 6.609375 C 26.386719 7.171875 25.332031 7.582031 24.210938 7.804688 C 23.3125 6.847656 22.03125 6.246094 20.617188 6.246094 C 17.898438 6.246094 15.691406 8.453125 15.691406 11.171875 C 15.691406 11.558594 15.734375 11.933594 15.820313 12.292969 C 11.722656 12.089844 8.042969 10.128906 5.519531 7.1025 C 5.101563 7.792969 4.859375 8.589844 4.859375 9.4375 C 4.859375 11.039063 5.679688 12.429688 6.925781 13.242188 C 6.121094 13.222656 5.367188 12.996094 4.710938 12.617188 C 4.710938 12.632813 4.710938 12.652344 4.710938 12.671875 C 4.710938 15.007813 6.417969 17.003906 8.65625 17.457031 C 8.261719 17.558594 7.84375 17.605469 7.410156 17.605469 C 7.097656 17.605469 6.792969 17.578125 6.496094 17.523438 C 7.113281 19.480469 8.917969 20.921875 11.039063 20.960938 C 9.347656 22.277344 7.238281 23.050781 4.917969 23.050781 C 4.558594 23.050781 4.207031 23.03125 3.859375 22.988281 C 6.003906 24.402344 8.558594 25.246094 11.320313 25.246094 C 20.59375 25.246094 25.957031 17.683594 25.957031 11.730469 C 25.957031 11.539063 25.957031 11.347656 25.945313 11.160156 C 26.910156 10.480469 27.757813 9.648438 28.429688 8.703125 Z"
                    ></path></svg
                ></a>
                <a href=""
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    x="0px"
                    y="0px"
                    width="54"
                    height="54"
                    viewBox="0 0 64 64"
                    class="icons"
                  >
                    <path
                      d="M 31.820312 12 C 13.438312 12 12 13.439312 12 31.820312 L 12 32.179688 C 12 50.560688 13.438313 52 31.820312 52 L 32.179688 52 C 50.561688 52 52 50.560688 52 32.179688 L 52 32 C 52 13.452 50.548 12 32 12 L 31.820312 12 z M 43.994141 18 C 45.099141 17.997 45.997 18.889141 46 19.994141 C 46.003 21.099141 45.110859 21.997 44.005859 22 C 42.900859 22.003 42.003 21.110859 42 20.005859 C 41.997 18.900859 42.889141 18.003 43.994141 18 z M 31.976562 22 C 37.498562 21.987 41.987 26.454563 42 31.976562 C 42.013 37.498562 37.545437 41.987 32.023438 42 C 26.501437 42.013 22.013 37.545437 22 32.023438 C 21.987 26.501437 26.454563 22.013 31.976562 22 z M 31.986328 26 C 28.672328 26.008 25.992 28.701625 26 32.015625 C 26.008 35.328625 28.700672 38.008 32.013672 38 C 35.327672 37.992 38.008 35.299328 38 31.986328 C 37.992 28.672328 35.299328 25.992 31.986328 26 z"
                    ></path></svg
                ></a>

                <a href=""
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    x="0px"
                    y="0px"
                    width="54"
                    height="54"
                    viewBox="0 0 64 64"
                    class="icons"
                  >
                    <path
                      d="M53.527,17.427C55.714,19.677,56,23.252,56,32s-0.286,12.323-2.473,14.573C51.34,48.822,49.062,49,32,49	s-19.34-0.178-21.527-2.427C8.286,44.323,8,40.748,8,32s0.286-12.323,2.473-14.573S14.938,15,32,15S51.34,15.178,53.527,17.427z M27.95,39.417l12.146-7.038L27.95,25.451V39.417z"
                    ></path></svg
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
    <script src="../script3.js">
    </script>

</body>

</html>