<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include_once 'partials/head.php'; ?>
<body>

<div id="page" class="site">
  <?php include_once 'partials/header.php'; ?>
  
  <div id="content" class="site-content">
    <main id="main" class="site-main">
      <?php include 'partials/breadcrumb.php';?>

      <div class="container">
        <div class="page-title-wrapper">
          <h1 class="page-title">Giỏ hàng</h1>
        </div>
        
        <div class="shopping-cart mb-4">
          <div class="slds-grid slds-wrap slds-gutters">
            <div class="slds-col slds-size_12-of-12 slds-large-size_8-of-12">
              <?php $products = [1, 2, 3, 4]; ?>
              <div class="shopping-cart__items">
                <?php foreach ($products as $product) { ?>
                <div class="shopping-cart__item">
                  <div class="slds-grid slds-grid_vertical-align-center slds-wrap slds-gutters">
                    <div class="slds-col slds-size_12-of-12 slds-large-size_2-of-12">
                      <div class="shopping-cart__item-thumb">
                        <a href="javascript:;"><img src="dist/img/product/<?php echo $product ?>.jpg" /></a>
                      </div>
                    </div>
                    <div class="slds-col slds-size_12-of-12 slds-large-size_6-of-12">
                      <div class="shopping-cart__item-info">
                        <h3 class="item-name"><a href="javascript:;">Ắc Quy DAEWOO 40B19FL 12V 35Ah</a></h3>
                        <p class="item-actions">
                          <a href="javascript:;" class="btn btn-xs red">Xóa</a>
                        </p>
                      </div>
                    </div>
                    <div class="slds-col slds-size_12-of-12 slds-large-size_2-of-12">
                      <div class="shopping-cart__item-price">
                        <div class="price-wrap">
                          <span class="price price--final">1.200.000 đ</span>
                          <span class="price price--old">1.400.000 đ</span>
                        </div>
                      </div>
                    </div>
                    <div class="slds-col slds-size_12-of-12 slds-large-size_2-of-12">
                      <input type="text" value="7" name="demo_vertical" class="touchspin_cart">
                    </div>
                  </div>
                </div>
                <?php } ?>
                
                <div class="shopping-cart__empty p-4">Giỏ hàng của bạn đang trống!</div>
              </div>
            </div>
            <div class="slds-col slds-size_12-of-12 slds-large-size_4-of-12">
              <div class="shopping-cart__actions">
                <a href="javascript:;" class="btn btn-md btn-block red mb-3"><span>Tiến hành đặt hàng</span></a>
                <a href="javascript:;" class="btn btn-md btn-block grey-salsa"><span>Tiếp tục mua hàng</span></a>
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