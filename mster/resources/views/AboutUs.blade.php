@extends('layout.master')
@section('content')
@section('css','contact.css')


<!-- ##### Breadcumb Area Start ##### -->
<br><br>
{{-- <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYyPYJbjoTgQttZptz1Ths2KrEdipMyJZ2RQ&usqp=CAU);">
    <div class="bradcumbContent">
        <h2>About us</h2>
    </div>
</section> --}}
<!-- ##### Breadcumb Area End ##### -->


<!-- ##### Book Now Area End ##### -->

<!-- ##### About Us Area Start ##### -->
<br><br><br>

<section class="about-us-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="about-text mb-100">
                    <div class="section-heading">
                                                <h2>Who Am I</h2>
                    <p>OBADA Al-ALSHAFEEY is a programmer, Full Stack Web Developer. This idea came to my mind because I am a resident of a tourist province that is filled with visitors, furnished apartments, tourist hotels, backpackers, and activities.
                        NUZUL.</p>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="about-thumbnail mb-100">
                    <img src="https://cdn.discordapp.com/attachments/986725547860168725/1024328361469816903/1607.m00.i125.n012.S.c12.264485381_Caravan_in_desert_vector_background._Arab_people_and_camels_silhouettes_in_sands.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Us Area End ##### -->

<!-- ##### Milestones Area Start ##### -->
<section class="our-milestones section-padding-100-0 bg-img bg-overlay bg-fixed" style="background-image: url(https://cdn.discordapp.com/attachments/986725547860168725/1024333794657972345/2725.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="section-heading text-center white">
                    {{-- <div class="line-"></div> --}}
                    <h2>our achievements</h2>
                    <p>So far, we have received a large number of visitors, and because at this moment we have our own customers and we are proud of this wonderful work and we hope to become number one in the world and this wonderful work will be developed for us more of your admiration.</p>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Single Cool Facts -->
            

            <!-- Single Cool Facts -->
            <div class="col-12 col-sm-7 col-lg-4">
                <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <div class="scf-text">
                        {{-- <i class="icon-swimming-pool"></i> --}}
                        <h2><span class="counter">3</span></h2>
                        <p>chalets</p>
                    </div>
                </div>
            </div>

            <!-- Single Cool Facts -->
            <div class="col-12 col-sm-7 col-lg-4">
                <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="700ms">
                    <div class="scf-text">
                        {{-- <i class="icon-resort"></i> --}}
                        <h2><span class="counter">79</span></h2>
                        <p>Rooms</p>
                    </div>
                </div>
            </div>

            <!-- Single Cool Facts -->
            <div class="col-12 col-sm-7 col-lg-4">
                <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="900ms">
                    <div class="scf-text">
                        {{-- <i class="icon-restaurant"></i> --}}
                        <h2><span class="counter">25</span></h2>
                        <p>Apartments</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### Milestones Area End ##### -->

<!-- ##### Hotels Area Start ##### -->
<section class="our-hotels-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    {{-- <div class="line-"></div> --}}
                    <h2>My City</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Single Hotel Info -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-hotel-info mb-100">
                    
                    <div class="hotel-img">
                        <img src="{{asset('img/img-new/5.jpg')}}" alt="">
                    </div>
                    <br>

                    <div class="hotel-img">
                        <img src="{{asset('img/img-new/6.jpg')}}" alt="">                    </div>
                </div>
            </div>
            <!-- Single Hotel Info -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-hotel-info mb-100">
                   
                    <div class="hotel-img">
                        <img src="{{asset('img/img-new/1.jpg')}}" alt="">                    </div>
                    <br>

                    <div class="hotel-img">
                        <img src="{{asset('img/img-new/4.jpg')}}" alt="">                    </div>
                </div>
            </div>
            <!-- Single Hotel Info -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-hotel-info mb-100">
                   
                    <div class="hotel-img">
                        <img src="{{asset('img/img-new/3.jpg')}}" alt="">                    </div>
                    <br>
                    <div class="hotel-img">
                        <img src="{{asset('img/img-new/2.jpg')}}" alt="">                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hotels Area End ##### -->

<!-- ##### Testimonial Area Start ##### -->
<section class="testimonial-area section-padding-100 bg-img" style="background-image: url(https://img.freepik.com/free-vector/beach-daytime-landscape-scene-with-sand-castle-palm-tree_1308-62739.jpg?w=1060&t=st=1664291387~exp=1664291987~hmac=61988224ce41966e68292de6bfc2eeff08cd0e689cc98bfb4713442df011ac38);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-content">
                    <div class="section-heading text-center">
                        {{-- <div class="line-"></div> --}}
                        <h2>What Clients Say</h2>
                    </div>
                    
                    <!-- Testimonial Slides -->
                    <div class="testimonial-slides owl-carousel">
                        
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                            <h6>Michael Smith, <span>Client</span></h6>
                        </div>
                        
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                            <h6>Nazrul Islam, <span>Developer</span></h6>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Testimonial Area End ##### -->
@endsection