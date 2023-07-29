<!-- header area start -->
<?php include('header.php'); ?>
<!-- header area end -->

<!-- section testimonial area start -->
<section class="rent-property mt-5 pb-5" style="position:relative;">
    <div class="container-fluid">
        <div class="max-wrapper">
            <div class="d-flex justify-content-start align-items-center">
                <nav aria-label="breadcrumb ms-3" style="font-size: 14px;">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Property for rent in Delhi / NCR</li>
                        </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="property-card p-3 border border-2 rounded shadow-lg bg-light ">
                        <div class="property-item" style="width:300px;">
                            <div class="d-flex justify-content-between align-items-center px-2 label-switch" style="border-bottom:1px solid #ccc;">
                                <h6 style="font-size:16px;">Hide already seen</h6>
                                <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                                </label>
                            </div>
                            <button class="accordion" onclick="activehandle()" style="background-color: #07133D; color: #fff;">Budget</button>
                            <div class="panel px-2" style="display: block; max-height: 138px;">
                                <form action="/action_page.php" class="mt-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2 label-btn">
                                        <label for="vol" class="bg-primary">0</label>
                                        <label for="vol" class="bg-primary">10+ Lacs</label>
                                    </div>
                                    <input type="range" id="vol" name="vol" min="0" max="100" value="100" step="10" style="width:100%;">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="form-group mb-4 label-btn">
                                            <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Min Budget</option>
                                                <option value="1">1000</option>
                                                <option value="2">5000</option>
                                                <option value="3">10000</option>
                                                <option value="4">25000</option>
                                                <option value="5">50000</option>
                                                <option value="6">1 Lacs</option>
                                                <option value="7">1.5 Lacs</option>
                                                <option value="8">2 Lacs</option>
                                                <option value="9">2.5 Lacs</option>
                                                <option value="10">3 Lacs</option>
                                                <option value="11">3.5 Lacs</option>
                                                <option value="12">4 Lacs</option>
                                                <option value="13">4.5 Lacs</option>
                                                <option value="14">5 Lacs</option>
                                                <option value="15">6 Lacs</option>
                                                <option value="16">7 Lacs</option>
                                                <option value="17">8 Lacs</option>
                                                <option value="18">9 Lacs</option>
                                                <option value="19">10+ Lacs</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4 label-btn">
                                            <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Max Budget</option>
                                                <option value="1">1000</option>
                                                <option value="2">5000</option>
                                                <option value="3">10000</option>
                                                <option value="4">25000</option>
                                                <option value="5">50000</option>
                                                <option value="6">1 Lacs</option>
                                                <option value="7">1.5 Lacs</option>
                                                <option value="8">2 Lacs</option>
                                                <option value="9">2.5 Lacs</option>
                                                <option value="10">3 Lacs</option>
                                                <option value="11">3.5 Lacs</option>
                                                <option value="12">4 Lacs</option>
                                                <option value="13">4.5 Lacs</option>
                                                <option value="14">5 Lacs</option>
                                                <option value="15">6 Lacs</option>
                                                <option value="16">7 Lacs</option>
                                                <option value="17">8 Lacs</option>
                                                <option value="18">9 Lacs</option>
                                                <option value="19">10+ Lacs</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <button class="accordion mt-3" style="background-color: #07133D; color: #fff;">No. of Bedrooms</button>
                            <div class="panel px-2" style="display:block;max-height: 158px;">
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>1 RK/1 BHK</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>2 BHK</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>3 BHK</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>4 BHK</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>5 BHK</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>6 BHK</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>7 BHK</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>8 BHK</span>
                                </div>
                            </div>
                            <button class="accordion mt-3">Type of property</button>
                            <div class="panel px-2" style="display:block;">
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Residential Apartment</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Independent/Builder Floor</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Residential Land</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Independent House/Villa</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Independent House/Villa</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Farm House</span>
                                </div>
                            </div>
                            <button class="accordion mt-3">Available for</button>
                            <div class="panel px-2" style="display:block;">
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Family</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Single Women</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Single Men</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Tenants with Company Lease</span>
                                </div>
                            </div>
                            <button class="accordion mt-3">Posted by</button>
                            <div class="panel px-2" style="display:block;">
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Owner</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Builder</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Dealer</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Feature Dealer</span>
                                </div>
                            </div>
                            <button class="accordion mt-3">Furnishing status</button>
                            <div class="panel px-2" style="display:block;">
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Semifurnished</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Furnished</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Unfurnished</span>
                                </div>
                            </div>
                            <button class="accordion mt-3">Localities</button>
                            <div class="panel px-3" style="display:block;">
                                <div class="form-check form-check-inline mt-2 ps-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input me-2" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1" style="font-size: 15px;">Golf Course Ext Road</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline mt-2 ps-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input me-2" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1" style="font-size: 15px;">New Gurgaon</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline mt-2 ps-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input me-2" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1" style="font-size: 15px;">Dwarka Expressway Gurgaon</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline mt-2 ps-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input me-2" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1" style="font-size: 15px;">Golf Course Road</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline mt-2 ps-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input me-2" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1" style="font-size: 15px;">Sector 65 Gurgaon</label>
                                    </div>
                                </div>
                            </div>
                            <button class="accordion mt-3">New Projects / Societies</button>
                            <div class="panel px-4" style="display:block;">
                            <div class="form-check form-check-inline mt-2 ps-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input me-2" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1" style="font-size: 15px;">Emaar Digihomes</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline mt-2 ps-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input me-2" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1" style="font-size: 15px;">Ireo Skyon</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline mt-2 ps-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input me-2" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1" style="font-size: 15px;">Emaar MGF The Palm Drive</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline mt-2 ps-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input me-2" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1" style="font-size: 15px;">Emaar MGF Emerald Floors</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline mt-2 ps-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input me-2" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1" style="font-size: 15px;">M3M Golfestate</label>
                                    </div>
                                </div>
                            </div>
                            <button class="accordion mt-3">No. of bathrooms</button>
                            <div class="panel px-2" style="display:block;">
                                <div class="resident mt-2">
                                    <span>1</span>
                                    <span><i class="fas fa-plus me-2"></i></span>
                                </div>
                                <div class="resident mt-2">
                                    <span>2</span>
                                    <span><i class="fas fa-plus me-2"></i></span>
                                </div>
                                <div class="resident mt-2">
                                    <span>3</span>
                                    <span><i class="fas fa-plus me-2"></i></span>
                                </div>
                                <div class="resident mt-2">
                                    <span>4</span>
                                    <span><i class="fas fa-plus me-2"></i></span>
                                </div>
                                <div class="resident mt-2">
                                    <span>5</span>
                                    <span><i class="fas fa-plus me-2"></i></span>
                                </div>
                            </div>
                            <button class="accordion mt-3">Amenities</button>
                            <div class="panel px-2" style="display:block;">
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Parking</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Park</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Power Backup</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Lift</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Gas Pipeline</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center px-2 label-switch" style="border-bottom:1px solid #ccc;">
                            <h6 style="font-size:16px;">Properties with photos</h6>
                            <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                            </label>
                            </div>
                            <button class="accordion mt-3">Area</button>
                            <div class="panel px-2" style="display:block;">
                            <form action="/action_page.php" class="mt-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2 label-btn">
                                        <label for="vol" class="bg-primary">0 sq.ft</label>
                                        <label for="vol" class="bg-primary">400+ sq.ft</label>
                                    </div>
                                    <input type="range" id="vol" name="vol" min="0" max="100" value="100" step="10" style="width:100%;">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="form-group mb-4 label-btn">
                                            <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Min Area</option>
                                                <option value="1">100</option>
                                                <option value="2">200</option>
                                                <option value="3">300</option>
                                                <option value="4">400</option>
                                                <option value="5">500</option>
                                                <option value="6">600</option>
                                                <option value="7">700</option>
                                                <option value="8">800</option>
                                                <option value="9">900</option>
                                                <option value="10">1000</option>
                                                <option value="11">1500</option>
                                                <option value="12">2000</option>
                                                <option value="13">2500</option>
                                                <option value="14">3000</option>
                                                <option value="15">3500</option>
                                                <option value="16">4000</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4 label-btn">
                                            <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Max Area</option>
                                                <option value="1">100</option>
                                                <option value="2">200</option>
                                                <option value="3">300</option>
                                                <option value="4">400</option>
                                                <option value="5">500</option>
                                                <option value="6">600</option>
                                                <option value="7">700</option>
                                                <option value="8">800</option>
                                                <option value="9">900</option>
                                                <option value="10">1000</option>
                                                <option value="11">1500</option>
                                                <option value="12">2000</option>
                                                <option value="13">2500</option>
                                                <option value="14">3000</option>
                                                <option value="15">3500</option>
                                                <option value="16">4000</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <button class="accordion mt-3">Available from</button>
                            <div class="panel px-2" style="display:block;">
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Residential Apartment</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Any Time</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Immediately</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Within 1 Month</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>After 1 Month</span>
                                </div>
                                <div class="resident mt-2">
                                    <span><i class="fas fa-plus me-2"></i></span>
                                    <span>Within 3 Months</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center px-2 label-switch" style="border-bottom:1px solid #ccc;">
                            <h6 style="font-size:16px;">Verified properties</h6>
                            <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                            </label>
                            </div>
                            <button class="accordion mt-3">Age of Property</button>
                            <div class="panel px-2" style="display:block;">
                                <div class="resident mt-2">
                                    <span>0-1 years old</span>
                                </div>
                                <div class="resident mt-2">
                                    <span>1-5 years old</span>
                                </div>
                                <div class="resident mt-2">
                                    <span>5-10 years old</span>
                                </div>
                                <div class="resident mt-2">
                                    <span>10</span>
                                    <span><i class="fas fa-plus"></i> years old</span>
                                </div>
                                <div class="resident mt-2">
                                    <span>20</span>
                                    <span><i class="fas fa-plus"></i> years old</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8" style="position:relative;">
                    <div class="title_l_bold Ng800 spacer4 fw-normal">37630 results | <span>Property for Rent in Delhi / NCR </span></div>
                    <div class="d-flex justify-content-between align-items-center py-4">
                        <div class="button-group">
                            <button type="button" class="btn waves-effect waves-light btn-rounded  btn-outline-primary me-2">Owner</button>
                            <button type="button" class="btn waves-effect waves-light btn-rounded  btn-outline-primary me-2">Verified</button>
                            <button type="button" class="btn waves-effect waves-light btn-rounded  btn-outline-primary me-2">Furnished</button>
                            <button type="button" class="btn waves-effect waves-light btn-rounded  btn-outline-primary me-2">With Photos</button>
                        </div>
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="#" class="me-3">
                                <svg data-role="menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" height="20" width="20" style="color: #000;">
                                    <path d="M2 4.5H14V3H2V4.5ZM4.25 12H14V10.5L4.25 10.5V12ZM14 8.25005H8V6.75005H14V8.25005Z" fill="currentColor" id="menu"></path>
                                </svg>
                            </a>
                            <a href="#" class="me-3 text-dark fw-bold" style="font-size: 14px;"> Sort By</a>
                            <a href="#"><i class="fas fa-angle-down text-dark"></i></a>
                        </div>
                    </div>
                        <div class="row border border-0 rounded shadow-lg buy-height property-blog">
                            <div class="col-6 p-0" style="position:relative;">
                                <div class="row sick-slider">
                                    <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                                    <img src="images/p2.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                                    <img src="images/p3.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                                    <img src="images/p4.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                                </div>
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <input type="checkbox" class="material-inputs" id="basic_checkbox_2" checked="">
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <input type="checkbox" class="material-inputs" id="basic_checkbox_2" checked="">
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <input type="checkbox" class="material-inputs" id="basic_checkbox_2" checked="">
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-0 rounded shadow-lg mt-4 buy-height property-blog">
                            <div class="col-6 p-0">
                                <img src="images/p1.jpg" alt="" style="width:100%; height: 386px; border-radius:8px;">
                            </div>
                            <div class="col-6 my-3 p-0 bg-light">
                                <div class="blog-2">
                                    <h2 class="px-4">3 BHK Independent Builder Floor in Gyan Khand</h2>
                                    <div class="row mt-3 px-4 d-flex flex-nowrap justify-content-center align-items-center">
                                        <div class="ps-0 col-3 d-flex justify-content-center align-items-center">
                                            <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                            <div class="card-icon-text"><strong>49</strong> Places  nearby</div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary" style="font-size: 9px;"><strong>3</strong> Religious Places</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>19</strong> Hospitals</div>
                                            </div>
                                        </div>
                                        <div class="ps-0 col-3">
                                            <div class="px-2 d-flex flex-nowrap justify-content-center align-items-center border border-1 border-primary rounded-pill bg-light">
                                                <div class="card-icon-slider"><i class="text-info pe-2 fas fa-location"></i></div>
                                                <div class="card-icon-text text-secondary"><strong>1</strong> Attraction</div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row mt-3 px-4 d-flex flex-row justify-content-start align-items-center">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">₹ 72 L</h3>
                                                <small class="text-muted text-center">₹ 4,500/sq.ft.</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">1,600 <sub class="square">sq.ft.</sub></h3>
                                                <small class="text-muted text-center">(149 sq.m.) Super built-up Area</small>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h3 class="buy-title mb-0 text-center">3 BHK</h3>
                                                <small class="text-muted text-center">2 Baths</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3 d-flex justify-content-start flex-wrap align-items-center desktopSrpUsps__premiumBluetag  pageComponent">
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">East Facing</span>
                                        </div>
                                        <div class="col-3 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Private Garden</span>
                                        </div>
                                        <div class="col-4 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Vaishali metro  within 1km</span>
                                        </div>
                                        <!-- <div class="col-5 d-flex justify-content-around align-items-center">
                                            <i class="desktopSrpUsps__tickGrn"></i>
                                            <span class="desktopSrpUsps__capitalise">Indirapuram public school within 500m</span>
                                        </div> -->
                                    </div>
                                    <button class="accordion px-4 py-3">This luxurious builder floor is strategically located at indirapuram. The apart</button>
                                    <div class="panel px-4" style="display:block;">
                                    <p>This luxurious builder floor is strategically located at indirapuram. The apartment comes with all modern facilities. The house features wooden cabinets & modular fittings in the kitchen. Bedroom comes with large closet, vitrified flooring, an adjoined suited bathroom with oversized shower. The property rest on 60 ft. ...</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center ms-4 pb-2">
                                        <div variant="featuredTag" id="srp_tuple_featured_tags_0" class=" pageComponentundefined badges__featuredTag undefined  ">
                                            <div class="null">FEATURED</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">READY TO MOVE</div>
                                        </div>
                                        <div variant="secondaryLargeSubtle" id="srp_tuple_secondary_tags_0" class="ms-4 pageComponentundefined badges__secondaryLargeSubtle undefined  ">
                                            <div class="null">Resale</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center py-3 bg-light rounded">
                                        <a href="#" class="btn border border-0 btn-md text-primary pe-4">View Phone Number</a>
                                        <a href="#" class="btn border border-0 btn-md btn-primary font-weight-bolder text-white me-3 d-flex align-items-center justify-content-center">Contact Dealer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section testimonial area start -->

<!-- footer area start -->
<?php include('footer.php'); ?>
<!-- footer area end -->