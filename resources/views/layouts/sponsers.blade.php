<div class="parallax section dbcolor">
    <div class="container">
        <div class="row logos">
           @foreach ($sponsers as $sponser)
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="{{url('/assests/images/').'/'.$sponser->image}}" alt="" class="img-repsonsive"></a>
            </div>
            @endforeach

        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->
