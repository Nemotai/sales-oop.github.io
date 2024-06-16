<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container mt-5">
        <div class="card border-0 mx-auto w-50">
            <div class="card-header border-0 bg-white mt-5">
                <h1 class="display-4 fw-bold text-center text-primary">LOGIN <i class="fa-solid fa-right-to-bracket"></i></h1>
            </div>
            <div class="card-body">
                <form action="../actions/login.php" method="post" class="w-75 mx-auto">
                    <div class="row mb-3 g-2">
                        <label for="username" class="col-md-3 col-form-label text-md-end text-secondary small">Username</label>
                        <div class="col-md-8">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                        </div>
                    </div>
                    <div class="row mb-3 g-2">
                        <label for="password" class="col-md-3 col-form-label text-md-end text-secondary small">Password</label>
                        <div class="col-md-8">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="row mb-3 g-2">
                        <div class="col-md-8 offset-md-3">
                            <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
                        </div>
                    </div>
                    <div class="row mb-3 g-2">
                        <div class="col-md-8 offset-md-3 text-center">
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#registration">Create an Account</button>
                        </div>
                    </div>
                </form>
                
                <!-- REGISTRATION MODAL -->
                <div class="modal fade" id="registration" tabindex="-1" aria-labelledby="registration" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-5">
                                <h1 class="display-4 fw-bold text-danger text-center"><i class="fa-solid fa-user-plus"></i> Registration</h1>

                                <form action="../actions/user-actions.php" method="post" class="w-75 mx-auto pt-4 p-5">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="first-name" class="form-label small text-secondary">First Name</label>
                                            <input type="text" name="first_name" id="first-name" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="last-name" class="form-label small text-secondary">Last Name</label>
                                            <input type="text" name="last_name" id="last-name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label for="username" class="form-label small text-secondary">Username</label>
                                            <input type="text" name="username" id="username" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md">
                                            <label for="password" class="form-label small text-secondary">Password</label>
                                            <input type="password" name="password" id="password" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md">
                                            <button type="submit" class="btn btn-danger w-100" name="register">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>