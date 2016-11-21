

$(document).ready(function() {

	//ko.applyBindings(new AppViewModel());
	//ko.applyBindings(new listaTenants());

	 $(function () {
    ko.applyBindings(viewModel);
    viewModel.loadTenants();
	});

    console.log( "ready!" );
    console.log( "prueba!" );
});