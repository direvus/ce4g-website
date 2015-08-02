<?php require_once('couch/cms.php'); ?>
<?php require_once('header.php'); ?>
<cms:template title="Home" />
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
<?php require_once('footer.php'); ?>
<?php COUCH::invoke(); ?>
