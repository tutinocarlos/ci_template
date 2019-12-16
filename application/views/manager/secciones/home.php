

			<!-- Content area -->
			<div class="content">
<?php
				
				echo $this->uri->slash_segment(1,' Leading ');

				
				echo '<hr>';
				
    if (!$this->ion_auth->is_super())
    {
      echo '<br>no es super';
    }else{
      echo '<br>es super';
			
		}				
				
		if (!$this->ion_auth->is_admin())
    {
      echo '<br>no es admin';
    }else{
      echo '<br>es admin';
			
		}				
							
		if (!$this->ion_auth->is_marketing())
    {
      echo '<br>no es marketing';
    }else{
      echo '<br>es marketing';
			
		}				
				
		if (!$this->ion_auth->is_ventas())
    {
      echo '<br>no es ventas';
    }else{
      echo '<br>es ventas';
			
		}				
				
				
var_dump($this->user);
?>
				<!-- Sitemap -->
	home.php
				<!-- /sitemap -->

			</div>
			<!-- /content area -->


