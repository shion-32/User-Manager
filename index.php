<?php
require_once __DIR__ . '/foo.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>User Manager</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <button class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#create"><i class="fa fa-plus"></i></button>
                <table class="table table-striped table-hover mt-2">
                  <thead class="table-dark">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($result as $res) { ?>
                    <tr>
                      <td><?php echo $res->user_id; ?></td>
                      <td><?php echo $res->user_name; ?></td>
                      <td><?php echo $res->user_email; ?></td>
                      <td><a href="?id=<?php echo $res->user_id; ?>" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit<?php echo $res->user_id; ?>"><i class="fa fa-edit"></i></a>
                      <a href="?id=<?php echo $res->user_id; ?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo $res->user_id; ?>"><i class="fa fa-trash-alt"></i></a></td>
                    </tr>
                    <!-- Modal edit -->
                      <div class="modal fade" id="edit<?php echo $res->user_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Изменить запись</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                              <form action="?id=<?php echo $res->user_id; ?>" method="post">
                                <div class="form-group">
                                  <small>Имя</small>
                                  <input type="text" class="form-control" name="name" value="<?php echo $res->user_name; ?>">
                                </div>
                                <div class="form-group">
                                  <small>Email</small>
                                  <input type="text" class="form-control" name="email" value="<?php echo $res->user_email; ?>">
                                </div>
                                <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                              <button type="submit" class="btn btn-primary" name="edit">Сохранить</button>
                            </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Modal edit -->

                       <!-- Modal delete -->
                      <div class="modal fade" id="delete<?php echo $res->user_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Удалить запись</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                              <form action="?id=<?php echo $res->user_id; ?>" method="post">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                              <button type="submit" class="btn btn-primary" name="delete">Удалить</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Modal delete -->

                    <?php } ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal create -->
    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Добавить запись</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <div class="form-group">
                <small>Имя</small>
                <input type="text" class="form-control" name="name">
              </div>
              <div class="form-group">
                <small>Email</small>
                <input type="text" class="form-control" name="email">
              </div>
              <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            <button type="submit" class="btn btn-primary" name="add">Сохранить</button>
          </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal create -->
  </body>
</html>
