<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Muli|Zhi+Mang+Xing&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="main.css" />
    <title>Document</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-mainbg" id="navbar">
      <a class="navbar-brand navbar-logo" href="#">
        <img class="logo" src="./image/mainlogo.png" alt="logo" /> Exploring
        WildLife
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fa fa-window-close-o" aria-hidden="true"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <div class="hori-selector">
            <div class="left"></div>
            <div class="right"></div>
          </div>
          <li class="nav-item active">
            <a class="nav-link" href="#home"
              ><i class="fa fa-home" aria-hidden="true"></i>Home</a
            >
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#about;"
              ><i class="fa fa-address-book" aria-hidden="true"></i>About</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery"
              ><i class="fa fa-clone" aria-hidden="true"></i>Gallery</a
            >
		  </li>
		  
          <li class="nav-item">
         	<!-- logged in user information -->
			<?php  if (isset($_SESSION['username'])) : ?>
				<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
				
			<?php endif ?>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Header -->
    <header>
      <div class="overlay">
        <div class="main-header">
          <h1>Welcome to the WildLife</h1>
        </div>

        <h3>Flora & Fauna</h3>
        <!-- <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero nostrum
          quis, odio veniam itaque ullam debitis qui magnam consequatur ab. Vero
          nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur
          ab.
        </p> -->
        <br />
        <button class="button1">READ MORE</button>
      </div>
    </header>

    <!-- About section -->

    <div id="about">
      <div class="main">
        <h1>About</h1>
        <p class="paragraph">
          The Centre for Wildlife Conservation Management & Disease
          Surveillance, since its inception in 1984, has been actively
          supporting ex-situ and in-situ conservation by providing husbandary
          guidelines, disease diagnosis and critical healthcare services to
          captive and free-ranging wild animals. Two of the guidelines namely
          “Development of Standards, Guidelines and Protocol on disease
          diagnosis and cure of wild animals in Indian zoos” and
          “Standardization of Animal Diets in Indian Zoos”, are such milestones
          which are to be mandatorily followed by all Indian Zoos. Considering
          the contributions of this section, the Central Zoo Authority, MoEF,
          Govt of India recognized the center as The National Referral Centre on
          Wildlife Healthcare in 2006.
        </p>
      </div>
    </div>

    <!-- Gallery -->
    <div id="gallery">
      <h1 class="gallery">Gallery</h1>
      <ul class="grid">
        <li>
          <figure class="grid__figure">
            <img src=https://source.unsplash.com/1600x900/?wolf alt="" />
            <figcaption>
              The wolf, also known as the gray wolf or grey wolf, is a large
              canine native to Eurasia and North America. It is the largest
              extant member of Canidae, with males averaging 40 kg and females
              37 kg. On average, wolves measure 105–160 cm in length and 80–85
              cm at shoulder height
            </figcaption>
          </figure>
        </li>
        <li>
          <figure class="grid__figure">
            <img src=https://source.unsplash.com/1600x900/?tree alt="" />
            <figcaption>
              Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec
              ullamcorper nulla non metus auctor fringilla.
            </figcaption>
          </figure>
        </li>
        <li>
          <figure class="grid__figure">
            <img src=https://source.unsplash.com/1600x900/?elephant alt="" />
            <figcaption>
              Largest land mammals, still face being killed for their tusks.
              They are listed as endangered species by IUCN.
            </figcaption>
          </figure>
        </li>
        <li>
          <figure class="grid__figure">
            <img src="https://source.unsplash.com/1600x900/?deer" alt="" />
            <figcaption>
              Deer are the hoofed ruminant mammals forming the family Cervidae.
              The two main groups of deer are the Cervinae, including the
              muntjac, the elk, the fallow deer, and the chital; and the
              Capreolinae, including the reindeer, the roe deer, and the moose.
            </figcaption>
          </figure>
        </li>
        <li>
          <figure class="grid__figure">
            <img src="https://source.unsplash.com/1600x900/?birds" alt="" />
            <figcaption>
              Birds are a group of warm-blooded vertebrates constituting the
              class Aves, characterized by feathers, toothless beaked jaws, the
              laying of hard-shelled eggs, a high metabolic rate, a
              four-chambered heart, and a strong yet lightweight skeleton
            </figcaption>
          </figure>
        </li>
        <li>
          <figure class="grid__figure">
            <img src="https://source.unsplash.com/1600x900/?monkey" alt="" />
            <figcaption>
              Monkey is a common name that may refer to groups or species of
              mammals, in part, the simians of infraorder Simiiformes. The term
              is applied descriptively to groups of primates, such as families
              of New World monkeys and Old World monkeys
            </figcaption>
          </figure>
        </li>
        <li>
          <figure class="grid__figure">
            <img src="https://source.unsplash.com/1600x900/?tiger" alt="" />
            <figcaption>
              The tiger is the largest species among the Felidae and classified
              in the genus Panthera. It is most recognisable for its dark
              vertical stripes on orangish-brown fur with a lighter underside.
              It is an apex predator, primarily preying on ungulates such as
              deer and wild boar.
            </figcaption>
          </figure>
        </li>
        <li>
          <figure class="grid__figure">
            <img src="https://source.unsplash.com/1600x900/?plants" alt="" />
            <figcaption>
              Plants are mainly multicellular, predominantly photosynthetic
              eukaryotes of the kingdom Plantae. Historically, plants were
              treated as one of two kingdoms including all living things that
              were not animals, and all algae and fungi were treated as plants.
            </figcaption>
          </figure>
        </li>
        <li>
          <figure class="grid__figure">
            <img
              src="https://source.unsplash.com/1600x900/?Wild water buffalo"
              alt=""
            />
            <figcaption>
              The wild water buffalo, also called Asian buffalo, Asiatic buffalo
              and wild Asian buffalo, is a large bovine native to the Indian
              Subcontinent and Southeast Asia. It has been listed as Endangered
              in the IUCN Red List since 1986, as the remaining population
              totals less than 4,000.
            </figcaption>
          </figure>
        </li>
        <li>
          <figure class="grid__figure">
            <img src="https://source.unsplash.com/1600x900/?snakes" alt="" />
            <figcaption>
              Snakes are elongated, legless, carnivorous reptiles of the
              suborder Serpentes. Like all other squamates, snakes are
              ectothermic, amniote vertebrates covered in overlapping scales.
              Many species of snakes have skulls with several more joints than
              their lizard ancestors, enabling them to swallow prey much larger
              than their heads with their highly mobile jaws
            </figcaption>
          </figure>
        </li>
      </ul>
    </div>

    <!-- Coursel -->
    <!--Carousel Wrapper-->
    <div
      id="carousel-example-2"
      class="carousel slide carousel-fade z-depth-1-half wrapper"
      data-ride="carousel"
    >
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li
          data-target="#carousel-example-2"
          data-slide-to="0"
          class="active"
        ></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="view">
            <img
              class="d-block w-100"
              src="./image/nature-africa-animals-zoo-33394.jpg"
              alt="First slide"
            />
            <div class="mask rgba-black-light"></div>
          </div>
          <div class="carousel-caption">
            <h3 class="h3-responsive">
              Crocodiles are easy. They try to kill and eat you. People are
              harder. Sometimes they pretend to be your friend first.
            </h3>
          </div>
        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img
              class="d-block w-100"
              src="./image/green-lizard-on-tree-1309086.jpg"
              alt="Second slide"
            />
            <div class="mask rgba-black-light"></div>
          </div>
          <div class="carousel-caption">
            <h3 class="h3-responsive">
              “The only good cage is an empty cage.”
            </h3>
          </div>
        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img
              class="d-block w-100"
              src="./image/white-pelican-flying-near-flock-of-flying-cormorants-under-1369368.jpg"
              alt="Third slide"
            />
            <div class="mask rgba-black-light"></div>
          </div>
          <div class="carousel-caption">
            <h3 class="h3-responsive">
              “Wild animals are less wild and more human than many humans of
              this world”
            </h3>
          </div>
        </div>
      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a
        class="carousel-control-prev"
        href="#carousel-example-2"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carousel-example-2"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
    <!-- footer -->
    <div id="contact">
      <img class="me" src="./image/mainlogo.png" alt="" />

      <div class="footer">
        <div class="social">
          <a href="https://twitter.com/"
            ><i id="twitter" class="fa fa-twitter" aria-hidden="true"></i
          ></a>
          <a href="www.youtube.com"
            ><i id="youtube" class="fa fa-youtube" aria-hidden="true"></i
          ></a>

          <a href="https://www.linkedin.com/in/aakash-raj-3a8b86162/">
            <i id="linkedin" class="fa fa-linkedin" aria-hidden="true"></i
          ></a>

          <a href="https://github.com/kunalgaurav4"
            ><i id="github" class="fa fa-github" aria-hidden="true"></i
          ></a>
        </div>
      </div>
	</div>
	
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
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.html?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>

    <!-- Script -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <script src="./script.js"></script>
  </body>
</html>


