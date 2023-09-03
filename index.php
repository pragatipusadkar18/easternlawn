<?php include './include/header.php';
require('./admin/dbconn.php');
$sql = "SELECT * FROM main_gallery";
$stmt = $conn->prepare($sql);
$stmt->execute();
// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$records = $stmt->fetchAll();
?>
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
	    
		<div class="carousel-inner">
		    <?php	
foreach ($records as $main_gallery) {
?>
		     <div class="hero-wrap hero-wrap-2 js-fullheight carousel-item active " style="background-image: url('admin/<?php echo $main_gallery['IMAGE_PATH'] ?>');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center">
          	<h3 class="subheading text-light"><b class="subheading-b" > '<?php echo $main_gallery['FIRST_HEADING'] ?>'</b></h3>
          	<h2 class="mb-4 text-light"><b class="subheading-b">'<?php echo $main_gallery['SECOND_HEADING'] ?>'</b></h2>
            <p><a href="contact.php" class="btn btn-white">Contact us</a></p>
          </div>
        </div>
      </div>
    </div>
    			
	<?php }
?>

			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>

 
<div class= "available">
   <section>
       
        <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center ">
                <h1 class="mt-3 lawn-available">Lawn Available For</h1>   
            </div>

        <div class="row mt-1 mb-5  justify-content-center">
            <div class="col-md-3 mt-3">
                <div class="card card-hover veg-box" style="width:100%">
                    <img src="https://d3nn873nee648n.cloudfront.net/900x600/13163/20-SM453576.jpg" style="border-radius:10px" class="card-img-top" alt="...">
                    <div class="card-body">
                     <h5 class="card-title card-title-text text-center" style="	cursor: pointer;">Marriage Functions</h5>
                    </div>
                  </div>
            </div>
            <div class="col-md-3 mt-3 ">
                <div class="card card-hover veg-box" style="width:100%;">
                    <img src="https://img.freepik.com/free-photo/decorated-wedding-hall-with-candles-round-tables-centerpieces_8353-10057.jpg?w=740&t=st=1690734553~exp=1690735153~hmac=6f8bbb7c8b9d4dd5f9df04153184c88464ad8f99c14a3095d72a03e4dfc2c07b" style="border-radius:10px" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title card-title-text text-center" style="	cursor: pointer;">Corporate Events</h5>
                    </div>
                  </div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="card card-hover veg-box" style="width:100%;">
                    <img src="https://img.freepik.com/free-photo/group-people-dancing-club-with-words-i-love-you-front_1340-32836.jpg?t=st=1690735535~exp=1690739135~hmac=84b2f3a9a4119cc742ae7824451f349223b0f786cea27a2552701c793e089a94&w=740" style="border-radius:10px" class="card-img-top" alt="...">
                    <div class="card-body">
                     <h5 class="card-title card-title-text text-center" style="	cursor: pointer;">Get Together</h5>
                    </div>
                  </div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="card card-hover veg-box" style="width:100%;">
                    <img src="https://img.freepik.com/free-photo/prepared-wedding-hall_8353-9873.jpg?w=740&t=st=1690734721~exp=1690735321~hmac=f7b7bbff0f69a73503b09b99a15ec879ab78ca8ae07348ab59ac76c710dea282" style="border-radius:10px" class="card-img-top" alt="...">
                    <div class="card-body">
                     <h5 class="card-title card-title-text text-center" style="	cursor: pointer;">Reception</h5> 
                    </div>
                  </div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="card card-hover veg-box" style="width:100%;">
                    <img src="https://img.freepik.com/free-photo/decorated-wedding-tables-hall-interior_1303-18625.jpg?w=740&t=st=1690734779~exp=1690735379~hmac=e49f6d35024224310a398048c705ec80966f52502e11d7f5d3f01b8250a100cc" style="border-radius:10px" class="card-img-top" alt="...">
                    <div class="card-body">
                     <h5 class="card-title card-title-text text-center" style="	cursor: pointer;">Engagements</h5> 
                    </div>
                  </div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="card card-hover veg-box" style="width:100%;">
                    <img src="https://img.freepik.com/free-vector/colorful-balloons-happy-birthday-card_1017-32692.jpg?w=740&t=st=1690734872~exp=1690735472~hmac=1e690ca91d815b9f02204b95971cd9a572be44ef1e2ebdf47f41390bbdde02eb" style="border-radius:10px" class="card-img-top" alt="...">
                    <div class="card-body">
                     <h5 class="card-title card-title-text text-center" style="	cursor: pointer;">Birthday Party</h5> 
                    </div>
                  </div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="card card-hover veg-box" style="width:100%;">
                    <img src="https://img.freepik.com/free-photo/groom-bride-s-wedding-table-decorated-with-flowers-candles_8353-10400.jpg?w=740&t=st=1690734976~exp=1690735576~hmac=79dfa86a35dcb863961aa9fff67ff65f7e880b56f0958cf03d70492109ad47fc" style="border-radius:10px" class="card-img-top" alt="...">
                    <div class="card-body">
                     <h5 class="card-title card-title-text text-center" style="	cursor: pointer;">Naming Ceremony</h5> 
                    </div>
                  </div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="card card-hover veg-box" style="width:100%;">
                    <img src="https://img.freepik.com/free-photo/decorated-banquet-hall-with-served-round-table-with-hydrangea-centerpiece-chiavari-chairs_8353-10059.jpg?w=740&t=st=1690735215~exp=1690735815~hmac=a24e53d078de21faea9dd29ea6fe7df2d88ade70b86ce9a38a9b62df195ed3ac" style="border-radius:10px" class="card-img-top" alt="...">
                    <div class="card-body">
                     <h5 class="card-title card-title-text text-center" style="	cursor: pointer;">Entertainment Events</h5> 
                    </div>
                  </div>
            </div>
         </div> 



        </div>
    </div>
       
       
   </section>
   

  <section class="ftco-section " style="padding:10px !important">
			<div class="container-fluid px-md-0">
				<div class="row no-gutters justify-content-center">
        </div>
				<div class="row no-gutters mb-5">             
				<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 wrap-about veg-box " style="border-radius: 10px;">
                      <iframe width="100%"style="border-radius: 10px;"  height="100%" src="https://www.youtube.com/embed/OU3wO4DaoD0?controls=0&showin=0;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section">
	          	<div class="pl-md-5">
		            <h1 class=" about-text mt-3">About us</h1>
	            </div>
	          </div>
	          <div class="pl-md-5 about-text">
		<p>Situated in the vibrant city of Maharashtra . Eastern Lawn, Nagpur is a sprawling outdoor destination perfect to tie the knot with love of your life. Located on Ring Road which makes it convenient for all to reach there. KRC Celebration Lawn Nagpur is a well-manicured lawn that can smoothly accommodate a large gathering for your function.</p>	
		<p>KRC Lawn Nagpur Maharashtra is ideal to host your outdoor wedding and reception ceremonies. The venue comes to life when decorated with canopies, carnations, and eclectic light fixtures. </p>
		<p><a href="about.php" class="btn btn-primary about-text">Read more</a></p>
						</div>
					</div>
				</div>
			</div>			 
    		    </div>
			</div>
		</section>

		<section class="ftco-intro" style="background-image: url(images/kitchenImages/kit1.png);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center ftco-animate">
						<h2> Eastern Spicy Food </h2>
						<p class="mb-4"> Cook Smart | Eat Smart</p>
						<p class="mb-0"><a href="kitchen.php" class="btn btn-white px-4 py-3">Explore Now</a></p>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section" style="padding-top: 20px;padding-bottom: 0px;">
      <div class="container">
        <div class="row justify-content-center mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1>An ever-changing event canvas</h1>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch veg-box">
              <a href="gallery.php" class="block-20 rounded" style="background-image: url('images/homepageimage/hall1.jpg');">
              </a>
              <div class="text p-4 pb-1 text-center">
               
                <p>Under the open sky, surrounded by nature's beauty, we vow to love and cherish each other on this wedding lawn.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch veg-box">
              <a href="gallery.php" class="block-20 rounded" style="background-image: url('images/homepageimage/hall2.jpg');">
              </a>
              <div class="text p-4 text-center">
              
                <p>Two souls become one on this sacred wedding lawn, as we begin our journey of love and togetherness.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch veg-box">
              <a href="gallery.php" class="block-20 rounded" style="background-image: url('images/homepageimage/hall4.jpg');">
              </a>
              <div class="text p-4 text-center">
                
                <p>Love is like a beautiful garden, and our wedding day is the blossoming of our love on the wedding lawn.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
     <section class="ftco-section testimony-section p-0" >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1>Happy Costumers</h1>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
							<div class="item">
                <div class="testimony-wrap d-flex veg-box">
                  <div class="user-img" style="background-image: url(images/man1.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>KRC Lawn and Kitchen provided an exceptional dining experience with their delicious food and breathtaking outdoor setting. </p>
                    <p class="name">Lucky Singh</p>
                    <span class="position">Guest</span>
                  </div>
                </div>
              </div>
            
              <div class="item">
                <div class="testimony-wrap d-flex veg-box">
                  <div class="user-img" style="background-image: url(images/review-1.jpeg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>I had the most delightful experience hosting my wedding atEastern Lawn.It allowed me to easily check availability and secure my date hassle-free.</p>
                    <p class="name">Mahendar Thakur</p>
                    <span class="position">Guest</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex veg-box">
                  <div class="user-img" style="background-image: url(images/man4.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>The lush green surroundings and impeccable service made our wedding memorable. <br> Thank you for a wonderful experience</p>
                    <p class="name">Raj Sharma</p>
                    <span class="position">Guest</span>
                  </div>
                </div>
              </div>
              <div class="item ">
                <div class="testimony-wrap d-flex veg-box">
                  <div class="user-img" style="background-image: url(images/man2.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>KRC Lawn and Kitchen exceeded our expectations with their scrumptious dishes and the picturesque ambiance of their lawn.</p>
                    <p class="name">Shivansh Kumar</p>
                    <span class="position">Guest</span>
                  </div>
                </div>
              </div>
						</div>
          </div>
        </div>
      </div>
    </section>
    
   </div>

<?php include './include/footer.php';?>

    