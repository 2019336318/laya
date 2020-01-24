<{include file="./header.tpl" }>

	<section>
		<div class="container hot-news">
			<div class="row">
				<div class="col-lg-12">
					<div class="page-header news-header">
						<h2>新闻动态</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<{foreach $top_new as $v}>
					<div class="col-md-4 col-sm-4 col-xs-4 text-center hot-news-list">
						<div class="media news-caption">
							<a href="http://www.layabox.com/news/94.html" title="<{$v['new_tit']}>"> <img
									src="admin/<{$v['new_img']}>" class="img-responsive img-hover"></a>
							<p class="news-title hidden-xs "><a href="http://www.layabox.com/news/94.html"
									title="<{$v['new_tit']}>">
									<{$v['new_tit']}>
								</a></p>
						</div>
					</div>
					<{/foreach}> 
					<!-- <div class="col-md-4 col-sm-4 col-xs-4 text-center hot-news-list">
						<div class="media news-caption">
							<a href="http://www.layabox.com/news/89.html" title="慕和：手游大作《魔卡幻想》为何移植HTML5"> <img
									src="./static/home/images/20150917094422865.jpg"
									class="img-responsive img-hover"></a>
							<p class="news-title hidden-xs "><a href="http://www.layabox.com/news/89.html"
									title="慕和：手游大作《魔卡幻想》为何移植HTML5">慕和：手游大作《魔卡幻想》为何移植HTML5</a></p>
						</div>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-4 text-center hot-news-list">
				<div class="media news-caption">
					<a href="http://www.layabox.com/news/28.html" title="技术突破：HTML5游戏性能超越Unity3d "> <img
							src="./static/home/images/20150626113315753.jpg" class="img-responsive img-hover"></a>
					<p class="news-title hidden-xs "><a href="http://www.layabox.com/news/28.html"
							title="技术突破：HTML5游戏性能超越Unity3d ">技术突破：HTML5游戏性能超越Unity3d </a></p>
				</div>
			</div> -->

		</div>
		</div>
	</section>

	<section class="news-content">
		<div class="container">

			<{foreach $list_new as $v}>
				<div class="row news-list-group">
					<div class="news-img col-md-3 col-sm-4 col-xs-4 text-center" style="padding-top: 8px;">
						<div class="thumbnail">
							<a href="http://www.layabox.com/news/169.html" title="Layabox荣膺“2015年度最佳引擎奖”"><img
									src="admin/<{$v['new_img']}>" alt="Layabox荣膺“2015年度最佳引擎奖”"
									class="img-hover img-responsive"></a>
						</div>
					</div>
					<div class="col-md-9 col-sm-8  col-xs-8">
						<div class="caption">

							<h4> <a href="http://www.layabox.com/news/169.html" title="Layabox荣膺“2015年度最佳引擎奖”"
									class="news-title-item"><{$v['new_tit']}></a></h4>
							<p class="date"><{$v['new_time']|date_format:"%Y-%m-%d" }></p>
							<p class="news-des hidden-xs">
								<{$v['new_con']}>
							</p>
							<p class="news-detail hidden-xs">
								<span class="view-details"> <a href="http://www.layabox.com/news/169.html"
										title="Layabox荣膺“2015年度最佳引擎奖”">查看详情</a></span>
							</p>

						</div>
					</div>
				</div>

				<{/foreach}> <!-- <div class="row news-list-group">
					<div class="news-img col-md-3 col-sm-4 col-xs-4 text-center" style="padding-top: 8px;">
						<div class="thumbnail">
							<a href="http://www.layabox.com/news/165.html" title="Layabox本月将上线四款大型HTML5游戏"><img
									src="./static/home/images/20151210104448876.jpg" alt="Layabox本月将上线四款大型HTML5游戏"
									class="img-hover img-responsive"></a>
						</div>
					</div>
					<div class="col-md-9 col-sm-8  col-xs-8">
						<div class="caption">

							<h4> <a href="http://www.layabox.com/news/165.html" title="Layabox本月将上线四款大型HTML5游戏"
									class="news-title-item">Layabox本月将上线四款大型HTML5游戏 </a></h4>
							<p class="date">2015-12-10</p>
							<p class="news-des hidden-xs">
								Layabox一直致力于大型HTML5引擎技术研发和CP培育，从本月开始，将不断推出大型HTML5游戏，我们希望用自己的努力，提升玩家和渠道对HTML5游戏品质以及盈利能力的信心，推动产业的发展和升级。
							</p>
							<p class="news-detail hidden-xs">
								<span class="view-details"> <a href="http://www.layabox.com/news/165.html"
										title="Layabox本月将上线四款大型HTML5游戏">查看详情</a></span>
							</p>

						</div>
					</div>
		</div>
		<div class="row news-list-group">
			<div class="news-img col-md-3 col-sm-4 col-xs-4 text-center" style="padding-top: 8px;">
				<div class="thumbnail">
					<a href="http://www.layabox.com/news/152.html" title="关于HTML5游戏跨界合作的几个切入点！"><img
							src="./static/home/images/1449052953927938.jpg" alt="关于HTML5游戏跨界合作的几个切入点！"
							class="img-hover img-responsive"></a>
				</div>
			</div>
			<div class="col-md-9 col-sm-8  col-xs-8">
				<div class="caption">

					<h4> <a href="http://www.layabox.com/news/152.html" title="关于HTML5游戏跨界合作的几个切入点！"
							class="news-title-item">关于HTML5游戏跨界合作的几个切入点！ </a></h4>
					<p class="date">2015-12-02</p>
					<p class="news-des hidden-xs">
						要想在当前阶段先跳出来成为瞩目的明星企业。一是制作高品质游戏，兼顾APP与H5市场；二是要深度结合H5技术的无需下载、即点即玩、易传播、跨平台、应用领域广泛等属性 </p>
					<p class="news-detail hidden-xs">
						<span class="view-details"> <a href="http://www.layabox.com/news/152.html"
								title="关于HTML5游戏跨界合作的几个切入点！">查看详情</a></span>
					</p>

				</div>
			</div>
		</div>
		<div class="row news-list-group">
			<div class="news-img col-md-3 col-sm-4 col-xs-4 text-center" style="padding-top: 8px;">
				<div class="thumbnail">
					<a href="http://www.layabox.com/news/130.html" title="HTML5行业首次出席中日韩政府级开源论坛"><img
							src="./static/home/images/1448706684676900.jpg" alt="HTML5行业首次出席中日韩政府级开源论坛"
							class="img-hover img-responsive"></a>
				</div>
			</div>
			<div class="col-md-9 col-sm-8  col-xs-8">
				<div class="caption">

					<h4> <a href="http://www.layabox.com/news/130.html" title="HTML5行业首次出席中日韩政府级开源论坛"
							class="news-title-item">HTML5行业首次出席中日韩政府级开源论坛 </a></h4>
					<p class="date">2015-11-26</p>
					<p class="news-des hidden-xs">
						第十四届东北亚开源软件推进论坛在日本东京举行,本次会议由中日韩三国行业主管部门组织。这是HTML5行业代表首次出市出席东北亚开源软件推进论坛。 </p>
					<p class="news-detail hidden-xs">
						<span class="view-details"> <a href="http://www.layabox.com/news/130.html"
								title="HTML5行业首次出席中日韩政府级开源论坛">查看详情</a></span>
					</p>

				</div>
			</div>
		</div>
		<div class="row news-list-group">
			<div class="news-img col-md-3 col-sm-4 col-xs-4 text-center" style="padding-top: 8px;">
				<div class="thumbnail">
					<a href="http://www.layabox.com/news/129.html" title="Layabox引擎用HTML5还原3D端游"><img
							src="./static/home/images/1448706659277855.jpg" alt="Layabox引擎用HTML5还原3D端游"
							class="img-hover img-responsive"></a>
				</div>
			</div>
			<div class="col-md-9 col-sm-8  col-xs-8">
				<div class="caption">

					<h4> <a href="http://www.layabox.com/news/129.html" title="Layabox引擎用HTML5还原3D端游"
							class="news-title-item">Layabox引擎用HTML5还原3D端游 </a></h4>
					<p class="date">2015-11-23</p>
					<p class="news-des hidden-xs">
						老牌游戏研发商中娱正在用Layabox引擎将著名3D 端游《猎刃》还原到HTML5场景中，Layabox有望成为首个拥有重度3D游戏产品案例的HTML5游戏引擎。 </p>
					<p class="news-detail hidden-xs">
						<span class="view-details"> <a href="http://www.layabox.com/news/129.html"
								title="Layabox引擎用HTML5还原3D端游">查看详情</a></span>
					</p>

				</div>
			</div>
		</div>
		<div class="row news-list-group">
			<div class="news-img col-md-3 col-sm-4 col-xs-4 text-center" style="padding-top: 8px;">
				<div class="thumbnail">
					<a href="http://www.layabox.com/news/128.html" title="Layabox：LayaFlash引擎开发工具进入2.0时代"><img
							src="./static/home/images/1448706890355102.jpg" alt="Layabox：LayaFlash引擎开发工具进入2.0时代"
							class="img-hover img-responsive"></a>
				</div>
			</div>
			<div class="col-md-9 col-sm-8  col-xs-8">
				<div class="caption">

					<h4> <a href="http://www.layabox.com/news/128.html" title="Layabox：LayaFlash引擎开发工具进入2.0时代"
							class="news-title-item">Layabox：LayaFlash引擎开发工具进入2.0时代 </a></h4>
					<p class="date">2015-11-14</p>
					<p class="news-des hidden-xs">
						LayaFlash IDE进行了重大升级更新，无需安装第三方浏览器，直接集成了WEB浏览器功能、开发者调试功能，以及项目编译、资源转换、项目混淆与压缩、在线教程文档、在线问答社区等功能。
					</p>
					<p class="news-detail hidden-xs">
						<span class="view-details"> <a href="http://www.layabox.com/news/128.html"
								title="Layabox：LayaFlash引擎开发工具进入2.0时代">查看详情</a></span>
					</p>

				</div>
			</div>
		</div>
		<div class="row news-list-group">
			<div class="news-img col-md-3 col-sm-4 col-xs-4 text-center" style="padding-top: 8px;">
				<div class="thumbnail">
					<a href="http://www.layabox.com/news/127.html" title="Layabox开发者中心正式开放"><img
							src="./static/home/images/1448707402381425.jpg" alt="Layabox开发者中心正式开放"
							class="img-hover img-responsive"></a>
				</div>
			</div>
			<div class="col-md-9 col-sm-8  col-xs-8">
				<div class="caption">

					<h4> <a href="http://www.layabox.com/news/127.html" title="Layabox开发者中心正式开放"
							class="news-title-item">Layabox开发者中心正式开放 </a></h4>
					<p class="date">2015-11-13</p>
					<p class="news-des hidden-xs">
						Laya Dev
						Center(Laya开发者中心)从新手入门、高手进阶、Flash转换HTML5、MornUI编辑器框架、产品对接、FAQ各个环节逐一讲解。开发者仅需两三个小时，即可掌握LayaFlash引擎框架的开发规则。
					</p>
					<p class="news-detail hidden-xs">
						<span class="view-details"> <a href="http://www.layabox.com/news/127.html"
								title="Layabox开发者中心正式开放">查看详情</a></span>
					</p>

				</div>
			</div>
		</div>
		<div class="row news-list-group">
			<div class="news-img col-md-3 col-sm-4 col-xs-4 text-center" style="padding-top: 8px;">
				<div class="thumbnail">
					<a href="http://www.layabox.com/news/126.html" title="重度H5游戏猎刃2登陆QQ玩吧 次留超36%"><img
							src="./static/home/images/1448706463585862.jpg" alt="重度H5游戏猎刃2登陆QQ玩吧 次留超36%"
							class="img-hover img-responsive"></a>
				</div>
			</div>
			<div class="col-md-9 col-sm-8  col-xs-8">
				<div class="caption">

					<h4> <a href="http://www.layabox.com/news/126.html" title="重度H5游戏猎刃2登陆QQ玩吧 次留超36%"
							class="news-title-item">重度H5游戏猎刃2登陆QQ玩吧 次留超36% </a></h4>
					<p class="date">2015-10-24</p>
					<p class="news-des hidden-xs">
						《猎刃2》次留数据再创新高，玩吧平台中达到36 82%。这款用Layabox引擎研发的重度HTML5游戏，再次用数据实例证明，高品质大型重度游戏在HTML5领域同样会受到广大玩家的喜爱。
					</p>
					<p class="news-detail hidden-xs">
						<span class="view-details"> <a href="http://www.layabox.com/news/126.html"
								title="重度H5游戏猎刃2登陆QQ玩吧 次留超36%">查看详情</a></span>
					</p>

				</div>
			</div>
		</div>
		<div class="row news-list-group">
			<div class="news-img col-md-3 col-sm-4 col-xs-4 text-center" style="padding-top: 8px;">
				<div class="thumbnail">
					<a href="http://www.layabox.com/news/101.html" title="LayaFlash发布V1.4.0 解决杀毒软件误报问题"><img
							src="./static/home/images/20151018094741841.jpg" alt="LayaFlash发布V1.4.0 解决杀毒软件误报问题"
							class="img-hover img-responsive"></a>
				</div>
			</div>
			<div class="col-md-9 col-sm-8  col-xs-8">
				<div class="caption">

					<h4> <a href="http://www.layabox.com/news/101.html" title="LayaFlash发布V1.4.0 解决杀毒软件误报问题"
							class="news-title-item">LayaFlash发布V1.4.0 解决杀毒软件误报问题 </a></h4>
					<p class="date">2015-10-18</p>
					<p class="news-des hidden-xs">
						LayaFlash V1 4 0版本 将彻底解决部分杀毒软件将LayaFlash安装版视为病毒的误报问题。 </p>
					<p class="news-detail hidden-xs">
						<span class="view-details"> <a href="http://www.layabox.com/news/101.html"
								title="LayaFlash发布V1.4.0 解决杀毒软件误报问题">查看详情</a></span>
					</p>

				</div>
			</div>
		</div> -->


		<div class="row">
			<div class="container">
				<div class="col-md-12">
					<div class="news-line"></div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<nav class="news-page">
					<!-- <ul class="pagination">
								<li><a class="a1">32条</a></li>
								<li> <a href="http://www.layabox.com/news/index.html" class="a1">上一页</a></li>
								<li> <span>1</span></li>
								<li><a href="http://www.layabox.com/news/2.html">2</a></li>
								<li><a href="http://www.layabox.com/news/3.html">3</a></li>
								<li><a href="http://www.layabox.com/news/4.html">4</a> <a href="http://www.layabox.com/news/2.html" class="a1">下一页</a></li>
							</ul> -->
					<{$pages}>
				</nav>

			</div>
		</div>

		</div>
	</section>
