<?php 
ob_start();
require_once 'configuration.php';
?>
<?php 
	if(!empty($_POST)){
		try {
			$event_obj = new Cl_event();
			$data = $event_obj->registration( $_POST );
			if($data)$success = EVENT_REGISTRATION_SUCCESS;
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
?>

<?php include 'templates/header.php';
include 'templates/message.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, shrink-to-fit=no">
    <title>Gest&atilde;o de Eventos</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <link href='http://fonts.googleapis.com/css?family=Georgia' rel='stylesheet' type='text/css'>

</head>

<style>
    body{
    background-color:#fff;
    font-family: 'Georgia', serif;
    font-size: 18px;
    }
    input:placeholder-shown {
    font-size:14px;
    }
    input[type="text"] {
    font-family: Georgia;
    font-size: 14px;
    }
    textarea::-webkit-input-placeholder {
    font-size: 14px;
    }
</style> 

<body>
    <h1 class="display-4 m-5">Gest&atilde;o de Eventos</h1>
    <div class="container">
		<div class="event-form">  
			<?php require_once 'templates/message.php';?>
			</div>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-event" role="form" id="event-form">
                <br><br/>

                <div class="col-sm-8">
                <div>
                    <legend class="col-form-legend"><h3>Nome do evento:</h3></legend>
                    <input name="name" id="name" type="text" class="form-control" placeholder="Nome do Evento"> 
                    <span class="help-block"></span><br>
                </div>  
                <div>
                    <legend class="col-form-legend"><h3>Local do evento</h3></legend>
                    <input name="local" id="local" type="text" class="form-control" placeholder="Local do evento" > 
                    <span class="help-block"></span><br>
                </div>
                <div>
                    <legend class="col-form-legend"><h3>Organizador do evento:</h3></legend>
                    <input name="organizer" id="organizer" type="email" class="form-control" placeholder="Organizador do evento" style="font-size:14px;"> 
                    <span class="help-block"></span><br>
                </div>
            </div>
            <div class="col-sm-4">
				<div>
                <div class="form-group row">
                    <legend class="col-form-legend"><h3>Data e Hora:</h3></legend>
                    <input id="date_time" name="date" type="datetime-local" class="form-control" style="font-size:16px;"
                            value= date("Y-m-d\TH:i:s", strtotime(string $task int = [date()]):int)><br>
                </div><br>
                    <div class="radio">
                    <legend><h3>Desloca&ccedil;&atilde;o</h3></legend>
                        <label><input type="radio" name="optradio">Com deslocação</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio">Sem deslocação</label>
                    </div>
                </div>
                <br>

                <div class="form-group row">
					<textarea name="grades" id="grades" type="text" class="form-control" style="font-size:14px;" placeholder="Notas" rows="4"></textarea>
					<span class="help-block"></span>
			    </div>

                <div class="form-group row">
				    <button class="btn btn-primary btn-block bt-event" type="submit" id="submit_btn" value="enviar" data-loading-text="Registando...."><h4>Registar evento</h4></button>
			    </div>
            </div>
        </form>
				</div>
			</div>
		</div>
	</div>
	<!-- /container -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/eventos.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>