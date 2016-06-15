@extends('layouts.principal')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@if (Auth::check())

			<div class="avisos-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="" alt="" /></a>
					<p>{!!Auth::user()->nombres!!} {!!Auth::user()->apellidos!!}
					<p>
					<a href="{!!URL::to('/logout')!!}" class="btn btn-default btn-sm">
          			<span class="glyphicon glyphicon-log-out"></span> Salir
        			</a>
        			</p>
        			
				</div>
				<div class="search v-search">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="avisoss-section">
				<h3 class="head">Tus avisos prublicados recientemente.</h3>
					<div class="col-md-9 avisoss-grids">
						<div class="avisos">
							<div class="movie-pic">
								<a href="single.html"><img src="images/r4.jpg" alt="" /></a>
							</div>
							<div class="avisos-info">
								<a class="span" href="single.html">Lorem  <i>Movie avisos</i></a>
								<p class="info">CAST:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor</p>
								<p class="info">DIRECTION: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
								<p class="info">GENRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crime</p>
								<p class="info">DURATION:&nbsp;&nbsp;&nbsp; &nbsp; 1 hour 45 minutes</p>
							</div>

							<div class="clearfix"></div>
						</div>
						

						<div class="avisos">
							<div class="movie-pic">
								<a href="single.html"><img src="images/r1.jpg" alt="" /></a>
							</div>
							<div class="avisos-info">
								<a class="span" href="single.html">Lorem  <i>Movie avisos</i></a>
								
								<p class="info">CAST:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor</p>
								<p class="info">DIRECTION: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
								<p class="info">GENRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crime</p>
								<p class="info">DURATION:&nbsp;&nbsp;&nbsp; &nbsp; 1 hour 45 minutes</p>
							</div>
							<div class="clearfix"></div>
						</div>

					</div>


					<div class="clearfix"></div>
			</div>
			</div>
		<div class="avisos-slider">
			 <ul id="flexiselDemo1">
				<li><img src="images/r1.jpg" alt=""/></li>
				<li><img src="images/r2.jpg" alt=""/></li>
				<li><img src="images/r3.jpg" alt=""/></li>
				<li><img src="images/r4.jpg" alt=""/></li>
				<li><img src="images/r5.jpg" alt=""/></li>
				<li><img src="images/r6.jpg" alt=""/></li>
			</ul>	
		</div>	
	@endsection
	@endif