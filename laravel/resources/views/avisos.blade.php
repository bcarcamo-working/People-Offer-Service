@extends('layouts.principal')
@section('content')
<script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
				<div class="avisos-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="" alt="" /></a>
					<p>Avisos</p>
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
					<div class="col-md-9 avisoss-grids">
						{!!$map['html']!!}
						<div class="avisos">
							<div class="movie-pic">
								<a href="single.html"><img src="images/r4.jpg" alt="" /></a>
							</div>
							<div class="avisos-info">
								<a class="span" href="single.html">Nombre  <i> avisos</i></a>
								<p class="info">NOMBRE:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor</p>
								<p class="info">DESCRIPCIÓN: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
								<p class="info">DIRECCIÓN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crime</p>
								<p class="info">CONTACTO:&nbsp;&nbsp;&nbsp; &nbsp; 1 hour 45 minutes</p>
							</div>

							<div class="clearfix"></div>
						</div>
						

						<div class="avisos">
							<div class="movie-pic">
								<a href="single.html"><img src="images/r1.jpg" alt="" /></a>
							</div>
							<div class="avisos-info">
								<a class="span" href="single.html">Nombre  <i> avisos</i></a>
								
								<p class="info">NOMBRE:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor</p>
								<p class="info">DESCRIPCIÓN: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
								<p class="info">DIRECCIÓN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crime</p>
								<p class="info">CONTACTO:&nbsp;&nbsp;&nbsp; &nbsp; 1 hour 45 minutes</p>
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