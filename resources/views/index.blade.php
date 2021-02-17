@extends('layouts.app')
@section('content')
    <div class="tab-content" id="nav-tabContent">


        <!-- Start of Babble -->
        <div class="babble sidebar-edit2 tab-pane fade active show" id="list-chat" role="tabpanel"
            aria-labelledby="list-chat-list">
            <!-- Start of Chat -->
            <div class="chat " id="chat1">
                <div class="top">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="inside">
                                <a href="#"><img class="avatar-md" src="dist/img/logo.png" data-toggle="tooltip"
                                        data-placement="top" title="BOT" alt="avatar"></a>
                                <div class="status">
                                    <i class="material-icons online">fiber_manual_record</i>
                                </div>
                                <div class="data">
                                    <h5><a href="#">Bot</a></h5>
                                    <span>Active now</span>
                                </div>

                                <div class="dropdown">
                                    <button class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="material-icons md-30">more_vert</i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <hr>
                                        <button id="helpbutton" class="dropdown-item"><i
                                                class="material-icons">help_outline</i>Help</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content" id="content">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="date">
                                <hr>
                                <span>Yesterday</span>
                                <hr>
                            </div>
                            <div class="message">
                                <img class="avatar-md" src="dist/img/logo.png" data-toggle="tooltip" data-placement="top"
                                    title="bot" alt="avatar">
                                <div class="text-main">
                                    <div class="text-group">
                                        <div class="text">
                                            <p>Welcome to our system , How can i help you ?</p>
                                        </div>
                                    </div>
                                    <span>10:00 AM</span>
                                </div>
                            </div>
                            <div class="message me">
                                <div class="text-main">
                                    <div class="text-group me">
                                        <div class="text me">
                                            <p>What are the departments in computer scince college</p>
                                        </div>
                                    </div>
                                    <span>10:01 AM</span>
                                </div>
                            </div>
                            <div class="message">
                                <img class="avatar-md" src="dist/img/logo.png" data-toggle="tooltip" data-placement="top"
                                    title="bot" alt="avatar">
                                <div class="text-main">
                                    <div class="text-group">
                                        <div class="text">
                                            <p>The departments are cs,is and ai.</p>
                                        </div>
                                    </div>
                                    <span>10:02 AM</span>
                                </div>
                            </div>

                            <div class="date">
                                <hr>
                                <span>Today</span>
                                <hr>
                            </div>
                            <div class="message me">
                                <div class="text-main">
                                    <div class="text-group me">
                                        <div class="text me">
                                            <p>Can you send to me the register document.</p>
                                        </div>
                                    </div>
                                    <span>10:03 AM</span>
                                </div>
                            </div>
                            <div class="message">
                                <img class="avatar-md" src="dist/img/logo.png" data-toggle="tooltip" data-placement="top"
                                    title="bot" alt="avatar">
                                <div class="text-main">
                                    <div class="text-group">
                                        <div class="text">
                                            <div class="attachment">
                                                <button class="btn attach"><i
                                                        class="material-icons md-18">insert_drive_file</i></button>
                                                <div class="file">
                                                    <h5><a href="#">Register.pdf</a></h5>
                                                    <span>24kb Document</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span>10:04 AM</span>
                                </div>
                            </div>
                            <div class="message me">
                                <div class="text-main">
                                    <div class="text-group me">
                                        <div class="text me">
                                            <p>Question that the system couldn't answer</p>
                                        </div>
                                    </div>
                                    <span><i class="material-icons">check</i>10:05 AM</span>
                                </div>
                            </div>


                            <div class="message">
                                <img class="avatar-md" src="dist/img/logo.png" data-toggle="tooltip" data-placement="top"
                                    title="bot" alt="avatar">
                                <div class="text-main">
                                    <div class="text-group">
                                        <div class="text">
                                            <p>Couldn't answer your question pleaz request chat with the
                                                <button class="button1">Clerk</button>
                                                .
                                            </p>
                                        </div>
                                    </div>
                                    <span>10:06 AM</span>
                                </div>
                            </div>





                            <div class="message me">
                                <div class="text-main">
                                    <div class="text-group me">
                                        <div class="text me">
                                            <p>Question that the clerck couldn't answer</p>
                                        </div>
                                    </div>
                                    <span><i class="material-icons">check</i>10:07 AM</span>
                                </div>
                            </div>


                            <div class="message">
                                <img class="avatar-md" src="dist/img/logo.png" data-toggle="tooltip" data-placement="top"
                                    title="bot" alt="avatar">
                                <div class="text-main">
                                    <div class="text-group">
                                        <div class="text">
                                            <p>Couldn't answer your question pleaz request chat with the
                                                <button class="button1">Acadamic advisor</button>
                                                .
                                            </p>
                                        </div>
                                    </div>
                                    <span>10:08 AM</span>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-12">
                        <div class="bottom">
                            <form class=" w-100">
                                <textarea class="form-control" placeholder="Start typing for reply..." rows="1"></textarea>
                                <button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>
                                <button type="submit" class="btn send"><i class="material-icons">send</i></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Chat -->






        </div>
        <!-- End of Babble -->


        <div class="sidebar sidebar-edit dsnon" id="sidebar">
            <div class="container">
                <div class="col-md-12">
                    <div class="tab-content">



                        <!-- Start of Settings -->
                        <div class="tab-pane fade active show" id="settings">
                            <div class="settings">
                                <div class="profile">
                                    <img class="avatar-xl" src="dist/img/avatars/ali.jpg" alt="avatar">
                                    <h1><a href="#">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
                                    </h1>
                                    <span>{{ Auth::user()->address }}</span>

                                </div>
                                <div class="categories" id="accordionSettings">
                                    <h1>Settings</h1>
                                    <!-- Start of My Account -->
                                    <div class="category">
                                        <a href="#" class="title" id="headingOne" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="material-icons md-30 online">person_outline</i>
                                            <div class="data">
                                                <h5>My Account</h5>
                                                <p>Update your profile details</p>
                                            </div>
                                            <i class="material-icons">keyboard_arrow_right</i>
                                        </a>
                                        <div class="collapse show" id="collapseOne" aria-labelledby="headingOne"
                                            data-parent="#accordionSettings" style="">
                                            <div class="content">
                                                <div class="upload">
                                                    <div class="data">
                                                        <img class="avatar-xl" src="dist/img/avatars/ali.jpg" alt="image">
                                                        <label>
                                                            <input type="file">
                                                            <span class="btn button">Upload Photo</span>
                                                        </label>
                                                    </div>
                                                    <p>For best results, use an image at least 256px by
                                                        256px in either .jpg or .png format!</p>
                                                </div>
                                                <form>
                                                    <div class="parent">
                                                        <div class="field">
                                                            <label for="firstName">First name
                                                                <span>*</span></label>
                                                            <input type="text" class="form-control" id="firstName"
                                                                placeholder="First name" value="Ali" required="">
                                                        </div>
                                                        <div class="field">
                                                            <label for="lastName">Last name
                                                                <span>*</span></label>
                                                            <input type="text" class="form-control" id="lastName"
                                                                placeholder="Last name" value="Mohamed" required="">
                                                        </div>
                                                    </div>
                                                    <div class="field">
                                                        <label for="email">Email <span>*</span></label>
                                                        <input type="email" class="form-control" id="email"
                                                            placeholder="Enter your email address" value="user@gmail.com"
                                                            required="">
                                                    </div>
                                                    <div class="field">
                                                        <label for="password">Password</label>
                                                        <input type="password" class="form-control" id="password"
                                                            placeholder="Enter a new password" value="password" required="">
                                                    </div>

                                                    <button class="btn btn-link w-100">Delete
                                                        Account</button>
                                                    <button type="submit" class="btn button w-100">Apply</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of My Account -->






                                    <!-- Start of Appearance Settings -->
                                    <div class="category">
                                        <a href="#" class="title collapsed" id="headingFive" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                            <i class="material-icons md-30 online">colorize</i>
                                            <div class="data">
                                                <h5>Appearance</h5>
                                                <p>Customize the look of Swipe</p>
                                            </div>
                                            <i class="material-icons">keyboard_arrow_right</i>
                                        </a>
                                        <div class="collapse" id="collapseFive" aria-labelledby="headingFive"
                                            data-parent="#accordionSettings">
                                            <div class="content no-layer">
                                                <div class="set">
                                                    <div class="details">
                                                        <h5>Turn Off Lights</h5>
                                                        <p>The dark mode is applied to core areas of the app
                                                            that are normally displayed as light.</p>
                                                    </div>
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round mode"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Appearance Settings -->


                                    <!-- Start of Logout -->
                                    <div class="category">
                                        <a href="sign-in.html" class="title collapsed">
                                            <i class="material-icons md-30 online">power_settings_new</i>
                                            <div class="data">
                                                <h5>Power Off</h5>
                                                <p>Log out of your account</p>
                                            </div>
                                            <i class="material-icons">keyboard_arrow_right</i>
                                        </a>
                                    </div>
                                    <!-- End of Logout -->
                                </div>
                            </div>
                        </div>
                        <!-- End of Settings -->
                    </div>
                </div>
            </div>
        </div>



        <!-- Start of help -->

        <div id="help" class="sidebar-edit2  dsnon" style="">
            <h1 class="display-4">Help page</h1>
            <p class="lead text-muted mb-0">An explory video about how use the system.</p>

            <video onclick="playVid();" id="myVideo" controls="">
                <source src="y2mate.com%20-%20College%20Recommender%20Chatbot_480p.mp4" type="video/mp4">
            </video>



            <p>


                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                passages, and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum. <br><br>

                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                passages, and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum. <br><br>

                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                passages, and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum. <br><br>

                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                passages, and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum. <br><br>

                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                passages, and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum. <br><br>
            </p>
        </div>


        <!-- end of help -->


        <!-- Start of About us -->


        <div id="aboutus" class="sidebar-edit2">





            <div class=" py-5 px-2">
                <div class="container py-5">
                    <div class="row mb-4">
                        <h2 class="display-4 font-weight-light text-center">Our team</h2>

                    </div>

                    <div class="row text-center">
                        <!-- Team item-->
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <div class="  rounded shadow-sm py-5 px-4"><img src="dist/img/avatars/os.jpg" alt="" width="100"
                                    class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Osama Mahmoud </h5><span
                                    class="small text-uppercase text-muted">@gmail.com</span>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End-->

                        <!-- Team item-->
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <div class="  rounded shadow-sm py-5 px-4"><img src="dist/img/avatars/ali.jpg" alt=""
                                    width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Ali Mohamed Ali</h5><span
                                    class="small text-uppercase text-muted">alimabdelaal159@gmail.com</span>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End-->

                        <!-- Team item-->
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <div class="  rounded shadow-sm py-5 px-4"><img src="dist/img/avatars/eb.jpg" alt="" width="100"
                                    class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Ebram Eid</h5><span
                                    class="small text-uppercase text-muted">@gmail.com</span>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End-->

                        <!-- Team item-->
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <div class="  rounded shadow-sm py-5 px-4"><img src="dist/img/avatars/es.jpg" alt="" width="100"
                                    class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Eslam Talaat</h5><span
                                    class="small text-uppercase text-muted">@gmail.com</span>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End-->
                        <!-- Team item-->
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <div class="  rounded shadow-sm py-5 px-4"><img src="dist/img/avatars/mo7.jpg" alt=""
                                    width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Ahmed Moheb</h5><span
                                    class="small text-uppercase text-muted">@gmail.com</span>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End-->
                        <!-- Team item-->
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <div class="  rounded shadow-sm py-5 px-4"><img src="dist/img/avatars/7elmy.jpg" alt=""
                                    width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Mohamed Helmy</h5><span
                                    class="small text-uppercase text-muted">@gmail.com</span>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End-->
                        <!-- Team item-->
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <div class="  rounded shadow-sm py-5 px-4"><img src="dist/img/avatars/ronaldo.jpg" alt=""
                                    width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Mostafa Mahmoud</h5><span
                                    class="small text-uppercase text-muted">@gmail.com</span>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End-->
                        <!-- Team item-->
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <div class="  rounded shadow-sm py-5 px-4"><img src="dist/img/avatars/hen.jpg" alt=""
                                    width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Henesh Ebrahim</h5><span
                                    class="small text-uppercase text-muted">@gmail.com</span>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End-->
                        <!-- Team item-->
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <div class="  rounded shadow-sm py-5 px-4"><img src="dist/img/avatars/rom.jpg" alt=""
                                    width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Romany Atef</h5><span
                                    class="small text-uppercase text-muted">@gmail.com</span>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="social-link"><i
                                                class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End-->

                    </div>
                </div>
            </div>


        </div>

        <!-- Start of About us -->









        <!-- Start of Gellary -->

        <div id="gellary" class="gellary sidebar-edit2 dsnon">
            <div class="row">
                <div class="col-12">

                    <h2 class="text-center my-5">Gallery</h2>

                    <div class="row">
                        <a class=" col-lg-3 col-md-4 col-6  my-3">
                            <img src="dist/img/Gellary/Mti-1.jpg" class="img-fluid card1">
                        </a>

                        <a class=" col-lg-3 col-md-4 col-6  my-3">
                            <img src="dist/img/Gellary/Mti-2.jpg" class="img-fluid card1">
                        </a>

                        <a class=" col-lg-3 col-md-4 col-6  my-3">
                            <img src="dist/img/Gellary/Mti-3.jpg" class="img-fluid card1">
                        </a>

                        <a class=" col-lg-3 col-md-4 col-6  my-3">
                            <img src="dist/img/Gellary/Mti-4.jpg" class="img-fluid card1">
                        </a>

                        <a class=" col-lg-3 col-md-4 col-6  my-3">
                            <img src="dist/img/Gellary/Mti-5.jpg" class="img-fluid card1">
                        </a>

                        <a class=" col-lg-3 col-md-4 col-6  my-3">
                            <img src="dist/img/Gellary/Mti-1.jpg" class="img-fluid card1">
                        </a>

                        <a class=" col-lg-3 col-md-4 col-6  my-3">
                            <img src="dist/img/Gellary/Mti-2.jpg" class="img-fluid card1">
                        </a>

                        <a class=" col-lg-3 col-md-4 col-6  my-3">
                            <img src="dist/img/Gellary/Mti-3.jpg" class="img-fluid card1">
                        </a>

                        <a class=" col-lg-3 col-md-4 col-6  my-3">
                            <img src="dist/img/Gellary/Mti-4.jpg" class="img-fluid card1">
                        </a>

                        <a class=" col-lg-3 col-md-4 col-6  my-3">
                            <img src="dist/img/Gellary/Mti-5.jpg" class="img-fluid card1">
                        </a>





                    </div>
                </div>
            </div>
        </div>
        <!-- end of Gellary -->



    </div>
@endsection
