<?php require_once('couch/cms.php'); ?>
<?php require_once('header.php'); ?>
<cms:template title="Contact Us" />
    <div class="container">
      <cms:editable name="main" type="richtext">
      <h1>Contact Us</h1>
      <p>Some stuff</p>
      </cms:editable>
    </div>
<?php require_once('footer.php'); ?>
<?php COUCH::invoke(); ?>
