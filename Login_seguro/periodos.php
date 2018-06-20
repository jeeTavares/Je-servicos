<?php include 'templates/header.php';?>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, shrink-to-fit=no">
    <title>Per&iacute;odos</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <link href='http://fonts.googleapis.com/css?family=Georgia' rel='stylesheet' type='text/css'>

</head>
<?php 

    $cn = mysqli_connect('localhost', 'root', '', 'jornaleconomico') or die (mysqli_error());
    mysqli_select_db($cn,'jornaleconomico') or die (mysqli_error());
    $nome = (isset($_POST['nome']));
    $start_time = (isset($_POST['start_time']));
    $end_time = (isset($_POST['end_time']));
    
    $query = "INSERT INTO piquet (nome, start_time, end_time) VALUES ('".$nome."', '".$start_time."','".$end_time."')";
?>

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
        <h1 class="display-4 m-5">Piquetes</h1>
        <br><br/>
        <div class="container">
            <div class="periodo-form">  
			<?php require_once 'templates/message.php';?>
		    </div>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-regist" role="form" id="periodo-form">
                <div class="form-group">
                <label for="sel1">Escolha o per&iacute;odo do seu hor&aacute;rio:</label>
                <select class="form-control col-sm-13" id="sel1" style="font-size:16px; height:30px; width:480px;">
                    <option value="0" selected>--Selecione--</option>
                    <option value="{'id' : 1, 'desc': 'Manha'}">Manhã</option>
                    <option value="{'id' : 2, 'desc': 'Tarde'}">Tarde</option>
                </select>
            </form>    
                </div>
                <br><br/>
                <div class="form-group row">
                    <legend class="col-form-legend col-sm-2"><h3>Hora de In&iacute;cio:</h3></legend>
                    <input class="form-control col-sm-2" style="font-size:16px; height:30px;" type="time" value="13:45:00" id="example-time-input">
                </div>
                <br><br/>
                <div class="form-group row">
                    <legend class="col-form-legend col-sm-2"><h3>Hora de Fim:</h3></legend>
                    <input class="form-control col-sm-2" style="font-size:16px; height:30px;" type="time" value="13:45:00" id="example-time-input">
                </div>        
                    <p></p>
                    <br></br>
                    <div class="form-group row col-sm-5">
				        <button class="btn btn-primary btn-block bt-event" type="submit" id="submit_btn" data-loading-text="Registando...."><h4>Registar evento</h4></button>
			        </div>
                </div>        
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>  

        <script src="js/jquery.validate.min.js"></script>
        <script src="js/periodo.js"></script>       
    </form>

</body>
</html>
<?php ob_end_flush(); ?>