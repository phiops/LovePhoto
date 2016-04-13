<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /><?php lp_meta();wp_head(); ?></head><body <?php body_class(); ?>><div id="header">	<div class="container clearfix">		<div class="logo left">			<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_url');?>/images/logo.png" alt="<?php bloginfo('name'); ?>" height="30" /></a>		</div>		<div class="global-nav left">			<ul>
				<li class="<?php if(is_home()) echo "current-menu-item";?>">					<a href="<?php bloginfo('url'); ?>" title="首页"><span class="icon icon-home"></span>首页</a>				</li>				<li  class="<?php if(is_page("topics")) echo "current-menu-item";?>">					<a href="<?php echo lp_page_link("topics");?>" title="热门"><span class="icon icon-fire"></span>热门</a>				</li>				
				<li class="dropdown">					<a class="dropdown-link" href="#" title="导航"><span class="icon icon-list"></span>导航</a>					<div class="dropdown-arrow1"></div>					<div class="dropdown-arrow2"></div>					<div class="submenu">						<div class="tab-content">							<div class="tab-formats">								<ul class="inline-ul">
									<li class="inline-li">										<a href="<?php echo lp_page_link("text");?>"><span class="icon icon-pen"></span>文字</a>									</li>
									<li class="inline-li">										<a href="<?php echo get_post_format_link('audio')?>"><span class="icon icon-music"></span>音乐</a>									</li>
									<li class="inline-li">										<a href="<?php echo get_post_format_link('video')?>"><span class="icon icon-play"></span>视频</a>									</li>
									<li class="inline-li">										<a href="<?php echo get_post_format_link('image')?>"><span class="icon icon-images"></span>图片</a>									</li>
								</ul>							</div>							<div class="tab-title">								<span class="tab-text">所有分类</span>							</div>							<ul class="tab-categories">								<?php wp_list_categories('&title_li='); ?>							</ul>							<div class="tab-title">								<span class="tab-text">热门标签</span>							</div>													<div class="tab-tags">								<?php wp_tag_cloud( array('unit' => 'px', 'smallest' => 12, 'largest' => 12, 'number' => 25, 'format' => 'flat', 'orderby' => 'count', 'order' => 'DESC' )); ?>							</div>						</div>					</div>									</li>							</ul>		</div>		<?php wp_nav_menu(array( 'theme_location'=>'primary', 'container_class' => 'global-nav global-nav2 left')); ?>		<div class="user-info right">			<?php if( is_user_logged_in() ) :				global $current_user;				get_currentuserinfo();				$user_ID = $current_user->ID;			?>				<ul>					<li class="user-account parent-menu">						<a class="user-avatar" href="<?php echo lp_page_link( "user" );?>"><?php echo get_avatar( $user_ID, 20); echo '<span>'.$current_user->display_name.'</span>';?></a>						<ul class="sub-menu">							<li><a href="<?php echo lp_page_link( "user" );?>">撰写文章</a></li>							<li><a href="<?php echo lp_page_link( "user" );?>/setting">账号设置</a></li>							<li><a href="<?php echo wp_logout_url( get_bloginfo('url') ); ?>">退出</a></li>						</ul>					</li>				</ul>			<?php else : ?>				<a class="notsignined" href="<?php bloginfo('url'); ?>/wp-login.php">登录</a>				<span class="split">|</span>				<a href="<?php bloginfo('url'); ?>/wp-login.php?action=register">注册</a>			<?php endif;?>		</div>		<?php if( is_user_logged_in() ) :?>			<?php if($lpc = lp_check_count()){?>				<div class="user-notify">					<?=$lpc;?>条新通知，<a class="user-notify-link" href="<?php echo lp_page_link( "user" );?>/message" title="消息">点击查看</a>					<a href="javascript:lp_checked(<?=$user_ID;?>);" class="user-notify-close"><span class="icon icon-cross"></span></a>				</div>			<?php }?>		<?php endif;?>	</div>	
</div><!-- #header --><div id="content">