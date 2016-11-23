$(document).ready(function() {

	//ko.applyBindings(new AppViewModel());
	//ko.applyBindings(new listaTenants());

	 $(function () {
    ko.applyBindings(tenantModel);
    tenantModel.loadTenants();
	});
});

var $edit_modal = $('#modal_tenant_edit_from');

function openEditModal() {

	$edit_modal.foundation('open');
}