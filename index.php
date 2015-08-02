<?php require_once('couch/cms.php'); ?>
<cms:template title="Home" />
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Community Energy 4 Goulburn</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="http://www.ce4g.org.au/images/logo.jpg" alt="CE4G logo" class="img-thumbnail" style="height: 100%;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="projects.html">Our Projects</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <img src="http://www.ce4g.org.au/images/logo.jpg" alt="CE4G logo" class="img-thumbnail">
        </div>
        <div class="col-sm-9">
          <h1>Community Energy 4 Goulburn</h1>
          <p class="lead">An initiative of the <a href="http://www.goulburngroup.com.au">Goulburn Group</a></p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h2>
            <cms:editable name="col1_heading" type="richtext">
            Who we are
            </cms:editable>
          </h2>
          <cms:editable name="col1_content" type="richtext">
          <p>...</p>
          </cms:editable>
        </div>
        <div class="col-sm-4">
          <h2>
            <cms:editable name="col2_heading" type="richtext">
            What we do
            </cms:editable>
          </h2>
          <cms:editable name="col2_content" type="richtext">
          <p>...</p>
          </cms:editable>
        </div>
        <div class="col-sm-4">
          <h2>
            <cms:editable name="col3_heading" type="richtext">
            Some other thing
            </cms:editable>
          </h2>
          <cms:editable name="col3_content" type="richtext">
          <p>...</p>
          </cms:editable>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        <p>Sticky footer content, copyrights and whatnot.</p>
      </div>
    </footer>
  </body>
</html>
<?php COUCH::invoke(); ?>
