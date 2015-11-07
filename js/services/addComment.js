app.service('comm', function ($DataService) {

	var a = {
		addComm: function (newComment, id) {
			if (newComment.user && newComment.text) {
				newComment.news_id = id;
				return $DataService.loadData('addComment', newComment);
			}
		}

	}
	return a;
});