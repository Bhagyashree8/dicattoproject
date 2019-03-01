
<?php include ('header.php');?>
<?php include ('nav.php');?>
<?php include ('sidebar.php');?>

<div class="row">
          <!-- Column -->
          <div class="col-lg-12 col-md-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-20 mt-0 align-self-center">Add new Product</h5>
                <div class="row">
                  <div class="col-lg-4 col-md-4">
                    <div class="relative">
                      <div id="amazingslider-wrapper-1" class="mb-40">
                        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                          <ul class="amazingslider-slides" style="display:none;">
                            <li><a href="../assets/images/gallery/a-lightbox.jpg" class="html5lightbox"><img src="../assets/images/gallery/a.jpg" alt="" title="" /></a> </li>
                            <li><a href="../assets/images/gallery/4-lightbox.jpg" class="html5lightbox"><img src="../assets/images/gallery/4.jpg" alt="" title="" /></a> </li>
                            <li><a href="../assets/images/gallery/13-lightbox.jpg" class="html5lightbox"><img src="../assets/images/gallery/13.jpg" alt="" title="" /></a> </li>
                            <li><a href="../assets/images/gallery/19-lightbox.jpg" class="html5lightbox"><img src="../assets/images/gallery/19.jpg" alt="" title="" /></a> </li>
                          </ul>
                          <ul class="amazingslider-thumbnails" style="display:none;">
                            <li><img src="../assets/images/gallery/a-tn.jpg" alt="" title="" /></li>
                            <li><img src="../assets/images/gallery/4-tn.jpg" alt="" title="" /></li>
                            <li><img src="../assets/images/gallery/13-tn.jpg" alt="" title="" /></li>
                            <li><img src="../assets/images/gallery/19-tn.jpg"  alt="" title="" /></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="upload-photo">
                      <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="" />
                    </div>
                  </div>
                  <!-- End of product slider -->
                  <div class="col-lg-8 col-md-8">
                    <div class="row">
                      <div class="form-wrap form-wrap2 col-12 mt-4">
                        <form class="form-horizontal">
                          <div class="col-sm-12 col-xs-12">
                            <div class="form-group">
                              <label class="control-label text-primary font-12">Product Name</label>
                              <div>
                                <input type="email" class="form-control font-14"  placeholder="Name">
                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="form-group">
                            <div class="row m-0">
                              <div class="col-sm-6 col-xs-12">
                                <label class="control-label font-14">Select Category</label>
                                <div>
                                  <select class="custom-select font-14" data-style="btn-default btn-outline">
                                    <option  data-tokens="Category">Select Category </option>
                                    <option data-tokens="Category 1">Category 1</option>
                                    <option data-tokens="Category 2">Category 2</option>
                                    <option data-tokens="Category 3">Category 3</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6 col-xs-12">
                                <label class="control-label font-14">SKU identification</label>
                                <div >
                                  <input type="text" class="form-control font-14"  placeholder="SKU">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="form-group">
                            <div class="row m-0">
                              <div class="col-md-3 col-xs-12">
                                <label class="control-label font-14">Unit Price</label>
                                <div>
                                  <input type="text" class="form-control font-14"  placeholder="Unit Price">
                                </div>
                              </div>
                              <div class="col-md-6 col-xs-12">
                                <label class="control-label font-14 ">Currency</label>
                                <div >
                                  <select class="custom-select" data-style="btn-default btn-outline">
                                    <option  data-tokens="Category">Currency</option>
                                    <option data-tokens="Category 4">USD</option>
                                    <option data-tokens="Category 5">EURO</option>
                                    <option data-tokens="Category 6">Bitcoin</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-3 col-xs-12">
                                <label class="control-label">Quantity</label>
                                <div>
                                  <input type="text" class="form-control font-14"  placeholder="Quantity">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="form-group">
                            <div class="col-sm-12">
                              <label class="control-label">Tags</label>
                              <div class="tags-default">
                                   <select multiple data-role="tagsinput">
                                    <option value="Amsterdam">Amsterdam</option>
                                    <option value="Washington">Washington</option>
                                    <option value="Sydney">Sydney</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-12">
                              <label class="col-12">Description</label>
                              <div class="col-12">
                                <textarea class="form-control textarea-lg"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="form-group bt-switch row">
                            <div class="col-md-6 pl-30">
                              <div class="">
                                 <input type="checkbox" checked data-on-color="success" data-off-color="info" data-on-text="Yes" data-off-text="No">
                                <label class="m-l-10"> Available</label>
                              </div>
                            </div>
                            <div class="col-md-6 text-right pr-30">
                              <div class="5">
                                <button type="button" class="btn waves-effect waves-light btn-primary">Save</button>
                                <button type="button" class="btn waves-effect waves-light btn-outline-default">Cancel</button>
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
        </div>