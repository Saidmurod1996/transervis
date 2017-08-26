<footer class="nb-footer">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="about">


  <div class="social-media">
    <ul class="list-inline">
      <li><a href="http://www.facebook.com/" title=""><i class="fa fa-facebook"></i></a></li>
      <li><a href="http://www.telegram.com/" title=""><i class="fa fa-telegram"></i></a></li>
      <li><a href="http://www.instagram.com/" title=""><i class="fa fa-instagram"></i></a></li>

    </ul>
  </div>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
  <h2 class="title">"TRANSSERVIS"САЙТ</h2>
  <p>Ушбу сайтда чоп этилган материаллардан тўлиқ ёки қисман фойдаланилган холатда АО СК "ALSKOM" расмий сайтига линк кўрсатилиниши мажбурий</p>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
  <h2 class="title">Customer information</h2>
  <p>Ўзбекистон Республикаси, 100202
Ташкент ш., Амир Темур к. 109
e-mail: 
Тел: 147-11-00
Факс: 147-22-00
Ишонч телефони: 230-58-38</p>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
  <h2 class="title">БИЗНИНГ МАНЗИЛ</h2>
  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Add1655520901403aaeae5443a39263e4652145959b2de2fbfd1f1af240b790c1&amp;width=230&amp;height=200&amp;lang=ru_RU&amp;scroll=true">
  </script>

</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
  <h2 class="title">Payment</h2>
  <p>Sample HTML page with Twitter's Bootstrap. Code example of Easy Sticky Footer using HTML, Javascript, jQuery, and CSS. This bootstrap tutorial covers all the major elements of responsive</p>
  
</div>
</div>
</div>
</div>

<section class="copyright">
<div class="container">
<div class="row">
<div class="col-sm-6">

</div>
<div class="col-sm-6"></div>
</div>
</div>
</section>
</footer>

<!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">Савол бериш</h3>
    </div>
    <div class="modal-body">
      
            <!-- content goes here -->
            {!! Form::open(['route' => 'question.store', 'data-parsley-validate'=>'']) !!}
              
            {{ Form::label('firstName', 'First Name:') }}
            {{ Form::text('firstName', null, array('class'=>'form-control', 'required'=>'', 'maxlength'=>'255')) }}

            {{ Form::label('lastName', 'Last Name:', ['class' => 'btn-margin-top']) }}
            {{ Form::text('lastName', null, ['class' => 'form-control', 'required'=>'', 'maxlength'=>'255']) }}
  
            {{ Form::label('tel', 'Phone Number:', ['class' => 'btn-margin-top']) }}
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon3">+998</span>
              <input name="tel" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" required="" minlength="9" maxlength="9" >
            </div>
    

            {{ Form::label('body', 'Question:', ['class' => 'btn-margin-top']) }}
            {{ Form::textarea('body', null, array('class'=>'form-control', 'required'=>'')) }}
            
            {{-- {{ Form::submit('Send Question', array('class'=>'btn btn-success btn-lg btn-block btn-margin-top')) }} --}}

            <div class="modal-footer">
              <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Ортга кайтиш</button>
                </div>
                <div class="btn-group btn-delete hidden" role="group">
                  <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
                </div>
                <div class="btn-group" role="group">
                  <button type="submit" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Юбориш</button>
                </div>
              </div>
            </div>

          {!! Form::close() !!}
      {{-- <form>
              <div class="form-group">
                <label for="exampleInputEmail1">ФИШ</label>
                <input type="text" id="FirstName" maxlength="20" class="form-control">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Телефон раками</label>
                <input class="form-control" type="tel" value="(+998) " id="example-tel-input">
              </div>
                <div class="form-group">
                  <label for="exampleTextarea">Савол бериш</label>
                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
              </div>

              
      </form> --}}

    </div>
    
  </div>
  </div>
</div>