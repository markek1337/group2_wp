<?php
include('php-main.php');
include "header.php";
?>
<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="Login/images/user_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
          <!-- Responsive header-->
          <header class="header">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/norway.png" class="d-block w-100 img-fluid" alt="Norway destination">
                    <div class="carousel-caption">
                        <h2 class="text-uppercase">Norway</h2>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/sweden.png" class="d-block w-100 img-fluid" alt="Sweden destination">
                    <div class="carousel-caption">
                        <h2 class="text-uppercase">Sweden</h2>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/iceland.png" class="d-block w-100 img-fluid" alt="Iceland destination">
                    <div class="carousel-caption">
                        <h2 class="text-uppercase">Iceland</h2>
                      </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </header>
            
            <!-- Responsive main-->
            <main>
                <!-- ======= Destinations ======= -->
                <section id="destinations" class="d-flex align-items-center py-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="container position-relative px-5 py-5">
                      <div class="row justify-content-center pb-5">
                        <!-- Destinations Section Heading-->
                        <div class="col-xl-7 col-lg-9 text-center pb-5">
                          <h2>TOP DESTINATIONS AND TOURS</h2>
                        </div>
                      </div>
                
                      <div class="row icon-boxes gx-4">
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                          <div class="div-dest">
                            <div class="con-dark icon-box p-3">
                                <img src="images/destination1-iceland.jpg" alt="Iceland destination" class="d-block w-100 img-fluid icl">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                <h2 class="h4 fw-bolder text-center">Iceland</h2>
                                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut odio ligula. Nunc sed felis rhoncus, sagittis purus ut, feugiat felis. Duis vel arcu augue. Donec ultrices elit et rutrum blandit. </p>
                                <p class="cost text-center">from 990€</p>
                            </div>
                          </div>
                        </div>
                
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
                          <div class="dic-dest">
                            <div class="con-light icon-box p-3">
                                <img src="images/destination2-sweden.jpg" alt="Sweden destination" class="d-block w-100 img-fluid">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                <h2 class="h4 fw-bolder text-center">Sweden</h2>
                                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut odio ligula. Nunc sed felis rhoncus, sagittis purus ut, feugiat felis. Duis vel arcu augue. Donec ultrices elit et rutrum blandit. </p>
                                <p class="cost text-center">from 990€</p>
                            </div>
                          </div>
                        </div>
                
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
                          <div class="div-dest">
                            <div class="con-dark icon-box p-3">
                                <img src="images/destination3-norway.jpg" alt="Norway destination" class="d-block w-100 img-fluid">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                <h2 class="h4 fw-bolder text-center">Norway</h2>
                                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut odio ligula. Nunc sed felis rhoncus, sagittis purus ut, feugiat felis. Duis vel arcu augue. Donec ultrices elit et rutrum blandit. </p>
                                <p class="cost text-center">from 990€</p>
                                </div>
                          </div>
                        </div>
                
                      </div>
                    </div>
                  </section>
                <!-- ======= About Us ======= -->
                <section class="about-us">
                    <div class="container-about-us container-fluid px-5 py-5">

                        <div class="page-section-heading text-center">
                            <h2>ABOUT US</h2>
                        </div>
                        <div class="row">
                            <div class="boxfield mainboxfield col-lg-4 col-md-4 col-sm-12 mb-lg-0 align-self-center px-6">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                <h3 class="sub1 fw-bolder text-center align-middle">Why Choose us?</h3>
                                <p class="sub2 text-center align-middle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
                                </p>
                            </div> 
                            <div class="col-lg-8 col-md-8 col-sm-0 p-4">
                              <div class="row">
                                <div class="boxfield col-lg-6 col-md-6 col-sm-6 icon-boxes">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                    <h4 class="fw-bolder text-center py-3">Customer service</h4>
                                    <p class="text-center benefits">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut odio ligula. Nunc sed felis rhoncus, sagittis purus ut, feugiat felis. </p>
                                    <img src="images/icon1.png" alt="icon about us customer service" class="icon mx-auto d-block">
                                </div>
                                <div class="boxfield icon-boxes col-lg-6 col-md-6 col-sm-6">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3"><i class="bi bi-building"></i></div>
                                    <h4 class="fw-bolder text-center py-3">Security</h4>
                                    <p class="text-center benefits">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut odio ligula. Nunc sed felis rhoncus, sagittis purus ut, feugiat felis. </p>
                                    <img src="images/icon2.png" alt="icon about us security" class="icon mx-auto d-block">
                                </div>
                                <div class="boxfield icon-boxes col-lg-6 col-md-6 col-sm-6">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3"><i class="bi bi-collection"></i></div>
                                    <h4 class="fw-bolder text-center py-3">Reviews</h4>
                                    <p class="text-center benefits">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut odio ligula. Nunc sed felis rhoncus, sagittis purus ut, feugiat felis. </p>
                                    <img src="images/icon3.png" alt="icon about us reviews" class="icon mx-auto d-block">
                                </div>
                                <div class="boxfield icon-boxes col-lg-6 col-md-6 col-sm-6">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3"><i class="bi bi-building"></i></div>
                                    <h4 class="fw-bolder text-center py-3">Affordability</h4>
                                    <p class="text-center benefits">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut odio ligula. Nunc sed felis rhoncus, sagittis purus ut, feugiat felis. </p>
                                    <img src="images/icon4.png" alt="icon about us affordability" class="icon mx-auto d-block">
                                </div>
                                
                              </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Reviews-->
                <section class="reviews py-5">
                    <div class="container px-5 py-5">
                        <h2 class="page-section-heading text-center text-uppercase">Recent customer reviews</h2>
                    </div>
                    <div class="container px-5 py-5">
                        <div class="row gx-5">
                            <div class="rew1 col-lg-4 mb-5 mb-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                <h4 class="fw-bold text-center">★★★★★</h4>
                                <h2 class="h4 fw-bolder text-center">Lexie Wessler</h2>
                                <p class="date text-center">31/08/2022</p>
                                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut odio ligula. Nunc sed felis rhoncus, sagittis purus ut, feugiat felis. Duis vel arcu augue. Donec ultrices elit et rutrum blandit. </p>
                            </div>
                            <div class="rew2 col-lg-4 mb-5 mb-lg-0">
                                <img src="images/customer3.jpg" alt="customer review photo" class="customerpic mx-auto d-block">
                            </div>
                            <div class="rew1 col-lg-4 mb-5 mb-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                <h4 class="fw-bold text-center">★★★★★</h4>
                                <h2 class="h4 fw-bolder text-center">Alice Manhattan</h2>
                                <p class="date text-center">01/06/2022</p>
                                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut odio ligula. Nunc sed felis rhoncus, sagittis purus ut, feugiat felis. Duis vel arcu augue. Donec ultrices elit et rutrum blandit. </p>
                            </div>
                        </div>
                        <div class="row gx-5">
                            <div class="rew2 col-lg-4 mb-5 mb-lg-0">
                                <img src="images/customer1.jpg" alt="customer review photo" class="customerpic mx-auto d-block">
                            </div>
                            <div class="rew3 col-lg-4 mb-5 mb-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                <h4 class="fw-bold text-center">★★★★★</h4>
                                <h2 class="h4 fw-bolder text-center">Felix Rednox</h2>
                                <p class="date text-center">21/01/2021</p>
                                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut odio ligula. Nunc sed felis rhoncus, sagittis purus ut, feugiat felis. Duis vel arcu augue. Donec ultrices elit et rutrum blandit. </p>
                            </div>
                            <div class="rew2 col-lg-4 mb-5 mb-lg-0">
                                <img src="images/customer2.jpg" alt="customer review photo" class="customerpic mx-auto d-block">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="footer-sec">
                  <!--Footer-->
        <footer>
          <div class="footer-top">
              <div class="container fot-cont">
                  <div class="row my-row-4">
                      <div class="col-md-4 col-sm-6 col-xs-12 segment-one">
                          <img src="images/newlogo.png" class="img footer-logo" alt="logo North Travel" width="127" height="106">
                          <h2 class="footer-text">NORTH TRAVEL</h2>
                      </div>

                      <div class="col-md-4 col-sm-6 col-xs-12 segment-two">
                          <img src="images/social media icons.png" class="img social-media" alt="Social media icons" width="257" height="70">
                      </div>

                      <div class="col-md-4 col-sm-6 col-xs-12 segment-three">
                          <h2>SIGN UP FOR NEWSLETTER</h2>
                          <form class="input-group">
                              <input type="text" class="form-control form-control-sm" placeholder="Your email"
                                aria-label="Your email" aria-describedby="basic-addon2">
                              <div class="input-group-append">
                                <button class="btn btn-sm btn-outline-white my-0" type="button">Sign Up</button>
                              </div>
                            </form>
                        </div>
                      </div>
                  </div>
                  <div class="row my-row-4">
                      <div class="col-md-12 segment-four">
                          <p>&copy; North Travel 2022 All Rights Reserved</p>
                      </div>
                  </div>
              </div>
          </div>
      </footer>
                </section>
            </main>
