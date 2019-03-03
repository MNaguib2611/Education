<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('{{url('/assests/images/parallax_04.jpg')}}')">
    <div class="container">
        <div class="section-title text-center">
            <h3>Testimonials</h3>
            <p><strong>This was modified to get data from Database using Laravel's Eloquent</strong> </p>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="testi-carousel owl-carousel owl-theme">
                        @foreach ($testimonials as $testimonial)
                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="{{url('/assests/images/').'/'.$testimonial->customer->image}}" alt="" class="img-fluid">
                                <h4>{{$testimonial->customer->name}} </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i>{{$testimonial->title}}</h3>
                                <p class="lead">{{$testimonial->description}}</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        @endforeach

                </div><!-- end carousel -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->
