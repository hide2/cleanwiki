<?php $__env->startSection('content'); ?>
<div class="cl-mcont">
    <div class="row dash-cols">
            
        <div class="col-sm-6 col-md-6">
            <div class="block">
                <div class="header no-border">
                    <h2>实时在线</h2>
                </div>
                <div class="content blue-chart"  data-step="3" data-intro="<strong>Unique Styled Plugins</strong> <br/> We put love in every detail to give a great user experience!.">
                    <div id="site_statistics" style="height:180px;"></div>
                </div>
                <div class="content">
                    <div class="stat-data">
                        <div class="stat-blue">
                            <h2>15,254</h2>
                            <span>今日新增</span>
                        </div>
                    </div>
                    <div class="stat-data">
                        <div class="stat-number">
                            <div>峰值在线<br /></div>
                            <div><h2>88888</h2></div>
                        </div>
                        <div class="stat-number">
                            <div>平均在线<br /></div>
                            <div><h2>66666</h2></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-6">
            <div class="block">
                <div class="header no-border">
                    <h2>实时收入</h2>
                </div>
                <div class="content red-chart"  data-step="3" data-intro="<strong>Unique Styled Plugins</strong> <br/> We put love in every detail to give a great user experience!.">
                    <div id="site_statistics" style="height:180px;"></div>
                </div>
                <div class="content">
                    <div class="stat-data">
                        <div class="stat-red">
                            <h2>15,254</h2>
                            <span>总收入</span>
                        </div>
                    </div>
                    <div class="stat-data">
                        <div class="stat-number">
                            <div>峰值收入<br /></div>
                            <div><h2>88888</h2></div>
                        </div>
                        <div class="stat-number">
                            <div>平均收入<br /></div>
                            <div><h2>66666</h2></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
              
        <div class="col-sm-6 col-md-6">
            <div class="block">
                <div class="header no-border">
                    <h2>实时新增</h2>
                </div>
                <div class="content red-chart">
                    <div id="site_statistics2" style="height:250px;"></div>
                </div>
            </div>
        </div>
            
        <div class="col-sm-6 col-md-6">
            <div class="tab-content">
                <div class="tab-pane active cont" id="home">
                    <h2 class="text-center">渠道收入分布</h2>
                    <div id="piec" style="height:250px;margin-top:25px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>