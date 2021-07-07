
<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmin Gherghina</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/style.cv.css">
    <!--FontAwsemo CSS-->
    <script src="https://kit.fontawesome.com/09a058bbbe.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="printare">
        <div class="header">
           
            <div class="header-text">
                <h1>COSMIN GHERGHINA</h1>
                <p>Junior BackEnd Developer</p>
            </div>
        </div>

        <div class="content">
            <div class="left-area">
                <img src="img/profil_cv.jpg">
                <div class="contact">  
                    <h4>CONTACT</h4>
                    <h5>Phone</h5>
                    <p><a href="tel:0752036698">0752.036.698</a></p>
                    <h5>Email</h5>
                    <p><a href="mailto:gherghina.cosmin@yahoo.com">gherghina.cosmin@yahoo.com</a></p>
                    <h5>Home</h5>
                    <p>Bucharest, Romania</p>
                </div> 
                <div class="skills">
                    <h1>SKILLS</h1>
                        <div class="bars">
                            <div class="bar">
                                <p>HTML/CSS</p>
                                <span> </span>
                            </div>
                            <div class="bar">
                                <p>JavaScript</p>
                                <span> </span>
                            </div>
                            <div class="bar">
                                <p>PHP</p>
                                <span> </span>
                            </div>
                            <div class="bar">
                                <p>SQL</p>
                                <span> </span>
                            </div>
                            <div class="bar">
                                <p>Frameworks</p>
                                <span> </span>
                            </div>
                        </div>
                </div>
                <div class="follow">
                    <h1>FOLLOW ME</h1>
                    <h4>Facebook</h4>
                    <p><a href="https://www.facebook.com/gherghina.cosmin">gherghina.cosmin</a></p>
                    <h4>LinkdIn</h4>
                    <p><a href="https://www.linkedin.com/in/gcosmin">gcosmin</a></p>
                    <h4>Instagram</h4>
                    <p><a href="https://www.instagram.com/this.cosmin/">this.cosmin</a></p>
                </div>
            </div>
            <div class ="right-area">
                <div class="despre">
                    <h1><span><i class="fas fa-user"></i></span>
                    ABOUT ME   </h1>
                    <p>An enthusiastic person passionate about technology looking for new opportunities in IT I'm currently studying PHP
                    Web Development at Link Academy, I am a fast learning person with a high degree of autonomy and prepared for new challenges. Everything that brings me more knowledge is welcome.</p>
                </div>
                <div class="work">
                    <h1><span><i class="fas fa-briefcase"></i></span>
                        WORK EXPERIENCE   </h1>
                        <div class="work-group">
                            <h3>AREA SALES MANAGER</h3>
                            <h4>Bogner Edelstahl SRL</h4>
                            <span>Jan 2017 - Present</span>
                                <ul>
                                    <li>Acted as a key point of contact for the company, ensured a high standard of customer service.</li>
                                    <li>Sourced leads and cold called to promote the products, and regularly called/visited both new and existing customers to discuss requirements, negotiate terms and maximize business opportunities.</li>
                                    <li>Provided accurate revenue forecasts and reports to the General Manager weekly.</li>
                                    <li>Emphasizes product features based on customers needs and sell metallurgical products and adjacent services. Identified and pursued valuable business opportunities to generate new company revenue and improve profitability</li>
                                    <li>Writes formal responses to RFQ/RFPs</li>
                                    <li>Identifying the clients purchasing potential and ensure the availability of the products in stock</li>
                                </ul>
                        </div>
                        <div class="work-group">
                            <h3>MARKETING MANAGER</h3>
                            <h4>KONIGFRANKSTAHL SRL</h4>
                            <span>Sep 2019 - Feb 2020</span>
                            <ul>
                                    <li>Implement in Romania the platform thesteel.com</li>
                                    <li>Working closely with the various teams within the company and from Austria to make the platform work in good conditions.</li>
                                    <li>Continuing to raise platform awareness and developing strong marketing actions and expanding new markets.</li>
                                    <li>Responsible for looking and participating at specialized events, exhibitions, and conferences.</li>
                                    <li>Identifying the best opportunities for promoting the platform online and offline.</li>
                            </ul>
                        </div>
                        <div class="work-group">
                            <h3>ASSISTANT MANAGER</h3>
                            <h4>KONIGFRANKSTAHL SRL</h4>
                            <span>Sep 2013 - Dec 2017</span>
                            <ul>
                                    <li>Working closely with the General Manager in achieving the monthly sales target.</li>
                                    <li>Implement and prepare sales reports to help agents and sales managers to increase sales.</li>
                                    <li>Annual reports and presentations for the quarter and annual meetings.</li>
                                    <li>Market prospecting and acquisition of auxiliary products and services.</li>
                                    <li>Promoting company products and services via online and offline marketing strategies.</li>
                            </ul>
                        </div>
                </div>
            <div class="educatie">
               
                    <h1><span><i class="fas fa-book"></i></span>EDUCATION</h1>
                    <div class="edu-group">
                        <h4>LINK ACADEMY<br>
                        PHP Web Development</h4>
                        <span>Oct 2020 - Ongoing Specialization</span>
                        <p>Modules Studied:HTML, CSS, PROCEDURAL PHP, OOP PHP, JavaScript, MySQL</p>
                </div>
                <div class="edu-group">
                    <h4>UNIVERSITY POLITEHNICA OF BUCHAREST<br>
                    MASTER</h4>
                    <span>Oct 2013 -Jul 2015</span>
                    <p>Faculty of Material Science and Engineering Obtaining, processing and characterizing metallic nanomaterials</p>
                </div>
                <div class="edu-group">
                <h4>UNIVERSITY POLITEHNICA OF BUCHAREST<br>
                BACHELOR</h4>
                <span>Oct 2009 - Jul 2013</span>
                <p>Faculty of Material Science and Engineering Department Medical Engineering</p>
                </div>
            </div>
            </div>
        </div>
    </div>

    <button>PRINT CV</button>
    <script>
        var btn = document.querySelector("button");
        btn.onclick = () =>{
            window.print();
        }
    </script>
</body>
</html>
<?php
include_once 'footer.php'
?>
