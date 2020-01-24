<{include file="./header.tpl"}>

<style>
	html{
		scroll-behavior: smooth;
	}
</style>
		<header>
			<img src="<{$ban['ban_img']}>" class="img-responsive img-hover">
		</header>
		<!--公司简介-->
		<section class="company" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12 contact">
						<h1>公司简介</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="caption">
							<!-- <h2 class="lead">搜游网络科技（北京）有限公司是一家面向全球的、技术极客氛围浓厚的创新科技企业。</h2> -->
							<h2 class="lead"><{$about['about_tit']}></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12 introduce">
						<div class="caption">
							<!-- <p> 公司创始人谢成鸿是全球最早的HTML游戏开拓者，是2000年全球最大页游平台“可乐吧”的创始人，拥有长达15年的引擎开发经验，是大型HTML5游戏坚定的捍卫者，因此，公司定位于“大型HTML5游戏引擎技术研发和产品发行运营”。</p>
							<p>公司拥有一群渴望用技术改变世界的狂人，以“世界因我而不同”为企业使命，推动HTML5产业发展，打造的Layabox技术品牌，面向渠道以及开发者，推出基于LAYA的一系列优秀技术产品，拥有最优秀的大型HTML5支撑技术和众多成功案例，成为全球顶级的HTML5引擎提供商。
							</p> -->
							<{$about['about_con']}>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="caption text-center">
							<img src="<{$about['about_img']}>" class="img-hover img-responsive">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--人才招聘-->
		<section class="zhaopin" id="zhaopin">
			<div class="container">
				<div class="row">
					<div class="col-md-12 page-header">
						<h1>人才招聘</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="caption introduce">
							<p>Layabox是性能最强的HTML5引擎技术提供商与优秀的游戏发行商，面向Flash开发者提供HTML5开发技术方案！</p>
							<p>欢迎各种人才的加入，这里给您最大的发挥空间，一起共创辉煌。</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="caption contact-email">
							<p>请投简历到HR邮箱:</p>
							<p class="email"><a href="" class="btn btn-default">hr@layabox.com</a> </p>
							<p> 期待优秀的你，共同将梦想写进未来！</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="zhaopin-content">
			<div class="container">
<{foreach $job as $v}>

				<div class="row positon-list">
					<div class="col-md-12">
						<div class="page-header">
							<h2 class="zhaopin-title"><{$v['job_name']}></h2>
						</div>
						<div class="caption">

							<h4>职位描述：</h4>
							<div class="positon-detail">
								<ol class=" list-paddingleft-2">
									<{$v['job_desc']}>
								</ol>
							</div>
							<h4>任职要求：</h4>
							<div class="require-detail">
								<ol class=" list-paddingleft-2">
								<{$v['job_req']}>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<{/foreach}>
				<!-- <div class="row positon-list">
					<div class="col-md-12">
						<div class="page-header">
							<h2 class="zhaopin-title">PHP开发工程师</h2>
						</div>
						<div class="caption">

							<h4>职位描述：</h4>
							<div class="positon-detail">
								<ol class=" list-paddingleft-2" style="list-style-type: decimal;">
									<li>
										<p>设计并实现大数据，高并发，可扩展性的海量用户级游戏平台；</p>
									</li>
									<li>
										<p>负责平台核心功能模块的开发，调试和整合；</p>
									</li>
									<li>
										<p>参与制定平台业务流程，交互式平台架构。
											<br>
										</p>
									</li>
								</ol>
							</div>
							<h4>任职要求：</h4>
							<div class="require-detail">
								<ol class=" list-paddingleft-2" style="list-style-type: decimal;">
									<li>
										<p>具有强烈的责任心，良好的沟通能力，有较强的独立工作能力和解决问题的能力；</p>
									</li>
									<li>
										<p>三年以上PHP开发经验，熟练掌握PHP开发及性能优化经验；</p>
									</li>
									<li>
										<p>熟悉大型网站或平台的构架和性能优化，熟悉各种WEB缓存技术，并有实际的项目经验；&nbsp;</p>
									</li>
									<li>
										<p>熟悉Linux服务器环境优先考虑。</p>
									</li>
								</ol>
								<p>
									<br>
								</p>
								<p>
									<br>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row positon-list">
					<div class="col-md-12">
						<div class="page-header">
							<h2 class="zhaopin-title">游戏商务经理</h2>
						</div>
						<div class="caption">

							<h4>职位描述：</h4>
							<div class="positon-detail">
								<ol class=" list-paddingleft-2" style="list-style-type: decimal;">
									<li>
										<p>负责开拓游戏合作客户，及落实商务政策；</p>
									</li>
									<li>
										<p>寻找符合公司利益的战略合作伙伴，并参与商务谈判，促成合作业务的达成；
											<br>
										</p>
									</li>
								</ol>
							</div>
							<h4>任职要求：</h4>
							<div class="require-detail">
								<ol class=" list-paddingleft-2" style="list-style-type: decimal;">
									<li>
										<p>熟悉互联网及游戏行业内合作运营的具体情况，具备大型网页游戏平台商务工作经验；</p>
									</li>
									<li>
										<p>敏锐的市场洞察力，对游戏合作模式有较深了解；</p>
									</li>
									<li>
										<p>优秀的人际交往、商务拓展和任务执行能力，并能承受工作压力；</p>
									</li>
									<li>
										<p>工作认真细致，具备高度的责任心、团队协作意识和吃苦耐劳精神；</p>
									</li>
									<li>
										<p>英语优秀者优先。
											<br>
										</p>
									</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<div class="row positon-list">
					<div class="col-md-12">
						<div class="page-header">
							<h2 class="zhaopin-title">游戏运维工程师</h2>
						</div>
						<div class="caption">

							<h4>职位描述：</h4>
							<div class="positon-detail">
								<ol class=" list-paddingleft-2" style="list-style-type: decimal;">
									<li>
										<p>网络游戏的环境部署、多版本发布、在线升级和相关维护工作；</p>
									</li>
									<li>
										<p>监控服务器运行状态，第一时间处理服务器突发软硬件故障，对服务器安全管理的规划和执行；&nbsp;</p>
									</li>
									<li>
										<p>服务器数据、文件的备份管理；&nbsp;</p>
									</li>
									<li>
										<p>游戏服务器部署架构的研究和优化，游戏自动化部署、发布的研究工作。
											<br>
										</p>
									</li>
								</ol>
							</div>
							<h4>任职要求：</h4>
							<div class="require-detail">
								<ol class=" list-paddingleft-2" style="list-style-type: decimal;">
									<li>
										<p>大专及以上学历，计算机或相关专业，2年以上Linux服务器管理维护经验；&nbsp;</p>
									</li>
									<li>
										<p>熟悉windows、Linux操作系统的安装、管理；会制作自动化安装光盘 ；&nbsp;</p>
									</li>
									<li>
										<p>了解常见应用服务器LAMP安装、配置；了解主流数据库Mysql的安装、配置；&nbsp;</p>
									</li>
									<li>
										<p>具有高度的责任心、抗压力，以及良好的沟通能力及团队合作精神，具有独立分析和处理故障的能力；</p>
									</li>
									<li>
										<p>熟悉防火墙，路由、交换机的运行机制和配置，熟悉各种网络协议；具有游戏运维经验，熟悉网络游戏服务器部署架构者优先；&nbsp;</p>
									</li>
									<li>
										<p>有自动化部署、发布；腾讯平台游戏接入、运维工作经验者优先。
											<br>
										</p>
									</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<div class="row positon-list02">
					<div class="col-md-12">
						<div class="page-header">
							<h2 class="zhaopin-title">android开发工程师</h2>
						</div>
						<div class="caption">

							<h4>职位描述：</h4>
							<div class="positon-detail">
								<ol class=" list-paddingleft-2" style="list-style-type: decimal;">
									<li>
										<p>负责各种平台对接，浏览器对接。
											<br>
										</p>
									</li>
								</ol>
							</div>
							<h4>任职要求：</h4>
							<div class="require-detail">
								<ol class=" list-paddingleft-2" style="list-style-type: decimal;">
									<li>
										<p>熟悉java；</p>
									</li>
									<li>
										<p>熟悉android原生开发；</p>
									</li>
									<li>
										<p>能够用android做一下简单的界面，熟悉webView的用法。
											<br>
										</p>
									</li>
								</ol>
							</div>
						</div>
					</div>
				</div> -->

			</div>

		</section>

		<!--联系方式-->
		<section class="contact-us" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="page-header">
							<h1>联系方式</h1>
						</div>
					</div>
				</div>
		<{foreach $contact as $k=>$v}>
				<{if  $k is even }>
				<{$sav = $k+1}>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="media well">
							<div class="media-body">
								<p><img src="<{$v['cat_img']}>"><{$v['cat_con']}></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="media  well">
							<div class="media-body">
								<p><img src="<{$contact[$sav]['cat_img']}>"><{$contact[$sav]['cat_con']}></p>
							</div>
						</div>
					</div>
				</div>
				<{/if}>
		<{/foreach}>
				
				<!-- <div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="media well">
							<div class="media-body">
								<p><img src="./static/home/images/dot-03.png">微信公众号：layabox</p>

							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="media well">
							<div class="media-body">
								<p><img src="./static/home/images/dot-04.png">电话：010-56277796</p>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</section>
