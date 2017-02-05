<!DOCTYPE html>
<html ng-app="HojaDeVidaApp">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    </head>
    <body>

        <div class="container container-fluid" ng-view ng-cloak></div>

        <!-- Scripts de programas de formacion -->
        <script type="text/javascript">
            function mostrarAndroid() {
                document.getElementById('andoridOculto').style.display = 'block';
            }
        </script>
        <script type="text/javascript">
            function ocultarAndroid() {
                document.getElementById('andoridOculto').style.display = 'none';
            }
        </script>

        <script type="text/javascript">
            function mostrarJava() {
                document.getElementById('javaOculto').style.display = 'block';
            }
        </script>
        <script type="text/javascript">
            function ocultarJava() {
                document.getElementById('javaOculto').style.display = 'none';
            }
        </script>

        <script type="text/javascript">
            function mostrarExcel() {
                document.getElementById('excelOculto').style.display = 'block';
            }
        </script>
        <script type="text/javascript">
            function ocultarExcel() {
                document.getElementById('excelOculto').style.display = 'none';
            }
        </script>
        <script type="text/javascript">
            function mostrarWord() {
                document.getElementById('wordOculto').style.display = 'block';
            }
        </script>
        <script type="text/javascript">
            function ocultarWord() {
                document.getElementById('wordOculto').style.display = 'none';
            }
        </script>

        <!-- Scripts de contactos -->
        <script type="text/javascript">
            function mostrarCorreo() {
                document.getElementById('correoOculto').style.display = 'block';
            }
        </script>
        <script type="text/javascript">
            function ocultarCorreo() {
                document.getElementById('correoOculto').style.display = 'none';
            }
        </script>

        <script type="text/javascript">
            function mostrarTel() {
                document.getElementById('telOculto').style.display = 'block';
            }
        </script>
        <script type="text/javascript">
            function ocultarTel() {
                document.getElementById('telOculto').style.display = 'none';
            }
        </script>

        <script type="text/javascript">
            function mostrarDir() {
                document.getElementById('dirOculto').style.display = 'block';
            }
        </script>
        <script type="text/javascript">
            function ocultarDir() {
                document.getElementById('dirOculto').style.display = 'none';
            }
        </script>

        <script type="text/javascript">
            function mostrarUserXs() {
                document.getElementById('userOcultoXs').style.display = 'block';
            }
        </script>
        <script type="text/javascript">
            function ocultarUserXs() {
                document.getElementById('userOcultoXs').style.display = 'none';
            }
        </script>

        <script type="text/javascript">
            function mostrarCorreoXs() {
                document.getElementById('correoOcultoXs').style.display = 'block';
            }
        </script>
        <script type="text/javascript">
            function ocultarCorreoXs() {
                document.getElementById('correoOcultoXs').style.display = 'none';
            }
        </script>
        <script type="text/javascript">
            function mostrarTelXs() {
                document.getElementById('telOcultoXs').style.display = 'block';
            }
        </script>
        <script type="text/javascript">
            function ocultarTelXs() {
                document.getElementById('telOcultoXs').style.display = 'none';
            }
        </script>
        <script type="text/javascript">
            function mostrarDirXs() {
                document.getElementById('dirOcultoXs').style.display = 'block';
            }
        </script>
        <script type="text/javascript">
            function ocultarDirXs() {
                document.getElementById('dirOcultoXs').style.display = 'none';
            }
        </script>

        <!-- librerias de Angular -->
        <script src="js/angular-1.6.1/angular.min.js" type="text/javascript"></script>
        <script src="js/angular-1.6.1/angular-route.min.js" type="text/javascript"></script>
        <script src="js/angular-1.6.1/angular-resource.min.js" type="text/javascript"></script>

        <!-- librerias js -->
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- enlazamos app.js y app.config.js -->
        <script src="app/app.js" type="text/javascript"></script>
        <script src="app/app.config.js" type="text/javascript"></script>

        <script src="app/controller/controller.index.js" type="text/javascript"></script>
        <script src="app/controller/controller.pagina1.js" type="text/javascript"
    </body>
</html>
