<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include_once 'partials/head.php'; ?>

<body>
  
<div id="page" class="site">
  <?php include_once 'partials/header.php'; ?>
  
  <div id="content" class="site-content">
    <main id="main" class="site-main">
      <?php include 'partials/breadcrumb.php';?>
      <div class="main-content">
        <div class="container">
          <div class="pi-boxed">
            <h1 class="pi-boxed__heading">
              <span>Typography</span>
            </h1>
            <span class="pi-boxed__line1"></span> 
            <span class="pi-boxed__line2"></span>
            
            <div class="portlet">
              <h2 class="portlet-title">General</h2>
              <div class="portlet-body">
                <div class="row">
                  <div class="col-md-6">
                    <h3>Sample text with lead body</h3>
                    <p class="lead">Lead body. Lorem ipsum dolor sit
                      amet, consectetur adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit. Curabitur bibendum ornare dolor,
                      quis ullamcorper ligula sodales at. Nulla tellus
                      elit, varius non commodo eget, mattis vel eros. In
                      sed ornare nulla.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit. Curabitur bibendum ornare dolor,
                      quis ullamcorper ligula sodales at. Nulla tellus
                      elit, varius non commodo eget, mattis vel eros. In
                      sed ornare nulla.</p>
                  </div>
                  <div class="col-md-6">
                    <h3>Sample text</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit. Curabitur bibendum ornare dolor,
                      quis ullamcorper ligula sodales at. Nulla tellus
                      elit, varius non commodo eget, mattis vel eros. In
                      sed ornare nulla.</p>
                    <p>Nullam quis risus eget urna mollis ornare vel eu
                      leo. Cum sociis natoque penatibus et magnis dis
                      parturient montes, nascetur ridiculus mus. Nullam
                      id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p>Vivamus sagittis lacus vel augue laoreet rutrum
                      faucibus dolor auctor. Duis mollis, est non
                      commodo luctus, nisi erat porttitor ligula, eget
                      lacinia odio sem nec elit. Donec sed odio dui.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h3>Texts</h3>
                    <p class="muted">Fusce dapibus, tellus ac cursus
                      commodo, tortor mauris nibh.</p>
                    <p class="text-warning">Etiam porta sem malesuada
                      magna mollis euismod.</p>
                    <p class="text-error">Donec ullamcorper nulla non
                      metus auctor fringilla.</p>
                    <p class="text-info">Aenean eu leo quam.
                      Pellentesque ornare sem lacinia quam venenatis.</p>
                    <p class="text-success">Duis mollis, est non commodo
                      luctus, nisi erat porttitor ligula.</p>
                  </div>
                  <div class="col-md-6">
                    <h3>Headings</h3>
                    <h1>h1. Heading 1</h1>
                    <h2>h2. Heading 2</h2>
                    <h3>h3. Heading 3</h3>
                    <h4>h4. Heading 4</h4>
                    <h5>h5. Heading 5</h5>
                    <h6>h6. Heading 6</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h3>Address</h3>
                    <div class="well">
                      <address>
                        <strong>Loop, Inc.</strong><br> 795 Park Ave,
                        Suite 120<br> San Francisco, CA 94107<br> <abbr
                          title="Phone">P:</abbr> (234) 145-1810
                      </address>
                      <address>
                        <strong>Full Name</strong><br> <a
                          href="mailto:#"> first.last@email.com </a>
                      </address>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <h3>Some more text here</h3>
                    <p>Nullam quis risus eget urna mollis ornare vel eu
                      leo. Cum sociis natoque penatibus et magnis dis
                      parturient montes, nascetur ridiculus mus. Nullam
                      id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p>Vivamus sagittis lacus vel augue laoreet rutrum
                      faucibus dolor auctor. Duis mollis, est non
                      commodo luctus, nisi erat porttitor ligula, eget
                      lacinia odio sem nec elit. Donec sed odio dui.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="portlet">
              <h2 class="portlet-title">Blockquotes</h2>
              <div class="portlet-body">
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Integer posuere erat a ante. Duis mollis, est
                    non commodo luctus, nisi erat porttitor ligula
                    integer posuere erat a ante.</p>
                </blockquote>
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Integer posuere erat a ante.</p>
                  <small>Someone famous <cite title="Source Title">Source
                      Title</cite></small>
                </blockquote>
                <div class="clearfix">
                  <blockquote class="pull-right">
                    <p>Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous <cite title="Source Title">Source
                        Title</cite></small>
                  </blockquote>
                </div>
              </div>
            </div>

            <div class="portlet">
              <h2 class="portlet-title">Alignments</h2>
              <div class="portlet-body">
                <p class="text-left">Left aligned text.</p>
                <p class="text-center">Center aligned text.</p>
                <p class="text-right">Right aligned text.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
<?php include 'partials/footer.php';?>
</body>
</html>