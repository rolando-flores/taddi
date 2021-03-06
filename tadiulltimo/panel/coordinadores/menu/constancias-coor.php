<!-- Modal -->
<div class="row centered">
	<div class="col col-10">
		<div id="modal-constancias-tuto" class="animated bounceInRight">
		    <div class="modal" style="border: 1px solid #DDD;">
		        <div class="modal-header gradient">Constancia Coordinador<br><span class="label tag error">Genera formato en PDF</span></div>
		        <div class="modal-body">
			        <form class="form" id="modal-constancias-tuto">
			        		<div class="row centered">
			        			<div class="col col-10">
			        			
					        		<div class="form-item">
								    <label>Carrera</label>
								        <select class="select" id="carrera" name="carrera">
								            <option value="">-- Selecciona --</option>
								            <?php
													include('../../php/generarCombos.php');
													$combo = new GenerarCombos('../../../php/datosServer.php');
													$combo->generarComboCarreras();
												?>	
								        </select>
								    </div>
								    
								    <div class="row">
								    	<div class="col col-7">
								    		<div class="form-item">
										    <button type="button" class="button aceptar width-100" id="cons-coor"><i class="fa fa-file-pdf-o fa-lg"></i> Generar PDF</button>
										    </div>
								    	</div>
										<div class="col">
										    <div class="form-item">
										    <button class="button oscuro width-100" id="cancel"><i class="fa fa-ban fa-lg"></i> Cancelar</button>
										    </div>
								    	</div>
									</div>
			        			</div>
						    </div>
						    <script type="text/javascript">
						    	$(document).ready(function () {
						    			$("input#id").tipso({
											  showArrow: true,
											  position: 'top',
											  background: 'rgba(0, 0, 0, 0.5)',
											  color: '#eee',
											  useTitle: false,
											  animationIn: 'bounceIn',
											  animationOut: 'bounceOut',
											  size: 'small'
										});
										
								$('form#modal-constancias-tuto').on('click','button#cons-coor',function (e) {
									e.preventDefault();
									var noc = $('form#modal-constancias-tuto').find('select#carrera').val();
									
									if (noc.length != '') {
										$.cookie('anexo', '12-'+noc, {path: '/'});
										window.open('../reportes/encuestas.php', '_blank');
									}else{
										alertify.error('Algún campo está vacio, verifica.');
									}
									
								});
							
						    	}); 
						    </script>
						</form>
		        </div>
		    </div>
		</div>
</div>
</div>		
