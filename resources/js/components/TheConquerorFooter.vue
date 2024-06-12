<template>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted" >
        <!-- Section: Notification -->
        <section class="footer_notification d-flex justify-content-centerS pt-3 ">
               <div class="m-auto">
                   Get notified when we release a new challenge <span style="font-size:1.5rem;">&rarr;</span>
                   <div class="form-group d-inline-block">
                       <input class="submit_notification_input m-0" type="text" />
                       <b-button class="submit_notification" >Submit</b-button>
                   </div>

               </div>
        </section>


        <!-- Section: Links  -->
        <section class="footer_links">
            <div class="container text-center text-md-start">
                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Logo -->
                        <img :src="'/assets/conqueror-logo-bk.svg'" class="logo_black mt-5"/>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">
                        <!-- Links -->
                        <h6 class="text-uppercase footer_title_link  mb-4 mt-5  ">
                            ABOUT
                        </h6>
                        <p >
                            <a href="#!" class="text-reset">About Us</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Careers</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Our Causes</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Blog</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Media</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Support Center</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">
                        <!-- Links -->
                        <h6 class="text-uppercase footer_title_link  mb-4 mt-5">
                            THE CONQUEROR OFFERINGS
                        </h6>
                        <div class="text-start">
                            <p >
                                <a href="#!" class="text-reset">Corporate Wellness</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">My Virtual Mission</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">The Conqueror Adventures</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Virtual Challenges</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Virtual Race</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Virtual Running</a>
                            </p>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">
                        <!-- Links -->
                        <h6 class="text-uppercase footer_title_link  mb-2 mt-5">
                            PRIVACY NOTICE
                        </h6>
                        <a href="#!" class="text-reset">To read our privacy notice including our GDPR policy, please click here.</a>

                        <h6 class="text-uppercase footer_title_link  mb-2 ">
                            TERMS OF SERVICE
                        </h6>
                        <a href="#!" class="text-reset">To read our terms of service click here</a>

                        <h6 class="text-uppercase footer_title_link ">
                            download the app
                        </h6>
                        <img :src="'/assets/google-play-badge-logo.svg'" class="image_google"/>


                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: #000;">
            <span style="color:#fff;">© ACTIONARY LIMITED ALL RIGHTS RESERVED</span> <br>
            <a class="text-reset fw-bold" href="#">THE CONQUEROR and VIRTUAL CHALLENGES are a Trademark of Actionary. THE CONQUEROR Trademark is registered in the US, UK, AU and EU. </a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</template>
<script>
import { mapGetters } from 'vuex'

export default {
    components: {},

    data: () => ({
        appName: window.config.appName
    }),

    computed: mapGetters({
        user: 'auth/user'
    }),

    methods: {
    }
}
</script>

<style scoped>
.footer_notification {
    background-color: #262626;
    color: #fff;
}
.submit_notification_input{
    width: 16.3rem;
    height: 2.6rem;
}
.submit_notification {
    background-color: #D7BE69;
    width: 7.8rem;
    height: 2.6rem;
    color:#000;
    font-weight:bold;
}

.footer_links {
    background-color: #000;
    color:#fff;
}

.logo_black {
    height: 25.2rem;
}

.footer_title_link {
    color: #D7BE69;
    font-weight: bold;
}
.image_google {
    margin-top: 0;
    width: 10rem;
}
</style>
