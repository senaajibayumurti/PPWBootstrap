<!DOCTYPE html>
<html>
<head>
    <title>OCEAN ONE dari tweak/Javascript2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        @font-face {
            font-family:'ClashDisplay-Bold';
            src: url('font/ClashDisplay-Bold.otf');
        }

        body{
            font-family: 'ClashDisplay-Bold';
            background-image: url('BGLaut.png');
            background-size: cover;
            background-position: center;
        }

        .navbar {
            position: absolute;
            color: #fff;
            top: 0;
            left: 0;
            right: 0;
        }
        .navbar-brand {
            margin-right: 2rem;
        }
        .navbar-brand img {
            height: 50px;
        }
        .navbar a {
            color: #fff;
        }
        .navbar a:hover {
            color: #999;
            text-decoration: none;
        }

        
        .hero-section {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .hero-section h1 {
            font-size: 6rem;
            font-weight: bold;
            margin: 0;
        }
        .hero-section p {
            font-size: 2rem;
            margin-top: 2rem;
        }


        section {
            width: 100%;
            height: 695px;
            color: #fff;
        }
        .container.section2{
            margin-top: 100px;
        }
        #textService1{
            max-height: 120px;
            overflow: auto;
        }
        #textService2{
            max-height: 120px;
            overflow: auto;
        }
        #textService3{
            max-height: 120px;
            overflow: auto;
        }


        .img-fluid:hover{
            transform: scale(1.1);
            transition: transform .2s;
        }


        .card-body{
            background-color: #f8b298;
            border: none;
        }
        .card-footer{
            background-color: #eb896c;
        }


        .section-4 .container{
            height: 100%;
        }
        .section-4 .ikon-card{
            background-color: #ffffff00;
            border: none;
        }
        .card-img-top {
            transition: transform .2s;
        }
        .card-img-top:hover {
            transform: scale(1.1);
        }
        .card-title {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 1.2rem;
            margin-bottom: 0;
        }
        .card-text {
            font-size: 0.9rem;
            line-height: 1.4rem;
            margin-bottom: 0;
        }


        .section-5 .container{
            height: 100%;
        }
        .section-5 .ikon-card{
            background-color: #ffffff00;
            border: none;
        }

        .section-6 {
            height: auto;
        }
        .section-6 td, th{
            color: white;
        }
        #totalYearly{
            font-size:xx-large;
        }

        #get-in-touch {
            padding: 100px 0;
        }
        .map-responsive {
            overflow: hidden;
            position: relative;
            height: 0;
            padding-top: 56.25%;
        }
        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }


        footer img{
            height: 50px;
        }
        footer {
            background-color: #0A0622;
            color: #fff;
            padding: 30px 0;
        }
        footer ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        footer li {
            display: inline-block;
            margin-right: 20px;
        }
        footer li:last-child {
            margin-right: 0;
        }

        footer a {
            color: #fff;
        }
        footer a:hover {
            color: #999;
            text-decoration: none;
        }

        #AfterThxTextFalse{
            color: red;
        }


    </style>
</head>
<body>
<!---------------------------------------------PHP--------------------------------------------->
<?php
    
?>
<!------------------------------------------SECTION 1------------------------------------------>
    <div class="hero-section">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="logo/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div>
            <h1>OCEAN ONE</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" onclick="alert('Come Join Us!')" class="btn btn-primary btn-lg mt-4">TAKE ACTION</a>
        </div>
    </div>

<!------------------------------------------SECTION 2------------------------------------------>
    <section class="section-2 d-flex justify-content-center align-items-center">
        <div class="container section2">
            <h2 class="text-center mb-4">OFFSET YOUR PLASTIC FOOTPRINT</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title">ALIGN</h4>
                            <div class="text-container">
                                <p id="textService1" contenteditable="false">66% of people (73% of Millennials) are willing to pay more for products and services from companies committed to positive social and environmental impact.</p>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <div class="col-8">
                                <a href="#" class="btn btn-primary btn-block">LEARN MORE</a>
                            </div>  
                            <div class="col-4">
                                <button id="editButton1" class="btn btn-secondary">EDIT</button>
                                <button id="saveButton1" class="btn btn-primary" style="display: none;">SAVE</button>
                            </div>
                        </div>
                    </div>
                    <script>
                        document.getElementById("editButton1").addEventListener("click", function() {
                            var textService1 = document.getElementById("textService1");
                            
                            var editButton1 = document.getElementById("editButton1");
                            
                            var saveButton1 = document.getElementById("saveButton1");
                            
                            textService1.contentEditable = "true";
                            textService1.focus();

                            editButton1.style.display = "none";
                            saveButton1.style.display = "inline-block";
                            });

                            document.getElementById("saveButton1").addEventListener("click", function() {
                            var textService1 = document.getElementById("textService1");
                            var editButton1 = document.getElementById("editButton1");
                            var saveButton1 = document.getElementById("saveButton1");

                            textService1.contentEditable = "false";

                            editButton1.style.display = "inline-block";
                            saveButton1.style.display = "none";
                            });
                    </script>
                </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">KICKSTART</h4>
                                <div class="text-container">
                                    <p id="textService2" contenteditable="false">Ocean One are a turnkey solution to begin the journey of reducing your business’s environmental footprint or going plastic neutral.</p>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="col-8">
                                    <a href="#" class="btn btn-primary btn-block">LEARN MORE</a>
                                </div>  
                                <div class="col-4">
                                    <button id="editButton2" class="btn btn-secondary">EDIT</button>
                                    <button id="saveButton2" class="btn btn-primary" style="display: none;">SAVE</button>
                                </div>
                            </div>
                        </div>
                        <script>
                            document.getElementById("editButton2").addEventListener("click", function() {
                                var textService2 = document.getElementById("textService2");
                                
                                var editButton2 = document.getElementById("editButton2");
                                
                                var saveButton2 = document.getElementById("saveButton2");
                                
                                textService2.contentEditable = "true";
                                textService2.focus();
    
                                editButton2.style.display = "none";
                                saveButton2.style.display = "inline-block";
                                });
    
                                document.getElementById("saveButton2").addEventListener("click", function() {
                                var textService2 = document.getElementById("textService2");
                                var editButton2 = document.getElementById("editButton2");
                                var saveButton2 = document.getElementById("saveButton2");
    
                                textService2.contentEditable = "false";
    
                                editButton2.style.display = "inline-block";
                                saveButton2.style.display = "none";
                                });
                        </script>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">AMPLIFY</h4>
                                <div class="text-container">
                                    <p id="textService3" contenteditable="false">Is your actions already making strides in its commitment to sustainability? Measure your action success using IMPACT</p>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="col-8">
                                    <a href="#" class="btn btn-primary btn-block">LEARN MORE</a>
                                </div>  
                                <div class="col-4">
                                    <button id="editButton3" class="btn btn-secondary">EDIT</button>
                                    <button id="saveButton3" class="btn btn-primary" style="display: none;">SAVE</button>
                                </div>
                            </div>
                        </div>
                        <script>
                            document.getElementById("editButton3").addEventListener("click", function() {
                                var textService3 = document.getElementById("textService3");
                                
                                var editButton3 = document.getElementById("editButton3");
                                
                                var saveButton3 = document.getElementById("saveButton3");
                                
                                textService3.contentEditable = "true";
                                textService3.focus();
    
                                editButton3.style.display = "none";
                                saveButton3.style.display = "inline-block";
                                });
    
                                document.getElementById("saveButton3").addEventListener("click", function() {
                                var textService3 = document.getElementById("textService3");
                                var editButton3 = document.getElementById("editButton3");
                                var saveButton3 = document.getElementById("saveButton3");
    
                                textService3.contentEditable = "false";
    
                                editButton3.style.display = "inline-block";
                                saveButton3.style.display = "none";
                                });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!------------------------------------------SECTION 3------------------------------------------>
    <section class="section-3 d-flex justify-content-center align-items-center">
        <div class="container">
            <h2 class="text-center mb-5">MAKE YOUR IMPACT</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="service">
                        <img src="images/amount.png" class="img-fluid" alt="Commit removing a specific amount">
                        <h3 class="mt-3 mb-3">COMMIT REMOVING A SPECIFIC AMOUNT</h3>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="service">
                        <img src="images/sales.png" class="img-fluid" alt="Tie removal to product sales">
                        <h3 class="mt-3 mb-3">TIE REMOVAL TO PRODUCT SALES</h3>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="service">
                        <img src="images/insent.png" class="img-fluid" alt="Incentivize community action">
                        <h3 class="mt-3 mb-3">INCENTIVIZE COMMUNITY ACTION</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!------------------------------------------SECTION 4------------------------------------------>
    <section class="section-4 d-flex justify-content-center align-items-center h-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-4">
                <h2 class="text-uppercase">PROJECT 1:</h2>
                <h3 class="mb-4">OCEANBOUND CLEAN UP</h3>
            </div>
            <div class="col-md-9 mx-auto">
                <div class="row">
                    <div class="col-md-2 mb-4"></div>
                    <div class="col-md-4 mb-4">
                        <div class="ikon-card card h-100">
                            <img src="images/botol.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase mb-3">PROBLEMS</h5>
                                <p class="card-text">Plastic recycling generates plastic waste effluent as a standard part of the process. This dirty discharge known as "Mud" is at risk of being discharged into the wastewater and, in the best-case, is usually taken to the nearest landfill.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase mb-3">SOLUTION</h5>
                                <p class="card-text">Repurposes the “Mud” into useful building materials. It's composition is perfect for producing bricks! Unfortunately, these recycled plastic compound bricks are slightly more expensive than standard building bricks, so Impac+ program incentivizes the reuse of the “Mud” in the bricks by making them competitive on the open market.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="ikon-card card h-100">
                            <img src="images/handsa.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

<!------------------------------------------SECTION 5------------------------------------------>
<section class="section-5 d-flex justify-content-center align-items-center h-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-4">
            <h2 class="text-uppercase">PROJECT 2:</h2>
            <h3 class="mb-4">FISHING NET RECOVERY</h3>
        </div>
        <div class="col-md-9 mx-auto">
            <div class="row">
                <div class="col-md-2 mb-4"></div>
                <div class="col-md-4 mb-4">
                    <div class="ikon-card card h-100">
                        <img src="images/kalengM.png" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase mb-3">PROBLEMS</h5>
                            <p class="card-text">Fishing gear - nets and ropes - pose a significant risk to sea life if cut away in the ocean. Unfortunately, incentives do not exist to recover this gear so at the end of its life, most gets landfilled or simply cut away at sea. It's a huge reason for why fishing nets are the largest ocean plastic polluter.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase mb-3">SOLUTION</h5>
                            <p class="card-text">We provides the funds needed to incentivize collection and recycling of this gear. This program creates a pathway for the reclamation of end of life fishing gear.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="ikon-card card h-100">
                        <img src="images/kalengK.png" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!------------------------------------------SECTION 6------------------------------------------>
<section class="section-6">
    <div class="container">
            <div class="card">
                <div class="card-body">
                    <h1 class="car-title text-center">ITEMS YOU CONSUME DAILY</h1>
                    <h5 class="card-title text-center">Please enter the quantity for each day</h5>
                    <div class="container">
                        <table class="table">
                            <thead>
                                <th>Waste</th>
                                <th>Daily</th>
                                <th>Yearly</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Plastic Bottles</td>
                                    <td>
                                    <input type="number" class="form-control" id="daily0" placeholder="Enter the daily amount" oninput="hitungYearly('0')">
                                    </td>
                                    <td id="yearly0"></td>
                                </tr>
                                <tr>
                                    <td>Plastic Cups</td>
                                    <td>
                                    <input type="number" class="form-control" id="daily1" placeholder="Enter the daily amount" oninput="hitungYearly('1')">
                                    </td>
                                    <td id="yearly1"></td>
                                </tr>
                                <tr>
                                    <td>Straws</td>
                                    <td>
                                    <input type="number" class="form-control" id="daily2" placeholder="Enter the daily amount" oninput="hitungYearly('2')">
                                    </td>
                                    <td id="yearly2"></td>
                                </tr>
                                <tr>
                                    <td>Cotton Swabs</td>
                                    <td>
                                    <input type="number" class="form-control" id="daily3" placeholder="Enter the daily amount" oninput="hitungYearly('3')">
                                    </td>
                                    <td id="yearly3"></td>
                                </tr>
                                <tr>
                                    <td>Cigarette Butts</td>
                                    <td>
                                    <input type="number" class="form-control" id="daily4" placeholder="Enter the daily amount" oninput="hitungYearly('4')">
                                    </td>
                                    <td id="yearly4"></td>
                                </tr>
                                <tr>
                                    <td>Plastic Resealable Bags</td>
                                    <td>
                                    <input type="number" class="form-control" id="daily5" placeholder="Enter the daily amount" oninput="hitungYearly('5')">
                                    </td>
                                    <td id="yearly5"></td>
                                </tr>
                                <tr>
                                    <td>Plastic Cling Wrap</td>
                                    <td>
                                    <input type="number" class="form-control" id="daily6" placeholder="Enter the daily amount" oninput="hitungYearly('6')">
                                    </td>
                                    <td id="yearly6"></td>
                                </tr>
                                <tr>
                                    <td>Plastic Silverware</td>
                                    <td>
                                    <input type="number" class="form-control" id="daily7" placeholder="Enter the daily amount" oninput="hitungYearly('7')">
                                    </td>
                                    <td id="yearly7"></td>
                                </tr>
                                <tr>
                                    <td>Plastic Sirrers</td>
                                    <td>
                                    <input type="number" class="form-control" id="daily8" placeholder="Enter the daily amount" oninput="hitungYearly('8')">
                                    </td>
                                    <td id="yearly8"></td>
                                </tr>
                                <tr>
                                    <td>Food Containers</td>
                                    <td>
                                    <input type="number" class="form-control" id="daily9" placeholder="Enter the daily amount" oninput="hitungYearly('9')">
                                    </td>
                                    <td id="yearly9"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <h2>Current Yearly Consumption</h2>
                                    </td>
                                    <td id="totalYearly"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                
                    <script>
                    function hitungYearly(baris) {
                        var daily = document.getElementById("daily" + baris).value;
                        var yearly = daily * 365;
                        document.getElementById("yearly" + baris).textContent = yearly;
                        hitungTotalYearly();
                    }

                    function hitungTotalYearly() {
                        var total = 0;
                        for (var i = 0; i < 10; i++) {
                            var yearly = parseInt(document.getElementById("yearly" + i).textContent);
                            if (!isNaN(yearly)) {
                                total += yearly;
                            }
                        }
                        document.getElementById("totalYearly").textContent = total;
                    }

                    </script>
                </div>
            </div>
    </div>
</section>
<!------------------------------------------SECTION 7------------------------------------------>
<section class="section-7" id="get-in-touch">
    <div class="container">
        <div class="container">
            <h2 class="text-uppercase text-center mb-4">GET IN TOUCH:</h2>
            <div class="col-md-9 mx-auto">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15812.93017310653!2d110.36662804999999!3d-7.765146200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59b2d4729729%3A0xac4d7b5fcf34f8e4!2sUniversitas%20Gadjah%20Mada!5e0!3m2!1sid!2sid!4v1683527130816!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form onsubmit="submitForm(event)">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" rows="5" placeholder="Write your message here..."></textarea>
                            </div>
                            <button type="submit" class=" btn btn-primary" id="send-btn">SEND</button>
                            <div id="messageContainer" class="message-container" style="display: none;">
                                <h3 id="ThxText"></h3>
                                <p id="AfterThxText"></p>
                                <p id="AfterThxTextFalse"></p>
                            </div>
                        </form>
                        
                    </div>
                    <script>
                        function submitForm(event) {
                            event.preventDefault();

                            var nameInput = document.getElementById("name");
                            var emailInput = document.getElementById("email");
                            var messageContainer = document.getElementById("messageContainer");
                            var ThxText = document.getElementById("ThxText")
                            var AfterThxText = document.getElementById("AfterThxText")
                            var AfterThxTextFalse = document.getElementById("AfterThxTextFalse")

                            var name = nameInput.value.trim();
                            var email = emailInput.value.trim();

                            if (name === "" || email === "") {
                                ThxText.innerText = "";
                                AfterThxTextFalse.innerText = "Name and Email can not be empty!";
                            } else {
                                ThxText.innerText = "Thank you for joining us!";
                                AfterThxText.innerText = "We've sent an email to you for confirmation.";
                            }
                            messageContainer.style.display = "block";
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

<!------------------------------------------FOOTER------------------------------------------>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="logo/logoHP.png" alt="logo">
            </div>
            <div class="col-md-6 text-md-right">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Newsletter</a></li>
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="#">FAQs</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
  

</body>
</html>
