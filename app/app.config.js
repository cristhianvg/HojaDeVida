angular.module('HojaDeVidaApp').
        config(['$routeProvider',
            function config($routeProvider) {
                $routeProvider.
                        when('/', {
                            controller: 'indexController',
                            templateUrl: 'app/template/index.html'
                        }).
                        when('/pagina1', {
                            controller: 'pagina1Controller',
                            templateUrl: 'app/template/Pagina1.html'
                        }).
                        otherwise('/');
            }
        ]);


