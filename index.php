<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <title>DMS</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/responsive.css">
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<style>
   .searchInput input {
      /* height: 55px; */
      border-radius: 5px;
      padding: 0 60px 0 20px;
      font-size: 18px;
   }

   .searchInput .resultBox {
      padding: 0;
      opacity: 0;
      pointer-events: none;
      max-height: 280px; 
      overflow-y: auto;
   }

   .searchInput.active .resultBox {
      padding: 10px 8px;
      opacity: 1;
      background-color: white;
      pointer-events: auto;
   }

   .resultBox li {
      list-style: none;
      padding: 8px 12px;
      display: none;
      width: 100%;
      cursor: default;
      border-radius: 3px;
   }

   .searchInput.active .resultBox li {
      display: block;
   }

   .resultBox li:hover {
      background: #efefef;
   }

</style>

<body class="main-layout">

   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>

   <header>
      <div class="header">
         <div class="header_midil">
            <div class="container">
               <div class="row d_flex">
                  <div class="col-md-2">
                     <ul class="social_icon">
                        <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                           </a>
                        </li>
                     </ul>
                  </div>

                  <div class="col-md-8">
                     <a class="logo" href="#"><img style="height: 5vw;" src="images/logo.jpeg" alt="#" /></a>
                  </div>

                  <div class="col-md-2">
                     <ul class="right_icon d_none1">
                        <a href="#" class="order"><i class="fa fa-user" aria-hidden="true"></i></a>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>

   <section class="banner_main">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="text-bg">
                  <h1> <span class="blodark">DMS </span> <br>Dishu Medical System</h1>
                  <a class="read_more" href="#">Contact now</a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <div class="header_bottom">
      <div class="container">
         <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
               <nav class="navigation navbar navbar-expand-md navbar-dark ">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarsExample04">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="products.html">Categories</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="fashion.html">Blogs</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="col-md-4">
               <div class="search searchInput">
                  <input class="form_sea" type="text" placeholder="Search" name="search">
                  <div class="resultBox">
                  </div>
                  <button type="submit" class="seach_icon"><i class="fa fa-search"></i></button>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div id="project" class="project">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Categories</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="product_main">

               <div class="project_box ">
                  <div class="dark_white_bg"><img src="images/shoes1.png" alt="#" /></div>
                  <h3>Short Openwork Cardigan $120.00</h3>
               </div>

               <div class="project_box ">
                  <div class="dark_white_bg"><img src="images/shoes2.png" alt="#" /></div>
                  <h3>Short Openwork Cardigan $120.00</h3>
               </div>

               <div class="project_box">
                  <div class="dark_white_bg"><img src="images/shoes3.png" alt="#" /></div>
                  <h3>Short Openwork Cardigan $120.00</h3>
               </div>

               <div class="project_box">
                  <div class="dark_white_bg"><img src="images/shoes4.png" alt="#" /></div>
                  <h3>Short Openwork Cardigan $120.00</h3>
               </div>

               <div class="project_box">
                  <div class="dark_white_bg"><img src="images/shoes5.png" alt="#" /></div>
                  <h3>Short Openwork Cardigan $120.00</h3>
               </div>


               <div class="project_box ">
                  <div class="dark_white_bg"><img src="images/tisat1.png" alt="#" /></div>
                  <h3>Short Openwork Cardigan $120.00</h3>
               </div>

               <div class="project_box ">
                  <div class="dark_white_bg"><img src="images/tisat2.png" alt="#" /></div>
                  <h3>Short Openwork Cardigan $120.00</h3>
               </div>

               <div class="project_box">
                  <div class="dark_white_bg"><img src="images/tisat3.png" alt="#" /></div>
                  <h3>Short Openwork Cardigan $120.00</h3>
               </div>

               <div class="project_box">
                  <div class="dark_white_bg"><img src="images/tisat4.png" alt="#" /></div>
                  <h3>Short Openwork Cardigan $120.00</h3>
               </div>

               <div class="project_box">
                  <div class="dark_white_bg"><img src="images/tisat5.png" alt="#" /></div>
                  <h3>Short Openwork Cardigan $120.00</h3>
               </div>


               <div class="project_box ">
                  <div class="dark_white_bg"><img src="images/mix1.png" alt="#" /></div>
                  <h3>Short Openwork Cardigan $120.00</h3>
               </div>

               <div class="project_box ">
                  <div class="dark_white_bg"><img src="images/mix2.png" alt="#" /></div>
                  <h3>Short Openwork Cardigan $120.00</h3>
               </div>

               <div class="project_box">
                  <div class="dark_white_bg"><img src="images/mix3.png" alt="#" /></div>
                  <h3>Short Openwork Cardigan $120.00</h3>
               </div>

               <div class="project_box">
                  <div class="dark_white_bg"><img src="images/mix4.png" alt="#" /></div>
                  <h3>Short Openwork Cardigan $120.00</h3>
               </div>

               <div class="project_box">
                  <div class="dark_white_bg"><img src="images/mix5.png" alt="#" /></div>
                  <h3>Short Openwork Cardigan $120.00</h3>
               </div>

               <div class="col-md-12">
                  <a class="read_more" href="#">See More</a>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="six_box">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-2 col-sm-4 pa_left">
               <div class="six_probpx yellow_bg">
                  <i><img src="images/shoes.png" alt="#" /></i>
                  <span>Shoes</span>
               </div>
            </div>
            <div class="col-md-2 col-sm-4 pa_left">
               <div class="six_probpx bluedark_bg">
                  <i><img src="images/underwear.png" alt="#" /></i>
                  <span>underwear</span>
               </div>
            </div>
            <div class="col-md-2 col-sm-4 pa_left">
               <div class="six_probpx yellow_bg">
                  <i><img src="images/pent.png" alt="#" /></i>
                  <span>Pante & socks</span>
               </div>
            </div>
            <div class="col-md-2 col-sm-4 pa_left">
               <div class="six_probpx bluedark_bg">
                  <i><img src="images/t_shart.png" alt="#" /></i>
                  <span>T-shirt & tankstop</span>
               </div>
            </div>
            <div class="col-md-2 col-sm-4 pa_left">
               <div class="six_probpx yellow_bg">
                  <i><img src="images/jakit.png" alt="#" /></i>
                  <span>cardigans & jumpers</span>
               </div>
            </div>
            <div class="col-md-2 col-sm-4 pa_left">
               <div class="six_probpx bluedark_bg">
                  <i><img src="images/helbet.png" alt="#" /></i>
                  <span>Top & hat</span>
               </div>
            </div>
         </div>
      </div>
   </div>


   <!-- end project section -->
   <!-- fashion section -->
   <div class="fashion">
      <img src="images/fashion.jpg" alt="#" />
   </div>
   <!-- end fashion section -->
   <!-- news section -->
   <div class="news">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Letest News</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12 margin_top40">
               <div class="row d_flex">
                  <div class="col-md-5">
                     <div class="news_img">
                        <figure><img src="images/news_img1.jpg"></figure>
                     </div>
                  </div>
                  <div class="col-md-7">
                     <div class="news_text">
                        <h3>Specimen book. It has survived not only five</h3>
                        <span>7 July 2019</span>
                        <div class="date_like">
                           <span>Like </span><span class="pad_le">Comment</span>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12 margin_top40">
               <div class="row d_flex">
                  <div class="col-md-5">
                     <div class="news_img">
                        <figure><img src="images/news_img2.jpg"></figure>
                     </div>
                  </div>
                  <div class="col-md-7">
                     <div class="news_text">
                        <h3>Specimen book. It has survived not only five</h3>
                        <span>7 July 2019</span>
                        <div class="date_like">
                           <span>Like </span><span class="pad_le">Comment</span>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12 margin_top40">
               <div class="row d_flex">
                  <div class="col-md-5">
                     <div class="news_img">
                        <figure><img src="images/news_img3.jpg"></figure>
                     </div>
                  </div>
                  <div class="col-md-7">
                     <div class="news_text">
                        <h3>Specimen book. It has survived not only five</h3>
                        <span>7 July 2019</span>
                        <div class="date_like">
                           <span>Like </span><span class="pad_le">Comment</span>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end news section -->
   <!-- newslatter section -->
   <div class="newslatter">
      <div class="container">
         <div class="row d_flex">
            <div class="col-md-5">
               <h3 class="neslatter">Subscribe To The Newsletter</h3>
            </div>
            <div class="col-md-7">
               <form class="news_form">
                  <input class="letter_form" placeholder=" Enter your email" type="text" name="Enter your email">
                  <button class="sumbit">Subscribe</button>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="header_midil">
      <div class="container">
         <div class="row d_flex">
            <div class="col-md-4">
               <ul class="conta_icon d_none1">
                  <li><a href="#"><img src="images/email.png" alt="#" /> demo@gmail.com</a> </li>
               </ul>
            </div>
            <div class="col-md-4">
               <a class="logo" href="#"><img src="images/logo.png" alt="#" /></a>
            </div>
            <div class="col-md-4">
               <ul class="right_icon d_none1">
                  <li><a href="#"><img src="images/shopping.png" alt="#" /></a> </li>
                  <a href="#" class="order">Order Now</a>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- end newslatter section -->
   <!-- three_box section -->
   <div class="three_box">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="gift_box">
                  <i><img src="images/icon_mony.png"></i>
                  <span>Money Back</span>
               </div>
            </div>
            <div class="col-md-4">
               <div class="gift_box">
                  <i><img src="images/icon_gift.png"></i>
                  <span>Special Gift</span>
               </div>
            </div>
            <div class="col-md-4">
               <div class="gift_box">
                  <i><img src="images/icon_car.png"></i>
                  <span>Free Shipping</span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end three_box section -->

   <!--  footer -->
   <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="inror_box">
                     <h3>INFORMATION </h3>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="inror_box">
                     <h3>MY ACCOUNT </h3>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="inror_box">
                     <h3>ABOUT </h3>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="inror_box">
                     <h3>CONTACTS </h3>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>

   <script>
      let suggestions = [
         "Channel",
         "CodingLab",
         "CodingNepal",
         "YouTube",
         "YouTuber",
         "YouTube Channel",
         "Blogger",
         "Bollywood",
         "Vlogger",
         "Vechiles",
         "Facebook",
         "Freelancer",
         "Facebook Page",
         "Designer",
         "Developer",
         "Web Designer",
         "Web Developer",
         "Login Form in HTML & CSS",
         "How to learn HTML & CSS",
         "How to learn JavaScript",
         "How to became Freelancer",
         "How to became Web Designer",
         "How to start Gaming Channel",
         "How to start YouTube Channel",
         "What does HTML stands for?",
         "What does CSS stands for?",
      ];

      // getting all required elements
      const searchInput = document.querySelector(".searchInput");
      const input = searchInput.querySelector("input");
      const resultBox = searchInput.querySelector(".resultBox");
      const icon = searchInput.querySelector(".icon");
      let linkTag = searchInput.querySelector("a");
      let webLink;

      // if user press any key and release
      input.onkeyup = (e) => {
         let userData = e.target.value; //user enetered data
         let emptyArray = [];
         if (userData) {
            emptyArray = suggestions.filter((data) => {
               //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
               return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
            });
            emptyArray = emptyArray.map((data) => {
               // passing return data inside li tag
               return data = '<li>' + data + '</li>';
            });
            searchInput.classList.add("active"); //show autocomplete box
            showSuggestions(emptyArray);
            let allList = resultBox.querySelectorAll("li");
            for (let i = 0; i < allList.length; i++) {
               //adding onclick attribute in all li tag
               allList[i].setAttribute("onclick", "select(this)");
            }
         } else {
            searchInput.classList.remove("active"); //hide autocomplete box
         }
      }

      function showSuggestions(list) {
         let listData;
         if (!list.length) {
            userValue = inputBox.value;
            listData = '<li>' + userValue + '</li>';
         } else {
            listData = list.join('');
         }
         resultBox.innerHTML = listData;
      }
   </script>
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>