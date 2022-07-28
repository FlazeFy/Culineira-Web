<style>
    /*Footer*/
    .deneb_footer .widget_wrapper {
        background-repeat: no-repeat;
        background-size: cover;
        background-image: linear-gradient(to right, #eb7336, #eb8d36);
        border-radius: 50px 50px 8px 8px !important;
        padding-top: 35px;
        padding-left: 35px;
        padding-left: 35px;
        padding-bottom: 50px;
    }
    @media (max-width: 767px) {
        .deneb_footer .widget_wrapper .widget {
            margin-bottom: 40px;
        }
    }
    .deneb_footer .widget_wrapper .widget .widget_title {
        margin-bottom: 30px;
    }
    .deneb_footer .widget_wrapper .widget .widget_title h4 {
        font-weight: bold;
    }
    .deneb_footer .widget_wrapper .widget .widget_title h4:after {
        content: "";
        display: block;
        max-width: 38px;
        height: 2px;
        margin-top: 5px;
    }
    .deneb_footer .widget_wrapper .widegt_about p {
        margin-bottom: 20px;
    }
    .deneb_footer .widget_wrapper .widget_link ul li {
        margin-bottom: 5px;
    }
    .deneb_footer .widget_wrapper .widget_link ul li a {
        text-transform: capitalize;
        color: #7a808d;
    }
    .deneb_footer .widget_wrapper .widget_link ul li a:hover,
    .deneb_footer .widget_wrapper .widget_link ul li a:focus {
        color: #feb000;
    }
    .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info {
        max-width: 250px;
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }
    .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .icon {
        font-size: 12px;
        color: #feb000;
        margin-right: 10px;
    }
    .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .info p a {
        color: #7a808d;
    }
    .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .info p span {
        display: block;
    }

    .deneb_cta .cta_wrapper {
        padding: 20px;
        max-width: 970px;
        border-radius: 15px;
        margin: auto;
        margin-bottom: -185px;
        position: relative;
        background:#78578E;
        z-index: 1;
    }
    .deneb_cta .cta_wrapper:after {
        background-position: bottom;
        width: 100%;
        height: 100%;
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: -1;
    }
    .deneb_cta .cta_wrapper .cta_content h3 {
        color: #fff;
        font-weight: bold;
    }
    @media (max-width: 767px) {
        .deneb_cta .cta_wrapper .cta_content h3 {
            font-size: 24px;
        }
    }

    .deneb_cta .cta_wrapper .cta_content p {
        color: #fff;
    }

    /* .deneb_footer{
        width:110%;
        max-width: 110%;
        overflow-x: hidden;
        margin-left:-50px;
        margin-right:0px;
        margin-bottom:-50px;
    } */
</style>

<footer class="deneb_footer">
    <div class="widget_wrapper shadow">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="widget widegt_about">
                        <div class="widget_title">
                            <h2>Culineira</h2>
                        </div>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="widget widget_link">
                        <div class="widget_title">
                            <h4>Links</h4>
                        </div>
                        <ul>
                            <li><a href="#" class="text-white">About Us</a></li>
                            <li><a href="#" class="text-white">Services</a></li>
                            <li><a href="#" class="text-white">Portfolio</a></li>
                            <li><a href="#" class="text-white">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="widget widget_contact">
                        <div class="widget_title">
                            <h4>Contact Us</h4>
                        </div>
                        <div class="contact_info">
                            <div class="single_info">
                                <div class="icon">
                                    <i class="fas fa-phone-alt text-white"></i>
                                </div>
                                <div class="info">
                                    <p><a class="text-white">0811 4882 001</a></p>
                                </div>
                            </div>
                            <div class="single_info">
                                <div class="icon">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                                <div class="info">
                                    <p><a class="text-white">flazen.edu@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="single_info">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div class="info">
                                    <p class="text-white">Bandung</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center text-white">Copyright &copy; 2022 All rights reserved.</p>
    </div>
</footer>
