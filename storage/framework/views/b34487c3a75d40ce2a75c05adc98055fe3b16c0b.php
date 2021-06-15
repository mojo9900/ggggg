<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
         <div class="row">
            <div class="col-md-6 col-md-offset-3">
                   <h4>Dashboard</h4><hr>
                   <table class="table table-hover">
                      <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                      </thead>
                      <tbody>
                         <tr>
                            <td><?php echo e($LoggedUserInfo['name']); ?></td>
                            <td><?php echo e($LoggedUserInfo['email']); ?></td>
                            <td><a href="<?php echo e(route('auth.logout')); ?>">Logout</a></td>
                         </tr>
                      </tbody>
                   </table>

            </div>
         </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>