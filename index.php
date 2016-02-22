<?php
$nombre = "Proyecto 1";

// Lista de archivos de JavaScript a cargar
$scripts = ["js/angular.min.js", "js/app.js"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo($nombre); ?>: Ejemplo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body ng-app="proyectoUno" ng-controller="ProyectoUnoController">
<div>
    <div class="col-md-4 col-md-offset-4">
        <div class="page-header text-center">
            <h1>Ejemplos PHP</h1>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Sumando usando un formulario con $http</h3>
            </div>
            <div class="panel-body" >
                <form name="formularioSuma" ng-submit="sumar()" novalidate>
                    <div class="form-group">
                        <label for="primerValor">Primer valor</label>
                        <input type="text" class="form-control" id="primerValor"
                               ng-model="primerValor" required />
                    </div>
                    <div class="form-group">
                        <label for="segundoValor">Segundo valor</label>
                        <input type="text" class="form-control" id="segundoValor"
                               ng-model="segundoValor" required />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" type="submit">Sumar</button>
                    </div>
                    <div class="form-group"><p>{{resultado}}</p></div>
                </form>
            </div>
        </div>
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Restando usando un formulario con $http</h3>
            </div>
            <div class="panel-body">
                <form name="formularioResta" ng-submit="restar()" novalidate>
                    <div class="form-group">
                        <label for="primerValor">Primer valor</label>
                        <input type="text" class="form-control" id="primerValor"
                               ng-model="primerValor" required />
                    </div>
                    <div class="form-group">
                        <label for="segundoValor">Segundo valor</label>
                        <input type="text" class="form-control" id="segundoValor"
                               ng-model="segundoValor" required />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" type="submit">Restar</button>
                    </div>
                    <div class="form-group"><p>{{resultado}}</p></div>
                </form>
            </div>
        </div>
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Multiplicando usando un formulario con $http</h3>
            </div>
            <div class="panel-body" >
                <form name="formularioMultiplicacion" ng-submit="multiplicar()" novalidate>
                    <div class="form-group">
                        <label for="primerValor">Primer valor</label>
                        <input type="text" class="form-control" id="primerValor"
                               ng-model="primerValor" required />
                    </div>
                    <div class="form-group">
                        <label for="segundoValor">Segundo valor</label>
                        <input type="text" class="form-control" id="segundoValor"
                               ng-model="segundoValor" required />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" type="submit">Multiplicar</button>
                    </div>
                    <div class="form-group"><p>{{resultado}}</p></div>
                </form>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Dividiendo usando un formulario con $http</h3>
            </div>
            <div class="panel-body" >
                <form name="formularioDivision" ng-submit="dividir()" novalidate>
                    <div class="form-group">
                        <label for="primerValor">Primer valor</label>
                        <input type="text" class="form-control" id="primerValor"
                               ng-model="primerValor" required />
                    </div>
                    <div class="form-group">
                        <label for="segundoValor">Segundo valor</label>
                        <input type="text" class="form-control" id="segundoValor"
                               ng-model="segundoValor" required />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" type="submit">Dividir</button>
                    </div>
                    <div class="form-group"><p>{{resultado}}</p></div>
                </form>
            </div>
        </div>
        

    </div>
    

    
</div>
<?php foreach ($scripts as $script) { ?>
    <script src="<?php echo($script); ?>"></script>
<?php } ?>
</body>
</html>
