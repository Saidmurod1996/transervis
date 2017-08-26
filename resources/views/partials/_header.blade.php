<!--Top of the page-->
<div class="container-fluid" id="container-fluid-1">
<img src="{{ asset('images/' . "company-name.png") }}" id="company-name"> 
<a href="index.html" class="navbar-brand hidden-xs hidden-sm" id="phone-number">
    <i class="fa fa-group" aria-hidden="true"></i> Transservis - 24/7 | (90) 326-09-00 | (92) 123-45-67
</a> 
</div>


<div class="container-fluid" id="container-fluid-2">
<select class="selectpicker" data-width="fit" id="language-select">
    <option data-content='<span class="flag-icon flag-icon-us"></span> English' value="en" {{ Session::get('locale') == 'en' ? 'selected' : ''  }}>Узб</option>
  	<option  data-content='<span class="flag-icon flag-icon-mx"></span> Español' value="ru" {{ Session::get('locale') == 'ru' ? 'selected' : ''  }}>Рус</option>
</select>
 
	
<a href=""  value="en"><img class="flag hidden-xs hidden-sm" src="{{ Session::get('locale') == 'ru' ? asset('images/' . "flag-rus.jpg") : asset('images/' . "flag-uzb.gif") }}"></a>




<ul class="list-inline hidden-xs" style="float:right;">
<li><a href="" title=""><i class="fa fa-facebook" id="fa-facebook"></i></a></li>
<li><a href="" title=""><i class="fa fa-telegram" id="fa-telegram"></i></a></li>
<li><a href="" title=""><i class="fa fa-instagram" id="fa-instagram"></i></a></li>
</ul>
</div>
