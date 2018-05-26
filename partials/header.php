<header id="header">
<?php //include 'header_topbar.php';?>

<div class="site-header">
  
  <div class="site-header__main">
    <div class="container">
      <div class="slds-grid slds-wrap slds-gutters slds-grid_vertical-align-center">
        <div class="slds-col slds-size_12-of-12 slds-large-size_3-of-12">
          <div class="site-header__main-left">
            <?php include 'header_logo.php'; ?>
            
            <div id="main-nav-toggle" class="mmm-rw-top-menu-toggle mmm-toggle-wrapper">
              <button type="button" class="mmm-toggle" aria-controls="" aria-pressed="false">
                <i class="fa fa-lg fa-bars mmm-toggle__icon mmm-toggle__icon--open"></i>
                <i class="fa fa-lg fa-times mmm-toggle__icon mmm-toggle__icon--close"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="slds-col slds-size_12-of-12 slds-large-size_9-of-12">
          <div class="site-header__main-right">
            <div class="slds-grid slds-gutters slds-grid_vertical-align-center">
              <div class="slds-col slds-size_9-of-12">
                <?php include 'header_search.php'; ?>
              </div>
              <div class="slds-col slds-size_3-of-12">
                <?php include 'header_cart.php'; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-header__navigation">
    <div class="container">
      <div class="slds-grid slds-gutters">
        <div class="slds-col slds-size_3-of-12">
          <?php include 'nav_categories.php';?>
        </div>
        <div class="slds-col slds-size_9-of-12">
          <?php include 'nav_main.php' ?>
        </div>
      </div>
    </div>
  </div>
</div>
</header>