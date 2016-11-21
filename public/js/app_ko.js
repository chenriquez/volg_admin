function tenant(tenant) {
    this.id = ko.observable(tenant.id_tenant);
    this.label = ko.observable(tenant.label_tenant);
}

var viewModel = {
    tenants: ko.observableArray([]),
    loadTenants: function () {
        var self = this;
        $.getJSON("data_tenants",function (tenants) {
                self.tenants.removeAll();
                self.tenants(tenants)
            }
        );
    }
};




/*
var listaTenants = function() {

	//this.tenants = ko.observableArray();
	var datos;
	console.log("funcion de js para llamar a los tenants");

	console.log("aca estoy");
	$.getJSON("data_tenants", function(data) {
		
		console.log("aca estoy2");
	
		datos = data;
		console.log(datos) 
		this.tenants = ko.observableArray(data.d);		

		var mappedTasks = $.map(allData, function(item) { return new Task(item) });
        self.tasks(mappedTasks);	
			
	});
	

	//console.log("datos" + datos);
    
}
*/

//ko.applyBindings(new AppViewModel());

