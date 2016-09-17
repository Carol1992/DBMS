
//helpers and events
Template.news.helpers({
	news:function(){
		return News.find({}, {sort:{createdOn: 1}, limit:Session.get("imageLimit")});
	},

	createdDate:function(){
		return moment(this.createdOn).format('YYYY-MM-DD');
	}
})