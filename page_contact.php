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
          <h1 class="page-title">Liên hệ</h1>
        </div>
        <div class="slds-grid slds-wrap slds-gutters">
          <div class="slds-col slds-size_12-of-12 slds-large-size_8-of-12">
            <div class="portlet">
              <div class="portlet-body">
              <form enctype="multipart/form-data" name="field" class="slds-form slds-form_stacked"
                action="javascript:;" method="post" autocomplete="off">
                <div class="row">
                  <div class="col-md-6">
                    <div class="slds-form-element mb-4">
                      <label class="slds-form-element__label" title=""> Họ tên<span class="mandatory">*</span></label>
                      <div class="powermail_field">
                        <input required="required" placeholder="Họ tên" class="form-control" type="text" name="tx_powermail_pi1[field][hoten]" value="">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="slds-form-element mb-4">
                      <label class="slds-form-element__label" title=""> Email<span
                        class="mandatory">*</span></label>
                      <div class="powermail_field">
                        <input required="required"
                          data-parsley-required-message="Vui lòng nhập thông tin này!"
                          data-parsley-trigger="change"
                          data-parsley-error-message="Địa chỉ Email không hợp lệ!"
                          placeholder="Địa chỉ Email"
                          class="form-control"
                          id="powermail_field_email" type="email"
                          name="tx_powermail_pi1[field][email]" value="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="slds-form-element mb-4">
                      <label class="slds-form-element__label" title=""> Số điện thoại<span
                        class="mandatory">*</span></label>
                      <div class="powermail_field">
                        <input required="required"
                          data-parsley-required-message="Vui lòng nhập thông tin này!"
                          data-parsley-trigger="change"
                          placeholder="Số điện thoại"
                          class="powermail_input form-control "
                          id="powermail_field_sodienthoai" type="text"
                          name="tx_powermail_pi1[field][sodienthoai]"
                          value="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="slds-form-element mb-4">
                      <label class="slds-form-element__label" title=""> Nội dung liên
                        hệ<span class="mandatory">*</span>
                      </label>
                      <div class="powermail_field">
                        <textarea required="required"
                          data-parsley-required-message="Vui lòng nhập thông tin này!"
                          data-parsley-trigger="change"
                          data-parsley-error-message="Your input is not valid (too many or too less signs)"
                          rows="5" cols="20"
                          placeholder="Nội dung liên hệ"
                          class="powermail_textarea  form-control"
                          id="powermail_field_noidunglienhe"
                          name="tx_powermail_pi1[field][noidunglienhe]"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="slds-form-element mb-4">
                      <div class="powermail_field ">
                        <input class="powermail_submit btn btn-md btn-block red" type="submit" value="Gửi">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              </div>
            </div>
          </div>
          <div class="slds-col slds-size_12-of-12 slds-large-size_4-of-12">
            <div class="sidebar">
              <div class="widget widget-box-contact">
                <ul class="list-unstyled">
                  <li><h4 class="h2">
                      CÔNG TY TNHH XNK NANO <br>NANO BATTERY
                    </h4></li>
                  <li><h3>Địa chỉ</h3>
                    <p>590 Kinh Dương Vương, Phường An Lạc, Quận Bình
                      Tân, TP. Hồ Chí Minh.</p></li>
                  <li><h3>Hotline</h3>
                    <p>
                      <a href="tel:0903377985">0903 377 985</a>
                    </p></li>
                  <li><h3>Email</h3>
                    <p>
                      <a href="mailto:acquynano247@gmail.com">acquynano247@gmail.com</a>
                    </p></li>
                  <li><h3>Tài khoản</h3>
                    <p>
                      1401 0001 316 728<br>Ngân hàng BIDV - Chi nhánh
                      Sài Gòn
                    </p></li>
                  <li><h3>Follow Us</h3>
                    <ul class="social-list style2">
                      <li><a href="https://www.facebook.com/acquynano1/"
                        title="facebook"><i class="fa fa-facebook"
                          aria-hidden="true"></i></a></li>
                    </ul></li>
                </ul>
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