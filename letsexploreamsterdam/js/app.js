(function(){
	var app = angular.module('explore',[]);
	
	app.controller('ExploreController', function(){
		this.products = gems;
	});
	
	var gems = [
	{
		name: 'Boat Tour',
		description: "Sail away through the Main and also Most Unusual canals in the city.",
	},
		
	{
		name: 'Bike Tour',
		description: "Be part of the organized chaos of Amsterdam's bike roads.",
	},
	
	{	
		name: 'Walking Tour',
		description: "Discover Amsterdam's architecture, history and culture walking through the most popular spots.",
	},
	
	{	
		name: 'Museums Tour',
		description: "Visit the most incredible and remarkable museums.",
	},
];

})();