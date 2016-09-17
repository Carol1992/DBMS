
//helpers and events
Template.organizations.helpers({
	organizations:function(){
		return Organizations.find({}, {sort:{createdOn: 1}, limit:Session.get("imageLimit")});
	},

	createdDate:function(){
		return moment(this.createdOn).format('YYYY-MM-DD, h:mm:ss a');
	},

	isVolunteer:function(){
		if(Meteor.userId() == "mnbvcxz1234567890"){
			return true;
		}
	},

	isSchool:function(){
		if(Meteor.userId() == "0987654321asdfghjkl" || Meteor.userId() == "0987654321asdfghjkl02"){
			return true;
		}
	}
})

Template.organization.helpers({
	data:function(){
		return Organizations.findOne({"_id":Session.get("orgId")});
	},

	isSchool:function(){
		if(Meteor.userId() == "0987654321asdfghjkl" || Meteor.userId() == "0987654321asdfghjkl02"){
			return true;
		}
	}
})

Template.organizations.events({
	'click #js-del-org':function(event){
     var org_id = this._id;
     var c = confirm("确认要删除这家组织的相关信息吗？");
     if(c == true){
     	 // use jquery to hide the image component
	     // then remove it at the end of the animation
	     $("#"+org_id).hide('slow', function(){
	      Organizations.remove({"_id":org_id});
	     }) 
     }
  }, 

  'click .org_apply':function(event){
  	$("#add_new_organization").modal('show');
  },

  'click .org_create':function(event){
  	$("#add_new_org").modal("show");
  }
 
})

Template.add_new_org.events({
	'click #confirmed-apply':function(event){
		var img_src, organization, scale, location, totalDonations, contact, img_alt, org_alt;
		img_src = $("#img_src").val();
		organization = $("#organization").val();
		scale = $("#scale").val();
		location = $("#location").val();
		totalDonations = $("#totalDonations").val();
		contact = $("#contact").val();
		img_alt = $("#img_alt").val();
		org_alt = $("#org_alt").val();
		console.log(img_src);
		Organizations.insert({
			img_src:img_src,
			organization:organization,
			scale:scale,
			location:location,
			totalDonations:totalDonations,
			contact:contact,
			img_alt:img_alt,
			org_alt:org_alt,
			createdOn:new Date()
		});
		 // $("#img_src").val() == "";
		 // $("#organization").val() == "";
		 // $("#scale").val() == "";
		 // $("#location").val() == "";
		 // $("#totalDonations").val() == "";
		 // $("#contact").val() == "";
		 // $("#img_alt").val() == "";
		 // $("#org_alt").val() == "";
		$("#add_new_org").modal('hide');
      	return false;
	}
})
