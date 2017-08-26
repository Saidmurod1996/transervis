@extends('main')

@section('title', '| Home')

@section('content')

	<!--Carousel-->
<div class="container carousel">

  
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    
    <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      </ol>
                <!-- Wrapper for slides -->
  <div class="carousel-inner text-center" role="listbox">
 
      <div class="item active">
        <div class="col-lg-8 pull-right">
            <img src="{{ asset('images/' . "car1.jpg") }}" id="carousel-photos">
        </div>
          <div class="col-lg-4">                            
              <h2>Sed vel lectus<br>
                  <small>by Merovingio in Jun 22, 2017 at 
                      21:59</small></h2>
              <p>
                  Sed vel lectus. Donec odio urna, tempus molestie, porttitor ut, iaculis quis, sem. Phasellus rhoncus. 
                  Aenean id metus id velit ullamcorper pulvinar. Vestibulum fermentum tortor id mi. 
                  Pellentesque ipsum. Nulla non arcu lacinia neque faucibus...                            
                  Pellentesque ipsum. Nulla non arcu lacinia neque faucibus... 
                  Pellentesque ipsum. Nulla non arcu lacinia neque faucibus... 
                  Pellentesque ipsum. Nulla non arcu lacinia neque faucibus... 
              </p>

          </div>
      </div>

      <div class="item">
        <div class="col-lg-8 pull-right">
            <img src="{{ asset('images/' . "car2.jpg") }}" id="carousel-photos">
        </div>
          <div class="col-lg-4">                            
              <h2>Sed vel lectus<br>
                  <small>by Merovingio in Jun 22, 2017 at 
                      21:59</small></h2>
              <p>
                  Sed vel lectus. Donec odio urna, tempus molestie, porttitor ut, iaculis quis, sem. Phasellus rhoncus. 
                  Aenean id metus id velit ullamcorper pulvinar. Vestibulum fermentum tortor id mi. 
                  Pellentesque ipsum. Nulla non arcu lacinia neque faucibus...                            
                  Pellentesque ipsum. Nulla non arcu lacinia neque faucibus... 
                  Pellentesque ipsum. Nulla non arcu lacinia neque faucibus... 
                  Pellentesque ipsum. Nulla non arcu lacinia neque faucibus... 
              </p>

          </div>
      </div>

      <div class="item">
        <div class="col-lg-8 pull-right">
            <img src="{{ asset('images/' . "car3.jpg") }}" id="carousel-photos">
        </div>
          <div class="col-lg-4">                            
              <h2>Sed vel lectus<br>
                  <small>by Merovingio in Jun 22, 2017 at 
                      21:59</small></h2>
              <p>
                  Sed vel lectus. Donec odio urna, tempus molestie, porttitor ut, iaculis quis, sem. Phasellus rhoncus. 
                  Aenean id metus id velit ullamcorper pulvinar. Vestibulum fermentum tortor id mi. 
                  Pellentesque ipsum. Nulla non arcu lacinia neque faucibus...                            
                  Pellentesque ipsum. Nulla non arcu lacinia neque faucibus... 
                  Pellentesque ipsum. Nulla non arcu lacinia neque faucibus... 
                  Pellentesque ipsum. Nulla non arcu lacinia neque faucibus... 
              </p>

          </div>
      </div>

      <div class="item">
        <div class="col-lg-8 pull-right">
            <img src="{{ asset('images/' . "car4.jpg") }}" id="carousel-photos">
        </div>
          <div class="col-lg-4">                            
              <h2>Sed vel lectus<br>
                  <small>by Merovingio in Jun 22, 2017 at 
                      21:59</small></h2>
              <p>
                  Sed vel lectus. Donec odio urna, tempus molestie, porttitor ut, iaculis quis, sem. Phasellus rhoncus. 
                  Aenean id metus id velit ullamcorper pulvinar. Vestibulum fermentum tortor id mi. 
                  Pellentesque ipsum. Nulla non arcu lacinia neque faucibus...                            
                  Pellentesque ipsum. Nulla non arcu lacinia neque faucibus... 
                  Pellentesque ipsum. Nulla non arcu lacinia neque faucibus... 
                  Pellentesque ipsum. Nulla non arcu lacinia neque faucibus... 
              </p>

          </div>
      </div>            



  </div>


        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
  
  </div>
</div>
  

<!--Features-->
{{-- <dir class="container-fluid" style="background-color: #FAD7A0"></dir> --}}
<div class="container" style="background-color: #FAD7A0" >
<section id="four" class="wrapper style1 special fade-up" style="text-align: center;"> 

            <header class="major">
              <h2>Accumsan sed tempus adipiscing blandit</h2>
              <p>Iaculis ac volutpat vis non enim gravida nisi faucibus posuere arcu consequat</p>
            </header>
            <div class="box alt">
              <div class="row">
                <div class="col-sm-4">
                  <section class="4u 6u(medium) 12u$(xsmall)">
                  <span class="icon alt major fa-check-circle"></span>
                  <h3>Eleifend lorem ornare</h3>
                  <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                </div>
                <div class="col-sm-4">
                <section class="4u 6u$(medium) 12u$(xsmall)">
                  <span class="icon alt major fa-car"></span>
                  <h3>Eleifend lorem ornare</h3>
                  <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                </div>
                <div class="col-sm-4">
                <section class="4u$ 6u(medium) 12u$(xsmall)">
                  <span class="icon alt major fa-file-text-o"></span>
                  <h3>Cubilia cep lobortis</h3>
                  <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                </div>
                </div>
                <div class="row">
                <div class="col-sm-4">
                <section class="4u 6u$(medium) 12u$(xsmall)">
                  <span class="icon alt major fa-balance-scale"></span>
                  <h3>Non semper interdum</h3>
                  <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                </div>
                <div class="col-sm-4">
                <section class="4u 6u(medium) 12u$(xsmall)">
                  <span class="icon alt major fa-wrench"></span>
                  <h3>Odio laoreet accumsan</h3>
                  <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                </div>
                <div class="col-sm-4">
                <section class="4u$ 6u$(medium) 12u$(xsmall)">
                  <span class="icon alt major fa-money"></span>
                  <h3>Massa arcu accumsan</h3>
                  <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                </div>
              </div>
            </div>
          

</section>
</div>
</div>

<!--news-->
<hr>
<h1 style="text-align: center">Янгиликлар</h1>
<div class="container">
  <div class="row">

  @foreach($news as $new)
  <div class="col-md-4">
           <div class="single-blog-item">
                    <div class="blog-thumnail">
                        <a href=""><img src="{{ asset('images/' . $new->image) }}" alt="blog-img" id="news-image"></a>
                    </div>
                    <div class="blog-content">
                        <h4><a href="#">{{ substr($new->title, 0, 50) }}{{ strlen($new->title) > 50 ? "..." : "" }}</a></h4>
                        <p>{{ substr($new->body, 0, 150) }}{{ strlen($new->body) > 150 ? "..." : "" }}</p>
                        <a href="news/{{ $new->id }}" class="more-btn">Батафсил</a>
                    </div>
                    <span class="blog-date">{{ date("M j, Y", strtotime($new->created_at)) }}</span>
                </div>
         </div>
  @endforeach




</div>
</div>

@endsection