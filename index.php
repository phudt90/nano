<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include_once 'partials/head.php'; ?>
<body>

<div id="page" class="site page-home">
  <?php include_once 'partials/header.php'; ?>
  
  <div id="content" class="site-content">
    <main id="main" class="site-main">
      <section class="widget-homeslides">
        <div class="container">
          <div class="slds-grid slds-wrap">
            <div class="slds-col slds-size_12-of-12 slds-large-size_3-of-12"></div>
            <div class="slds-col slds-size_12-of-12 slds-large-size_9-of-12">
              <div id="homeslider">
                <div class="flexslider">
                  <ul class="slides list-unstyled">
                    <li>
                      <a href="javascript:;">
                        <img src="dist/img/slides/sample-1.jpg" />
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        <img src="dist/img/slides/sample-2.jpg" />
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="widget-banners slds-m-top_large slds-m-bottom_large">
        <div class="container">
          <div class="slds-grid slds-wrap slds-gutters">
            <div class="slds-col slds-size_12-of-12 slds-large-size_6-of-12">
              <div class="banner-box">
                <div class="inner-box">
                  <a href="https://acquynano.com/ac-quy-o-to-toplite/"
                    title="Ắc quy ô tô Toplite"><img
                    src="dist/img/banners/1.jpg"
                    alt=""></a>
                </div>
              </div>
            </div>
            <div class="slds-col slds-size_12-of-12 slds-large-size_6-of-12">
              <div class="banner-box">
                <div class="inner-box">
                  <a href="https://acquynano.com/ac-quy-mo-to-toplite/"
                    title="Ắc quy mô tô Toplite"><img
                    src="dist/img/banners/2.jpg"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="section slds-m-top_large slds-m-bottom_large">
        <div class="container">
          <h3 class="section__heading">Ắc quy ô tô</h3>
          <div class="section__body">
            <?php $products = [1, 2, 3, 4, 5, 6, 7, 8]; ?>
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
          </div>
        </div>
      </section>
      
      <section class="section slds-m-top_large slds-m-bottom_large">
        <div class="container">
          <h3 class="section__heading">Ắc quy xe phân khối lớn</h3>
          <div class="section__body">
            <?php $products = [1, 2, 3, 4]; ?>
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
          </div>
        </div>
      </section>
      
      <section class="section slds-m-top_large slds-m-bottom_large">
        <div class="container">
          <h3 class="section__heading">Ắc quy ô tô truyền thống</h3>
          <div class="section__body">
            <?php $products = [1, 2, 3, 4]; ?>
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
          </div>
        </div>
      </section>
    </main>
  </div>
</div>
<?php include 'partials/footer.php';?>
</body>
</html>