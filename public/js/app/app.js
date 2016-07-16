var app = angular.module('geradorApp', ["ngRoute"]);
app.config(function($routeProvider, $locationProvider) {
	// $locationProvider.html5Mode(true);
	$routeProvider
	.when("/", {
		templateUrl : "views/main.blade.php"
	})
	.when("/gerar-proposta-servico", {
		templateUrl : "views/gerar-proposta-servico.blade.php"
	})
	.when("/gerar-proposta-venda", {
		templateUrl : "views/gerar-proposta-venda.blade.php"
	})
	.when("/calendario", {
		templateUrl: "views/calendario.blade.php"
	});


});