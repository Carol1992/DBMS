Meteor.startup(function(){
	if (Organizations.find().count() == 0){
		for (var i = 0; i <1; i++) {
			Organizations.insert(
				{
					organization:"光明公益组织",
					img_src: "http://i.niupic.com/images/2016/07/23/K9oKLg.jpg",
					img_alt:"光明公益组织简介光明公益组织简介光明公益组织简介光明公益组织简介光明公益组织简介光明公益组织简介光明公益组织简介光明公益组织简介光明公益组织简介",
					contact:"林家慧",
					createdOn:new Date(),
					createdBy:"1234567890poiuytrewq",
					scale:"1000+",
					location:"广东省深圳市",
					totalDonations:"5,900",
					org_alt:"从创立之初，百度便将“让人们最平等、便捷地获取信息，找到所求”作为自己的使命，成立以来，公司秉承“以用户为导向”的理念，不断坚持技术创新，致力于为用户提供“简单，可依赖”的互联网搜索产品及服务，其中包括：以网络搜索为主的功能性搜索，以贴吧为主的社区搜索，针对各区域、行业所需的垂直搜索，Mp3搜索，以及门户频道、IM等，全面覆盖了中文网络世界所有的搜索需求，根据第三方权威数据，百度在中国的搜索份额超过80%。从创立之初，百度便将“让人们最平等、便捷地获取信息，找到所求”作为自己的使命，成立以来，公司秉承“以用户为导向”的理念，不断坚持技术创新，致力于为用户提供“简单，可依赖”的互联网搜索产品及服务，其中包括：以网络搜索为主的功能性搜索，以贴吧为主的社区搜索，针对各区域、行业所需的垂直搜索，Mp3搜索，以及门户频道、IM等，全面覆盖了中文网络世界所有的搜索需求，根据第三方权威数据，百度在中国的搜索份额超过80%。从创立之初，百度便将“让人们最平等、便捷地获取信息，找到所求”作为自己的使命，成立以来，公司秉承“以用户为导向”的理念，不断坚持技术创新，致力于为用户提供“简单，可依赖”的互联网搜索产品及服务，其中包括：以网络搜索为主的功能性搜索，以贴吧为主的社区搜索，针对各区域、行业所需的垂直搜索，Mp3搜索，以及门户频道、IM等，全面覆盖了中文网络世界所有的搜索需求，根据第三方权威数据，百度在中国的搜索份额超过80%。"
			    }	
			);// end of insert
			Organizations.insert(
				{
					organization:"香港伟能集团",
					img_src: "http://i.niupic.com/images/2016/07/23/K9oKLg.jpg",
					img_alt:"香港伟能集团是一家上市公司，成立于1992年，公司致力于慈善和公益事业已有多年。",
					contact:"戴英文",
					createdOn:new Date(),
					createdBy:"1234567890poiuytrewq02",
					scale:"10000+",
					location:"北京市",
					totalDonations:"9,900",
					org_alt:"从创立之初，百度便将“让人们最平等、便捷地获取信息，找到所求”作为自己的使命，成立以来，公司秉承“以用户为导向”的理念，不断坚持技术创新，致力于为用户提供“简单，可依赖”的互联网搜索产品及服务，其中包括：以网络搜索为主的功能性搜索，以贴吧为主的社区搜索，针对各区域、行业所需的垂直搜索，Mp3搜索，以及门户频道、IM等，全面覆盖了中文网络世界所有的搜索需求，根据第三方权威数据，百度在中国的搜索份额超过80%。从创立之初，百度便将“让人们最平等、便捷地获取信息，找到所求”作为自己的使命，成立以来，公司秉承“以用户为导向”的理念，不断坚持技术创新，致力于为用户提供“简单，可依赖”的互联网搜索产品及服务，其中包括：以网络搜索为主的功能性搜索，以贴吧为主的社区搜索，针对各区域、行业所需的垂直搜索，Mp3搜索，以及门户频道、IM等，全面覆盖了中文网络世界所有的搜索需求，根据第三方权威数据，百度在中国的搜索份额超过80%。从创立之初，百度便将“让人们最平等、便捷地获取信息，找到所求”作为自己的使命，成立以来，公司秉承“以用户为导向”的理念，不断坚持技术创新，致力于为用户提供“简单，可依赖”的互联网搜索产品及服务，其中包括：以网络搜索为主的功能性搜索，以贴吧为主的社区搜索，针对各区域、行业所需的垂直搜索，Mp3搜索，以及门户频道、IM等，全面覆盖了中文网络世界所有的搜索需求，根据第三方权威数据，百度在中国的搜索份额超过80%。"
			    }	
			);// end of insert
		}
	};// end of if have no 

	if (Schools.find().count() == 0){
		for (var i = 0; i <1; i++) {
			Schools.insert(
				{

					school:"陕西阳光小学",
					img_src: "http://i.niupic.com/images/2016/07/23/K9oKLg.jpg",
					img_alt:"陕西阳光小学陕西阳光小学陕西阳光小学陕西阳光小学陕西阳光小学陕西阳光小学陕西阳光小学陕西阳光小学陕西阳光小学陕西阳光小学陕西阳光小学陕西阳光小学",
					contact:"刘加权",
					createdOn:new Date(),
					createdBy:"0987654321asdfghjkl",
					scale:"50-100",
					location:"陕西省西安市",
					totalReceived:"900",
					school_alt:"河南省公益文化传播基金会是国内第一支也是唯一一支以公益宣传为主、以实体救助为辅的公募基金会，是紧密围绕习总书记倡导的“正能量”而发起的一场影响面广、持续性久、保障力大、引导力强的全民公益工程，是践行“中国梦”、实现“国家富强、民族振兴、人民幸福”战略目标的精神基石。河南省公益文化传播基金会[1]  以培育和践行社会主义核心价值观为导向，以“全民公益、全民得益”为宗旨，以公益活动组织、公益广告发布、公益项目孵化和公益传播研究为业务范围，紧密围绕党和政府精神文明建设的方向，突出主旋律，弘扬正能量，为发展具有中国特色社会主义的市场经济营造良好的社会氛围。河南省公益文化传播基金会以“热爱祖国、生态文明、行为规范、传统道德、勤俭节约、团结友善、敬业奉献、诚实守信”为公益主题，并向社会广泛征集、随时补充公益主题。也可根据企业实际需要，设立“交通安全”、 “食品安全”等与企业经营相关的专项公益计划。相关主题由“中国公益传播研究院”细化为不同的传播形式，利用“中国公益传媒联盟”的媒介优势，进行全国范围的强势传播和专业渠道的细分传播。热忱欢迎社会各界支持、监督我们的工作，与我会开展交流、合作，协力传播“大美、大善、大爱”的公益理念，温暖中原，影响全国。"

				}	
			);// end of insert 
			Schools.insert(
				{

					school:"福建朝霞小学",
					img_src: "http://i.niupic.com/images/2016/07/23/K9oKLg.jpg",
					img_alt:"福建朝霞小学位于福建省厦门市，目前有600多名留守儿童，有80名教师，教学条件落后。",
					contact:"林清霞",
					createdOn:new Date(),
					createdBy:"0987654321asdfghjkl02",
					scale:"500-1000",
					location:"福建省厦门市",
					totalReceived:"400",
					school_alt:"河南省公益文化传播基金会是国内第一支也是唯一一支以公益宣传为主、以实体救助为辅的公募基金会，是紧密围绕习总书记倡导的“正能量”而发起的一场影响面广、持续性久、保障力大、引导力强的全民公益工程，是践行“中国梦”、实现“国家富强、民族振兴、人民幸福”战略目标的精神基石。河南省公益文化传播基金会[1]  以培育和践行社会主义核心价值观为导向，以“全民公益、全民得益”为宗旨，以公益活动组织、公益广告发布、公益项目孵化和公益传播研究为业务范围，紧密围绕党和政府精神文明建设的方向，突出主旋律，弘扬正能量，为发展具有中国特色社会主义的市场经济营造良好的社会氛围。河南省公益文化传播基金会以“热爱祖国、生态文明、行为规范、传统道德、勤俭节约、团结友善、敬业奉献、诚实守信”为公益主题，并向社会广泛征集、随时补充公益主题。也可根据企业实际需要，设立“交通安全”、 “食品安全”等与企业经营相关的专项公益计划。相关主题由“中国公益传播研究院”细化为不同的传播形式，利用“中国公益传媒联盟”的媒介优势，进行全国范围的强势传播和专业渠道的细分传播。热忱欢迎社会各界支持、监督我们的工作，与我会开展交流、合作，协力传播“大美、大善、大爱”的公益理念，温暖中原，影响全国。"

				}	
			);// end of insert 
		}
	};// end of if have no 

	if (Volunteers.find().count() == 0){
		for (var i = 0; i <1; i++) {
				Volunteers.insert(
				{
					volunteer:"林雅晴",
					img_src: "http://i.niupic.com/images/2016/07/23/K9oKLg.jpg",
					img_alt:"我是志愿者，主要服务地区是福建省主要服务地区是福建省主要服务地区是福建省主要服务地区是福建省主要服务地区是福建省主要服务地区是福建省主要服务地区是福建省",
					createdOn:new Date(),
					createdBy:"mnbvcxz1234567890",
					location:"福建省厦门市",
					phone:"+86 18826417583",
					email:"yottalynn@gmail.com"
				}	
			)// end of insert 
		}// end of if have no 
	};

	if (News.find().count() == 0){
		for (var i = 0; i <30; i++) {
				News.insert(
				{
					title:"贵阳山区留守儿童公益活动",
					img_src: "http://i.niupic.com/images/2016/07/23/K9oKLg.jpg",
					img_alt:"贵阳山区留守儿童公益活动",
					createdOn:new Date(),
					news_detail:"在留守家庭中，父母需外出到城市打工以维持生计，但由于无法担负过高的城市生活成本而不能接孩子进城或留在身边。但其出现的社会现象是该时期留守在家的儿童正处于成长发育时期，由于与父母的分开而缺少必要的思想指导和观念的塑造"
				}	
			)// end of insert 
		}// end of if have no 
	};

	// if (Cases.find().count() == 0){
	// 	for (var i = 0; i <32; i++) {
	// 			Cases.insert(
	// 			{
	// 				title:"光明企业-阳光小学",
	// 				createdOn:new Date(),
	// 				donate: "60,000",
	// 				case_detail:"阳光小学的留守儿童得到了来自光明企业的资助，企业帮助提供免费午餐和晚餐，提供校车等。"
	// 			}	
	// 		)// end of insert 
	// 	}// end of if have no 
	// };

	if (!Meteor.users.findOne()){
	    Meteor.users.insert({
		    	_id:"mnbvcxz1234567890",
		    	username:"volunteer",
		    	createdOn:new Date(),
		    	emails:[{address: "volunteer@angels.com", verified: true}],
		    	services:{password:{"bcrypt" : "$2a$10$I3erQ084OiyILTv8ybtQ4ON6wusgPbMZ6.P33zzSDei.BbDL.Q4EO"}}
			});
		Meteor.users.insert({
				_id:"1234567890poiuytrewq",
		    	username:"organization01",
		    	createdOn:new Date(),
		    	emails:[{address: "organization01@angels.com", verified: true}],
		    	services:{password:{"bcrypt" : "$2a$10$I3erQ084OiyILTv8ybtQ4ON6wusgPbMZ6.P33zzSDei.BbDL.Q4EO"}}
			});
		Meteor.users.insert({
			_id:"1234567890poiuytrewq02",
	    	username:"organization02",
	    	createdOn:new Date(),
	    	emails:[{address: "organization02@angels.com", verified: true}],
	    	services:{password:{"bcrypt" : "$2a$10$I3erQ084OiyILTv8ybtQ4ON6wusgPbMZ6.P33zzSDei.BbDL.Q4EO"}}
			});
		Meteor.users.insert({
				_id:"0987654321asdfghjkl",
		    	username:"school01",
		    	createdOn:new Date(),
		    	emails:[{address: "school01@angels.com", verified: true}],
		    	services:{password:{"bcrypt" : "$2a$10$I3erQ084OiyILTv8ybtQ4ON6wusgPbMZ6.P33zzSDei.BbDL.Q4EO"}}
			});
		Meteor.users.insert({
				_id:"0987654321asdfghjkl02",
		    	username:"school02",
		    	createdOn:new Date(),
		    	emails:[{address: "school02@angels.com", verified: true}],
		    	services:{password:{"bcrypt" : "$2a$10$I3erQ084OiyILTv8ybtQ4ON6wusgPbMZ6.P33zzSDei.BbDL.Q4EO"}}
			});
		
	    Accounts.setPassword("mnbvcxz1234567890", "volunteer");
	    Accounts.setPassword("1234567890poiuytrewq", "organization");
	    Accounts.setPassword("0987654321asdfghjkl", "school");
	    Accounts.setPassword("1234567890poiuytrewq02", "organization");
	    Accounts.setPassword("0987654321asdfghjkl02", "school");
	};
});


