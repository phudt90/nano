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
          <h1 class="page-title">Đặt hàng</h1>
        </div>
        
        <div class="checkout mb-4">
          <form class="slds-form slds-form_stacked" enctype="multipart/form-data" name="field" action="javascript:;" method="post" autocomplete="off">
            <div class="slds-grid slds-wrap slds-gutters">
              <div class="slds-col slds-size_12-of-12 slds-large-size_8-of-12">
                <div class="portlet">
                  <div class="portlet-body">
                    <div class="checkout__order-info">
                      <div class="row">
                        <div class="col-md-12 col-12">
                          <div class="slds-form-element mb-4">
                            <label class="slds-form-element__label" title="">Họ tên <span class="mandatory">*</span></label>
                            <input required="required" placeholder="Họ tên" class="form-control" type="text" name="tx_powermail_pi1[field][hoten]" value="">
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-6 col-12">
                          <div class="slds-form-element mb-4">
                            <label class="slds-form-element__label" title="">Email <span class="mandatory">*</span></label>
                            <input required="required" placeholder="Email" class="form-control" type="text" name="tx_powermail_pi1[field][email]" value="">
                          </div>
                        </div>
                        <div class="col-md-6 col-12">
                          <div class="slds-form-element mb-4">
                            <label class="slds-form-element__label" title="">Số điện thoại <span class="mandatory">*</span></label>
                            <input required="required" placeholder="Số điện thoại" class="form-control" type="text" name="tx_powermail_pi1[field][sdt]" value="">
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-12 col-12">
                          <div class="slds-form-element mb-4">
                            <label class="slds-form-element__label" title="">Địa chỉ <span class="mandatory">*</span></label>
                            <input required="required" placeholder="Địa chỉ" class="form-control" type="text" name="tx_powermail_pi1[field][hoten]" value="">
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-12 col-12">
                          <div class="slds-form-element mb-4">
                            <label class="slds-form-element__label" title="">Ghi chú đơn hàng</label>
                            <textarea rows="5" cols="20" placeholder="Ghi chú đơn hàng" class="form-control" id="powermail_field_comment" name="tx_nano_pagecheckout[order][comment]"></textarea>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="slds-col slds-size_12-of-12 slds-large-size_4-of-12">
                <div class="portlet">
                  <div class="portlet-body">
                    <div class="checkout__order-products">
                      <table>
                        <thead>
                          <tr>
                            <th colspan="2">Sản phẩm</th>
                            <th>Số lượng</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="thumb">
                              <a href="javascript:;">
                                <img src="dist/img/product/thumb/1.jpg" width="50" height="34" alt="">
                              </a>
                            </td>
                            <td class="name">
                              <a href="javascript:;">Ắc quy ô tô DAEWOO DIN 56219 12V 62Ah </a>
                            </td>
                            <td class="qty">1</td>
                          </tr>
                          <tr>
                            <td class="thumb">
                              <a href="javascript:;">
                                <img src="dist/img/product/thumb/2.jpg" width="50" height="34" alt="">
                              </a>
                            </td>
                            <td class="name">
                              <a href="javascript:;">Ắc quy ô tô DAEWOO DIN 56219 12V 62Ah </a>
                            </td>
                            <td class="qty">4</td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="text-center">
                        <input type="submit" class="btn btn-md btn-checkout red" value="Gửi thông tin đặt hàng">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </main>
  </div>
</div>
<?php include 'partials/footer.php';?>
</body>
</html>