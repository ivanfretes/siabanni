<div class="row">
  <div class="col-md-2">
    <?php if(!empty($user->pic_path)): ?>
    <img src="<?php echo e(asset('01-progress.gif')); ?>" data-src="<?php echo e(url($user->pic_path)); ?>" class="img-thumbnail" id="my-profile" alt="Profile Picture" width="100%">
    <?php else: ?>
      <?php if(strtolower($user->gender) == 'male'): ?>
        <img src="<?php echo e(asset('01-progress.gif')); ?>" data-src="https://png.icons8.com/dusk/200/000000/user.png" class="img-thumbnail" width="100%">
      <?php else: ?>
        <img src="<?php echo e(asset('01-progress.gif')); ?>" data-src="https://png.icons8.com/dusk/200/000000/user-female.png" class="img-thumbnail" width="100%">
      <?php endif; ?>
    <?php endif; ?>
    <?php if(\Auth::user()->role == 'admin'): ?>
    <div class="rows" style="font-size:10px;margin-top:5%;">
      <input type="hidden" id="picPath" name="pic_path">
      <input type="hidden" id="userIdPic" name="user_id" value="<?php echo e($user->id); ?>">
      <?php $__env->startComponent('components.file-uploader',['upload_type'=>'profile']); ?>
      <?php echo $__env->renderComponent(); ?>
    </div>
    <?php endif; ?>
  </div>
  <div class="col-md-10" id="main-container">
    <h3><?php echo e($user->name); ?> <span class="label label-danger"><?php echo e(ucfirst($user->role)); ?></span> <span class="label label-primary"><?php echo e(ucfirst($user->gender)); ?></span>
      <?php if($user->role == 'teacher' && $user->section_id > 0): ?>
        <small>Class Teacher of Section: <span class="label label-info"><?php echo e(ucfirst($user->section->section_number)); ?></span></small>
      <?php endif; ?>
      
      <?php if($user->role == "student"): ?>
       <button class="btn btn-xs btn-success pull-right" role="button" id="btnPrint"><i class="material-icons">print</i> Print Profile</button>
       <div class="visible-print-block" id="profile-content">
       <div class="row">
          <div class="col-md-12">
            <div class="col-xs-8">
              <h2><?php echo e($user->section->class->school->name); ?></h2>
              <div style="font-size: 10px;"><?php echo e($user->section->class->school->about); ?></div>
            </div>
            <div class="col-xs-4">
              <h3>Student Profile</h3>
              <div style="font-size: 10px;">Printing Date: <?php echo e(Carbon\Carbon::now()->format('d/m/Y')); ?></div>
            </div>
          </div>
        </div>
        <br/>
        <div class="row">
          <div class="col-md-12">
            <p class="bg-primary" style="text-align:center;">
              Academic Information
            </p>
            <div class="col-xs-9">
              <table class="table">
                <tr>
                  <td>Student ID:</td>
                  <td><?php echo e($user->student_code); ?></td>
                  <td>Student's Name:</td>
                  <td><?php echo e($user->name); ?></td>
                </tr>
                <tr>
                  <td>Class:</td>
                  <td><?php echo e($user->section->class->class_number); ?></td>
                  <td>Section:</td>
                  <td><?php echo e($user->section->section_number); ?></td>
                </tr>
                <tr>
                  <td>Session:</td>
                  <td><?php echo e($user->studentInfo['session']); ?></td>
                  <td>Version:</td>
                  <td><?php echo e($user->studentInfo['version']); ?></td>
                </tr>
                <tr>
                  <td>Group:</td>
                  <td><?php echo e($user->studentInfo['group']); ?></td>
                  <td colspan="2"></td>
                </tr>
              </table>
            </div>
            <div class="col-xs-3">
              <?php if(!empty($user->pic_path)): ?>
              <img src="<?php echo e(asset('01-progress.gif')); ?>" data-src="<?php echo e(url($user->pic_path)); ?>" class="img-thumbnail" id="my-profile" alt="Profile Picture" width="120px" height="120px">
              <?php else: ?>
              <?php if(strtolower($user->gender) == 'male'): ?>
                <img src="<?php echo e(asset('01-progress.gif')); ?>" data-src="https://png.icons8.com/dusk/200/000000/user.png" class="img-thumbnail" id="my-profile" alt="Profile Picture" width="120px" height="120px">
              <?php else: ?>
                <img src="<?php echo e(asset('01-progress.gif')); ?>" data-src="https://png.icons8.com/dusk/200/000000/user-female.png" class="img-thumbnail" id="my-profile" alt="Profile Picture" width="120px" height="120px">
              <?php endif; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="bg-primary" style="text-align:center;">
              Personal details
            </p>
            <div class="col-xs-12">
              <table class="table">
                <tr>
                  <td>Email:</td>
                  <td><?php echo e($user->email); ?></td>
                  <td>Contact Number</td>
                  <td><?php echo e($user->phone_number); ?></td>
                </tr>
                <tr>
                  <td>Gender:</td>
                  <td><?php echo e($user->gender); ?></td>
                  <td>Blood Group:</td>
                  <td><?php echo e($user->blood_group); ?></td>
                </tr>
                <tr>
                  <td>Nationality:</td>
                  <td><?php echo e($user->nationality); ?></td>
                  <td>Birthday:</td>
                  <td><?php echo e(Carbon\Carbon::parse($user->birthday)->format('d/m/Y')); ?></td>
                </tr>
                <tr>
                  <td>Religion:</td>
                  <td><?php echo e($user->studentInfo['religion']); ?></td>
                  <td>Father Name:</td>
                  <td><?php echo e($user->studentInfo['father_name']); ?></td>
                </tr>
                <tr>
                  <td>Mother Name:</td>
                  <td><?php echo e($user->studentInfo['mother_name']); ?></td>
                  <td>Address:</td>
                  <td><?php echo e($user->address); ?></td>
                </tr>
                <tr>
                  <td>Phone Number:</td>
                  <td><?php echo e($user->phone_number); ?></td>
                  <td>Father's Phone Number:</td>
                  <td><?php echo e($user->studentInfo['father_phone_number']); ?></td>
                </tr>
                <tr>
                  <td>Father's National ID:</td>
                  <td><?php echo e($user->studentInfo['father_national_id']); ?></td>
                  <td>Father's Occupation:</td>
                  <td><?php echo e($user->studentInfo['father_occupation']); ?></td>
                </tr>
                <tr>
                  <td>Father's Designation:</td>
                  <td><?php echo e($user->studentInfo['father_designation']); ?></td>
                  <td>Father's Annual Income:</td>
                  <td><?php echo e($user->studentInfo['father_annual_income']); ?></td>
                </tr>
                <tr>
                  <td>Mother's Phone Number:</td>
                  <td><?php echo e($user->studentInfo['mother_phone_number']); ?></td>
                  <td>Mother's National ID:</td>
                  <td><?php echo e($user->studentInfo['mother_national_id']); ?></td>
                </tr>
                <tr>
                  <td>Mother's Occupation:</td>
                  <td><?php echo e($user->studentInfo['mother_occupation']); ?></td>
                  <td>Mother's Designation:</td>
                  <td><?php echo e($user->studentInfo['mother_designation']); ?></td>
                </tr>
                <tr>
                  <td>Mother's Annual Income:</td>
                  <td><?php echo e($user->studentInfo['mother_annual_income']); ?></td>
                  <td>About:</td>
                  <td><?php echo e($user->about); ?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
       </div>
       <script>
        $("#btnPrint").on("click", function () {
            var tableContent = $('#profile-content').html();
            var printWindow = window.open('', '', 'height=720,width=1280');
            printWindow.document.write('<html><head>');
            printWindow.document.write('<link href="<?php echo e(url('css/app.css')); ?>" rel="stylesheet">');
            printWindow.document.write('</head><body>');
            printWindow.document.write('<div class="container"><div class="col-md-12" id="academic-part">');
            printWindow.document.write(tableContent);
            printWindow.document.write('</div></div></body></html>');
            printWindow.document.close();
            // var academicPart = printWindow.document.getElementById("academic-part");
            // academicPart.appendChild(resultTable);
            printWindow.print();
          });
        </script>
      <?php endif; ?>
     </h3>
    <div class="table-responsive" style="margin-top: 3%;">
    <table class="table table-bordered table-striped">
      <tbody>
        <tr>
          <?php if($user->role == "student"): ?>
          <td><b>Code:</b></td>
          <td><?php echo e($user->student_code); ?></td>
          <td><b>Session:</b></td>
          <td><?php echo e($user->studentInfo['session']); ?></td>
          <?php else: ?>
          <td><b>Code:</b></td>
          <td><?php echo e($user->student_code); ?></td>
          <td><b>About:</b></td>
          <td><?php echo e($user->about); ?></td>
          <?php endif; ?>
        </tr>
        <?php if($user->role == "student"): ?>
        <tr>
          <td><b>Class:</b></td>
          <td><?php echo e($user->section->class->class_number); ?></td>
          <td><b>Section:</b></td>
          <td><?php echo e($user->section->section_number); ?></td>
        </tr>
        <tr>
          <td><b>Version:</b></td>
          <td><?php echo e($user->studentInfo['version']); ?></td>
          <td><b>Blood Group:</b></td>
          <td><?php echo e($user->blood_group); ?></td>
        </tr>
        <tr>
          <td><b>Group:</b></td>
          <td><?php echo e($user->studentInfo['group']); ?></td>
          <td><b>Birthday:</b></td>
          <td><?php echo e(Carbon\Carbon::parse($user->birthday)->format('d/m/Y')); ?></td>
        </tr>
        <?php endif; ?>
        <tr>
          <td><b>Nationality:</b></td>
          <td><?php echo e($user->nationality); ?></td>
          <td><b>Religion:</b></td>
          <td><?php echo e($user->studentInfo['religion']); ?></td>
        </tr>
        <?php if($user->role == "student"): ?>
        <tr>
          <td><b>Father Name:</b></td>
          <td><?php echo e($user->studentInfo['father_name']); ?></td>
          <td><b>Mother Name:</b></td>
          <td><?php echo e($user->studentInfo['mother_name']); ?></td>
        </tr>
        <?php endif; ?>
        <tr>
          <td><b>Address:</b></td>
          <td><?php echo e($user->address); ?></td>
          <td><b>Phone Number:</b></td>
          <td><?php echo e($user->phone_number); ?></td>
        </tr>
        <?php if($user->role == "student"): ?>
        <tr>
          <td><b>Father's Phone Number:</b></td>
          <td><?php echo e($user->studentInfo['father_phone_number']); ?></td>
          <td><b>Father's National ID:</b></td>
          <td><?php echo e($user->studentInfo['father_national_id']); ?></td>
        </tr>
        <tr>
          <td><b>Father's Occupation:</b></td>
          <td><?php echo e($user->studentInfo['father_occupation']); ?></td>
          <td><b>Father's Designation:</b></td>
          <td><?php echo e($user->studentInfo['father_designation']); ?></td>
        </tr>
        <tr>
          <td><b>Father's Annual Income:</b></td>
          <td><?php echo e($user->studentInfo['father_annual_income']); ?></td>
          <td><b>Mother's Phone Number:</b></td>
          <td><?php echo e($user->studentInfo['mother_phone_number']); ?></td>
        </tr>
        <tr>
          <td><b>Mother's National ID:</b></td>
          <td><?php echo e($user->studentInfo['mother_national_id']); ?></td>
          <td><b>Mother's Occupation:</b></td>
          <td><?php echo e($user->studentInfo['mother_occupation']); ?></td>
        </tr>
        <tr>
          <td><b>Mother's Designation:</b></td>
          <td><?php echo e($user->studentInfo['mother_designation']); ?></td>
          <td><b>Mother's Annual Income:</b></td>
          <td><?php echo e($user->studentInfo['mother_annual_income']); ?></td>
        </tr>
        <tr>
          <td><b>About:</b></td>
          <td colspan="3"><?php echo e($user->about); ?></td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>
    </div>
  </div>
</div>
