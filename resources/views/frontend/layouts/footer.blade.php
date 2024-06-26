<!-- Footer -->
<section class="w3l-footer py-sm-5 py-4">
    <div class="container">
        <div class="footer-content">
            <div class="row">
                <div class="col-lg-8 footer-left">
                    <p class="m-0">Copyright © <script>document.write(new Date().getFullYear())</script>. Developed by <a href="{{route('frontend.index')}}">{{$siteSetting->name}}</a></p>
                </div>
                <div class="col-lg-4 footer-right text-lg-right text-center mt-lg-0 mt-3">
                    <ul class="social m-0 p-0">
                        <li><a href="{{$siteSetting->facebook_link}}" target="_blank"><span class="fa fa-facebook-official"></span></a></li>
                        <li><a href="{{$siteSetting->linkedin_link}}" target="_blank"><span class="fa fa-linkedin-square"></span></a></li>
                        <li><a href="{{$siteSetting->instagram_link}}" target="_blank"><span class="fa fa-instagram"></span></a></li>
                        <li><a href="{{$siteSetting->twitter_link}}" target="_blank"><span class="fa fa-twitter"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
</section>
<!-- //Footer -->
