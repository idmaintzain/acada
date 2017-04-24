 <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ACADA</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="{{ url('/') }}">Home</a></li>
            
              <li><a href="{{ url('/about') }}">About</a></li>
              <li><a href="{{ url('/faq') }}">FAQs</a></li>
              <li><a href="{{ url('/contact') }}">Contact Us</a></li>


<li><a href="{{ url('/htmltutorial') }}">HTML</a></li>
              <li><a href="{{ url('/phptutorial') }}">PHP</a></li>
              <li><a href="{{ url('/javatutorial') }}">JAVA</a></li>


            <!--  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
         
              <li> <a href="{{ url('/login') }}">Login</a></li>
              <li>  <a href="{{ url('/register') }}">Register</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>