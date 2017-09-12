
<!DOCTYPE html>
<html lang="en-US">
<head>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site title -->
    <title>Rambalaji - Web Developer - UI/UX - Front End Developer Portfolio resume</title>

    <!-- favicon -->        
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab%7CLato%7COpen+Sans" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!--Font Awesome css -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!--Owl Corousel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <!-- Normalizer css -->
    <link href="assets/css/normalize.css" rel="stylesheet">

    <!-- Lightbox css -->
    <link href="assets/css/lightbox.min.css" rel="stylesheet">

    <!-- Site css -->
    <link href="assets/css/style.css" rel="stylesheet"> 
    
    <!-- Responsive css -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php 

if(isset($_POST['submit'])){
    $to = "rambalaji.skt@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $phone = $_POST['phone'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
    
?>
  <body>
  	<!-- Preloader starts-->
    <div id="preloader"></div>
    <!-- Preloader ends -->

    <!-- Navigation menu -->
    <div class="container menu-container" id="home">
      <div class="sticky">        
            <a href="#" class="btn-collapse">
                <div class="btn-box">
                   <div class="lista-collapse"></div>
                   <div class="lista-collapse"></div>
                   <div class="lista-collapse"></div>
                 </div>
            </a>  
       
      	<div class="collapse menu" id="menu">
              <ul class="list-inline">
                  <li><a class="active" href="#home">HOME</a></li>
                  <li><a href="#about">ABOUT</a></li>
                  <li><a href="#resume">RESUME</a></li>
                  <li><a href="#portfolio">WORKS</a></li>
                  <li><a href="#contact">CONTACT</a></li>
              </ul>   
      	</div>
      </div>
    </div><!-- .container --> 

    <!-- Banner area starts --> 
    <div id="particles-js">
      <div class="banner-area table  ">
        <div class="table-cell">
            <!-- Image-->
            <div class="circle">
                <div class="my-image">
                    <img src="assets/img/my-image.png" alt="banner images">
                </div>
            </div>

            <!-- Caption starts -->
            <div class="caption animated bounce">
                <h1>HELLO, I'M RAMBALAJI</h1>
                <h3>
                  <a href="" class="typewrite" data-period="2000" data-type='[ "I am a Wordpress Developer.", "I am a Front end Developer", "I am a UI/UX Developer" ]'>
                    <span class="wrap"></span>
                  </a>
                </h3>                
            </div><!-- Caption ends --> 
            <!--Arrow-->
            <div class="arrow-div text-center">
                <a href="#about"><i class="fa fa-long-arrow-down arrow-icon"></i></a>             
            </div>
            
        </div><!-- .table-cell -->
    </div><!-- .table -->
    </div>    


    <!-- About area css -->
    <section id="about" class="  section">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                  <div class="title-icon">
                    <i class="fa fa-life-saver  f-icon"></i>  
                  </div>
                  <h2>About Me</h2>                 
                </div>
            </div>           
        </div>
        <!--Introduction-->
        <div class="row ">
          <!--Photo-->
          <div class="col-md-3 col-centered">
            <div class="photo">
               <img src="assets/img/photo-2.png" alt="banner images" class="img-responsive"> 
            </div>
            <!-- Social icons -->
            <div class="social ">
              <ul class="social-links">
                <li><a href="https://www.linkedin.com/in/rambalaji-y-b90328103/"><i class="fa fa-linkedin"></i></a></li>
                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                <li><a href=""><i class="fa fa-dribbble"></i></a></li>
              </ul>
            </div>     
          </div>  
          <!--About text-->
          <div class="col-md-8">
            <div class="about-text">
                <h2>Rambalaji</h2>
                <h4>Web Developer & Front End Developer</h4>
                  <p>I have 2+ years of experience in developing and managing applications. Involved in web project developments and played a vital role in all phases of Web Development. Specialized in analysis, design & implementation of own theme development in wordpress and web based applications. Strong analytic skills and excellent inter-personnel, communication skills. Ability to quickly learn and adopt new technologies.</p>                 
            </div>
            <!--Download cv button-->                          
            <a class="btn btn-cv" href="#">DOWNLOAD CV</a>
          </div>
        </div>

        <!-- Personal details-->
        <div class="row personal-row">
          <!-- Details-->
          <div class="col-md-5">
            <div class="personal">
                <h4>PERSONAL DETAILS</h4>
                <ul>
                    <li>
                      <h5>ADDRESS : </h5><span>2A, Palani Samy Street, Kavindapadi, <br> Erode - 638455.</span>
                    </li>
                    <li>
                      <h5>DATE OF BIRTH :  </h5><span>29/05/1991</span>
                    </li>
                    <li>
                      <h5>EMAIL :  </h5><span>rambalaji.skt@gmail.com</span>
                    </li>
                    <li>
                      <h5>PHONE : </h5><span>(+91) 95009 09226</span>
                    </li>
                    <li>
                      <h5>SKYPE :  </h5><span>rambalaji.skt</span>
                    </li>
                    <li>
                      <h5>LANGUAGES :   </h5><span>English, Tamil</span>
                    </li>
                </ul>
            </div>  
          </div> 

        
          <!-- Skills-->
          <div class="col-md-6 col-md-offset-1 ">
              <div class="row skill-row">
                  <!-- Skill : 1 -->
                  <div class="col-md-6">
                      <div class="skill">
                          <div class="skill-box text-center">
                              <i class="fa fa-html5 s-icon"></i><i class="fa fa-css3 s-icon"></i>
                              <h2>100%</h2>
                          </div>
                          <h4>HTML5 / CSS3</h4>                      
                      </div>  
                  </div>
                  <!-- Skill : 2 -->
                  <div class="col-md-6">
                      <div class="skill">
                          <div class="skill-box text-center">
                              <i class="fa  fa-wordpress s-icon"></i>
                              <h2>90%</h2>
                          </div>
                      <h4>WORDPRESS</h4>                      
                      </div>  
                  </div>
                  
              </div>

              <div class="row skill-row">
                  <!-- Skill : 3 -->
                  <div class="col-md-6">
                      <div class="skill">
                          <div class="skill-box text-center">
                              <img src="assets/img/designing tools/php.png" alt="php" class="img-responsive" >
                              <h2>80%</h2>
                          </div>
                      <h4>PHP</h4>                      
                      </div>  
                  </div>
                  <!-- Skill : 4 -->
                  <div class="col-md-6">
                      <div class="skill">
                          <div class="skill-box text-center">
                              <i class="fa  fa-code s-icon"></i>
                              <h2>80%</h2>
                          </div>
                      <h4>JAVASCRIPT</h4>                      
                      </div>  
                  </div>
              </div>
              
              <div class="row skill-row">
                  <!-- Skill : 3 -->
                  <div class="col-md-6">
                      <div class="skill">
                          <div class="skill-box text-center">
                              <img src="assets/img/designing tools/corel-draw.png" alt="corel-draw" class="img-responsive" >
                              <h2>80%</h2>
                          </div>
                      <h4>CORELDRAW</h4>                      
                      </div>  
                  </div>
                  <!-- Skill : 4 -->
                  <div class="col-md-6">
                      <div class="skill">
                          <div class="skill-box text-center">
                              <i class="fa fa-paint-brush s-icon"></i>
                              <h2>100%</h2>
                          </div>
                      <h4>ADOBE PHOTOSHOP</h4>                      
                      </div>  
                  </div>
                  
              </div>             
          </div>
        </div>
      </div><!-- .container --> 
    </section>

	
    <!--Recent Posts
    <section id="blog" class="section">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                  <div class="title-icon">
                    <i class="fa fa-rocket  f-icon"></i>  
                  </div>
                  <h2>Recent Posts</h2>
                  <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>                  
                </div>
            </div>           
        </div>-->

          <!-- Posts
          <div class="row">
            <div class="owl-carousel owl-theme">-->

              <!-- 1st Post
              <div class="item">
                  <div class="blog-img">
                      <img src="assets/img/post-img-1.jpg" alt="banner images">
                      <div class="overlay"></div>
                      <div class="blog-info">
                          <h5 class="blog-cat"><a href="#">Official</a></h5>                          
                      </div>  
                      <h3 class="blog-title"><a href="#">Blog Post with Image</a></h3>
                      <div class="comment-div">
                          <ul>
                              <li>By </li>
                              <li><a href="#">John Doe</a></li>
                              <li><a href="#"> - Jun 25</a></li>
                          </ul>
                      </div>                     
                  </div>
              </div>-->

              <!-- 2nd Post
              <div class="item">
                  <div class="blog-img">
                      <img src="assets/img/post-img-2.jpg" alt="post image">
                      <div class="overlay"></div>
                      <div class="blog-info">
                          <h5 class="blog-cat"><a href="#">Meeting</a></h5>                          
                      </div>  
                      <h3 class="blog-title">Stantard Blog  Post </h3>
                      <div class="comment-div">
                          <ul>
                              <li>By </li>
                              <li><a href="#">John Doe</a></li>
                              <li><a href="#"> - Aug 15</a></li>
                          </ul>
                      </div>                     
                  </div>
              </div>-->

              <!-- 3rd Post
              <div class="item">
                  <div class="blog-img">
                      <img src="assets/img/post-img-3.jpg" alt="banner images">
                      <div class="overlay"></div>
                      <div class="blog-info">
                          <h5 class="blog-cat"><a href="#">Travel</a></h5>                          
                      </div>  
                      <h3 class="blog-title">Blog Post with Image</h3>
                      <div class="comment-div">
                          <ul>
                              <li>By </li>
                              <li><a href="#">John Doe</a></li>
                              <li><a href="#"> - Sep 10</a></li>
                          </ul>
                      </div>                     
                  </div>
              </div>-->


              <!-- 4th Post
              <div class="item">
                  <div class="blog-img">
                      <img src="assets/img/post-img-2.jpg" alt="blog image">
                      <div class="overlay"></div>
                      <div class="blog-info">
                          <h5 class="blog-cat"><a href="#">Travel</a></h5>                          
                      </div>  
                      <h3 class="blog-title">Blog Post with Image</h3>
                      <div class="comment-div">
                          <ul>
                              <li>By </li>
                              <li><a href="#">John Doe</a></li>
                              <li><a href="#"> - Oct 13</a></li>
                          </ul>
                      </div>                     
                  </div>
              </div>-->

              <!-- 5th Post
              <div class="item">
                  <div class="blog-img">
                      <img src="assets/img/post-img-3.jpg" alt="banner images">
                      <div class="overlay"></div>
                      <div class="blog-info">
                          <h5 class="blog-cat"><a href="#">Travel</a></h5>                          
                      </div>  
                      <h3 class="blog-title">Blog Post with Image</h3>
                      <div class="comment-div">
                          <ul>
                              <li>By </li>
                              <li><a href="#">John Doe</a></li>
                              <li><a href="#"> - Nov 25</a></li>
                          </ul>
                      </div>                     
                  </div>
              </div>-->

              <!-- 6th Post
              <div class="item">
                  <div class="blog-img">
                      <img src="assets/img/post-img-1.jpg" alt="post image">
                      <div class="overlay"></div>
                      <div class="blog-info">
                          <h5 class="blog-cat"><a href="#">Travel</a></h5>                          
                      </div>  
                      <h3 class="blog-title">Blog Post with Image</h3>
                      <div class="comment-div">
                          <ul>
                              <li>By </li>
                              <li><a href="#">John Doe</a></li>
                              <li><a href="#"> - Dec 20</a></li>
                          </ul>
                      </div>                     
                  </div>
              </div>
          </div>
        </div> -->
        <!-- View all posts btn
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="btn btn-rp " href="blog.html">VIEW ALL POSTS</a>
            </div>
        </div>
        </div>--><!-- .container   
    </section> -->


    <!-- Resume area css-->    
    <section id="resume" class=" section">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                  <div class="section-title">
                    <div class="title-icon">
                      <i class="fa fa-rocket  f-icon"></i>  
                    </div>
                    <h2>Resume</h2>              
                  </div>
              </div>           
            </div>
            
            <div class="row">
                <!--Studies side-->
                <div class="col-md-5 col-md-offset-1">

                    <!-- Course: 1 -->
                    <div class="course">
                        <div class="nbr">1</div>
                        <div class="course-title">
                            <h4>BE in Computer Science</h4>
                            <p>Anna University, Chennai, IN</p>
                        </div>
                        <div class="desc">
                            <h5>2010 - 2013</h5>
                        </div> 
                    </div>

                    <!-- Course: 2 -->
                    <div class="course">
                        <div class="nbr">2</div>
                        <div class="course-title">
                            <h4>Diploma in Computer Engineering</h4>
                            <p>Anndavar Polytechnic, Erode(dt), TN, IN</p>
                        </div>
                        <div class="desc">
                            <h5>2006 - 2009</h5>
                        </div> 
                    </div>

                    
                    <!-- Extra Curricular -->
                    <div class="course">
                        <div class="nbr extra-curricular">3</div>
                        <div class="course-title">
                            <h4>Certificate in Developing Enterprise Applications & Web Services Using J2EE Technologies</h4>
                            <p>NIIT, Tamilnadu, IN</p>
                        </div>
                        <div class="desc">
                            <h5>July 2009 – December 2009</h5>
                        </div> 
                    </div>
                </div>

                <!--Experience side-->
                <div class="col-md-5 col-md-offset-1">
                    <!-- Experience : 1-->
                    <div class="experience">
                        <div class="year">
                            <h3>2015</h3>                            
                        </div>
                        <div class="currently">
                            <h5>MAY - 2015 / SEP - 2017 </h5>
                        </div>
                        <div class="company">
                            <h3>SKARO WEB DEVELOPMENT STUDIO</h3>
                            <p>Web Developer & Front End Developer</p> 
                        </div>
                        <div class="details">
                            <h3>key Responsibilities</h3>
                            <h4>Web / UI / UX Designer and Front-end Developer</h4>
                            <ul class="experience-responsibilities">
                            	<li>Take a Design brief and create website concepts for clients on a project by projedct basis.</li>
                                <li>Work alongside clients and help make their websites user friendly and a great experience for their clients.</li>
                                <li>Create HTML and CSS Standards complaint websites from the Concept Design.</li>
                                <li>Include and Dynamic interactions.
                                    E.g.HTML & CSS, JavaScript, jQuery, DHTML</li>
                                <li>Create themes for a Websites and convert concept designs in all pages and follow the clients instructions.</li>
                                <li>Email Newsletter concept creation according to client specifications as well as conversion to HTML & CSS, to be send out with a mailing system.</li>
                                <li>Expand and improve on my client knowledge of trends, systems and programming languages.</li>
                        </div>                        
                    </div>
                </div>
            </div>

        </div><!-- .container -->     
    </section>


    <!-- Portfolio area css-->    
    <section id="portfolio" class="works section">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                  <div class="section-title">
                    <div class="title-icon">
                      <i class="fa fa-rocket  f-icon"></i>  
                    </div>
                    <h2>Portfolio</h2>                
                  </div>
              </div>           
            </div>
            <!--Filters-->
            <div class="row">
                <div class="filters col-md-12">
                    <ul id="filters">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".graphic">GRAPHIC</li>
                        <li data-filter=".web">WEB DESIGN</li>                        
                    </ul>
                </div>
            </div>

            <div class="row work-items">               
                <!-- 1 -->
                <div class="col-md-4 col-sm-6 col-xs-12 graphic web">
                    <div class="item">
                        <img src="assets/img/portfolio/agugarden.png" alt="portfolio" class="img-responsive">
                        <a href="http://www.agugarden.com/" target="_blank" rel="nofollow"> <!-- data-lightbox="roadtrip" -->
                            <div class="overlay">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>
                
               
               <!-- 2 -->
                <div class="col-md-4 col-sm-6 col-xs-12  web">
                    <div class="item">
                        <img src="assets/img/portfolio/CHANGFA-textile.png" alt="portfolio" class="img-responsive">
                        <a href="http://www.changfatextile.com/" target="_blank" rel="nofollow">
                            <div class="overlay">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>              
                                
                <!-- 3 -->
                <div class="col-md-4 col-sm-6 col-xs-12 web graphic">
                    <div class="item">
                        <img src="assets/img/portfolio/Omnea.png" alt="portfolio" class="img-responsive">
                        <a href="https://www.omnea.de/" target="_blank" rel="nofollow">
                            <div class="overlay">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>                
            
                <!-- 4 -->
                <div class="col-md-4 col-sm-6 col-xs-12  web graphic">
                    <div class="item">
                        <img src="assets/img/portfolio/EET Sparkplug.png" alt="portfolio" class="img-responsive">
                        <a href="http://www.eetsparkplugs.com/" target="_blank" rel="nofollow">
                            <div class="overlay">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>
                               
                <!-- 5 -->
                <div class="col-md-4 col-sm-6 col-xs-12 web graphic">
                    <div class="item">
                        <img src="assets/img/portfolio/yokocobra.png" alt="portfolio" class="img-responsive">
                        <a href="http://www.yokocobra.com/" target="_blank" rel="nofollow">
                            <div class="overlay">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>
                              
                <!-- 6 -->
                <div class="col-md-4 col-sm-6 col-xs-12 web graphic">
                    <div class="item">
                        <img src="assets/img/portfolio/nya-casinon-info.png" alt="portfolio" class="img-responsive">
                        <a href="http://www.nya-casinon.info/" target="_blank" rel="nofollow">
                            <div class="overlay">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>
                
           		<!-- 7 -->
                <div class="col-md-4 col-sm-6 col-xs-12  web graphic">
                    <div class="item">
                        <img src="assets/img/portfolio/nettirahapelit.png" alt="portfolio" class="img-responsive">
                        <a href="http://www.netti-rahapelit.com/" target="_blank" rel="nofollow">
                            <div class="overlay">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>
                               
                <!-- 8 -->
                <div class="col-md-4 col-sm-6 col-xs-12 web graphic">
                    <div class="item">
                        <img src="assets/img/portfolio/targetmfg.png" alt="portfolio" class="img-responsive">
                        <a href="http://www.targetmfg.com/" target="_blank" rel="nofollow">
                            <div class="overlay">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>
                              
                <!-- 9 -->
                <div class="col-md-4 col-sm-6 col-xs-12 web graphic">
                    <div class="item">
                        <img src="assets/img/portfolio/sano-laser.png" alt="portfolio" class="img-responsive">
                        <a href="http://www.sano-laser.com/" target="_blank" rel="nofollow">
                            <div class="overlay">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </div> <!-- .container -->
    </section>  


    <!-- Contact form area css-->    
    <section id="contact" class=" section">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                  <div class="section-title">
                    <div class="title-icon">
                      <i class="fa fa-desktop  f-icon"></i>  
                    </div>
                    <h2>Contact</h2>
                    <h4>If You Want New Websites Please Contact Us</h4>                  
                  </div>
              </div>           
            </div>
            <!-- Contact form starts here-->
            <form id="cform" action="" method="post">
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group in_name">
                    <input type="text" name="first_name" class="form-control" id="name" placeholder="ENTER YOUR NAME" required >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group in_email">
                    <input type="email" name="email" class="form-control" id="email" placeholder="ENTER YOUR EMAIL" required  >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group in_name">
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="ENTER YOUR PHONE" required  >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group in_name">
                    <input type="text" name="subject" class="form-control" id="subject" placeholder="SUBJECT HERE" required  >
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group in_message">
                    <textarea name="message" class="form-control" id="message" placeholder="MESSAGE HERE" ></textarea>
                  </div>
                </div>
                <div class="actions">
                    <input type="submit" value="SEND MESSAGE" name="submit" id="submitButton" class="btn btn-contact" title="Submit Your Message!">
                </div>

            </div>
          </form><!--Form ends here-->
        </div><!-- .container --> 
    </section>

    <!-- Map starts -->
    <div id="map"></div>
    <!-- Map ends -->


    <!-- Footer area starts -->
    <footer class="footer-area">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-text text-center">                                              
                            <ul class="footer-social-links">
                                <li><a href="https://www.linkedin.com/in/rambalaji-y-b90328103/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble"></i></a></li>                                                       
                            </ul>
                        <p>&copy; 2017 -  All Rights Reserved - By <a href="#">Web Makers</a></p>
                    </div>
                </div>
            </div>
        </div><!-- .container --> 
    </footer>
    


  	<!-- Latest jQuery -->
	  <script src="assets/js/jquery.min.js"></script>

  	<!-- Bootstrap js-->
  	<script src="assets/js/bootstrap.min.js"></script>

    <!-- Stikcy menu js -->
    <script src="assets/js/jquery.sticky.js"></script>    

    <!-- Main js-->
    <script src="assets/js/main.js"></script>

    <!-- Owl Corousel-->
    <script src="assets/js/owl.carousel.min.js"></script>    

    <!-- Isotope js-->
    <script src="assets/js/isotope.pkgd.js"></script>

    <!-- Lightbox js -->
    <script src="assets/js/lightbox.min.js"></script>

    <!-- Waypoint -->
    <script src="assets/js/jquery.waypoint.js"></script>

    <!-- Particles -->
    <script src="assets/js/particles.js"></script>
    <script src="assets/js/app.js"></script>    
    <script src="assets/js/lib/stats.js"></script>
    
    <!-- Recent posts corousel -->
    <script src="assets/js/blog-corousel.js"></script>

    <!-- Colapse Menu -->
    <script >         
      $(document).ready(function(e) {
       $('.menu').hide();
         var menuaberto = false;
        $('.btn-collapse').click(function(event) {
          event.preventDefault();
          $('.menu').toggle('');
            if(menuaberto == true){
              menuaberto = false;
              $(".lista-collapse:nth-child(1)").removeClass('botao-lista-cima');
              $(".lista-collapse:nth-child(2)").removeClass('hidden');
              $(".lista-collapse:nth-child(3)").removeClass('botao-lista-baixo');
            }else {
              menuaberto = true;
              $(".lista-collapse:nth-child(1)").addClass('botao-lista-cima');
               $(".lista-collapse:nth-child(2)").addClass('hidden');
              $(".lista-collapse:nth-child(3)").addClass('botao-lista-baixo');
            }
        });
       });
	   
	   
	   //------------------------------------------------------------------------//
	   var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
    </script>
    
    <!-- Google Map JS -->
    <script src="assets/js/regain-map.js"></script>  

    <!-- Google Map -->  
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzzV93GjTSkUW4qyr-RAkJ0gANSfFaXfA&callback=initMap"
    async defer></script> 

  </body>  
</html>