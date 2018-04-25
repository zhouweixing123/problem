<?php
/**
 * Created by PhpStorm.
 * User: F6
 * Date: 2018/4/18
 * Time: 1:06
 */
use yii\widgets\Breadcrumbs;
?>
<div class="left-content">
    <div class="mother-grid-inner">
        <!--header start here-->
        <div class="header-main">
            <div class="logo-w3-agile">
                <h1><a href="<?= Yii::$app -> homeUrl?>" class="a_a2d200">问题录入系统</a></h1>
            </div>
            <div class="w3layouts-left">

                <!--search-box-->
                <div class="w3-search-box">
                    <form action="<?=Yii::$app -> urlManager -> createUrl('/question/index')?>" method="post">
                        <input type="hidden" name="_csrf-backend" value="<?=Yii::$app -> getRequest() -> getCsrfToken()?>">
                        <input type="text" name="name" placeholder="请输入要搜索的问题..." required="">
                        <input type="submit" value="">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="w3layouts-right">
                <div class="profile_details_left"><!--notifications of menu start -->
                    <ul class="nofitications-dropdown">
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle a_e74c3c" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 3 new messages</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="user_img"><img src="<?= Yii::$app -> homeUrl?>images/in11.jpg" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li class="odd"><a href="#">
                                        <div class="user_img"><img src="<?= Yii::$app -> homeUrl?>images/in10.jpg" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user_img"><img src="<?= Yii::$app -> homeUrl?>images/in9.jpg" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all messages</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle a_e74c3c" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 3 new notification</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="user_img"><img src="<?= Yii::$app -> homeUrl?>images/in8.jpg" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li class="odd"><a href="#">
                                        <div class="user_img"><img src="<?= Yii::$app -> homeUrl?>images/in6.jpg" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user_img"><img src="<?= Yii::$app -> homeUrl?>images/in7.jpg" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all notifications</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle a_e74c3c" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 8 pending task</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar yellow" style="width:40%;"></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar green" style="width:90%;"></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar red" style="width: 33%;"></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar  blue" style="width: 80%;"></div>
                                        </div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all pending tasks</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <div class="clearfix"> </div>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <!--notification menu end -->

                <div class="clearfix"> </div>
            </div>
            <div class="profile_details w3l">
                <ul>
                    <li class="dropdown profile_details_drop">
                        <a href="#" class="dropdown-toggle a_008DE7" data-toggle="dropdown" aria-expanded="false">
                            <div class="profile_img" style="margin-left: -10px;">
                                <span class="prfil-img"><img src="<?= Yii::$app -> homeUrl?>images/in4.jpg" style="width:40px;height:40px;" alt=""> </span>
                                <div class="user-name">
                                    <p><?=$username?></p>
                                    <span><?=date('Y-m-d h:i:s',time())?></span>
                                </div>
                                <i class="fa fa-angle-down"></i>
                                <i class="fa fa-angle-up"></i>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <ul class="dropdown-menu drp-mnu">
                            <li> <a href="#" class="a_fff"><i class="fa fa-cog"></i> 个人中心</a></li>
                            <li> <a href="javascript:void(0)" class="a_fff" data-url="<?= Yii::$app -> urlManager -> createAbsoluteUrl('site/logout')?>" id="logout"><i class="fa fa-sign-out"></i> 退出登录</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="breadcrumb">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'class' => 'breadcrumb-item a_fff',
            ]) ?>
        </div>