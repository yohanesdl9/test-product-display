var categories = "all";

$(document).ready(function () {
	loadAllCategories();
	viewProducts();
});

$('input[name="search"]').keydown(function(){
	viewProducts();
});

function loadAllCategories() {
	$.get(base_url + "welcome/categories", function (data, status) {
		var result = JSON.parse(data);
		$("#button-categories").html("");
		$.each(result, function (index, value) {
			$("#button-categories").append('<input type="button" name="categories" class="btn btn-default rounded-pill mb-2 mr-2" value="' +value +'">');
		});
	});
}

$(document).on("click", 'input[name="categories"]', function () {
	var value = $(this).val();
	$('input[name="categories"]').removeClass("btn-pink");
	if (categories != value) {
		$(this).toggleClass("btn-pink");
		categories = value;
	} else {
		$(this).removeClass("btn-pink");
		categories = "all";
	}
	viewProducts();
});

function viewProducts() {
	var search = $('input[name="search"]').val();
	var data = { keyword: search, category: categories };
	$.post(base_url + "welcome/products", data, function (data, status) {
		var result = JSON.parse(data);
		$("#search-result").html("");
		$.each(result, function (index, value) {
			$("#search-result").append(
				'<div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3"><div class="shadow card mb-4">' +
					'<img class="card-img-top" src="' + value.imgUrl + '" alt="Card image cap">' +
					'<div class="card-header"><span>' + value.name + '</span></div>'+
					'<div class="card-body">' +
					'<div class="card-text"><span class="float-left"><strong>' + value.price + "</strong></span>" +
					'<a href="#" class="text-danger float-right"><i class="fas fa-plus-square"></i></a></div>' +
					"</div></div></div>"
			);
		});
	});
}
