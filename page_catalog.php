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
          <h1 class="page-title">
            <span class="base" data-ui-id="page-title-wrapper">Electronics</span>
          </h1>
        </div>
        <?php $products = [1, 2, 3, 4, 5]; ?>
        <div class="list-products list-products-grid">
          <div class="slds-grid slds-wrap slds-gutters">
            <?php foreach($products as $product) { ?>
            <div class="list-products__item slds-col slds-size_12-of-12 slds-medium-size_6-of-12 slds-large-size_4-of-12 slds-x-large-size_3-of-12">
              <div class="list-products__item-info">
                <div class="list-products__item-inner">
                  <div class="box-image">
                    <a href="javascript:;" class="product-image-container">
                      <span class="product-image-wrapper"> 
                        <img class="product-image-photo"
                        src="dist/img/product/<?php echo $product ?>.jpg"
                        width="300" height="300" alt="Fuhlen Mouse for Gamer" />
                      </span>
                    </a>
                  </div>

                  <div class="list-products__item-details">
                    <h2 class="product-name">
                      <a href="javascript:;">Ắc quy DAEWOO 40B19FL 12V 35Ah</a>
                    </h2>
                    <div class="list-products__item-price">
                      <span class="price-wrapper">
                        <span class="price price--final">1.200.000 đ</span>
                        <span class="price price--old">1.400.000 đ</span>
                      </span>
                    </div>

                    <div class="list-products__item-actions">
                      <form action="javascript:;" method="post">
                        <input type="hidden" name="product" value="2281">
                        <button type="submit" class="btn btn-action btn-cart btn-sm">
                          <i class="fa fa-cart-plus"></i>
                          <span>Thêm vào giỏ</span>
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
        
        <ul class="pagination justify-content-end">
          <li class="page-item">
            <a class="page-link prev" href="javascript:;">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
          </li>  
          <li class="page-item active">
            <span class="page-link">1</span>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:;">2</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="javascript:;">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:;">4</a>
          </li>
          <li class="page-item">
            <a class="page-link next" href="javascript:;">
              <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div>
    </main>
  </div>
</div>
<?php include 'partials/footer.php';?>
</body>
</html>