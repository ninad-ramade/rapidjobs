<div class="modal fade twm-sign-up" id="sign_up_popup2" aria-hidden="true" aria-labelledby="sign_up_popupLabel2" tabindex="-1" ng-controller="loginController">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                
                    <form>
                        <div class="modal-header">
                        	<div id="login-message" ng-if="loginMessage != ''">{{loginMessage}}<span class="message-close" ng-click="hideMessage()">&times;</span></div>
                            <h2 class="modal-title" id="sign_up_popupLabel2">Login</h2>
                            <p>Login and get access to all the features of RapidJobs</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="twm-tabs-style-2">
                                <div class="tab-content" id="myTab2Content">
                                    <!--Login Candidate Content-->  
                                    <div class="tab-pane fade show active" id="login-candidate">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required="" class="form-control" ng-model="loginData.username.value" placeholder="Usearname*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="password" type="password" class="form-control" required="" ng-model="loginData.password.value" placeholder="Password*">
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check ng-hide">
                                                        <input type="checkbox" class="form-check-input" id="Password3">
                                                        <label class="form-check-label rem-forgot" for="Password3">Remember me <a href="javascript:;">Forgot Password</a></label>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button" ng-click="login()">Log in</button>
                                                <div class="mt-3 mb-3">Don't have an account ? 
                                                    <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--Login Employer Content--> 
                                    <div class="tab-pane fade" id="login-Employer">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="Password4">
                                                        <label class="form-check-label rem-forgot" for="Password4">Remember me <a href="javascript:;">Forgot Password</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button" ng-click="login()">Log in</button>
                                                <div class="mt-3 mb-3">Don't have an account ? 
                                                    <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                
                                </div>
                            </div> 
                        </div>
                        <div class="modal-footer">
                            <span class="modal-f-title ng-hide">Login or Sign up with</span>
                            <ul class="twm-modal-social ng-hide">
                                <li><a href="#" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" class="google-clr"><i class="fab fa-google"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>