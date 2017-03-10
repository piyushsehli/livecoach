@extends('layouts.main')

@section('content')
	<section id="hero">
		<div class="container">
			<div class="main-tag-line">
				<h1>it's time for a better life</h1>
			</div>
			<div class="sec-tag-line">
				<h4>TALK WITH A PROFESSIONAL COACH ONLINE</h4>
				<h4 class="specific-color">FIRST 7 DAYS ARE FREE</h4>
				<button class="btn-register">start free trial</button>
			</div>
		</div>	
	</section>
	<section id="features">
		<div class="container">
			<h1 class="feature-tagline">REACHING YOUR GOALS IS AFFORDABLE, CONVENIENT AND RISK FREE</h1>
			<p class="feature-desc">Thousands of professional life coaches are waiting to teach you the skills and discipline ​that will ​make you better at accomplishing your goals.</p>
		</div>
		<div class="container feature-list">
			<div class="row">
				<div class="col-sm-4 feature-one">
					<div class="row">
						<img src="images/1.jpg">
					</div>
					<div class="row">
						<h3>Find The Right Coach</h3>
						<p>As soon as you post your goal, our coaches will reach out and suggest different approaches to reach your goal. Talk with as many of them as you want for 7 days and start advancing towards your goal.</p>
					</div>
				</div>
				<div class="col-sm-4 feature-one">
					<div class="row">
						<img src="images/2.jpg">
					</div>
					<div class="row">
						<h3>get unlimited access</h3>
						<p>Then, you can get unlimited access to your coach for only $29/week. If for some reason you want to switch coaches, you can do so as many times as you want.</p>
					</div>
				</div>
				<div class="col-sm-4 feature-one">
					<div class="row">
						<img src="images/3.jpg">
					</div>
					<div class="row">
						<h3>connect when it's convenient</h3>
						<p>No need to wait for an appointment. Message your coach on your spare time or whenever you need advice, and you will get a reply shortly. If you want to schedule a 1:1 session, you can do that as well.</p>
					</div>
				</div>
			</div>
			<div class="row">
					<button class="center-block btn-register">start free trial</button>
			</div>
		</div>
	</section>
	<section id="testi">
		<div class="container">
			<div class="row">
				<h1>what clients are saying</h1>
			</div>
			<div class='row'>
		    <div class='col-sm-12'>
		      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
		        <!-- Bottom Carousel Indicators -->
		        <ol class="carousel-indicators">
		          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
		          <li data-target="#quote-carousel" data-slide-to="1"></li>
		          <li data-target="#quote-carousel" data-slide-to="2"></li>
		        </ol>
		        
		        <!-- Carousel Slides / Quotes -->
		        <div class="carousel-inner">
		        
		          <!-- Quote 1 -->
		          <div class="item active">
		            <blockquote>
		              <div class="row">
		                <div class="col-sm-2 text-center">
		                  <img class="img-thumbnail" src="http://www.reactiongifs.com/r/overbite.gif" style="width: 100px;height:100px;">
		                  <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
		                </div>
		                <div class="col-sm-10 testi-desc">
		                  <small>Someone famous</small>
		                  <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
		  		        </div>
		              </div>
		            </blockquote>
		          </div>
		          <!-- Quote 2 -->
		          <div class="item">
		            <blockquote>
		              <div class="row">
		                <div class="col-sm-2 text-center">
		                  <img class="img-thumbnail" src="https://s3.amazonaws.com/uifaces/faces/twitter/mijustin/128.jpg" style="width: 100px;height:100px;">
		                </div>
		                <div class="col-sm-10 testi-desc">
		                  <small>Someone famous</small>
		                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
		                </div>
		              </div>
		            </blockquote>
		          </div>
		          <!-- Quote 3 -->
		          <div class="item">
		            <blockquote>
		              <div class="row">
		                <div class="col-sm-2 text-center">
		                  <img class="img-thumbnail" src="https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg" style="width: 100px;height:100px;">
		                </div>
		                <div class="col-sm-10 testi-desc">
		                  <small>Someone famous</small>
		                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
		                </div>
		              </div>
		            </blockquote>
		          </div>
		        </div>
		        
		        <!-- Carousel Buttons Next/Prev -->
		       {{--  <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
		        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a> --}}
		      </div>                          
		    </div>
		  </div>
		  <div class="row">
		  	<button class="testi-btn center-block">Submit Testimonial</button>
		  </div>
		</div>
	</section>
	
	<section id="services">
		<div class="container">
			<div class="row">
				<h1>what can livecoach help me achieve?</h1>
				<p>LiveCoach has helped thousands of customers overcome obstacles and achieve their goals. Our experienced coaches can help you identify what's holding you back from having your ideal career, relationship, health, finances, etc.. and make a plan that can be followed through together with you until you have achieved success.</p>
			</div>
			<div class="row">
				<div class="col-sm-4 single-feature">
					<div class="row-own">
						<img src="images/4.jpg" class="center-block">
					</div>
					<div class="row-own">
						<h3>personal goals</h3>
						<ul>
							<li>Improve your health/fitness</li>
							<li>Lose weight</li>
							<li>Increase your self confidence</li>
							<li>Improve your finances</li>
							<li>Find more meaning in life</li>
							<li>Overcome hard emotions</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 single-feature">
					<div class="row-own">
						<img src="images/5.jpg" class="center-block">
					</div>
					<div class="row-own">
						<h3>relationship goals</h3>
						<ul>
							<li>Improve family relationships</li>
							<li>Improve relationships with your partner</li>
							<li>Take romantic relationships to the next level</li>
							<li>Make new/fulfilling relationships</li>
							<li>Address toxic, difficult or draining relationships​</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 single-feature">
					<div class="row-own">
						<img src="images/6.jpg" class="center-block">
					</div>
					<div class="row-own">
						<h3>professional goals</h3>
						<ul>
							<li>Find a new dream job</li>
							<li>Manage career transitions</li>
							<li>Boost focus, productivity or performance</li>
							<li>Achieve better work/life balance</li>
							<li>Improve communication with employees, managers or team members</li>
							<li>Executive coaching for your business</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
		  		<button class="center-block btn-register">Start Trial</button>
		  	</div>
		</div>
	</section>

	<section id="who">
		<div class="container">
			<div class="row">
				<h1>WHO WE ARE?</h1>
			</div>
			<div class="who-desc">
				<p>We started BetterCoach after working with a life coach radically improved our lives. We asked ourselves - why hadn't we done this sooner?</p>
				 
				<p>Finding the right coach took a lot of time and effort. Scheduling and traveling to appointments also took up time we didn’t feel we had. But the experience was ultimately life changing - leading to a major career change and a drastic increase in our physical and emotional wellbeing.</p>

				<p>We decided that working with the right life coach should be simple, affordable, and something you can do in your spare time. So we created BetterCoach, to help bring life-changing experience of a good coach to everyone.</p>​
			</div>
		</div>
	</section>
	@include('layouts.partials.form')
@stop