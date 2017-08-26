<!--Navigation bar-->
  

<nav class="navbar navbar-default" id="navbar-default" data-spy="affix" data-offset-top="145" >
  <div class="container" id="myNavbar">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle x collapsed" data-toggle="collapse" data-target="#navbar-collapse-x" style="border:0px;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse-x">
    <div class ="hidden-xs"> 
      <ul class="nav navbar-left" id="nav-1">
        <a href="{{ url('/') }}" class="glyphicon glyphicon-home" 
        @if(Request::is('/')) { style="color: orange" } @endif ></a>

        <a class="link-1" href="{{ url('news') }}" @if(Request::is('news')) { style="color: orange" } @endif>{{ trans('app.News') }}</a>
      
     
        <div class="dropdown">
        <a class="link-1" href="#" @if(Request::is('service')) { style="color: orange" } @endif>Хизматлар</a>
          <div class="dropdown-content">
              <a href="assistance">Ассистанс хизмати</a>
              <a href="adjuster">Аджастер хизмати</a>    
          </div>
         </div>

       
        <a class="link-1" href="contact" @if(Request::is('contact')) { style="color: orange" } @endif>Богланиш</a>
        

        <a class="link-1" href="about" @if(Request::is('about')) { style="color: orange" } @endif>Биз хакимизда</a>

      </ul>
      <div class="hidden-xs hidden-sm">
      <button type="button" class="btn btn-primary center-block" id="pulse-button" data-toggle="modal" data-target="#squarespaceModal">Савол бериш</button>
      </div>
    </div>

    <div class ="visible-xs">
    <div class="pre-scrollable" id="pre-scrollable">
    <ul class="nav nav-navbar" id="nav-1">              
        
      <li><a href="news">Янгиликлар</a></li>



      <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Хизматлар<span class="caret"></span></a>
      <ul class="dropdown-menu">
          <li><a href="assistance">Ассистанс хизмати</a></li>
          <li><a href="adjuster">Аджастер хизмати</a></li>
      </ul>
      </li>
        
      <li><a href="contact">Богланиш</a></li>

        <li><a class="dropdown-toggle"  href="about">Биз хакимизда</a>
      </li>


      
    </ul>
    
    </div>
    </div>
    </div>
    </div>

</nav>  
