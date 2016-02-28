    <!-- ******HEADER****** --> 
    <header id="header" class="header navbar-fixed-top">  
      <div class="container-fluid">       
        <h1 class="logo">
          <a href="./"><span class="text">Tradokey</span></a>
        </h1><!--//logo-->
        <nav class="main-nav navbar-right" role="navigation">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button><!--//nav-toggle-->
          </div><!--//navbar-header-->
          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="nav-item">{!!HTML::link('/', 'Home');!!}</li>
              <li class="nav-item">
                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">About Us 
                  <i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu">
                    <li>{!!HTML::link('our-company', 'Our Company');!!}</li>
                    <li>{!!HTML::link('world-experts', 'World Experts');!!}</li>
                    <li>{!! HTML::link('review-process','Review Process') !!}</li>                    
                    <li>{!! HTML::link('quick-response','Quick Response') !!}</li> 
                    <li>{!! HTML::link('permanent-support','Permanent Support') !!}</li>


                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Services 
                    <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                      <li>{!!HTML::link('go_translation', 'Documents translation');!!}</li>
                      <li>{!!HTML::link('video-translation', 'Video translation');!!}</li>
                      <li><a href="#">Service 3</a></li>

                    </ul>                            
                  </li><!--//dropdown-->    
                  <li class="nav-item">
                    {!!HTML::link('join', 'Join Us');!!}
                  </li>

                  <li class="nav-item">
                  <a href="http://www.tradokey.com/blog/">Blog</a>
                  </li>

                  <li class="nav-item">
                    {!!HTML::link('contact', 'Contact');!!}
                  </li>   


                  <li class="nav-item">
                    {!!HTML::link('login', 'Log in');!!}
                  </li>
                  <li class="nav-item nav-item-cta last"><a class="btn btn-cta btn-cta-secondary" href="#">Sign Up Free</a></li>
                </ul><!--//nav-->
              </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->                     
          </div><!--//container-->
    </header><!--//header-->