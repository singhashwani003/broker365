<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#000000" />
        <link href="https://fonts.cdnfonts.com/css/open-sans" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- animation -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <!-- Sick slider -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- external css -->
        <link rel="stylesheet" href="css/register.css?ver=65"/>

        <!-- title -->
        <title>brokers365</title>
      
        <!-- favicon -->
        <link rel="icon" type="image/x-icon" href="images/svg">
    </head>

    <body>
        <div class="register-group mt-5">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="register-card rounded bg-light shadow-lg mt-5">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-7 col-lg-7">
                                <div class="d-flex justify-content-around align-items-center py-4 tab">
                                    <button class="tablinks text-primary" onclick="openCity(event, 'Login')" id="defaultOpen">Login</button>
                                    <button class="tablinks text-primary" onclick="openCity(event, 'Register')">Register</button>
                                </div>
                                <form class="tabcontent mt-3 px-4" id="Login">
                                        <div class="form-group">
                                            <input type="text" class="form-control" required placeholder="Email/Mobile No./Username" style="height:60px;">
                                        </div>
                                        <button type="submit" class="btn btn-lg w-100 font-weight-bolder btn-primary mt-4">Continue</button>
                                </form>
                                <form class="tabcontent mt-3 px-4" id="Register">
                                        <div class="form-group">
                                            <input type="text" class="form-control mt-3" required placeholder="Name"style="height:50px;">
                                            <input type="email" class="form-control mt-3" required placeholder="Email"style="height:50px;">
                                            <input type="password" class="form-control mt-3" required  placeholder="Password"style="height:50px;">
                                            <input type="tel" class="form-control mt-3"  required placeholder="Mobile Number"style="height:50px;">
                                        </div>
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="checkbox" required id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1" style="font-size: 11px;">I agree to be contacted by broker365 for similar properties or related services via WhatsApp, phone(overriding NDNC registration), sms, e-mail etc.</label>
                                        </div>
                                        <button type="submit" class="btn btn-lg w-100 font-weight-bolder btn-primary mt-4">Register</button>
                                        <label class="form-check-label text-center" for="inlineCheckbox1" style="font-size: 11px;">By clicking you will be agreeing to <a href="#">Terms & Conditions</a></label>
                                </form>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-5 col-lg-5 p-0">
                                <div class="register-banner p-3">
                                    <div class="component__signUpBlock">
                                        <a class="navbar-brand" href="index.php">
                                            <h1 class="p-3 logo mb-0">brokers365</h1>
                                        </a>
                                        <div class="component__heading">Login to your account to unlock these benefits</div>
                                        <ul class="component__headingContent">
                                            <li>Get latest updates about Properties and Projects.</li>
                                            <li>Access millions of advertiser details in one click.</li>
                                            <li>Get market information, reports and price trends.</li>
                                            <li>Advertise your property for free!</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!-- boostrap bundel -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- fontawesome -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script>
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>

     </body>
</html>