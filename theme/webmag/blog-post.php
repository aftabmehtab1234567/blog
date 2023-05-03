<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>WebMag HTML Template</title>
    <link
      rel="canonical"
      href="https://preview.colorlib.com/theme/webmag/blog-post.html"
    />
    <link
      href="//fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600"
      rel="stylesheet"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="../../theme/webmag/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../../theme/webmag/css/font-awesome.min.css" />
    <link
      type="text/css"
      rel="stylesheet"
      href="../../theme/webmag/css/style.css"
    />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header id="header">
      <div id="nav">
        <div id="nav-fixed">
          <div class="container">
            <div class="nav-logo">
              <a href="../../index.html" class="logo"
                ><img src="../../theme/webmag/img/logo.png" alt=""
              /></a>
            </div>
            <ul class="nav-menu nav navbar-nav">
              <li><a href="../../theme/webmag/category.html">News</a></li>
              <li><a href="../../theme/webmag/category.html">Popular</a></li>
              <!-- <li class="cat-1">
                <a href="../../theme/webmag/category.html">Web Design</a>
              </li>
              <li class="cat-2">
                <a href="../../theme/webmag/category.html">JavaScript</a>
              </li>
              <li class="cat-3">
                <a href="../../theme/webmag/category.html">Css</a>
              </li>
              <li class="cat-4">
                <a href="../../theme/webmag/category.html">Jquery</a>
              </li> -->
            </ul>
            <div class="nav-btns">
              <button class="aside-btn"><i class="fa fa-bars"></i></button>
              <button class="search-btn"><i class="fa fa-search"></i></button>
              <div class="search-form">
                <input
                  class="search-input"
                  type="text"
                  name="search"
                  placeholder="Enter Your Search ..."
                />
                <button class="search-close">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div id="nav-aside">
          <div class="section-row">
            <ul class="nav-aside-menu">
              <li><a href="../../index.html">Home</a></li>
              <li><a href="../../theme/webmag/about.html">About Us</a></li>
              <li><a href="#">Join Us</a></li>
              <li><a href="#">Advertisement</a></li>
              <li><a href="../../theme/webmag/contact.html">Contacts</a></li>
            </ul>
          </div>
          <div class="section-row">
            <h3>Recent Posts</h3>
            <div class="post post-widget">
              <a class="post-img" href="../../theme/webmag/blog-post.html"
                ><img src="../../theme/webmag/img/widget-2.jpg" alt=""
              /></a>
              <div class="post-body">
                <h3 class="post-title">
                  <a href="../../theme/webmag/blog-post.html"
                    >Pagedraw UI Builder Turns Your Website Design Mockup Into
                    Code Automatically</a
                  >
                </h3>
              </div>
            </div>
            <div class="post post-widget">
              <a class="post-img" href="../../theme/webmag/blog-post.html"
                ><img src="../../theme/webmag/img/widget-3.jpg" alt=""
              /></a>
              <div class="post-body">
                <h3 class="post-title">
                  <a href="../../theme/webmag/blog-post.html"
                    >Why Node.js Is The Coolest Kid On The Backend Development
                    Block!</a
                  >
                </h3>
              </div>
            </div>
            <div class="post post-widget">
              <a class="post-img" href="../../theme/webmag/blog-post.html"
                ><img src="../../theme/webmag/img/widget-4.jpg" alt=""
              /></a>
              <div class="post-body">
                <h3 class="post-title">
                  <a href="../../theme/webmag/blog-post.html"
                    >Tell-A-Tool: Guide To Web Design And Development Tools</a
                  >
                </h3>
              </div>
            </div>
          </div>
          <div class="section-row">
            <h3>Follow us</h3>
            <ul class="nav-aside-social">
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-pinterest"></i></a>
              </li>
            </ul>
          </div>
          <button class="nav-aside-close"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <!-- fetch content from database -->
<?php
include('connection.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
session_start();
if(isset($_SESSION['email'])){
	$user = $_SESSION['email'];
}
if(isset($_GET['userid'])){
	$uid = $_GET['userid'];
}
$sql ="SELECT `date`, `blog_title`, `blog_content`, `banner_img`, `categories` FROM `post` WHERE `id` = '".$uid."'";
 $res = mysqli_query($conn,$sql);
 if(mysqli_num_rows($res) > 0 ){
	while($row=mysqli_fetch_assoc($res))
  {
		?>

      <div id="post-header" class="page-header">
        <div
          class="background-img"
          style="background-image: url('<?php echo "../../uploads/". $row['banner_img']; ?>')"
        ></div>
        <div class="container">
          <div class="row">
            <div class="col-md-10">
              <div class="post-meta">
                <a
                  class="post-category cat-2"
                  href="../../theme/webmag/category.html"
                  ><?php echo $row['categories'];?></a
                >
                <span class="post-date"><?php echo $row['date'];?></span>
              </div>
              <h1><?php echo $row['blog_title'];?></h1>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="section-row sticky-container">
              <div class="main-post">
                <!-- <h3>Lorem Ipsum: when, and when not to use it</h3> -->
                <p>
                <?php echo $row['blog_content']; ?>
                </p>
                
                <!-- <figure class="figure-img">
                  <img
                    class="img-responsive"
                    src="../../theme/webmag/img/post-4.jpg"
                    alt=""
                  />
                  <figcaption>
                    So Lorem Ipsum is bad (not necessarily)
                  </figcaption>
                </figure>
                <p>
                  You begin with a text, you sculpt information, you chisel away
                  what's not needed, you come to the point, make things clear,
                  add value, you're a content person, you like words. Design is
                  no afterthought, far from it, but it comes in a deserved
                  second. Anyway, you still use Lorem Ipsum and rightly so, as
                  it will always have a place in the web workers toolbox, as
                  things happen, not always the way you like it, not always in
                  the preferred order. Even if your less into design and more
                  into content strategy you may find some redeeming value with,
                  wait for it, dummy copy, no less.
                </p>
                <p>
                  There's lot of hate out there for a text that amounts to
                  little more than garbled words in an old language. The
                  villagers are out there with a vengeance to get that
                  Frankenstein, wielding torches and pitchforks, wanting to tar
                  and feather it at the least, running it out of town in shame.
                </p>
                <p>
                  One of the villagers, Kristina Halvorson from Adaptive Path,
                  holds steadfastly to the notion that design can’t be tested
                  without real content:
                </p>
                <blockquote class="blockquote">
                  I’ve heard the argument that “lorem ipsum” is effective in
                  wireframing or design because it helps people focus on the
                  actual layout, or color scheme, or whatever. What kills me
                  here is that we’re talking about creating a user experience
                  that will (whether we like it or not) be DRIVEN by words. The
                  entire structure of the page or app flow is FOR THE WORDS.
                </blockquote>
                <p>
                  If that's what you think how bout the other way around? How
                  can you evaluate content without design? No typography, no
                  colors, no layout, no styles, all those things that convey the
                  important signals that go beyond the mere textual, hierarchies
                  of information, weight, emphasis, oblique stresses,
                  priorities, all those subtle cues that also have visual and
                  emotional appeal to the reader. Rigid proponents of content
                  strategy may shun the use of dummy copy but then designers
                  might want to ask them to provide style sheets with the copy
                  decks they supply that are in tune with the design direction
                  they require.
                </p>
                <h3>
                  Summing up, if the copy is diverting attention from the design
                  it’s because it’s not up to task.
                </h3>
                <p>
                  Typographers of yore didn't come up with the concept of dummy
                  copy because people thought that content is inconsequential
                  window dressing, only there to be used by designers who can’t
                  be bothered to read. Lorem Ipsum is needed because words
                  matter, a lot. Just fill up a page with draft copy about the
                  client’s business and they will actually read it and comment
                  on it. They will be drawn to it, fiercely. Do it the wrong way
                  and draft copy can derail your design review.
                </p>
              </div> -->
              <div class="post-shares sticky-shares">
                <a href="#" class="share-facebook"
                  ><i class="fa fa-facebook"></i
                ></a>
                <a href="#" class="share-twitter"
                  ><i class="fa fa-twitter"></i
                ></a>
                <a href="#" class="share-google-plus"
                  ><i class="fa fa-google-plus"></i
                ></a>
                <a href="#" class="share-pinterest"
                  ><i class="fa fa-pinterest"></i
                ></a>
                <a href="#" class="share-linkedin"
                  ><i class="fa fa-linkedin"></i
                ></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
            <div class="section-row text-center">
              <a href="#" style="display: inline-block; margin: auto">
                <img
                  class="img-responsive"
                  src="../../theme/webmag/img/ad-2.jpg"
                  alt=""
                />
              </a>
            </div>
            <div class="section-row">
              <div class="post-author">
                <div class="media">
                  <div class="media-left">
                    <img
                      class="media-object"
                      src="../../theme/webmag/img/author.png"
                      alt=""
                    />
                  </div>
                  <div class="media-body">
                    <div class="media-heading">
                      <h3>John Doe</h3>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <ul class="author-social">
                      <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-row">
              <div class="section-title">
                <h2>3 Comments</h2>
              </div>
              <div class="post-comments">
                <div class="media">
                  <div class="media-left">
                    <img
                      class="media-object"
                      src="../../theme/webmag/img/avatar.png"
                      alt=""
                    />
                  </div>
                  <div class="media-body">
                    <div class="media-heading">
                      <h4>John Doe</h4>
                      <span class="time">March 27, 2018 at 8:00 am</span>
                      <a href="#" class="reply">Reply</a>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <div class="media">
                      <div class="media-left">
                        <img
                          class="media-object"
                          src="../../theme/webmag/img/avatar.png"
                          alt=""
                        />
                      </div>
                      <div class="media-body">
                        <div class="media-heading">
                          <h4>John Doe</h4>
                          <span class="time">March 27, 2018 at 8:00 am</span>
                          <a href="#" class="reply">Reply</a>
                        </div>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left">
                    <img
                      class="media-object"
                      src="../../theme/webmag/img/avatar.png"
                      alt=""
                    />
                  </div>
                  <div class="media-body">
                    <div class="media-heading">
                      <h4>John Doe</h4>
                      <span class="time">March 27, 2018 at 8:00 am</span>
                      <a href="#" class="reply">Reply</a>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-row">
              <div class="section-title">
                <h2>Leave a reply</h2>
                <p>
                  your email address will not be published. required fields are
                  marked *
                </p>
              </div>
              <form class="post-reply">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <span>Name *</span>
                      <input class="input" type="text" name="name" />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <span>Email *</span>
                      <input class="input" type="email" name="email" />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <span>Website</span>
                      <input class="input" type="text" name="website" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea
                        class="input"
                        name="message"
                        placeholder="Message"
                      ></textarea>
                    </div>
                    <button class="primary-button">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="aside-widget text-center">
              <a href="#" style="display: inline-block; margin: auto">
                <img
                  class="img-responsive"
                  src="../../theme/webmag/img/ad-1.jpg"
                  alt=""
                />
              </a>
            </div>
            <div class="aside-widget">
              <div class="section-title">
                <h2>Most Read</h2>
              </div>
              <div class="post post-widget">
                <a class="post-img" href="../../theme/webmag/blog-post.html"
                  ><img src="../../theme/webmag/img/widget-1.jpg" alt=""
                /></a>
                <div class="post-body">
                  <h3 class="post-title">
                    <a href="../../theme/webmag/blog-post.html"
                      >Tell-A-Tool: Guide To Web Design And Development Tools</a
                    >
                  </h3>
                </div>
              </div>
              <div class="post post-widget">
                <a class="post-img" href="../../theme/webmag/blog-post.html"
                  ><img src="../../theme/webmag/img/widget-2.jpg" alt=""
                /></a>
                <div class="post-body">
                  <h3 class="post-title">
                    <a href="../../theme/webmag/blog-post.html"
                      >Pagedraw UI Builder Turns Your Website Design Mockup Into
                      Code Automatically</a
                    >
                  </h3>
                </div>
              </div>
              <div class="post post-widget">
                <a class="post-img" href="../../theme/webmag/blog-post.html"
                  ><img src="../../theme/webmag/img/widget-3.jpg" alt=""
                /></a>
                <div class="post-body">
                  <h3 class="post-title">
                    <a href="../../theme/webmag/blog-post.html"
                      >Why Node.js Is The Coolest Kid On The Backend Development
                      Block!</a
                    >
                  </h3>
                </div>
              </div>
              <div class="post post-widget">
                <a class="post-img" href="../../theme/webmag/blog-post.html"
                  ><img src="../../theme/webmag/img/widget-4.jpg" alt=""
                /></a>
                <div class="post-body">
                  <h3 class="post-title">
                    <a href="../../theme/webmag/blog-post.html"
                      >Tell-A-Tool: Guide To Web Design And Development Tools</a
                    >
                  </h3>
                </div>
              </div>
            </div>
            <div class="aside-widget">
              <div class="section-title">
                <h2>Featured Posts</h2>
              </div>
              <div class="post post-thumb">
                <a class="post-img" href="../../theme/webmag/blog-post.html"
                  ><img src="../../theme/webmag/img/post-2.jpg" alt=""
                /></a>
                <div class="post-body">
                  <div class="post-meta">
                    <a class="post-category cat-3" href="#">Jquery</a>
                    <span class="post-date">March 27, 2018</span>
                  </div>
                  <h3 class="post-title">
                    <a href="../../theme/webmag/blog-post.html"
                      >Ask HN: Does Anybody Still Use JQuery?</a
                    >
                  </h3>
                </div>
              </div>
              <div class="post post-thumb">
                <a class="post-img" href="../../theme/webmag/blog-post.html"
                  ><img src="../../theme/webmag/img/post-1.jpg" alt=""
                /></a>
                <div class="post-body">
                  <div class="post-meta">
                    <a class="post-category cat-2" href="#">JavaScript</a>
                    <span class="post-date">March 27, 2018</span>
                  </div>
                  <h3 class="post-title">
                    <a href="../../theme/webmag/blog-post.html"
                      >Chrome Extension Protects Against JavaScript-Based CPU
                      Side-Channel Attacks</a
                    >
                  </h3>
                </div>
              </div>
            </div>
            <div class="aside-widget">
              <div class="section-title">
                <h2>Catagories</h2>
              </div>
              <div class="category-widget">
                <ul>
                  <li>
                    <a href="#" class="cat-1">Web Design<span>340</span></a>
                  </li>
                  <li>
                    <a href="#" class="cat-2">JavaScript<span>74</span></a>
                  </li>
                  <li>
                    <a href="#" class="cat-4">JQuery<span>41</span></a>
                  </li>
                  <li>
                    <a href="#" class="cat-3">CSS<span>35</span></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="aside-widget">
              <div class="tags-widget">
                <ul>
                  <li><a href="#">Chrome</a></li>
                  <li><a href="#">CSS</a></li>
                  <li><a href="#">Tutorial</a></li>
                  <li><a href="#">Backend</a></li>
                  <li><a href="#">JQuery</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Development</a></li>
                  <li><a href="#">JavaScript</a></li>
                  <li><a href="#">Website</a></li>
                </ul>
              </div>
            </div>
            <div class="aside-widget">
              <div class="section-title">
                <h2>Archive</h2>
              </div>
              <div class="archive-widget">
                <ul>
                  <li><a href="#">January 2018</a></li>
                  <li><a href="#">Febuary 2018</a></li>
                  <li><a href="#">March 2018</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="footer-widget">
              <div class="footer-logo">
                <a href="../../index.html" class="logo"
                  ><img src="../../theme/webmag/img/logo.png" alt=""
                /></a>
              </div>
              <ul class="footer-nav">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Advertisement</a></li>
              </ul>
              <div class="footer-copyright">
                <span
                  >&copy; Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved | This template is made with
                  <i class="fa fa-heart-o" aria-hidden="true"></i> by
                  <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-6">
                <div class="footer-widget">
                  <h3 class="footer-title">About Us</h3>
                  <ul class="footer-links">
                    <li>
                      <a href="../../theme/webmag/about.html">About Us</a>
                    </li>
                    <li><a href="#">Join Us</a></li>
                    <li>
                      <a href="../../theme/webmag/contact.html">Contacts</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="footer-widget">
                  <h3 class="footer-title">Catagories</h3>
                  <ul class="footer-links">
                    <li>
                      <a href="../../theme/webmag/category.html">Web Design</a>
                    </li>
                    <li>
                      <a href="../../theme/webmag/category.html">JavaScript</a>
                    </li>
                    <li><a href="../../theme/webmag/category.html">Css</a></li>
                    <li>
                      <a href="../../theme/webmag/category.html">Jquery</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer-widget">
              <h3 class="footer-title">Join our Newsletter</h3>
              <div class="footer-newsletter">
                <form>
                  <input
                    class="input"
                    type="email"
                    name="newsletter"
                    placeholder="Enter your email"
                  />
                  <button class="newsletter-btn">
                    <i class="fa fa-paper-plane"></i>
                  </button>
                </form>
              </div>
              <ul class="footer-social">
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <?php
	}
 }
?>
    <!-- fetch data from database close -->
    <script src="../../theme/webmag/js/jquery.min.js"></script>
    <script src="../../theme/webmag/js/bootstrap.min.js"></script>
    <script src="../../theme/webmag/js/main.js"></script>
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "UA-23581568-13");
    </script>
    <script
      defer
      src="../../beacon.min.js"
      data-cf-beacon='{"rayId":"76af3adaecfb0dc7","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.0","si":100}'
    ></script>
  </body>
</html>
