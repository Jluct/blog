app.service("searchNews", function ($DataService) {
	var a = {
		query:'',
		visible:false,
		searchArt: function (search) {
			if (search)
				return $DataService.loadData('searchNews', search);
		},
		searchReset: function () {
			return $DataService.loadData('news');
		}
	}
	return a;
});