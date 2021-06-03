@include('front_page.header')

        <style type="text/css">
        	.sidenav {
  width: 130px;
  position: fixed;
  z-index: 1;
  top: 150px;
  left: 10px;
  background: #eee;
  overflow-x: hidden;
  padding: 8px 0;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #2196F3;
  display: block;
}

.sidenav a:hover {
  color: #064579;
}
p{
	text-align: center;
}
.main {
	margin-top: 90px;
  margin-left: 160px; /* Same width as the sidebar + left position in px */
 /* font-size: 28px;  Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

        </style>
   
        

<div class="sidenav">
  @foreach($master as $masters)
  <a href='{{url("/master/product/{$masters->id}")}}'>
  	{{$masters->text1}}
  </a>
  @endforeach
</div>

<div class="main">
	<div class="container">
  <h2>Master Products</h2>

  <div class="row">
  	@foreach($master as $masters)
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/lights.jpg" target="_blank">
        	<a href='{{url("/master/product/{$masters->id}")}}'>
          <img src='{{url("public/images/$masters->img")}}' alt="Lights" style="width:100%">
          </a>
          <div class="caption">
         
            <p>{{$masters->text1}}</p>
            <p style="margin-top: -18px">{{$masters->text2}}</p>
            <p style="margin-top: -18px">{{$masters->am}}</p>
          </div>
        </a>
      </div>
    </div>
    @endforeach
   
  </div>
</div>

</div>  


@include('front_page.footer')

       