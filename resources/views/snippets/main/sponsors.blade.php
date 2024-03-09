
        <!-- client-carousel section Start -->
        <div class="client-carousel client-carousel-one ">
            <div class="container">
                <div class="client-carousel__one laboix-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 5,
            "margin": 55,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":true,
            "dots":false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items":1,
                    "margin": 0
                },
                "360":{
                    "items":2,
                    "margin": 0
                },
                "575":{
                    "items":3,
                    "margin": 30
                },
                "768":{
                    "items":3,
                    "margin": 40
                },
                "992":{
                    "items": 4,
                    "margin": 40
                },
                "1200":{
                    "items": 4
                }
            }
            }'>

                @foreach ($sponsors as $sponsor)
                    <div class="client-carousel__one__item">
                        <a href="{{ $sponsor->link }}" target="_blank">
                            <img style="width: 100px; height: 100px; object-fit:cover;" src="{{ asset('storage/' . $sponsor->thumbnail) }}" alt="sponsor">
                        </a>
                    </div><!-- /.owl-slide-item-->
                @endforeach


                </div><!-- /.thm-owl__slider -->
            </div><!-- /.container -->
        </div>
        <!-- /.client-carousel -->
