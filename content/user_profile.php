<section id="social-cards">
   
    <div class="row mt-2">
        <div class="col-xl-4 col-md-6 col-12">
            <div class="card profile-card-with-cover">
                <div class="card-content">
                    <!--<img class="card-img-top img-fluid" src="../../../app-assets/images/carousel/18.jpg" alt="Card cover image">-->
                    <div class="card-img-top img-fluid bg-cover height-200" style="background: url('app-assets/images/backgrounds/fb.jpg') 0 30%;"></div>
                    <div class="card-profile-image">
                        <img src="app-assets/images/portrait/small/avatar-s-3.png" class="rounded-circle img-border box-shadow-1" alt="Card image">
                    </div>
                    <div class="profile-card-with-cover-content text-center">
                        <div class="profile-details mt-2">
                            <h4 class="card-title"><?= $_SESSION['person_name'].$_SESSION['fname']."  " . $_SESSION['lname']?></h4>
                            <ul class="list-inline clearfix mt-2">
                                <li class="mr-3"><h2 class="block">3.5K</h2> Likes</li>
                                <li class="mr-3"><h2 class="block">2845</h2> Followers</li>
                                <li><h2 class="block">645</h2> Following</li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <a href="#" class="btn btn-social btn-min-width mr-1 mb-1 btn-facebook"><i class="fa fa-facebook"></i> Follow</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-12">
            <div class="card profile-card-with-cover">
                <div class="card-content">
                    <div class="card-img-top img-fluid bg-cover height-200" style="background: url('../../../app-assets/images/backgrounds/in.jpg') 0 40%;"></div>
                    <div class="card-profile-image">
                        <img src="../../../app-assets/images/portrait/small/avatar-s-9.png" class="rounded-circle img-border box-shadow-1" alt="Card image">
                    </div>
                    <div class="profile-card-with-cover-content text-center">
                        <div class="profile-details mt-2">
                            <h4 class="card-title">Philip Garrett</h4>
                            <ul class="list-inline clearfix mt-2">
                                <li class="mr-3"><h2 class="block">500+</h2> Connections</li>
                                <li class="mr-3"><h2 class="block">485</h2> Posts</li>
                                <li><h2 class="block">35</h2> Following</li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <a href="#" class="btn btn-social btn-min-width mr-1 mb-1 btn-linkedin"><span class="fa fa-linkedin"></span> Follow</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-12">
            <div class="card profile-card-with-cover">
                <div class="card-content">
                    <div class="card-img-top img-fluid bg-cover height-200" style="background: url('../../../app-assets/images/backgrounds/tw.jpg') 0 30%;"></div>
                    <div class="card-profile-image">
                        <img src="../../../app-assets/images/portrait/small/avatar-s-8.png" class="rounded-circle img-border box-shadow-1" alt="Card image">
                    </div>
                    <div class="profile-card-with-cover-content text-center">
                        <div class="profile-details mt-2">
                            <h4 class="card-title">Christine Wood</h4>
                            <ul class="list-inline clearfix mt-2">
                                <li class="mr-3"><h2 class="block">1.6K</h2> Likes</li>
                                <li class="mr-3"><h2 class="block">264</h2> Followers</li>
                                <li><h2 class="block">85</h2> Following</li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <a href="#" class="btn btn-social btn-min-width mr-1 mb-1 btn-twitter white"><span class="fa fa-twitter"></span> Follow</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- // Social cards section end -->