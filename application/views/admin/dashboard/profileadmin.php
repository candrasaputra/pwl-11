<section class="content">
    <div class='row'>
        <div class='col-xs-12'>
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#fa-icons" data-toggle="tab">Edit Profil <?php echo $cookie['c_fullname']?></a></li>
                </ul>
                <div class="tab-content">

<!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              Edit Password
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Password</h4>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="<?php echo site_url('admin/dashboard/proses_edit_pass'); ?>" >
                        <table hight="80px">
                            <tr>
                                <td>New Password </td>
                                <td><input type="password" name="pass" class="form-control" required/></td>
                            </tr>
                        </table>
                      
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Ubah">
                      </div>
                  </form>
                </div>
              </div>
            </div>
            <br/>
            <br/>


                <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('admin/dashboard/proses_edit_profile');?> ">
                    <label>ID</label><br/>
                    <input type="text" name="id" placeholder="<?php echo $profile->id_login;?>" disabled/>
                    <br/>
                    <br/>

                    <label>Nama</label><br/>
                    <input type="text" name="nama" value="<?php echo $profile->nama;?>"  required/>
                    <br/>
                    <br/>

                    <label>Username</label><br/>
                    <input type="text" name="username" value="<?php echo $profile->username;?>" required/>
                    <br/>
                    <br/>

                    <label>email</label><br/>
                    <input type="text" name="email" value="<?php echo $profile->email;?>" required/>
                    <br/>
                    <br/>

                    <label>HP</label><br/>
                    <input type="text" name="hp" value="<?php echo $profile->hp;?>" required/>
                    <br/>
                    <br/>

                    <label>Foto</label><br/>
                    <input type="file" name="foto" />
                    *jpg, jpeg, png
                    <br/>
                    <br/>

                    <input type="hidden" name="fotosaatini" value="<?php echo $profile->img;?>" />
                    <input type="submit" value="Simpan" />
                </form>

                </div><!-- /.tab-content -->
            </div><!-- /.nav-tabs-custom -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->