<div class="twm-home3-banner-section site-bg-white bg-cover" style="background-image:url({{ asset('assets/front_assets/images/home-3/banner1.jpg') }})">
    <div class="twm-home3-inner-section">
        <div class="twm-bnr-mid-section">
            <div class="twm-bnr-title-large">Find Top IT Jobs</div>
            <div class="twm-bnr-title-light">For talent Developers</div>
            <div class="twm-bnr-discription">Type your keyword, then click search to find your perfect job.</div>

            <div class="twm-bnr-search-bar">
                <form>
                    <div class="row">
                        <!--Title-->
                        <div class="form-group col-xl-3 col-lg-6 col-md-6">
                            <label>What</label>
                            <select class="wt-search-bar-select selectpicker"  data-live-search="true" title="" id="j-Job_Title" data-bv-field="size">
                                <option disabled selected value="">Select Category</option>
                                <option selected>Job Title</option>
                                <option>Web Designer</option>
                                <option>Developer</option>
                                <option>Acountant</option>
                            </select>
                        </div>

                        <!--All Category-->
                        <div class="form-group col-xl-4 col-lg-6 col-md-6">
                            <label>Type</label>
                            <select class="wt-search-bar-select selectpicker"  data-live-search="true" title="" id="j-All_Category" data-bv-field="size">
                                <option disabled selected value="">Select Category</option>
                                <option selected>All Category</option>
                                <option>Web Designer</option>
                                <option>Developer</option>
                                <option>Acountant</option>
                            </select>
                        </div>

                        <!--Location-->
                        <div class="form-group col-xl-3 col-lg-6 col-md-6">
                            <label>Location</label>
                            <div class="twm-inputicon-box">
                                <input name="username" type="text" required class="form-control" placeholder="Location">
                                <i class="twm-input-icon fas fa-map-marker-alt"></i>
                            </div>
                        </div>

                        <!--Find job btn-->
                        <div class="form-group col-xl-2 col-lg-6 col-md-6">
                            <button type="button" class="site-button">Find Job</button>
                        </div>

                    </div>
                </form>
            </div>

            <div class="twm-bnr-popular-search">
                <span class="twm-title">Popular Searches:</span>
                <a href="#">Developer</a> ,
                <a href="#">Designer</a> ,
                <a href="#">Architect</a> ,
                <a href="#">Engineer</a> ...
            </div>
        </div>
        <div class="twm-bnr-bottom-section">
            <div class="twm-browse-jobs">7,000+ Browse Jobs</div>
            <div class="twm-bnr-blocks-wrap">
                <!--icon-block-1-->
                <div class="twm-bnr-blocks twm-bnr-blocks-position-1">
                    <div class="twm-content">
                        <div class="tw-count-number text-clr-pink">
                            <span class="counter">12</span>K+
                        </div>
                        <p class="icon-content-info">Companies Jobs</p>
                    </div>
                </div>

                <!--icon-block-2-->
                <div class="twm-bnr-blocks twm-bnr-blocks-position-2">
                    <div class="twm-content">
                        <div class="tw-count-number text-clr-yellow">
                            <span class="counter">98</span> +
                        </div>
                        <p class="icon-content-info">Job For Countries </p>
                    </div>
                </div>

                <!--icon-block-3-->
                <div class="twm-bnr-blocks-3 twm-bnr-blocks-position-3">
                    <div class="twm-pics">
                        <span><img src="{{ asset('assets/front_assets/images/main-slider/slider1/user/u-1.jpg') }}" alt=""></span>
                        <span><img src="{{ asset('assets/front_assets/images/main-slider/slider1/user/u-2.jpg') }}" alt=""></span>
                        <span><img src="{{ asset('assets/front_assets/images/main-slider/slider1/user/u-3.jpg') }}" alt=""></span>
                        <span><img src="{{ asset('assets/front_assets/images/main-slider/slider1/user/u-4.jpg') }}" alt=""></span>
                        <span><img src="{{ asset('assets/front_assets/images/main-slider/slider1/user/u-5.jpg') }}" alt=""></span>
                        <span><img src="{{ asset('assets/front_assets/images/main-slider/slider1/user/u-6.jpg') }}" alt=""></span>
                    </div>
                    <div class="twm-content">
                        <div class="tw-count-number text-clr-green">
                            <span class="counter">3</span>K+
                        </div>
                        <p class="icon-content-info">Jobs Done</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>