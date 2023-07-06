<?php include('header.php'); ?>

<!-- section area start-->
    <section class="banner-area p-0">
        <div class="search-area">
            <div class="banner-content">
                <img src="images/faq.png" style="height:300px; width:100%;">
            </div>
            <h1 class="logo mb-0 banner-content-h">Ghar lena ho ya bechana<br> brokers365 se hi puchhna</h1>
        </div> 
    </section>
<!-- section area end-->

<!-- section area SearchBox start-->
    <section class="SearchBox">
                    <div class="search-tab">
                        <div class="tab d-flex flex-row justify-content-center align-items-center">
                            <button class="tablinks active ms-3" onclick="openCity(event, 'Buy')">Buy</button>
                            <button class="tablinks" onclick="openCity(event, 'Rent')">Rent</button>
                            <button class="tablinks" onclick="openCity(event, 'PG / Co-living')">PG / Co-living</button>
                            <button class="tablinks" onclick="openCity(event, 'Commercial')">Commercial</button>
                            <button class="tablinks" onclick="openCity(event, 'Coworking')">Coworking</button>
                            <button class="tablinks" onclick="openCity(event, 'PLOTS')">Plots/Land
                                <div variant="primaryLarge" style="display:inline-block;margin:0;margin-left:4px;margin-bottom:2px;padding:0;" childrenstyle="[object Object]" class=" pageComponentundefined badges__primaryLarge undefined  badges__pointerEvents" data-sstheme="_BADGE_TOP">
                                    <div style="margin:0;padding:2px 4px;cursor:default;font-size: 8px;line-height: 10px;font-weight: 600;" class="null text-light" data-sstheme="_BADGE_CHILD">NEW</div>
                                </div>
                            </button>
                            <button class="tablinks" onclick="openCity(event, 'PROJ')">Projects</button>
                        </div>
                    </div>
    </section>
                    <div id="Buy" class="tabcontent" style="display:block;">
                        <div class="search-tab-content-area p-0">
                            <div class="inputFilterOptions">
                                    <div class="basicFilter">  
                                        <div class="list_header text-muted">
                                            <div class="">All Residential</div>
                                        </div>
                                        <div class="Input-feild">
                                            <div class="searchFieldInput">
                                                <i class="fas fa-search icon_search"></i>
                                                <div class="component__DeskSfInput">
                                                    <input type="text" name="keyword" class="component__searchInput" onclick="removeHandler()" id="keyword2" autocomplete="off" value="">
                                                    <div class="component__suggest" id="Display" ></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inPageSearchBox__searchBtn">
                                        <section>
                                                <div class="pageComponent undefined" data-label="VOICE_SEARCH" style="height: 40px;">
                                                    <div class="SpeechToText__voiceIcon" style="height: 40px;">
                                                    <img src="images/nearMeV2.png" width="40" height="40">
                                                    </div>
                                                </div>
                                        </section>
                                        </div>
                                        <div class="inPageSearchBox__searchBtn">
                                        <section>
                                                <div class="pageComponent undefined" data-label="VOICE_SEARCH" style="height: 40px;">
                                                    <div class="SpeechToText__voiceIcon" style="height: 40px;">
                                                        <img src="images/mic.png" style="height: 40px;">
                                                    </div>
                                                </div>
                                        </section>
                                        </div>
                                        <div class="inPageSearchBox__searchBtn d-flex align-items-center">
                                            <button type="submit" class="btn btn-primary-search">Search</div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div id="Rent" class="tabcontent">
                    <div class="search-tab-content-area p-0">
                            <div class="inputFilterOptions">
                                    <div class="basicFilter">  
                                        <div class="list_header text-muted">
                                            <div class="">All Residential</div>
                                        </div>
                                        <div class="Input-feild">
                                            <div class="searchFieldInput">
                                                <i class="fas fa-search icon_search"></i>
                                                <div class="component__DeskSfInput">
                                                    <input type="text" name="keyword" class="component__searchInput" onclick="modify()" id="keyword2" autocomplete="off" value="">
                                                    <div class="component__suggest" id="none" ></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inPageSearchBox__searchBtn">
                                        <section>
                                                <div class="pageComponent undefined" data-label="VOICE_SEARCH" style="height: 40px;">
                                                    <div class="SpeechToText__voiceIcon" style="height: 40px;">
                                                    <img src="images/nearMeV2.png" width="40" height="40">
                                                    </div>
                                                </div>
                                        </section>
                                        </div>
                                        <div class="inPageSearchBox__searchBtn">
                                        <section>
                                                <div class="pageComponent undefined" data-label="VOICE_SEARCH" style="height: 40px;">
                                                    <div class="SpeechToText__voiceIcon" style="height: 40px;">
                                                        <img src="images/mic.png" style="height: 40px;">
                                                    </div>
                                                </div>
                                        </section>
                                        </div>
                                        <div class="inPageSearchBox__searchBtn d-flex align-items-center">
                                            <button type="submit" class="btn btn-primary-search">Search</div>
                                        </div>
                                    </div>
                            </div>
                        </div>     
                    </div>
                <div id="PG / Co-living" class="tabcontent">
                        <div class="search-tab-content-area p-0">
                        <div class="inputFilterOptions">
                            <div class="basicFilter">  
                                <div class="list_header text-muted">
                                    <div class="">All Residential</div>
                                </div>
                                <div class="Input-feild">
                                    <div class="searchFieldInput">
                                        <i class="fas fa-search icon_search"></i>
                                        <div class="component__DeskSfInput">
                                            <input type="text" name="keyword" class="component__searchInput" onclick="modify()" id="keyword2" autocomplete="off" value="">
                                            <div class="component__suggest" id="none" ></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="inPageSearchBox__searchBtn">
                                <section>
                                        <div class="pageComponent undefined" data-label="VOICE_SEARCH" style="height: 40px;">
                                            <div class="SpeechToText__voiceIcon" style="height: 40px;">
                                            <img src="images/nearMeV2.png" width="40" height="40">
                                            </div>
                                        </div>
                                </section>
                                </div>
                                <div class="inPageSearchBox__searchBtn">
                                <section>
                                        <div class="pageComponent undefined" data-label="VOICE_SEARCH" style="height: 40px;">
                                            <div class="SpeechToText__voiceIcon" style="height: 40px;">
                                                <img src="images/mic.png" style="height: 40px;">
                                            </div>
                                        </div>
                                </section>
                                </div>
                                <div class="inPageSearchBox__searchBtn d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary-search">Search</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Commercial" class="tabcontent">
                        <div class="search-tab-content-area p-0">
                        <div class="inputFilterOptions">
                            <div class="basicFilter">  
                                <div class="list_header text-muted">
                                    <div class="">All Residential</div>
                                </div>
                                <div class="Input-feild">
                                    <div class="searchFieldInput">
                                        <i class="fas fa-search icon_search"></i>
                                        <div class="component__DeskSfInput">
                                            <input type="text" name="keyword" class="component__searchInput" onclick="modify()" id="keyword2" autocomplete="off" value="">
                                            <div class="component__suggest" id="none" ></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="inPageSearchBox__searchBtn">
                                <section>
                                        <div class="pageComponent undefined" data-label="VOICE_SEARCH" style="height: 40px;">
                                            <div class="SpeechToText__voiceIcon" style="height: 40px;">
                                            <img src="images/nearMeV2.png" width="40" height="40">
                                            </div>
                                        </div>
                                </section>
                                </div>
                                <div class="inPageSearchBox__searchBtn">
                                <section>
                                        <div class="pageComponent undefined" data-label="VOICE_SEARCH" style="height: 40px;">
                                            <div class="SpeechToText__voiceIcon" style="height: 40px;">
                                                <img src="images/mic.png" style="height: 40px;">
                                            </div>
                                        </div>
                                </section>
                                </div>
                                <div class="inPageSearchBox__searchBtn d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary-search">Search</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Coworking" class="tabcontent">
                        <div class="search-tab-content-area p-0">
                        <div class="inputFilterOptions">
                            <div class="basicFilter">  
                                <div class="list_header text-muted">
                                    <div class="">All Residential</div>
                                </div>
                                <div class="Input-feild">
                                    <div class="searchFieldInput">
                                        <i class="fas fa-search icon_search"></i>
                                        <div class="component__DeskSfInput">
                                            <input type="text" name="keyword" class="component__searchInput" onclick="modify()" id="keyword2" autocomplete="off" value="">
                                            <div class="component__suggest" id="none" ></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="inPageSearchBox__searchBtn">
                                <section>
                                        <div class="pageComponent undefined" data-label="VOICE_SEARCH" style="height: 40px;">
                                            <div class="SpeechToText__voiceIcon" style="height: 40px;">
                                            <img src="images/nearMeV2.png" width="40" height="40">
                                            </div>
                                        </div>
                                </section>
                                </div>
                                <div class="inPageSearchBox__searchBtn">
                                <section>
                                        <div class="pageComponent undefined" data-label="VOICE_SEARCH" style="height: 40px;">
                                            <div class="SpeechToText__voiceIcon" style="height: 40px;">
                                                <img src="images/mic.png" style="height: 40px;">
                                            </div>
                                        </div>
                                </section>
                                </div>
                                <div class="inPageSearchBox__searchBtn d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary-search">Search</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="PLOTS" class="tabcontent">
                        <div class="search-tab-content-area p-0">
                        <div class="inputFilterOptions">
                            <div class="basicFilter">  
                                <div class="list_header text-muted">
                                    <div class="">All Residential</div>
                                </div>
                                <div class="Input-feild">
                                    <div class="searchFieldInput">
                                        <i class="fas fa-search icon_search"></i>
                                        <div class="component__DeskSfInput">
                                            <input type="text" name="keyword" class="component__searchInput" onclick="modify()" id="keyword2" autocomplete="off" value="">
                                            <div class="component__suggest" id="none" ></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="inPageSearchBox__searchBtn">
                                <section>
                                        <div class="pageComponent undefined" data-label="VOICE_SEARCH" style="height: 40px;">
                                            <div class="SpeechToText__voiceIcon" style="height: 40px;">
                                            <img src="images/nearMeV2.png" width="40" height="40">
                                            </div>
                                        </div>
                                </section>
                                </div>
                                <div class="inPageSearchBox__searchBtn">
                                <section>
                                        <div class="pageComponent undefined" data-label="VOICE_SEARCH" style="height: 40px;">
                                            <div class="SpeechToText__voiceIcon" style="height: 40px;">
                                                <img src="images/mic.png" style="height: 40px;">
                                            </div>
                                        </div>
                                </section>
                                </div>
                                <div class="inPageSearchBox__searchBtn d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary-search">Search</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="PROJ" class="tabcontent">
                        <div class="search-tab-content-area p-0">
                        <div class="inputFilterOptions">
                            <div class="basicFilter">  
                                <div class="list_header text-muted">
                                    <div class="">All Residential</div>
                                </div>
                                <div class="Input-feild">
                                    <div class="searchFieldInput">
                                        <i class="fas fa-search icon_search"></i>
                                        <div class="component__DeskSfInput">
                                            <input type="text" name="keyword" class="component__searchInput" onclick="modify()" id="keyword2" autocomplete="off" value="">
                                            <div class="component__suggest" id="none" ></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="inPageSearchBox__searchBtn">
                                <section>
                                        <div class="pageComponent undefined" data-label="VOICE_SEARCH" style="height: 40px;">
                                            <div class="SpeechToText__voiceIcon" style="height: 40px;">
                                            <img src="images/nearMeV2.png" width="40" height="40">
                                            </div>
                                        </div>
                                </section>
                                </div>
                                <div class="inPageSearchBox__searchBtn">
                                <section>
                                        <div class="pageComponent undefined" data-label="VOICE_SEARCH" style="height: 40px;">
                                            <div class="SpeechToText__voiceIcon" style="height: 40px;">
                                                <img src="images/mic.png" style="height: 40px;">
                                            </div>
                                        </div>
                                </section>
                                </div>
                                <div class="inPageSearchBox__searchBtn d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary-search">Search</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!-- section area SearchBox end-->


<!-- <div id="slider-container">
  <div class="slide">Slide 1</div>
  <div class="slide">Slide 2</div>
  <div class="slide">Slide 3</div>
</div> -->


<!-- section area slider end-->
    <section class="partners mt-5 pt-5 mb-5">
        <div class="container mt-3 px-5">
                <h1 class="text-center pb-4">GET STARTED WITH EXPLORING REAL ESTATE OPTIONS</h1>
            <div class="row slider d-flex justify-content-around align-items-center">
                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 ps-4">
                        <div class="zoom-hover">
                            <img src="images/1.webp" class="zoom" style="width: 100%;height: auto;">
                        </div>
                        <h2>Buying a home</h2>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 ps-4">
                        <div class="zoom-hover">
                            <img src="images/2.webp" class="zoom" style="width: 100%;height: auto;">
                        </div>
                        <h2>Renting a Home</h2>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 ps-4">
                        <div class="zoom-hover">
                            <img src="images/3.webp" class="zoom" style="width: 100%;height: auto;">
                        </div>
                        <h2>Sell/Rent your property</h2>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 ps-4">
                        <div class="zoom-hover">
                            <img src="images/4.webp" class="zoom" style="width: 100%;height: auto;">
                        </div>
                        <h2>Plots/Land</h2>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 ps-4">
                        <div class="zoom-hover">
                            <img src="images/5.webp" class="zoom" style="width: 100%;height: auto;">
                        </div>
                        <h2>Explore Insights</h2>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 ps-4">
                        <div class="zoom-hover">
                            <img src="images/6.webp" class="zoom" style="width: 100%;height: auto;">
                        </div>
                        <h2>PG and co-living</h2>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 ps-4">
                        <div class="zoom-hover">
                            <img src="images/7.webp" class="zoom" style="width: 100%;height: auto;">
                        </div>
                        <h2>Buying commercial spaces</h2>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 ps-4">
                        <div class="zoom-hover">
                            <img src="images/8.webp" class="zoom" style="width: 100%;height: auto;">
                        </div>
                        <h2>Lease commercial spaces</h2>
                    </div>
            </div>
        </div>
    </section>
<!-- section area slider end-->

<!-- section tool area start-->
<section class="tool">
    <div class="container insight-tool">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex justify-content-between align-items-center">
            <img src="images/9.png" style="width:64px; height:64px;">
            <div>
                <h3 class="title_l_bold mb-0 mt-3" id="MORE_INSIGHTS_AND_UTILITIES_HEADING">
                    <div class="ellipsis2Lines">Insights &amp; Tools</div>
                </h3>
                <p class="caption_strong_large" id="MORE_INSIGHTS_AND_UTILITIES_SUBHEADING">Go from browsing to buying</p>
            </div>
            </div>
            <div class="ini__setButtonmargin" id="MORE_INSIGHTS_AND_UTILITIES_VIEW_ALL">
                <button variant="secondaryRegular" data-label="VIEW_ALL" class="pageComponent buttons__secondaryRegular     undefined " data-sstheme="_BUTTON_TOP_LEVEL">
                    <span class=" " data-sstheme="_BUTTON_SPAN">View all Insights</span>
                </button>
            </div>
        </div>
    <div class="row slide d-flex justify-content-around align-items-center mt-4 pt-2">
                     <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 ms-3">
                        <div class="card card-pref">
                            <div class="card-body p-0 d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img src="images/10.png">
                                </div>
                            </div>
                                <h3 class="ps-0 ms-0 prefrence">Price Trends</h3>
                                <p class="ps-0 ms-0 prefrence-p">Check property rates and prices</p>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 ms-3">
                        <div class="card card-pref">
                            <div class="card-body p-0 d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img src="images/11.png">
                                </div>
                            </div>
                                <h3 class="ps-0 ms-0 prefrence">Locality Insights</h3>
                                <p class="ps-0 ms-0 prefrence-p">Know more about different localities</p>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 ms-3">
                        <div class="card card-pref">
                            <div class="card-body p-0 d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img src="images/12.png">
                                </div>
                            </div>
                                <h3 class="ps-0 ms-0 prefrence">Genuine reviews by Residents</h3>
                                <p class="ps-0 ms-0 prefrence-p">Know what residents are saying</p>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 ms-3">
                        <div class="card card-pref">
                            <div class="card-body p-0 d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img src="images/13.png">
                                </div>
                            </div>
                                <h3 class="ps-0 ms-0 prefrence">Transaction Prices</h3>
                                <p class="ps-0 ms-0 prefrence-p">Check property transaction values</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 ms-3">
                        <div class="card card-pref">
                            <div class="card-body p-0 d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img src="images/14.png">
                                </div>
                            </div>
                                <h3 class="ps-0 ms-0 prefrence">About My Property</h3>
                                <p class="ps-0 ms-0 prefrence-p">Track prices & analyse market demands</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 ms-3">
                        <div class="card card-pref">
                            <div class="card-body p-0 d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img src="images/15.png">
                                </div>
                            </div>
                                <h3 class="ps-0 ms-0 prefrence">Read Latest News</h3>
                                <p class="ps-0 ms-0 prefrence-p">Around real estate and allied industries</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 ms-3">
                        <div class="card card-pref">
                            <div class="card-body p-0 d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img src="images/16.png">
                                </div>
                            </div>
                                <h3 class="ps-0 ms-0 prefrence">Check Articles</h3>
                                <p class="ps-0 ms-0 prefrence-p">On trending topics and policy updates</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 ms-3">
                        <div class="card card-pref">
                            <div class="card-body p-0 d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img src="images/17.png">
                                </div>
                            </div>
                                <h3 class="ps-0 ms-0 prefrence">User Guides</h3>
                                <p class="ps-0 ms-0 prefrence-p">To help home buyers, tenants and sellers</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 ms-3">
                        <div class="card card-pref">
                            <div class="card-body p-0 d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img src="images/18.png">
                                </div>
                            </div>
                                <h3 class="ps-0 ms-0 prefrence">Budget Calculator</h3>
                                <p class="ps-0 ms-0 prefrence-p">Check your affordability range for buying home</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 ms-3">
                        <div class="card card-pref">
                            <div class="card-body p-0 d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img src="images/19.png">
                                </div>
                            </div>
                                <h3 class="ps-0 ms-0 prefrence">EMI Calculator</h3>
                                <p class="ps-0 ms-0 prefrence-p">Calculate your home loan EMI</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 ms-3">
                        <div class="card card-pref">
                            <div class="card-body p-0 d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img src="images/20.png">
                                </div>
                            </div>
                                <h3 class="ps-0 ms-0 prefrence">Loan Eligibility</h3>
                                <p class="ps-0 ms-0 prefrence-p">See what you can borrow for your home</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 ms-3">
                        <div class="card card-pref">
                            <div class="card-body p-0 d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img src="images/21.png">
                                </div>
                            </div>
                                <h3 class="ps-0 ms-0 prefrence">Area Converter</h3>
                                <p class="ps-0 ms-0 prefrence-p">Convert one area into any other easily</p>
                        </div>
                    </div>
            </div>
        </div>
    </section>
<!-- section tool area end-->

<!-- section card-buy area end-->
    <section class="card-buy mt-5 mb-5 pt-5">
        <div class="container card-insight pt-5">
                <h6 class="text-center mb-0 pb-0">ALL PROPERTY NEEDS - ONE PORTAL</h6>
                <h1 class="text-center mt-2 pt-0">Find Better Places to Live, Work <br> and Wonder...</h1>
            <div class="row d-flex justify-content-between align-items-start mt-5">
                <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                    <div class="card-image zoom-hover">
                        <img src="images/d_hp_buy_xl.webp" style="width:100%; height:auto;">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 ps-5 pt-5 mt-5">
                    <div class="d-flex flex-column justify-content-start align-items-start ps-5">
                        <h6 class="text-start">BUY A HOME</h6>
                        <h2 class="text-start">Find, Buy & Own Your<br> Dream Home</h3>
                        <p class="text-start">Explore from Apartments, land, builder floors,<br> villas and more</p>
                        <div class="inPageSearchBox__searchBtn d-flex align-items-center justify-content-center p-0">
                            <button type="submit" class="btn btn-primary-search py-3 px-3" style="font-size:16px;">Explore Buying</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-buy-content">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-xl-4 col-lg-4"> 
                        <div class="pgo__sideHeading">
                            <div class="side-heading">Top articles on <br>home buying</div>
                            <div class="side-title mt-3">Read from Beginners check-list to Pro Tips</div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-8 col-lg-8"> 
                        <div class="d-flex flex-row justify-content-center align-items-center card-tab">
                                <button class="card-tablinks active ms-3" onclick="openArticle(event, 'News')">Buy</button>
                                <button class="card-tablinks" onclick="openArticle(event, 'Tax')">Rent</button>
                                <button class="card-tablinks" onclick="openArticle(event, 'Help')">PG / Co-living</button>
                                <button class="card-tablinks" onclick="openArticle(event, 'Investment')">Commercial</button>
                        </div>
                        <div class="card-tab-content">
                            <div class="row sick-slider">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy1.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">RBI keeps repo rate unchanged</h3>
                                                            <h6 class="small-head">june 08 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img  d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy2.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">Land rates go up in Noida</h3>
                                                            <h6 class="small-head">Apr 24, 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img  d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy3.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">Unchanged repo rate to bear well with buyers</h3>
                                                            <h6 class="small-head">Jun 08, 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img  d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy4.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">pmay-clss extended till December 2024</h3>
                                                            <h6 class="small-head">Apr 21, 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy1.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">RBI keeps repo rate unchanged</h3>
                                                            <h6 class="small-head">june 08 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img  d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy2.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">Land rates go up in Noida</h3>
                                                            <h6 class="small-head">Apr 24, 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img  d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy3.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">Unchanged repo rate to bear well with buyers</h3>
                                                            <h6 class="small-head">Jun 08, 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img  d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy4.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">pmay-clss extended till December 2024</h3>
                                                            <h6 class="small-head">Apr 21, 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy1.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">RBI keeps repo rate unchanged</h3>
                                                            <h6 class="small-head">june 08 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img  d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy2.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">Land rates go up in Noida</h3>
                                                            <h6 class="small-head">Apr 24, 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img  d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy3.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">Unchanged repo rate to bear well with buyers</h3>
                                                            <h6 class="small-head">Jun 08, 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img  d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy4.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">pmay-clss extended till December 2024</h3>
                                                            <h6 class="small-head">Apr 21, 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy1.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">RBI keeps repo rate unchanged</h3>
                                                            <h6 class="small-head">june 08 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img  d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy2.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">Land rates go up in Noida</h3>
                                                            <h6 class="small-head">Apr 24, 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img  d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy3.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">Unchanged repo rate to bear well with buyers</h3>
                                                            <h6 class="small-head">Jun 08, 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img  d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy4.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">pmay-clss extended till December 2024</h3>
                                                            <h6 class="small-head">Apr 21, 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy1.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">RBI keeps repo rate unchanged</h3>
                                                            <h6 class="small-head">june 08 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img  d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy2.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">Land rates go up in Noida</h3>
                                                            <h6 class="small-head">Apr 24, 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img  d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy3.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">Unchanged repo rate to bear well with buyers</h3>
                                                            <h6 class="small-head">Jun 08, 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-3">
                                            <div class="card-small">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="card-small-img  d-flex flex-column justify-content-center align-items-center">
                                                            <img src="images/buy4.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-7 bottom">
                                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                                            <h2 class="small-h">pmay-clss extended till December 2024</h3>
                                                            <h6 class="small-head">Apr 21, 2023</h6>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="card-bottom">Read realty news, guides &amp; articles
                        <span>
                            <i class="fas fa-long-arrow-alt-right" style="filter: grayscale(100%);font-size:20px;"></i>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- section card-buy area end-->
    
<?php include('footer.php'); ?>


<!-- our js area -->

<script type="text/javascript">
        function modify(){
         document.getElementById("none").style.display="none";
        }
        function removeHandler(){
         document.getElementById("Display").style.display="none";
        }

        function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
        }

        const sliderContainer = document.getElementById("slider-container");
        const slides = Array.from(document.getElementsByClassName("slide"));

        let currentSlideIndex = 0;

        // Show initial slide
        slides[currentSlideIndex].classList.add("active");

        // Function to transition to the next slide
        function nextSlide() {
        slides[currentSlideIndex].classList.remove("active");
        currentSlideIndex = (currentSlideIndex + 1) % slides.length;
        slides[currentSlideIndex].classList.add("active");
        }

        // Set an interval to automatically transition slides
        setInterval(nextSlide, 3000);
</script>

<script>
function openArticle(evt, articleName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("card-tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("card-tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(articleName).style.display = "block";
  evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<!-- boostrap bundel -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- fontawesome -->
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

 <!-- animation -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 200,
        duration: 2000,
    });
  </script>
  
 <!-- sick slider -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
    $('.slider').slick({
  dots: true,
  infinite:true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  </script>
  <script type="text/javascript">
    $('.slide').slick({
  dots: true,
  infinite:true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  </script>
    <script type="text/javascript">
    $('.sick-slider').slick({
  dots: true,
  infinite:true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  </script>

