@include('master.header')

<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <!-- section begin -->
    <section id="subheader" data-bgimage="url(images/background/5.png) bottom">
        <div class="center-y relative text-center" data-scroll-speed="4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action='blank.php' class="row" id='form_subscribe' method="post" name="myForm">
                            <div class="col-md-12 text-center">
                                <h1  class="vazir">ورود</h1>
                                <p>ورود به حساب کاربری </p>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->


    <section class="no-top" data-bgimage="url(images/background/3.png) top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form name="contactForm" id='contact_form' class="form-border" method="post" action='{{route('login')}}'>
                        @csrf
                        <h3  class="vazir text-right">وارد حساب خود شوید </h3>

                        <div class="field-set">
                            <label class="text-right">ایمیل</label>
                            <input type='email' name='name' id='name' class="form-control text-left" placeholder="">
                        </div>


                        <div class="field-set">
                            <label class="text-right">رمزعبور</label>
                            <input type='password' name='password' dir="ltr" id='email' class="form-control text-left " placeholder="">
                        </div>

                        <div id='submit' class="pull-left">
                            <input type='submit' id='send_message' dir="ltr" value='ورود' class="btn btn-custom color-2 vazir float-right">

                            <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                            <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>

                            <div class="clearfix"></div>

                            <div class="spacer-single"></div>

                            <!-- social icons -->
                            <ul class="list s3 text-right">
                                <li>ورود سریع با :</li>
                                <li><a href="{{route('googleAuth')}}">گوگل</a></li>
                            </ul>
                            <!-- social icons close -->

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

</div>

<script src="{{asset('js/app.js')}}"></script>
@include('sweet::alert')
@include('master.footer')
