<div class="card">
	<div class="card-header header-elements-inline">
		<h5 class="card-title">Alta Usuarios</h5>
		<div class="header-elements">
			<div class="list-icons">
				<a class="list-icons-item" data-action="collapse"></a>
				<a class="list-icons-item" data-action="reload"></a>
				<a class="list-icons-item" data-action="remove"></a>
			</div>
		</div>
	</div>



<div class="content d-flex justify-content-left ">

				<!-- Registration form -->
				
				<?php 
					$attributes = array('class' => 'flex-fill');
					echo form_open('email/send', $attributes);
				?>
<!--				<form action="index.html" class="flex-fill">-->
					<div class="row">
						<div class="col-lg-6 ">
							<div class="card mb-0">
								<div class="card-body">
									<div class="text-center mb-3">
										<i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
										<h5 class="mb-0">Crear Cuenta</h5>
										<span class="d-block text-muted">Todos los campos son requeridos</span>
									</div>

									<div class="form-group form-group-feedback form-group-feedback-right">
										<input type="text" class="form-control" placeholder="Nombre de Usuario">
										<div class="form-control-feedback">
											<i class="icon-user-plus text-muted"></i>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="text" class="form-control" placeholder="Nombre">
												<div class="form-control-feedback">
													<i class="icon-user-check text-muted"></i>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="text" class="form-control" placeholder="Apellido">
												<div class="form-control-feedback">
													<i class="icon-user-check text-muted"></i>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="password" class="form-control" placeholder="Password">
												<div class="form-control-feedback">
													<i class="icon-user-lock text-muted"></i>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="password" class="form-control" placeholder="Repetir Password">
												<div class="form-control-feedback">
													<i class="icon-user-lock text-muted"></i>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="email" class="form-control" placeholder="Email">
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="email" class="form-control" placeholder="Repetir email">
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<h5 class="mb-0">Seleccione Grupo/s del usuario</h5>
											<?php foreach($grupos as $data ):?>
										<div class="form-check">
											<label class="form-check-label">
												<div class="">
												<span >
												<input type="checkbox" class="form-input-styled"  data-fouc="" name="grupos[]" value="<?= $data->id?>">
												</span>
												</div>
													<?= $data->description ?>
											</label>
										</div>
											<?php endforeach; ?>

									</div>


									<button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b> Crear Cuenta</button>
								</div>
							</div>
						</div>
					</div>
					
					<?php 
	
						echo form_close();
					?>
<!--				</form>-->
				<!-- /registration form -->

			</div>



</div>




<script>
	
	
	
	$('#grupo').click(function() {
		alert($(this).val());
    
  });
	

var LoginRegistration = function () {


    //
    // Setup module components
    //

    // Uniform
    var _componentUniform = function() {
        if (!$().uniform) {
            console.warn('Warning - uniform.min.js is not loaded.');
            return;
        }

        // Initialize
        $('.form-input-styled').uniform();
    };


    //
    // Return objects assigned to module
    //

    return {
        initComponents: function() {
            _componentUniform();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    LoginRegistration.initComponents();
});

</script>