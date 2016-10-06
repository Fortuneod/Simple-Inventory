function newItem() {	
	jQuery.ajax({
		url: "newitemform.php",
		//data: {},
		//type: "POST",
		success: function(data) {
			$(".column_w430").html(data)
		},
		error: function() {}
	});
}


function HomeView() {	
	jQuery.ajax({
		url: "homeview.php",
		//data: {},
		//type: "POST",
		success: function(data) {
			$("body").html(data);
			$("#btnhome").focus();
		},
		error: function() {}
	});
}

function UpdView() {	
	jQuery.ajax({
		url: "updateform.php",
		//data: {},
		//type: "POST",
		success: function(data) {
			$(".column_w430").html(data)
		},
		error: function() {}
	});
}

function InvView() {	
	jQuery.ajax({
		url: "viewpage.php",
		//data: {},
		//type: "POST",
		success: function(data) {
			$(".column_w430").html(data)
		},
		error: function() {}
	});
//setTimeout(InvView, 1000);
}

function DelView() {	
	jQuery.ajax({
		url: "deletepage.php",
		//data: {},
		//type: "POST",
		success: function(data) {
			$(".column_w430").html(data)
		},
		error: function() {}
	});
}

function registerNew() {	
		var itemid=$("#itemid").val();
		var describe=$("#describe").val();
		var quantity=$("#quantity").val();
		var acquired=$("#acquired").val();
		var span=$("#span").val();
		var depreciate=$("#depreciate").val();
		var money=$("#money").val();
		
	jQuery.ajax({
		url: "newitem.php",
		data: {itemid: itemid, describe: describe, quantity: quantity, acquired: acquired, span: span, depreciate: depreciate, money: money},
		type: "POST",
		success: function(data) {
			$(".column_w430").html(data)
		},
		error: function() {}
	});
}

function UpdateItem() {	
		var editid=$("#editid").val();
		var editwhat=$("#editwhat").val();
		var newvalue=$("#newvalue").val();
		
	jQuery.ajax({
		url: "edititem.php",
		data: {editid: editid, editwhat: editwhat, newvalue: newvalue},
		type: "POST",
		success: function(data) {
			$(".column_w430").html(data)
		},
		error: function() {}
	});
}

function UpdateInv() {	
		var updid=$("#updid").val();
		var what=$("#what").val();
		var updqty=$("#updqty").val();
		var updvalue=$("#updvalue").val();
		
	jQuery.ajax({
		url: "updateitem.php",
		data: {updid: updid, what: what, updqty: updqty, updvalue: updvalue},
		type: "POST",
		success: function(data) {
			$(".column_w430").html(data)
		},
		error: function() {}
	});
}

function DeleteSn() {
		var delid=$("#delid").val();
				
	jQuery.ajax({
		url: "deleteitem.php",
		data: {delid: delid},
		type: "POST",
		success: function(data) {
			$(".column_w430").html(data)
		},
		error: function() {}
	});
	
}

function DeleteMult() {
	
	jQuery.ajax({
		url: "deleteconf.php",
		//data: {delid: delid},
		//type: "POST",
		success: function(data) {
			$(".column_w430").html(data)
		},
		error: function() {}
	});
	
}

function DeleteMore() {
	
	jQuery.ajax({
		url: "deletemore.php",
		//data: {delid: delid},
		//type: "POST",
		success: function(data) {
			$(".column_w430").html(data)
		},
		error: function() {}
	});
	
}
