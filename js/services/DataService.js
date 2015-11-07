app.service('$DataService', function ($filter, $sce, $http, $q) {

	var dataMy = {
		menu: '',
		user_data:{},
		news: '',
		first: [

		],
		comment: '',
		getArticle: function (news_id) {
			return $filter('filter')(dataMy.news, {
				news_id: news_id
			});
		},
		getNews: function () {
			var a = [];
			var b = dataMy.news;
			for (i = 0; i < dataMy.news.length; i++) {
				var body = b[i].news_body;
				if (body.length > 200)
					body = body.substr(0, 200) + '...';

				var c = {
					news_id: b[i].news_id,
					news_date: b[i].news_date,
					news_header: b[i].news_header,
					news_body: body
				}
				a.push(c);
			}
			return a;
		},
		loadData: function (param, query) {
			var conf = {
				target:param,
				data: query
			};	
			return $http.post('../php/load.php', conf);	
		}
	}

	return dataMy;

});