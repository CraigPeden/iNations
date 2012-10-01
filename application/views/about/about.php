<style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #000;
        background-image: url(../../images/bkgd.png);
        background-repeat: no-repeat;
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 820px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }

      /* The white background content wrapper */
      .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      /* Page header tweaks */
      .page-header {
        background-color: #f5f5f5;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
      }

      /* Give a quick and non-cross-browser friendly divider */
      .content .span3 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }
      
	    .navbar {
			margin-bottom: 18px;
		}
		
		.navbar .nav .active > a, .navbar .nav .active > a:hover {
	  		border-bottom: 2px gray double;
	  		background: none !important;
		}
		
		.navbar-inner {
			background: none !important;
		}

</style>

<div class="container">
	<div class="content" style="min-height:500px;">
		<div class="page-header">
			<h1>Stocker <small>Retail Support Program</small></h1>
		</div>
		<div class="row-fluid">
	  		<div class="span7">
	    		<p>Stocker is a program that can handle multiple areas required by companies in the retail sector.</p>
	    		<h4>Features include</h4>
	    		<dl>
			        <dt>Transactions</dt>
			        <dd>Facilitates the selling of goods.</dd>
			        <dt>Inventory</dt>
			        <dd>Allows items to be stored and then sold.</dd>
			        <dt>Loyalty</dt>
			        <dd>Allows Loyalty members to be added and their number of commerces tracked.</dd>
			        <dt>Offer Presentation</dt>
			        <dd>A small carousel of five random items displaying current available products.</dd>
			   	</dl>
	  		</div>
	  		<div class="span3">
	  			<h4>Dev Info</h4>
	    		<ul class="unstyled">
			        <li>Languages
			        	<ul>
			        		<li>HTML 5</li>
			        		<li>CSS 3</li>
			        		<li>PHP 5</li>
			        		<li>MySQL 5.5.9</li>
			        	</ul>
			        </li>
			        <li>Development Environment
			        	<ul>
			        		<li>Mac OS X 10.7 (Lion)</li>
			        	</ul>
			        </li>
			       <li>Development Tools
			        	<ul>
			        		<li>MAMP - Apache/PHP</li>
			        		<li>Coda - PHP/HTML/CSS</li>
			        		<li>Sequel Pro - MySQL</li>
			        		<li>Google Chrome</li>
			        		<li>GIMP</li>
			        	</ul>
			        </li>     
			        <li>Frameworks				        
			        	<ul>
				            <li><a href="http://codeigniter.com/">Codeigniter (PHP)</li>
				            <li><a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap (HTML/CSS)</a></li>
				        </ul>
			        </li>
		      </ul>
	  		</div>
		</div>
		</div>
	
</div> <!-- /container -->
