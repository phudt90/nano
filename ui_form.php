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
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="portlet">
                  <h2 class="portlet-title">Default Form</h2>
                  <div class="portlet-body">
                    <form class="slds-form slds-form_stacked" role="form">
                      <div class="slds-form-body">
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Email Address</label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-envelope"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Email Address">
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Circle Input</label>
                          <div class="input-group">
                            <span class="input-group-addon input-circle-left">
                            <i class="fa fa-envelope"></i>
                            </span>
                            <input type="text" class="form-control input-circle-right" placeholder="Email Address">
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Password</label>
                          <div class="input-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                            </span>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Left Icon</label>
                          <div class="input-icon">
                            <i class="fa fa-bell-o"></i>
                            <input type="text" class="form-control" placeholder="Left icon">
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Left Icon(.form-control-sm)</label>
                          <div class="input-icon input-icon-sm">
                            <i class="fa fa-bell-o"></i>
                            <input type="text" class="form-control form-control-sm" placeholder="Left icon">
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Left Icon(.form-control-lg)</label>
                          <div class="input-icon input-icon-lg">
                            <i class="fa fa-bell-o"></i>
                            <input type="text" class="form-control form-control-lg" placeholder="Left icon">
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Right Icon</label>
                          <div class="input-icon right">
                            <i class="fa fa-microphone"></i>
                            <input type="text" class="form-control" placeholder="Right icon">
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Right Icon(.form-control-sm)</label>
                          <div class="input-icon input-icon-sm right">
                            <i class="fa fa-bell-o"></i>
                            <input type="text" class="form-control form-control-sm" placeholder="Left icon">
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Right Icon(.form-control-lg)</label>
                          <div class="input-icon input-icon-lg right">
                            <i class="fa fa-bell-o"></i>
                            <input type="text" class="form-control form-control-lg" placeholder="Left icon">
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Circle Input</label>
                          <div class="input-icon right">
                            <i class="fa fa-microphone"></i>
                            <input type="text" class="form-control input-circle" placeholder="Right icon">
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Input with Icon</label>
                          <div class="input-group input-icon right">
                            <span class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                            </span>
                            <i class="fa fa-exclamation tooltips" data-original-title="Invalid email." data-container="body"></i>
                            <input id="email" class="input-error form-control" type="text" value="">
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Input With Spinner</label>
                          <input class="form-control spinner" type="text" placeholder="Process something">
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Static Control</label>
                          <p class="form-control-static">
                             email@example.com
                          </p>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Disabled</label>
                          <input type="text" class="form-control" placeholder="Disabled" disabled="">
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Readonly</label>
                          <input type="text" class="form-control" placeholder="Readonly" readonly="">
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Dropdown</label>
                          <select class="form-control">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                            <option>Option 5</option>
                          </select>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Multiple Select</label>
                          <select multiple="" class="form-control">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                            <option>Option 5</option>
                          </select>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Textarea</label>
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">File input</label>
                          <input type="file" id="exampleInputFile1">
                          <p class="slds-form-element__help">some help text here.</p>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Checkboxes</label>
                          <div class="checkbox-list">
                            <fieldset class="slds-form-element">
                              <div class="slds-form-element__control">
                                <span class="slds-checkbox">
                                  <input type="checkbox" name="options" value="" id="checkboxes_1" />
                                  <label class="slds-checkbox__label" for="checkboxes_1">
                                    <span class="slds-checkbox_faux"></span>
                                    <span class="slds-form-element__label">Checkbox 1</span>
                                  </label>
                                </span>
                              </div>
                              <div class="slds-form-element__control">
                                <span class="slds-checkbox">
                                  <input type="checkbox" name="options" value="" id="checkboxes_2" />
                                  <label class="slds-checkbox__label" for="checkboxes_2">
                                    <span class="slds-checkbox_faux"></span>
                                    <span class="slds-form-element__label">Checkbox 2</span>
                                  </label>
                                </span>
                              </div>
                              <div class="slds-form-element__control">
                                <span class="slds-checkbox">
                                  <input type="checkbox" name="options" value="" id="checkboxes_3" disabled="" />
                                  <label class="slds-checkbox__label" for="checkboxes_3">
                                    <span class="slds-checkbox_faux"></span>
                                    <span class="slds-form-element__label">Checkbox 3</span>
                                  </label>
                                </span>
                              </div>
                            </fieldset>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Inline Checkboxes</label>
                          <div class="checkbox-list">
                            <fieldset class="slds-form-element">
                              <div class="slds-form-element__control">
                                <span class="slds-checkbox slds-checkbox--inline">
                                  <input type="checkbox" name="options" value="" id="checkboxes_inline_1" />
                                  <label class="slds-checkbox__label" for="checkboxes_inline_1">
                                    <span class="slds-checkbox_faux"></span>
                                    <span class="slds-form-element__label">Checkbox 1</span>
                                  </label>
                                </span>
                                <span class="slds-checkbox slds-checkbox--inline">
                                  <input type="checkbox" name="options" value="" id="checkboxes_inline_2" />
                                  <label class="slds-checkbox__label" for="checkboxes_inline_2">
                                    <span class="slds-checkbox_faux"></span>
                                    <span class="slds-form-element__label">Checkbox 2</span>
                                  </label>
                                </span>
                                <span class="slds-checkbox slds-checkbox--inline">
                                  <input type="checkbox" name="options" value="" id="checkboxes_inline_3" disabled="" />
                                  <label class="slds-checkbox__label" for="checkboxes_inline_3">
                                    <span class="slds-checkbox_faux"></span>
                                    <span class="slds-form-element__label">Checkbox 3</span>
                                  </label>
                                </span>
                              </div>
                            </fieldset>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Radio</label>
                          <div class="radio-list">
                            <fieldset class="slds-form-element">
                              <div class="slds-form-element__control">
                                <span class="slds-radio">
                                  <input type="radio" id="radio-1" value="radio-1" name="options" />
                                  <label class="slds-radio__label" for="radio-1">
                                    <span class="slds-radio_faux"></span>
                                    <span class="slds-form-element__label">Radio Label One</span>
                                  </label>
                                </span>
                                <span class="slds-radio">
                                  <input type="radio" id="radio-2" value="radio-2" name="options" />
                                  <label class="slds-radio__label" for="radio-2">
                                    <span class="slds-radio_faux"></span>
                                    <span class="slds-form-element__label">Radio Label Two</span>
                                  </label>
                                </span>
                                <span class="slds-radio">
                                  <input type="radio" id="radio-3" value="radio-3" name="options" disabled="" />
                                  <label class="slds-radio__label" for="radio-3">
                                    <span class="slds-radio_faux"></span>
                                    <span class="slds-form-element__label">Radio Label Three</span>
                                  </label>
                                </span>
                              </div>
                            </fieldset>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Inline Radio</label>
                          <div class="radio-list">
                            <fieldset class="slds-form-element">
                              <div class="slds-form-element__control">
                                <span class="slds-radio slds-radio--inline">
                                  <input type="radio" id="radio-inline-1" value="radio-inline-1" name="options" />
                                  <label class="slds-radio__label" for="radio-inline-1">
                                    <span class="slds-radio_faux"></span>
                                    <span class="slds-form-element__label">Radio Label One</span>
                                  </label>
                                </span>
                                <span class="slds-radio slds-radio--inline">
                                  <input type="radio" id="radio-inline-2" value="radio-inline-2" name="options" />
                                  <label class="slds-radio__label" for="radio-inline-2">
                                    <span class="slds-radio_faux"></span>
                                    <span class="slds-form-element__label">Radio Label Two</span>
                                  </label>
                                </span>
                                <span class="slds-radio slds-radio--inline">
                                  <input type="radio" id="radio-inline-3" value="radio-inline-3" name="options" disabled="" />
                                  <label class="slds-radio__label" for="radio-inline-3">
                                    <span class="slds-radio_faux"></span>
                                    <span class="slds-form-element__label">Radio Label Three</span>
                                  </label>
                                </span>
                              </div>
                            </fieldset>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions">
                        <button type="submit" class="btn blue">Submit</button>
                        <button type="button" class="btn default">Cancel</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-6 col-12">
                <div class="portlet">
                  <h2 class="portlet-title">Horizontal Form</h2>
                  <div class="portlet-body">
                    <form class="slds-form slds-form_horizontal" role="form">
                      <div class="slds-form-body">
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Block Help</label>
                          <div class="slds-form-element__control">
                            <input type="text" class="form-control" placeholder="Enter text">
                            <span class="slds-form-element__help">A block of help text. </span>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Inline Help</label>
                          <div class="slds-form-element__control">
                            <input type="text" class="form-control input-inline input-medium" placeholder="Enter text">
                            <span class="slds-form-element__help">Inline help. </span>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Input Group</label>
                          <div class="slds-form-element__control">
                            <div class="input-inline input-medium">
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-user"></i>
                                </span>
                                <input type="email" class="form-control" placeholder="Email Address">
                              </div>
                            </div>
                            <span class="help-inline"> Inline help. </span>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Email Address</label>
                          <div class="slds-form-element__control">
                            <div class="input-group">
                              <span class="input-group-addon">
                              <i class="fa fa-envelope"></i>
                              </span>
                              <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Password</label>
                          <div class="slds-form-element__control">
                            <div class="input-group">
                              <input type="password" class="form-control" placeholder="Password">
                              <span class="input-group-addon">
                              <i class="fa fa-user"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Left Icon</label>
                          <div class="slds-form-element__control">
                            <div class="input-icon">
                              <i class="fa fa-bell-o"></i>
                              <input type="text" class="form-control" placeholder="Left icon">
                            </div>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Right Icon</label>
                          <div class="slds-form-element__control">
                            <div class="input-icon right">
                              <i class="fa fa-microphone"></i>
                              <input type="text" class="form-control" placeholder="Right icon">
                            </div>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Icon Input in Group Input</label>
                          <div class="slds-form-element__control">
                            <div class="input-group">
                              <div class="input-icon">
                                <i class="fa fa-lock fa-fw"></i>
                                <input id="newpassword" class="form-control" type="text" name="password" placeholder="password">
                              </div>
                              <span class="input-group-btn">
                              <button id="genpassword" class="btn btn-success" type="button"><i class="fa fa-arrow-left fa-fw"></i> Random</button>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Input With Spinner</label>
                          <div class="slds-form-element__control">
                            <input type="password" class="form-control spinner" placeholder="Password">
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Static Control</label>
                          <div class="slds-form-element__control">
                            <p class="form-control-static">
                               email@example.com
                            </p>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Disabled</label>
                          <div class="slds-form-element__control">
                            <input type="password" class="form-control" placeholder="Disabled" disabled="">
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Readonly</label>
                          <div class="slds-form-element__control">
                            <input type="password" class="form-control" placeholder="Readonly" readonly="">
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Dropdown</label>
                          <div class="slds-form-element__control">
                            <select class="form-control">
                              <option>Option 1</option>
                              <option>Option 2</option>
                              <option>Option 3</option>
                              <option>Option 4</option>
                              <option>Option 5</option>
                            </select>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Multiple Select</label>
                          <div class="slds-form-element__control">
                            <select multiple="" class="form-control">
                              <option>Option 1</option>
                              <option>Option 2</option>
                              <option>Option 3</option>
                              <option>Option 4</option>
                              <option>Option 5</option>
                            </select>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Textarea</label>
                          <div class="slds-form-element__control">
                            <textarea class="form-control" rows="3"></textarea>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label for="exampleInputFile" class="slds-form-element__label">File input</label>
                          <div class="slds-form-element__control">
                            <input type="file" id="exampleInputFile">
                            <p class="slds-form-element__help">some help text here.</p>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Checkboxes</label>
                          <div class="slds-form-element__control">
                            <fieldset class="slds-form-element">
                              <div class="slds-form-element__control">
                                <span class="slds-checkbox">
                                  <input type="checkbox" name="options" value="" id="h_checkboxes_1" />
                                  <label class="slds-checkbox__label" for="h_checkboxes_1">
                                    <span class="slds-checkbox_faux"></span>
                                    <span class="slds-form-element__label">Checkbox 1</span>
                                  </label>
                                </span>
                              </div>
                              <div class="slds-form-element__control">
                                <span class="slds-checkbox">
                                  <input type="checkbox" name="options" value="" id="h_checkboxes_2" />
                                  <label class="slds-checkbox__label" for="h_checkboxes_2">
                                    <span class="slds-checkbox_faux"></span>
                                    <span class="slds-form-element__label">Checkbox 2</span>
                                  </label>
                                </span>
                              </div>
                              <div class="slds-form-element__control">
                                <span class="slds-checkbox">
                                  <input type="checkbox" name="options" value="" id="h_checkboxes_3" disabled="" />
                                  <label class="slds-checkbox__label" for="h_checkboxes_3">
                                    <span class="slds-checkbox_faux"></span>
                                    <span class="slds-form-element__label">Checkbox 3</span>
                                  </label>
                                </span>
                              </div>
                            </fieldset>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Inline Checkboxes</label>
                          <div class="slds-form-element__control">
                            <div class="checkbox-list">
                              <fieldset class="slds-form-element">
                                <div class="slds-form-element__control">
                                  <span class="slds-checkbox slds-checkbox--inline">
                                    <input type="checkbox" name="options" value="" id="h_checkboxes_inline_1" />
                                    <label class="slds-checkbox__label" for="h_checkboxes_inline_1">
                                      <span class="slds-checkbox_faux"></span>
                                      <span class="slds-form-element__label">Checkbox 1</span>
                                    </label>
                                  </span>
                                  <span class="slds-checkbox slds-checkbox--inline">
                                    <input type="checkbox" name="options" value="" id="h_checkboxes_inline_2" />
                                    <label class="slds-checkbox__label" for="h_checkboxes_inline_2">
                                      <span class="slds-checkbox_faux"></span>
                                      <span class="slds-form-element__label">Checkbox 2</span>
                                    </label>
                                  </span>
                                  <span class="slds-checkbox slds-checkbox--inline">
                                    <input type="checkbox" name="options" value="" id="h_checkboxes_inline_3" disabled="" />
                                    <label class="slds-checkbox__label" for="h_checkboxes_inline_3">
                                      <span class="slds-checkbox_faux"></span>
                                      <span class="slds-form-element__label">Checkbox 3</span>
                                    </label>
                                  </span>
                                </div>
                              </fieldset>
                            </div>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Radio</label>
                          <div class="slds-form-element__control">
                            <div class="radio-list">
                              <fieldset class="slds-form-element">
                                <div class="slds-form-element__control">
                                  <span class="slds-radio">
                                    <input type="radio" id="h_radio-1" value="h_radio-1" name="options" />
                                    <label class="slds-radio__label" for="h_radio-1">
                                      <span class="slds-radio_faux"></span>
                                      <span class="slds-form-element__label">Radio Label One</span>
                                    </label>
                                  </span>
                                  <span class="slds-radio">
                                    <input type="radio" id="h_radio-2" value="h_radio-2" name="options" />
                                    <label class="slds-radio__label" for="h_radio-2">
                                      <span class="slds-radio_faux"></span>
                                      <span class="slds-form-element__label">Radio Label Two</span>
                                    </label>
                                  </span>
                                  <span class="slds-radio">
                                    <input type="radio" id="h_radio-3" value="h_radio-3" name="options" disabled="" />
                                    <label class="slds-radio__label" for="h_radio-3">
                                      <span class="slds-radio_faux"></span>
                                      <span class="slds-form-element__label">Radio Label Three</span>
                                    </label>
                                  </span>
                                </div>
                              </fieldset>
                            </div>
                          </div>
                        </div>
                        <div class="slds-form-element">
                          <label class="slds-form-element__label">Inline Radio</label>
                          <div class="slds-form-element__control">
                            <div class="radio-list">
                              <fieldset class="slds-form-element">
                                <div class="slds-form-element__control">
                                  <span class="slds-radio slds-radio--inline">
                                    <input type="radio" id="h_radio-inline-1" value="h_radio-inline-1" name="options" />
                                    <label class="slds-radio__label" for="h_radio-inline-1">
                                      <span class="slds-radio_faux"></span>
                                      <span class="slds-form-element__label">Radio Label One</span>
                                    </label>
                                  </span>
                                  <span class="slds-radio slds-radio--inline">
                                    <input type="radio" id="h_radio-inline-2" value="h_radio-inline-2" name="options" />
                                    <label class="slds-radio__label" for="h_radio-inline-2">
                                      <span class="slds-radio_faux"></span>
                                      <span class="slds-form-element__label">Radio Label Two</span>
                                    </label>
                                  </span>
                                  <span class="slds-radio slds-radio--inline">
                                    <input type="radio" id="h_radio-inline-3" value="h_radio-inline-3" name="options" disabled="" />
                                    <label class="slds-radio__label" for="h_radio-inline-3">
                                      <span class="slds-radio_faux"></span>
                                      <span class="slds-form-element__label">Radio Label Three</span>
                                    </label>
                                  </span>
                                </div>
                              </fieldset>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions">
                        <div class="row">
                          <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green">Submit</button>
                            <button type="button" class="btn default">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
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