<!DOCTYPE html>
<html lang="en">
<head>
  <title>Web Developer Multimedia Designer | Yoko Ishioka</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="scripts/scripts.js"></script>
</head>
<body>

<container class="container-fluid">
<header class="row navbar-fixed-top">
     <div class="col-md-4 pull-left">
         <img class="thumbnail header" src="http://yokoishioka.com/wp-content/uploads/2016/11/yoko-ishioka-web-developer-graphic-designer-logo.png" alt="web developer and graphic designer logo - yoko ishioka">
         <h2>Web Developer | Graphic Designer</h2>
     </div>
     <nav class="col-md-8 pull-right">
         <a href="#nav-portfolio" title="portfolio">portfolio</a>
         <a href="#nav-blog" title="blog">blog</a>
         <a href="#nav-about" title="about">about</a>
         <a href="#nav-contact" title="contact">contact</a>
     </nav>
  </header>
  <main id="collapisble-panels">
    <section class="row" id="nav-portfolio">
     <nav class="nav" data-toggle="collapse" data-target="#portfolio"><span class="glyphicon glyphicon-menu-down"></span> Portfolio <span class="glyphicon glyphicon-menu-down"></span></nav>
 
     <article id="portfolio" class="collapse row">
        <h3>Projects</h3>
        <a class="link" data-toggle="collapse" data-target="#portfolio-project">Spin the Wheel</a>
        <div id="portfolio-project" class="collapse row">
             <div class="col-md-8 pull-left">
               <img src="http://yokoishioka.com/images/portfolio/interactive%20media/spin-the-wheel-screen1.png" alt="spin the wheel html5" />
             </div>
       
             <div class="col-md-4 portfolio-details pull-left">
               <dl class="dl-horizontal">
                  <dt>Details</dt>
                  <dd>These are the project details.</dd>
               </dl>
             </div>
        </div>
     </article>
  </section>
  <section class="row" id="nav-blog">
     <nav class="nav" data-toggle="collapse" data-target="#blog"><span class="glyphicon glyphicon-menu-down"></span> Blog <span class="glyphicon glyphicon-menu-down"></span></nav>

     <article id="blog" class="collapse row">
         <nav class="nav" data-toggle="collapse" data-target="#blog-1">Blog </nav>
         <div id="#blog-1" class="collapse row">
              Hello
         </div>
     </article>
  </section>
  <section class="row" id="nav-about">
     <nav class="nav" data-toggle="collapse" data-target="#about"><span class="glyphicon glyphicon-menu-down"></span> About <span class="glyphicon glyphicon-menu-down"></span></nav>

     <article id="about" class="collapse">
        I like pictures.
     </article>
  </section>
  <section class="row" id="nav-contact">
     <nav class="nav" data-toggle="collapse" data-target="#contact"><span class="glyphicon glyphicon-menu-down"></span> Contact <span class="glyphicon glyphicon-menu-down"></span></nav>

     <article id="contact" class="collapse">
        <form>
  <div class="form-group">
    <label for="first-name">First name:</label>
    <input type="text" class="form-control" id="first-name" />
  </div>
  <div class="form-group">
    <label for="last-name">Last name:</label>
    <input type="text" class="form-control" id="last-name" />
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" />
  </div>
  <div class="form-group">
    <label for="comments">Comments:</label>
    <textarea type="text" class="form-control" id="comments"></textarea>
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
     </article>
  </section>
  </main>
<footer class="row">
      <a href="mailto:yoko@yokoishioka.com">
          <span class="glyphicon glyphicon-envelope"></span>
        </a>
      <a href="#">
          <span class="glyphicon glyphicon-download-alt"></span>
        </a>
      <a href="#">
          <i class="fa fa-instagram"></i>
      </a>
      <a href="#">
          <i class="fa fa-linkedin-square"></i>
      </a>
  </footer>
</container>

</body>
</html>