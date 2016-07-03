<div class="container-fluid"> 
        <div id="loginbox" style="margin-top: 25px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-default" >
                    <div class="panel-heading">
                        <div class="panel-title text-center"><b>José Guilherme | Login</b></div>
                        
                    </div>     
 
                    <div style="padding-top:30px" class="panel-body" >
 
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="Executa" method="POST">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" placeholder="Username">                                        
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="senha" placeholder="Senha">
                            </div>
                            <br>
                            <a href="<?php echo site_url("site/recupera_senha"); ?>">Esqueceu a sua senha?</a>
                            <br><br>
 
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
 
                                    <div class="col-sm-12 controls">
                                        <center><button type="submit" class="btn btn-default"><b>Login</b></button></center><br><br>
                                       
        
 
                                    </div>
                                </div>
						</form>
					</div>
			</div>
		</div>
	</div>	

