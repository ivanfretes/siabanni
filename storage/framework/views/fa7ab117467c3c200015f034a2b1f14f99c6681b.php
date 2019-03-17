<?php $__env->startSection('title', 'Account Sectors'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            <?php echo $__env->make('layouts.leftside-menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col-md-10" id="main-container">
            <div class="panel panel-default">
                <div class="page-panel-title">Account Sectors</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <form class="form-horizontal" action="<?php echo e(url('/accounts/create-sector')); ?>" method="post">
                      <?php echo e(csrf_field()); ?>

                      <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                          <label for="name" class="col-md-4 control-label">Sector Name</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control" name="name" value="<?php echo e((!empty($sector->name))?$sector->name:old('name')); ?>" placeholder="Sector Name" required>

                              <?php if($errors->has('name')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('name')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>
                      <div class="form-group<?php echo e($errors->has('type') ? ' has-error' : ''); ?>">
                          <label for="type" class="col-md-4 control-label">Sector Type</label>

                          <div class="col-md-6">
                              <select  class="form-control" name="type">
                                  <?php if(!empty($sector->type)): ?>
                                      <?php echo Form::select('type',['income'=>'income','expense'=>'expense'],$sector->type,['class'=>'form-control','required'=>'true']); ?>

                                  <?php else: ?>
                                    <option value="income">Income</option>
                                    <option value="expense">Expense</option>
                                  <?php endif; ?>
                              </select>

                              <?php if($errors->has('type')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('type')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                          <button type="submit" class="btn btn-danger">Save</button>
                        </div>
                      </div>
                    </form>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
	<style>
		canvas {
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}
	</style>
    <div style="width:100%;">
		<canvas id="canvas"></canvas>
	</div>
	<script>
        'use strict';

        window.chartColors = {
            red: 'rgb(255, 99, 132)',
            orange: 'rgb(255, 159, 64)',
            yellow: 'rgb(255, 205, 86)',
            green: 'rgb(75, 192, 192)',
            blue: 'rgb(54, 162, 235)',
            purple: 'rgb(153, 102, 255)',
            grey: 'rgb(201, 203, 207)'
        };

		var color = Chart.helpers.color;
		var config = {
			type: 'line',
			data: {
				datasets: [{
                    label: 'Income',
					backgroundColor: color(window.chartColors.green).alpha(0.5).rgbString(),
					borderColor: window.chartColors.green,
					fill: false,
					data: [<?php $__currentLoopData = $incomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        {
                            t:"<?php echo e(Carbon\Carbon::parse($s->created_at)->format('Y-d-m')); ?>",
                            y:<?php echo e($s->amount); ?>

                        },
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>]
                },{
                    label: 'Expense',
					backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
					borderColor: window.chartColors.red,
					fill: false,
					data: [<?php $__currentLoopData = $expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        {
                            t:"<?php echo e(Carbon\Carbon::parse($s->created_at)->format('Y-d-m')); ?>",
                            y:<?php echo e($s->amount); ?>

                        },
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>]
                }]
            },
			options: {
				title: {
                    display: true,
					text: 'Income and Expense (In Taka) in Time Scale'
				},
				scales: {
					xAxes: [{
						type: 'time',
						time: {
							format: 'YYYY-DD-MM',
							tooltipFormat: 'll HH:mm'
						},
						scaleLabel: {
							display: true,
							labelString: 'Date'
						}
					}],
					yAxes: [{
						scaleLabel: {
							display: true,
							labelString: 'Money'
						}
					}]
				},
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);

		};
	    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>