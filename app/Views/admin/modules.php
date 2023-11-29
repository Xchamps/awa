<?= view('admin/header');?>
      <!-- main navigation ends here-->
      <main>
        <div class="content-wrapper">
          <div class="content-wrapper-before bg-7"></div>
          <div class="content-header">
            <h2 class="text-capitalize">Modules</h2>
            <div class="header-elements scStdntsListTabs">
              <ul class="nav nav-pills nav-stacked">
                <li class="">
                <a href="<?= base_url()?>admin/add-module" class="btn btn-white text-capitalize">Add module</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="content-body">
            <div class="card">
              <div class="card-header">
                <h3 class="text-capitalize">Modules list</h3>
              </div>
              <div class="card-content">
                <table class="table table-striped custom-table">

                  <thead>
                    <tr>
                      <th class="text-capitalize">S no</th>
                      <th class="text-capitalize">module name</th>
                      <th class="text-capitalize">module type</th>
                      <th class="text-capitalize">module status</th>
                      <th class="text-capitalize">Action</th>
                    </tr>
                  </thead>
                  <?php 
                  $i=1;
                  if(!empty($modules)){
          foreach($modules as $module) {
               ?>
                  <tbody>
                    <tr>
                      <td><?= $i;?></td>
                      <td><?= $module['name']?></td>
                      <td><?= $module['module_type']?></td>
                      <td><?= $module['status']?></td>
                      <td>
                        <a href="<?= base_url()?>admin/module-view/<?= $module['id']?>" class="btn btn-sm btn-default text-capitalize">view</a>
                        <a href="<?= base_url()?>admin/edit-module/<?= $module['id']?>" class="btn btn-sm btn-default text-capitalize">Edit</a>
                        <button class="btn btn-sm btn-success text-capitalize" data-toggle='modal' type="button" data-target='#activeModal' data-id="<?= $module['id']?>">active</button>
                      <button class="btn btn-sm btn-danger text-capitalize" data-toggle='modal' type="button" data-target='#suspendModal' data-id="<?= $module['id']?>">Suspend</button>
                      </td>
                    </tr>
                  </tbody>
                  <?php
                $i++;
                 }} ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <div id="suspendModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <h3 class="text-center text-info">Are you sure to suspend the module</h3>
      </div>
      <div class="modal-footer text-center">
        <button type="submit" class="btn btn-default text-capitalize text-capitalize" data-dismiss="modal">cancel</button>
        <button type="submit" class="btn btn-default text-capitalize text-capitalize btn-primary">Remove</button>
      </div>
    </div>
  </div>
</div>

<!-- active modal -->
<!-- confirmation modal -->
<div id="activeModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <h3 class="text-center text-info">Are you sure to activate the module</h3>
      </div>
      <div class="modal-footer text-center">
        <button type="submit" class="btn btn-default text-capitalize text-capitalize" data-dismiss="modal">cancel</button>
        <button type="submit" class="btn btn-default text-capitalize text-capitalize btn-primary">Remove</button>
      </div>
    </div>
  </div>
</div>
   
    <!-- js includes -->
    <!-- jquery library -->
    <script src='<?= base_url()?>public/assets/js/jquery-3.3.1.min.js'></script>

    <!-- Latest bootstrap compiled JavaScript -->
    <script src="<?= base_url()?>public/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src='<?= base_url()?>public/assets/js/main.js'></script>
    




  </body>
</html>