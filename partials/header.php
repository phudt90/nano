<header id="header">
<?php //include 'header_topbar.php';?>

<div class="site-header">
  
  <div class="site-header__main">
    <div class="container">
      <div class="slds-grid slds-gutters slds-grid_vertical-align-center">
        <div class="slds-col slds-size_3-of-12">
          <?php include 'header_logo.php'; ?>
        </div>
        <div class="slds-col slds-size_7-of-12">
          <?php include 'header_search.php'; ?>
        </div>
        <div class="slds-col slds-size_2-of-12">
          <?php include 'header_cart.php'; ?>
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