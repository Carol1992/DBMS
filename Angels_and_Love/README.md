##Angels-and-Love

###1. 根据用户类型赋予不同权限

####志愿者（账号：volunteer@angels.com，密码：volunteer）
####留守儿童学校（账号：school01@agels.com，密码：school; 账号：school02@agels.com，密码：school）
####公益组织（账号：organization01@angels.com，密码：organization; 账号：organization02@angels.com，密码：organization）

#####志愿者的权限包括添加/删除公益组织、留守儿童学校、志愿者在该网站的展示信息。
#####留守儿童学校的权限包括向公益组织申请捐赠。
#####公益组织的权限包括向儿童留守学校捐赠。


###2. 网站 navbar 分为：森林天使主页，公益组织主页，留守儿童学校主页，志愿者主页，登陆按钮

####森林天使主页：主要用于宣传推广，包括新闻，视频，外链等。
####公益组织主页新用户可以点击申请成为公益组织的按钮，将相关材料提交给森林天使审核，审核通过后，由志愿者在该页点击添加公益组织的按钮，填写材料后公益组织的信息将会出现在该页面，并将用户账号密码告知新的公益组织。
####留守儿童学校主页：与公益组织主页的布局功能相似。
####志愿者主页：与公益组织主页的布局功能相似。


###3. 公益组织选择现在捐赠按钮，输入捐赠金额捐赠成功后，会在该留守儿童学校与公益组织之间建立桥梁，并展示在留守儿童学校首页

#####<a href="http://v.youku.com/v_show/id_XMTY1OTc5MzI5Mg==.html#paction">视频DEMO</a>
#####相关截图
<img src="code/public/snapshot/home.png">
<img src="code/public/snapshot/org.png">
<img src="code/public/snapshot/org-school.png">
<img src="code/public/snapshot/org-volunteer.png">
<img src="code/public/snapshot/vol-volunteer.png">
<img src="code/public/snapshot/donate.png">


###4. 后续修改
####好了虽然没有获奖，但也需要找时间来修改一下这个网站了，修改主要是在：
####1. 读取 MongoDB 数据库的数据并将其合理渲染到页面；
####2. 页面输入统一使用 SimpleSchema 验证有效性；
####3. 移除 insecure package 和 autopublish package，使用 Method 和 publish/subscribe 确保安全性；
####4. 使用 accounts-role 分配权限。
####5. Imagination is the only limitation! 


