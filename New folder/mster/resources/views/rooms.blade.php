
    @extends('layout.master')
    @section('content')

        
    </div>

    

    <!-- ##### Rooms Area Start ##### -->
    <section class="rooms-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-center">
                        {{-- <div class="line-"></div> --}}
                        <br><br><br>
                        <h2>Choose the apartment you like</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Rooms Area -->
                @foreach ($collection as $item)                
                <div class="col-12 col-md-6 col-lg-4">
                    
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms" >
                        <!-- Thumbnail style="background-image: url({{$item->img}});"-->
                        <div class="bg-thumbnail bg-img" >
                            <img src="{{$item->img}}" style="height:100%">
                       </div>

                        <!-- Price -->
                        <p class="price-from">From ${{$item->price}}/night</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>{{$item->name}}</h4>
                            <p>{{$item->des}}</p>
                        </div>
                        <!-- Book Room -->
                        <a href="{{ url('resrvition/id/'.$item->id) }}" class="book-room-btn btn palatin-btn">booking</a>
                    </div>
                    <div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/1.jpg);"></div>

                </div>
                
               
                @endforeach


              

                <div class="col-12">
                    <!-- Pagination -->
                    <div class="pagination-area wow fadeInUp" data-wow-delay="400ms">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                                <li class="page-item"><a class="page-link" href="#">02.</a></li>
                                <li class="page-item"><a class="page-link" href="#">03.</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Rooms Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
   
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    @endsection