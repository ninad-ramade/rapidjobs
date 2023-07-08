<div class="modal fade twm-sign-up" id="sign_up_popup" aria-hidden="true" aria-labelledby="sign_up_popupLabel" tabindex="-1" ng-controller="signUpController">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form>

                        <div class="modal-header">
                        	<div id="login-message" ng-if="loginMessage != ''">{{loginMessage}}<span class="message-close" ng-click="hideMessage()">&times;</span></div>
                            <h2 class="modal-title" id="sign_up_popupLabel">Sign Up</h2>
                            <p>Sign Up and get access to all the features of RapidJobs</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="twm-tabs-style-2">
                                <?php /* ?>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <!--Signup Candidate-->  
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#sign-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                </li>
                                <!--Signup Employer-->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sign-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                </li>
                                </ul>
                                <?php */ ?>
                                <div class="tab-content" id="myTabContent">
                                <!--Signup Candidate Content-->  
                                <div class="tab-pane fade show active" id="sign-candidate">
                                    <div class="row">
										<?php /* ?>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="password" type="text" class="form-control" required="" placeholder="Password*">
                                            </div>
                                        </div>
                                        <?php */ ?>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" ng-model="candidate.email.value" required="" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12" ng-show="newCandidate">
                                            <div class="form-group mb-3">
                                                <input name="resume" id="resume" type="file" class="form-control" ng-change="selectDocument()" ng-model="candidate.resume.value" required>
                                                <button class="site-button" id="uploadResumeButton" ng-click="uploadResume()">Upload Resume</button>
                                                <input name="resumeUrl" type="hidden" ng-model="candidate.resume.value">
                                            </div>
                                        </div>
        
										<?php /* ?>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                            </div>
                                        </div>
                                        <?php */ ?>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" value="1" id="agree1" ng-model="candidate.agree.value" required>
                                                    <label class="form-check-label" for="agree1">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                    <p>Already registered?
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="site-button" ng-click="searchEmail()">Sign Up</button>
                                        </div>
                                        
                                    </div>
                                </div>
                                <?php /* ?>
                                <!--Signup Employer Content--> 
                                <div class="tab-pane fade" id="sign-Employer">
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
                                                <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                            </div>
                                        </div>
        
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="agree2">
                                                    <label class="form-check-label" for="agree2">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                    <p>Already registered?
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="site-button" ng-click="searchEmail()">Sign Up</button>
                                        </div>
                                        
                                    </div>
                                </div>
                                <?php */ ?>
                                </div>
                            </div> 
                        </div>

                        <div class="modal-footer">
                        	<?php /* ?>
                            <span class="modal-f-title">Login or Sign up with</span>
                            <ul class="twm-modal-social">
                                <li><a href="#" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" class="google-clr"><i class="fab fa-google"></i></a></li>
                            </ul>
                            <?php */ ?>
                        </div>

                    </form>
                </div>
            </div>
            
        </div>