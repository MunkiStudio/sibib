'use strict';

###
 * @ngdoc overview
 * @name sibibApp
 * @description
 * # sibibApp
 *
 * Main module of the application.
 ###


app = angular.module 'sibibApp',[
	'ngResource'
	'ngRoute'
	'ngSanitize'
]
app.config ($routeProvider,$locationProvider,$httpProvider) ->
	$httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest'
	$locationProvider.html5Mode true


	$routeProvider
		.when '/',
			templateUrl: '/views/main.html',
			controller:'MainCtrl'
		.when '/noticias',
			templateUrl: '/views/noticias.html',
			controller:'MainCtrl'
		.when '/noticias/:id',
			templateUrl: '/views/noticia-detalle.html',
			controller:'MainCtrl'	
		.when '/base-datos',
			templateUrl: '/views/base-datos.html',
			controller:'MainCtrl'
		.when '/sibib',
			templateUrl: '/views/sibib.html',
			controller:'MainCtrl'
		.when '/recursos',
			templateUrl: '/views/recursos.html',
			controller:'MainCtrl'
		.when '/capacitaciones',
			templateUrl: '/views/capacitaciones.html',
			controller:'MainCtrl'
		.when '/informacion',
			templateUrl: '/views/informacion.html',
			controller:'MainCtrl'
		.when '/ebooks',
			templateUrl: '/views/ebooks.html',
			controller:'MainCtrl'
		.when '/otros-repos',
			templateUrl: '/views/otros-repos.html',
			controller:'MainCtrl'
		.when '/recursos-por-area',
			templateUrl: '/views/recursos-por-area.html',
			controller:'MainCtrl'
		.when '/credenciales',
			templateUrl: '/views/credenciales.html',
			controller:'MainCtrl'
		.when '/actualidad',
			templateUrl: '/views/actualidad.html',
			controller:'MainCtrl'
		
app.run ($rootScope) ->
	jQuery.slidebars();



