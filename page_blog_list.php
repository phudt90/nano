<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include_once 'partials/head.php'; ?>
<body>

<div id="page" class="site layout-bg-white">
  <?php include_once 'partials/header.php'; ?>
  
  <div id="content" class="site-content">
    <main id="main" class="site-main">
      <?php include 'partials/breadcrumb.php';?>

      <div class="container">
        <div class="page-title-wrapper">
          <h1 class="page-title">Kiến thức ắc quy</h1>
        </div>
        <div class="slds-grid slds-wrap slds-gutters">
          <div class="slds-col slds-size_12-of-12 slds-large-size_8-of-12">
            <?php $items = [1, 2, 3, 4]; ?>
            <div class="blog-list">
              <div class="slds-grid slds-wrap slds-gutters">
                <?php foreach($items as $item) { ?>
                <div class="slds-col slds-size_12-of-12 slds-medium-size_6-of-12 slds-large-size_6-of-12">
                  <article class="blog-list__article main-post" itemscope="itemscope" itemtype="http://schema.org/Article">
                    <div class="blog-list__img-wrap">
                      <a href="javascript:;" title="Các câu hỏi thường gặp về ắc quy khởi động động cơ">
                        <img src="dist/img/blog/<?php echo $item ?>.jpg" alt="">
                      </a>
                    </div>
                    <div class="blog-list__content-post">
                      <h3 class="blog-list__title-post">
                        <a href="javascript:;"title="Các câu hỏi thường gặp về ắc quy khởi động động cơ">
                          <span itemprop="headline">Các câu hỏi thường gặp về ắc quy khởi động động cơ</span>
                        </a>
                      </h3>
                      <ul class="blog-list__meta-post">
                        <li class="meta-post-date">
                          <span>
                            <i class="fa fa-pencil"></i>
                            <time datetime="2018-04-30">
                              04/30/2018
                              <meta itemprop="datePublished" content="2018-04-30">
                            </time>
                          </span>
                        </li>
                      </ul>
                      <div class="blog-list__entry-post">
                        <div itemprop="description">
                          <p>Khi mức nước điện phân ở trong từng ngăn bình
                            ắc quy nằm dưới vạch Min hoặc cách nắp bình hơn
                            19mm bạn nên châm thêm nước lọc RO đến mức thích
                            hợp...</p>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="slds-col slds-size_12-of-12 slds-large-size_4-of-12">
            <div class="sidebar">
              <div class="widget widget-categories">
                <h5 class="widget__title">Danh mục bài viết</h5>
                <ul class="list-unstyled">
                  <li><a href="javascript:;">Clinics and Services</a></li>
                  <li><a href="javascript:;">General Updates</a></li>
                  <li><a href="javascript:;">Medical Equipment</a></li>
                  <li><a href="javascript:;">Online Diagnostic</a></li>
                  <li><a href="javascript:;">Prolong Your Life</a></li>
                  <li><a href="javascript:;">You Need to Know</a></li>
                </ul>
              </div>
              
              <div class="widget widget-tags">
                <h5 class="widget__title">Thẻ</h5>
                <div class="widget-tags__cloud clearfix">
                  <a href="javascript:;">Diagnostic</a>
                  <a href="javascript:;">Laboratory</a>
                  <a href="javascript:;">Methods</a>
                  <a href="javascript:;">Patients</a>
                  <a href="javascript:;">Surgery</a>
                  <a href="javascript:;">Treatment</a>
                </div>
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