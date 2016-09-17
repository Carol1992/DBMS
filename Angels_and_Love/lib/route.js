FlowRouter.route('/',{
	name:'home',
	action(){
		BlazeLayout.render('layout',{main:"home"});
	}
});

FlowRouter.route('/organizations',{
	name:'organizations',
	action(){
		BlazeLayout.render('layout',{main:"organizations"});
	}
});

FlowRouter.route('/schools',{
	name:'schools',
	action(){
		BlazeLayout.render('layout',{main:"schools"});
	}
});

FlowRouter.route('/volunteers',{
	name:'volunteers',
	action(){
		BlazeLayout.render('layout',{main:"volunteers"});
	}
});

FlowRouter.route('/news',{
	name:'news',
	action(){
		BlazeLayout.render('layout',{main:"news"});
	}
});

FlowRouter.route('/donate',{
	name:'donate',
	action(){
		BlazeLayout.render('layout',{main:"donate"});
	}
});

FlowRouter.route('/organization/:_id',{
	name:'single-org',
	action:function(params){
		BlazeLayout.render('layout',{main:"organization"});
		Session.set("orgId", params._id);
	}
});

FlowRouter.route('/school/:_id',{
	name:'single-school',
	action:function(params){
		BlazeLayout.render('layout',{main:"school"});
		Session.set("schoolId", params._id);
	}
});