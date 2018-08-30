
<div class="logo">
<img src="assets/img/gt-logo.jpg" alt="gtb logo" />
</div>
    <!-- Page Content -->
	
    <div class="container">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img class="d-block w-100" src="assets/img/1.jpg" alt="First slide">
		   <div class="carousel-caption col-lg-4 col-md-6 col-content content-align-left"><h1 class="h1-slider">Buy Anything. <br><strong>Pay Later!</strong></h1>
				<div class="slider-text">
					<p>Getting what you want just got easy<br>with HubCredit. Make purchases on <br>
					the SME MarketHub and Pay later.&nbsp;</p>
				</div><a class="btn  btn-primary btn-large" href="http://www.gtbank.com/hubcredit" target=""><span class="btn-wrap">
				<span class="btn-text">Click Here to Opt in</span>
				<span class="icon icon-arrow-forward"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="11" viewBox="0 0 14 11"></svg></span></span></a>
		</div>
		</div>
		<div class="carousel-item">
		  <img class="d-block w-100" src="assets/img/2.jpg" alt="Second slide">
		 <div class="carousel-caption col-lg-4 col-md-6 col-content content-align-left"><h1 class="h1-slider">Buy Anything. <br><strong>Pay Later!</strong></h1>
				<div class="slider-text">
					<p>Getting what you want just got easy<br>with HubCredit. Make purchases on <br>
					the SME MarketHub and Pay later.&nbsp;</p>
				</div><a class="btn  btn-primary btn-large" href="http://www.gtbank.com/hubcredit" target=""><span class="btn-wrap">
				<span class="btn-text">Click Here to Opt in</span>
				<span class="icon icon-arrow-forward"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="11" viewBox="0 0 14 11"></svg></span></span></a>
		</div>
		</div>
		<div class="carousel-item">
		  <img class="d-block w-100" src="assets/img/3.jpg" alt="Third slide">
		   <div class="carousel-caption col-lg-4 col-md-6 col-content content-align-left"><h1 class="h1-slider">Buy Anything. <br><strong>Pay Later!</strong></h1>
				<div class="slider-text">
					<p>Getting what you want just got easy<br>with HubCredit. Make purchases on <br>
					the SME MarketHub and Pay later.&nbsp;</p>
				</div><a class="btn  btn-primary btn-large" href="http://www.gtbank.com/hubcredit" target=""><span class="btn-wrap">
				<span class="btn-text">Click Here to Opt in</span>
				<span class="icon icon-arrow-forward"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="11" viewBox="0 0 14 11"></svg></span></span></a>
		</div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
	</div>
	</div>
	
	  <section class="section-home-services">
		 <div class="container">
		 
		<div class="row">
			<div class="col-lg-6 col-md-8 col-center">
				<div class="home-services-intro">
					<h2 class="home-services-heading">Innovative Banking Products</h2>
					<p>Tailored to your lifestyle, designed for your <br />personal and business needs. </p>
				</div>
			</div>
		</div>
		
		<div class="row">
		<?php foreach ($news as $news_item): ?>
		
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-iem">
          <a href="#"><div class="card h-100">
           <img class="card-img-top" src="assets/img/<?php echo $news_item['image_id_ext'];?>.jpg"  alt="">
            <div class="card-body">
              <h4 class="card-title">
                <?php echo $news_item['heading']; ?> </h4>
              <p class="card-text"> <?php echo $news_item['body']; ?></p>
            </div>
			<div class="card-footer"><a class="link-arrow" href="#" target="">
			<span class="link-text">
            Read more <i class="fas fa-greater-than"></i>
        </span></a></div>
			</a>
          </div>
		   </div>
		 <?php endforeach; ?>
       
     
	</div><!--div container-->
	</section>
	<section class="section-two">
		<div class="container">
			<h2> Our Initiatives</h2>
		<div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item" style="background-image: url('assets/img/ndani-promo-bg.jpg');">
          <div class="card h-100">
            <div class="card-body">
				
					<div class="card-img-top ">
						
						<img  src="assets/img/placeholder-home-09.png" alt="Home 09">
						
					</div>
						<div class="card-text">
						<p>Uncovering the best of modern African life &amp; culture</p>
						</div>
				
				<div class="card-footer">
					<div class="btn-wrap">
						<a class="btn  btn-primary " href="http://ndani.tv/" target=""><span class="btn-wrap">
						<span class="btn-text">Visit Ndani</span>
						<span class="link-text">
						   <i class="fas fa-greater-than"></i>
						</span></span></a>
					</div>
				</div>
			</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item" style="background-image: url('assets/img/ndani-promo-bg.jpg');">
          <div class="card h-100">
            <div class="card-body">
				
					<div class="card-img-top ">
						
						<img  src="assets/img/placeholder-home-09.png" alt="Home 09">
						
					</div>
						<div class="card-text">
						<p>Uncovering the best of modern African life &amp; culture</p>
						</div>
				
				<div class="card-footer">
					<div class="btn-wrap">
						<a class="btn  btn-primary " href="http://ndani.tv/" target=""><span class="btn-wrap">
						<span class="btn-text">Visit Ndani</span>
						<span class="link-text">
						   <i class="fas fa-greater-than"></i>
						</span></span></a>
					</div>
				</div>
			</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item" style="background-image: url('assets/img/ndani-promo-bg.jpg');">
          <div class="card h-100">
            <div class="card-body">
				
					<div class="card-img-top ">
						
						<img  src="assets/img/placeholder-home-09.png" alt="Home 09">
						
					</div>
						<div class="card-text">
						<p>Uncovering the best of modern African life &amp; culture</p>
						</div>
				
				<div class="card-footer">
					<div class="btn-wrap">
						<a class="btn  btn-primary " href="http://ndani.tv/" target=""><span class="btn-wrap">
						<span class="btn-text">Visit Ndani</span>
						<span class="link-text">
						   <i class="fas fa-greater-than"></i>
						</span></span></a>
					</div>
				</div>
			</div>
          </div>
        </div>
         <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item" style="background-image: url('assets/img/ndani-promo-bg.jpg');">
          <div class="card h-100">
            <div class="card-body">
				<div class="card-content">
					<div class="card-img-top ">
						<div class="lazyload-container no-bg lazyloaded">
							<img class=" lazyloaded" src="assets/img/placeholder-home-09.png" alt="Home 09">
						</div>
					</div>
						<div class="card-text">
						<p>Uncovering the best of modern African life &amp; culture</p>
						</div>
				</div>
				<div class="card-footer">
					<div class="btn-wrap">
						<a class="btn  btn-primary " href="http://ndani.tv/" target=""><span class="btn-wrap">
						<span class="btn-text">Visit Ndani</span>
						<span class="link-text">
						   <i class="fas fa-greater-than"></i>
						</span></span></a>
					</div>
				</div>
			</div>
          </div>
        </div>
      </div>
      <!-- /.row -->
	</section>
     

    </div>
    <!-- /.container -->

    <!-- Footer -->
	<section>
	<div class="container footer-icons">
	<div class="row">
		<div class="col-12">
	<table width="100%">
  <tr>
    <td width="99"><i class="fas fa-chart-line"></i> <p> Find a Branch </p></td>
    <td width="99"><i class="fas fa-chart-line"></i><p> Find a Branch </p></td>
    <td width="99"><i class="fas fa-chart-line"></i><p> Find a Branch </p></td>
    <td width="99"><i class="fas fa-chart-line"></i><p> Find a Branch </p></td>
    <td width="99"><i class="fas fa-chart-line"></i><p> Find a Branch </p></td>
    <td width="99"><i class="fas fa-chart-line"></i><p> Find a Branch </p></td>
    <td width="99"><i class="fas fa-chart-line"></i><p> Find a Branch </p></td>
    <td width="99"><i class="fas fa-chart-line"></i><p> Find a Branch </p></td>
    <td width="99"><i class="fas fa-chart-line"></i><p> Find a Branch </p></td>
  </tr>
</table>
</div>
</div>
</div>
</section>
	<!--footer nav--->
	<footer class="section-footer-navigation">
	<div class="container">
		<div class="row footer-nav">
			<div class="col col-footer-nav js-footer-nav">
			<h5><a href="https://www.gtbank.com/personal-banking">Personal Banking</a></h5>
			<ul class="list-unstyled">
				<li><a href="/personal-banking/accounts#nav-savings-investments">Savings Account</a></li>
				<li><a href="/personal-banking/accounts#nav-current-accounts">Current Accounts</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/accounts/compare-accounts">Compare Accounts</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/cards">Cards</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/nrn-services">NRN Services</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/loans">Loans</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/ways-to-bank">Ways To Bank</a></li><li><a href="https://www.gtbank.com/personal-banking/private-banking">Private Banking</a></li>
			</ul>
			</div>
			<div class="col col-footer-nav js-footer-nav">
			<h5><a href="https://www.gtbank.com/personal-banking">Personal Banking</a></h5>
			<ul class="list-unstyled">
				<li><a href="/personal-banking/accounts#nav-savings-investments">Savings Account</a></li>
				<li><a href="/personal-banking/accounts#nav-current-accounts">Current Accounts</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/accounts/compare-accounts">Compare Accounts</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/cards">Cards</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/nrn-services">NRN Services</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/loans">Loans</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/ways-to-bank">Ways To Bank</a></li><li><a href="https://www.gtbank.com/personal-banking/private-banking">Private Banking</a></li>
			</ul>
			</div>
			<div class="col col-footer-nav js-footer-nav">
			<h5><a href="https://www.gtbank.com/personal-banking">Personal Banking</a></h5>
			<ul class="list-unstyled">
				<li><a href="/personal-banking/accounts#nav-savings-investments">Savings Account</a></li>
				<li><a href="/personal-banking/accounts#nav-current-accounts">Current Accounts</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/accounts/compare-accounts">Compare Accounts</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/cards">Cards</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/nrn-services">NRN Services</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/loans">Loans</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/ways-to-bank">Ways To Bank</a></li><li><a href="https://www.gtbank.com/personal-banking/private-banking">Private Banking</a></li>
			</ul>
			</div>
			<div class="col col-footer-nav js-footer-nav">
			<h5><a href="https://www.gtbank.com/personal-banking">Personal Banking</a></h5>
			<ul class="list-unstyled">
				<li><a href="/personal-banking/accounts#nav-savings-investments">Savings Account</a></li>
				<li><a href="/personal-banking/accounts#nav-current-accounts">Current Accounts</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/accounts/compare-accounts">Compare Accounts</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/cards">Cards</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/nrn-services">NRN Services</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/loans">Loans</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/ways-to-bank">Ways To Bank</a></li><li><a href="https://www.gtbank.com/personal-banking/private-banking">Private Banking</a></li>
			</ul>
			</div>
			<div class="col col-footer-nav js-footer-nav">
			<h5><a href="https://www.gtbank.com/personal-banking">Personal Banking</a></h5>
			<ul class="list-unstyled">
				<li><a href="/personal-banking/accounts#nav-savings-investments">Savings Account</a></li>
				<li><a href="/personal-banking/accounts#nav-current-accounts">Current Accounts</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/accounts/compare-accounts">Compare Accounts</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/cards">Cards</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/nrn-services">NRN Services</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/loans">Loans</a></li>
				<li><a href="https://www.gtbank.com/personal-banking/ways-to-bank">Ways To Bank</a></li><li><a href="https://www.gtbank.com/personal-banking/private-banking">Private Banking</a></li>
			</ul>
			</div>
		</div>
		
	
</footer>
  <!-- Footer -->
	<section>
	<div class="container footer-number">
	<div class="row">
		<div class="col-12">
	<table width="100%">
  <tr>
    <td width=""><img src="assets/img/gtcall.jpg" class="img-centre" alt="gt logo"/></td>
    <td width=""><p> +234 700 4826 66328 </p></td>
    <td width=""><p> +234 700 4826 66328 </p></td>
    <td width=""><p> +234 700 4826 66328 </p></td>
    <td width=""><p> +234 700 4826 66328</p></td>
  </tr>
</table>
</div>
</div>
</div>
</section>
</div><!--container--->
