=== wp-sns-share ===
Contributors: –Flyぁ梦–
Author info: 浙江大学 计算机07级
Author link: http://blog.stariy.org/
Tags: share, sns, wp-sns-share, wordpress, 分享, 微博, 同步, 新浪微博, 腾讯微博, 人人网, Twitter
Requires at least: 3.0
Tested up to: 3.3.1
Latest version: 2.7
Stable tag: 2.7

== Description ==
本插件利用各大SNS和微博网站的开放API，可将wordpress中文章分享到这些网站，并且支持新浪微博、腾讯微博、人人网与
wordpress博客文章实时同步发布在这些网站中可以吸引自己的同学、朋友和粉丝通过链接进入自己的博客文章，从来带来巨大的流量。
支持国内大多数的社交网站，如人人、豆瓣、开心网、QQ空间、百度空间、新浪微博、腾讯微博、搜狐微博、网易微博、饭否、
Google书签、Google +1和国外流行的linkedin、delicious、twitter和facebook。

相关链接:

* <a href="http://blog.stariy.org/">–Flyぁ梦–的博客</a>
* <a href="http://blog.stariy.org/myself">关于作者</a>
* <a href="http://blog.stariy.org/2010-08/wp-sns-share.html">发现BUG请告诉我</a>
* <a href="http://blog.stariy.org/2012-08/wp-sns-share_2-6.html">wp-sns-share 2.6 增加图片同步，新浪微博改用OAuth2</a>
* <a href="http://blog.stariy.org/2012-02/wp-sns-share_2-5.html">wp-sns-share 2.5 增加人人同步</a>
* <a href="http://blog.stariy.org/2012-01/wp-sns-share_2-4.html">wp-sns-share 2.4 增加同步文章摘要</a>
* <a href="http://blog.stariy.org/2011-07/wp-sns-share_2-3.html">wp-sns-share 2.3 增加腾讯微博同步</a>
* <a href="http://blog.stariy.org/2011-04/wp-sns-share_2-2.html">wp-sns-share 2.2 改善SNS图标列表前台显示效果</a>
* <a href="http://blog.stariy.org/2011-02/wp-sns-share-2-1_add_sina_sync.html">wp-sns-share 2.1 增加新浪微博同步</a>
* <a href="http://blog.stariy.org/2011-01/wp-sns-share_2-0.html">wp-sns-share 2.0 增加sns图标顺序控制</a>
* <a href="http://blog.stariy.org/2010-09/wp-sns-share_add_tinyurl.html">wp-sns-share 1.2 增加tinyurl</a>
* <a href="http://blog.stariy.org/2010-08/wp-sns-share.html">wp-sns-share 1.0</a>


== Installation ==
1. 下载
2. 使用wordpress后台上传已下载的安装包即可，或手动解压文件到plusins目录
3. 安装完毕后激活插件
4. 后台左侧插件栏点击“分享到SNS”或在插件列表中找到wp_sns_share点击“设置”即进入配置页面
5. 配置相关选项，保存设置即可


== Frequently Asked Questions ==

== Screenshots ==
1. 在新浪微博中博客同步发布的微博
2. 在腾讯微博中博客同步发布的微博
3. 博客文章中的分享条

== Changelog ==

= 2.7 =
1. 新浪微博OAuth代码从新浪开放平台转移，解决登陆授权不能的问题
2. 新增Twitter同步, 第一次登陆需要翻墙得到Twitter的授权, 之后就一直可以用了

= 2.6.1 =
1. 修复当新浪微博过期时的一个bug

= 2.6 =
1. 增加自动同步文章中第一张图片的功能（新浪微博、腾讯微博），后台可选择是否开启
2. 新浪微博API升级为2.0（1.0将于9月失效），但是新浪认证2.0版本的授权会过期（15天），过期后会有相关提示，需要重新授权
3. 改进编辑文章页面的widget，非默认选择下可自定义选择同步网站来进行同步
4. 修复在首页分享栏分享时会变成分享第一篇文章内容，改为分享博客及简介
5. 增加Google+分享和Google+1按钮（大陆用户+1按钮慎用）
6. 后台设置修改：  1)增加分享栏带上前台文章简介分享的选择
				2)选择分享栏上下直线的功能，由选择关闭改为选择开启（默认开启）
7. 添加新浪短url服务t.cn
8. 取消不起作用的自定义微博来源设置
9. 修复分享栏分享时IE浏览器的下的乱码BUG
10. 取消人人网同步，因为人人网APP无法通过审核，用户名密码模式失效

= 2.5 =
1. 增加人人网同步
2. 改进微博同步时摘要的输出，删除HTML标签、XML标签和[caption]标签
3. 在前段分享栏的微博分享中，也加入了摘要的输出
4. 增加新浪微博、腾讯微博的自定义微博来源设置，需要申请APP并填写Key和Secret
5. 新建、编辑文章页面，右侧添加一个widget来控制当前文章保存、更新操作时是否同步，可跳过默认设置

= 2.4 =
1. 微博同步时，增加博客名和博文摘要的输出
2. 新浪微博同步时，url用url编码处理，可以支持中文url了

= 2.3 =
1. 增加腾讯微博实时可与博客同步更新
2. 后台可直接发送内容到新浪、腾讯微博，并可@作者
3. 后台增加分享栏预览
4. 后台增加控制SNS图标间隔的控制，方便保持分享栏的美观
5. 应热心网友要求，添加饭否网的分享链接，更改QQ空间图标
6. 应热心网友要求，添加分享栏在文章上或下的选择
7. 应热心网友要求，添加分享栏可以在首页等其他区域显示，调用<?php echo wp-sns-share();?>
1. （技术）放弃使用新浪微博sdk，采用开源OAuth库实现，减少代码量
2. （技术）所有图片合并为一张图，利用css sprite效果展示，减少http连接增进插件速度
3. （技术）将插件的php代码与后台的html、js代码分离，后者放入/page目录

= 2.2 =
1. 改善SNS图标列表前台显示效果，增加动态背景突出显示
2. 更改QQ空间图标
3. 新浪同步功能，增加选择发布文章和更新文章时候分开的同步选择
4. （技术）进一步规范代码，增加注释

= 2.1 =
1. 增加新浪微博同步功能，利用新浪OAuth认证后，发送博文的同时自动推送新浪微博
2. 增加插件列表页面中，直接进入插件控制面板的入口链接
3. 增加输出时对hr横线的控制，对调用函数wp-sns-share()统一化，无需任何参数，返回结果需要echo输出
4. （技术）更加规范化了代码，加入了更多的注释

= 2.0 =
1. 应热心网友要求，增加sns分享图标前后顺序控制
2. 增加网易微博、Google书签、Google Buzz、linkedin的分享，linkedin默认不开启
3. 增进后台界面美观度，并带有更详细的介绍说明
4. （技术）后台使用jQuery实现，前台取消jQuery的使用

= 1.4 =
1. 增加搜狐微博分享
2. 更新QQ空间的图标
3. 将插件中文化

= 1.3 =
1. 增加腾讯微博分享
2. tinyurl默认只针对twitter适用
3. （技术）解决IE下的显示BUG

= 1.2.0 =
1. 修改QQ空间的显示图标
2. 增加显示开关，开启则自动显示在文章底部，关闭的话可以自己使用wp_sns_share()函数在任意地方调用
3. 增加tinyurl功能，默认不开启
4. 增加删除插件的选择，显示插件所占数据表的项
5. （技术）修改js文件

= 1.1.0 =
1. 正式确定插件名为：wp-sns-share
2. 增加delicious分享

== Upgrade Notice ==
= 2.7 =
解决新浪微博登陆授权不能的问题 ；新增Twitter同步。

= 2.6.1 =
修复2.6版本一个bug；2.6版本：增加博客图片同步，改进widget控制更加灵活，前台分享栏添加Google+分享和+1按钮可供选择

= 2.6 =
增加博客图片同步，改进widget控制更加灵活，前台分享栏添加Google+分享和+1按钮可供选择

= 2.5 =
增加人人网同步；改进摘要输出，删除HTML等标签，并在前台分享中添加摘要；增加自定义微博来源；添加一个widget来控制具体某篇文章是否同步。
详见：http://blog.stariy.org/2012-02/wp-sns-share_2-5.html

= 2.4 =
增加同步更新时的博客名和博文摘要的输出；解决新浪微博同步url不能为中文的问题
详见：http://blog.stariy.org/2012-01/wp-sns-share_2-4.html

= 2.3 =
增加腾讯微博同步，合并所有图片优化插件效率，增加后台分享栏预览，分享栏可输出到首页等其他区域；
更新此版本后，之前版本小部分数据恢复默认设置，需要重新设置一下；
详见：http://blog.stariy.org/2011-07/wp-sns-share_2-3.html

= 2.2 =
改善SNS图标列表前台显示效果；增加选择发布、更新文章时的新浪同步选择；
详见：http://blog.stariy.org/2011-04/wp-sns-share_2-2.html

= 2.1 =
增加新浪微博同步功能，利用新浪OAuth认证后，发送博文的同时自动推送新浪微博
详见：http://blog.stariy.org/2011-02/wp-sns-share-2-1_add_sina_sync.html
