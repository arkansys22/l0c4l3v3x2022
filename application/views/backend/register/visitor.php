<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>aSPanel | Registrasi</title>
  <?php $this->load->view('backend/metapanel')?>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <b>aS</b>Panel Admin
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Daftar Sekarang!</p>

      <?php echo form_open('register'); ?>
          <span>Full Name</span>
          <input type="text" class="form-control" name="nama" placeholder="Full Name" required>
          <small><?php echo form_error('nama'); ?></small><br>

          <input type="text" class="form-control" name="user_detail_no_telp" placeholder="Phone" required>
          <small><?php echo form_error('user_detail_no_telp'); ?></small><br>

          <input type="email" class="form-control" name="email" placeholder="Email" required>
          <small><?php echo form_error('email'); ?></small><br>

          <input type="file" class="form-control" name="user_gambar" accept="image/*" capture="user">
          <small><?php echo form_error('user_gambar'); ?></small><br>

          <input type="text" class="form-control" name="user_detail_ktp" placeholder="ID Card" required>
          <small><?php echo form_error('user_detail_ktp'); ?></small><br>

          <?php $records_tenant = $this->Crud_m->view_ordering('user_tenant','user_tenant_id','ASC'); ?>
          <select name='user_detail_agama' class="form-control select2" style="width: 100%;">
            <option selected='selected' value=''>Choose Tenant</option>
            <?php foreach ($records_tenant as $row) {

                echo"<option value='$row[user_tenant_id]'>$row[user_tenant_nama]</option>";
  
         } ?>
        </select><br>

          <input type="text" class="form-control" name="user_detail_floor" placeholder="Floor" required>
          <small><?php echo form_error('user_detail_floor'); ?></small><br>

          <input type="text" class="form-control" name="user_detail_contactto" placeholder="Contact To" required>
          <small><?php echo form_error('user_detail_contactto'); ?></small><br>

          <input type="text" class="form-control" name="user_detail_reason" placeholder="Reason" required>
          <small><?php echo form_error('user_detail_reason'); ?></small><br>

          <input type="date" class="form-control" name="user_detail_vdatefrom" required>
          <small><?php echo form_error('user_detail_vdatefrom'); ?></small><br>

          <input type="date" class="form-control" name="user_detail_vdateend" required>
          <small><?php echo form_error('user_detail_vdateend'); ?></small><br>

          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <small><?php echo form_error('password'); ?></small><br>


          <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
          <small><?php echo form_error('password2'); ?></small><br>
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
          <div class="col-8">
            <a href="login" class="text-center">Sudah punya akun, Masuk!</a>
          </div>
          <!-- /.col -->
        </div>
      <?php echo form_close(); ?>


    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<?php $this->load->view('backend/js')?>
</body>
</html>
