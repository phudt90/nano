<div class="header-search mb-2" style="display:none;">
  <div class="form-search-wrapper">
    <form class="form-search">
      <div class="form-search__wrap typeahead__container">
        <div class="form-search__input typeahead__field">
          <span class="typeahead__query">
            <input type="text" name="q" autocomplete="off" placeholder="Tìm sản phẩm, danh mục hay thương hiệu mong muốn ..." class="js-autocomplete-input form-control" />
          </span>
        </div>
        <div class="form-search__actions typeahead__button">
          <button type="submit" class="btn btn-search red"><i class="fa fa-search"></i> <span>Tìm kiếm</span></button>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="header-search">
  <div class="form-search-wrapper">
    <form class="form-search slds-form slds-form_compound">
      <div class="form-search__wrap">
        <div class="form-search__input">
          <div class="q-search slds-form-element__group">
            <div class="q-search__inner slds-form-element__row slds-grid_vertical-align-center slds-gutters_xxx-small">
              <div class="slds-form-element slds-size_5-of-12">
                <div class="q-search__element">
                  <select name="vbrand" 
                    class="form-control fc-vbrand" 
                    data-placeholder="-- Chọn thương hiệu xe --"
                    data-allow-clear="true">
                    <option>-- Chọn thương hiệu xe --</option>
                    <option value="1">option 1</option>
                    <option value="2">option 2</option>
                    <option value="3">option 3</option>
                    <option value="4">option 4</option>
                    <option value="5">option 5</option>
                  </select>
                </div>
              </div>
              <div class="slds-form-element slds-size_5-of-12">
                <div class="q-search__element">
                  <select name="vmodel" 
                    class="form-control fc-vmodel"
                    data-placeholder="-- Chọn dòng xe --"
                    data-allow-clear="true"
                    data-options="{vmodel_options}">
                    <option>-- Chọn dòng xe --</option>
                  </select>
                </div>
              </div>
              <div class="slds-form-element slds-size_2-of-12">
                <div class="form-search__actions typeahead__button">
                  <button type="submit" class="btn btn-search red">
                    <i class="fa fa-search"></i> <span>Tìm kiếm</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>