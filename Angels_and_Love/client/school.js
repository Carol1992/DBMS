
//helpers and events
Template.schools.helpers({
	schools:function(){
		return Schools.find({}, {sort:{createdOn: 1}, limit:Session.get("imageLimit")});
	},

	createdDate:function(){
		return moment(this.createdOn).format('YYYY-MM-DD, h:mm:ss a');
	},

  isVolunteer:function(){
    if(Meteor.userId() == "mnbvcxz1234567890"){
      return true;
    }
  },

  isOrg:function(){
    if(Meteor.userId() == "1234567890poiuytrewq" || Meteor.userId() == "1234567890poiuytrewq02" ){
      return true;
    }
  },

})

Template.school.helpers({
	data:function(){
		  return Schools.findOne({"_id":Session.get("schoolId")});
	},

  participants: function(){
      var donations = Donations.find({school: Session.get("schoolId")});

      if (donations) {
        for(var i=0; i<=donations.length; i++){
          var keyOrg = Organizations.find({createdBy: donation.organization});
          var keySchool = Schools.findOne({_id: donation.school});
          var organizationName_ = keyOrg ? keyOrg.organization : "";
          var schoolName_ = keySchool ? keySchool.school : "";
          return {organizationName: organizationName_, schoolName: schoolName_};
        }
      }
      return {organizationName: "", schoolName: ""};
    },

    donations: function(){
      return Donations.find({school: Session.get("schoolId")});
    },

    isOrg:function(){
    if(Meteor.userId() == "1234567890poiuytrewq" || Meteor.userId() == "1234567890poiuytrewq02" ){
      return true;
    }
  },
})

Template.donate_item.helpers({
  createdDate:function(){
      return moment(this.createdOn).format('YYYY-MM-DD');
    },

  donates:function(){
      var donations = Donations.find({school: Session.get("schoolId")});
      for(var i=0; i<=donations.length; i++){
        return donations.donates;
      }
    },

  participants: function(){
      var donations = Donations.find({school: Session.get("schoolId")});

      if (donations) {
        for(var i=0; i<=donations.length; i++){
          var keyOrg = Organizations.find({createdBy: donation.organization});
          var keySchool = Schools.findOne({_id: donation.school});
          var organizationName_ = keyOrg ? keyOrg.organization : "";
          var schoolName_ = keySchool ? keySchool.school : "";
          return {organizationName: organizationName_, schoolName: schoolName_};
        }
      }
      return {organizationName: "", schoolName: ""};
    },
    
})

Template.schools.events({
	'click #js-del-school':function(event){
     var school_id = this._id;
     var c = confirm("确认要删除这家学校的相关信息吗？");
     if(c == true){
     	 // use jquery to hide the image component
	     // then remove it at the end of the animation
	     $("#"+school_id).hide('slow', function(){
	      	Schools.remove({"_id":school_id});
	     }) 
      }
  	}, 

    'click .school_apply':function(event){
  	  event.preventDefault();
      $("#add_new_school").modal('show');
    },

    'click .school_create':function(event){
      $("#add_new_sch").modal("show");
    },
 
   'click #donateNow':function(event){
   	  Session.set("schoolId", this._id);
      console.log(Session.get("schoolId"));
   	  var key = Meteor.userId()+this._id
   	  // if(Meteor.userId() && this._id) {
   	  	var donation = Donations.findOne({key: key});
        if(donation){
          Session.set("donateId", donation._id);
          console.log(donation._id);
        }
   	  	else{
   	  		Donations.insert({
		  	  	key:key,
		  		  organization:Meteor.userId(),
		  		  school:this._id
  	  		});
        var newDonation = Donations.findOne({key: key});
        Session.set("donateId", newDonation._id);
        console.log(newDonation._id);
   	  	}
   	  // }

    },

})

Template.school.events({ 
	'click .donate':function(event){
		event.preventDefault();
    toastr.success("非常感谢您的爱心捐赠，请查看下方的组织捐赠列表，谢谢！", "捐赠成功！");
		var donateId = Meteor.userId()+Session.get("schoolId");
		var donates = {donate: $('.donate-amount').val(), createdOn: new Date()};
		var donation = Donations.findOne({key:donateId})
		Donations.update({_id: donation._id}, {$push: {donates: donates}});
    }
})

Template.add_new_sch.events({
  'click #confirmed-apply':function(event){
    var img_src, school, scale, location, totalReceived, contact, img_alt, org_alt, createdBy, createdOn;
    img_src = $("#img_src").val();
    school = $("#school").val();
    scale = $("#scale").val();
    location = $("#location").val();
    totalReceived = $("#totalReceived").val();
    contact = $("#contact").val();
    img_alt = $("#img_alt").val();
    school_alt = $("#school_alt").val();
    Schools.insert({
      img_src:img_src,
      school:school,
      scale:scale,
      location:location,
      totalReceived:totalReceived,
      contact:contact,
      img_alt:img_alt,
      school_alt:org_alt,
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
    $("#add_new_sch").modal('hide');
        return false;
  }
})
