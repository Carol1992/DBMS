
//helpers and events
Template.volunteers.helpers({
	volunteers:function(){
		return Volunteers.find({}, {sort:{createdOn: 1}, limit:Session.get("imageLimit")});
	},

	createdDate:function(){
		return moment(this.createdOn).format('YYYY-MM-DD, h:mm:ss a');
	},

	isVolunteer:function(){
		if(Meteor.userId() == "mnbvcxz1234567890"){
			return true;
		}
	}
})

// Template.volunteer.helpers({
// 	data:function(){
// 		return Volunteers.findOne({"_id":Session.get("volunteerId")});
// 	}
// })

Template.volunteers.events({
	'click #js-del-volunteer':function(event){
     var volunteer_id = this._id;
     var c = confirm("确认要删除这位志愿者的相关信息吗？");
     if(c == true){
     	 // use jquery to hide the image component
	     // then remove it at the end of the animation
	     $("#"+volunteer_id).hide('slow', function(){
	      Volunteers.remove({_id:volunteer_id});
	     }) 
     }
  }, 

  'click .volunteer_apply':function(event){
    $("#add_new_volunteer").modal("show");
  },

  'click .volunteer_create':function(event){
  	$("#add_new_vol").modal("show");
  }
 
})

Template.add_new_vol.events({
  'click #confirmed-apply':function(event){
    var img_src, volunteer, location, phone, email, img_alt, org_alt, createdBy, createdOn;
    img_src = $("#img_src").val();
    volunteer = $("#volunteer").val();
    location = $("#location").val();
    phone = $("#phone").val();
    email = $("#email").val();
    img_alt = $("#img_alt").val();
    Volunteers.insert({
      volunteer:volunteer,
      img_src:img_src,
      location:location,
      phone:phone,
      email:email,
      img_alt:img_alt,
      createdOn:new Date(),
      createdBy:Meteor.userId()
    });
     // $("#img_src").val() == "";
     // $("#organization").val() == "";
     // $("#scale").val() == "";
     // $("#location").val() == "";
     // $("#totalDonations").val() == "";
     // $("#contact").val() == "";
     // $("#img_alt").val() == "";
     // $("#org_alt").val() == "";
    $("#add_new_vol").modal('hide');
        return false;
  }
})