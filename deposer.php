<html lang="en">
<head>
</head>
<body id="top" class="landing-page">
<header>
    <?php
    include('menu.php');
    ?>
</header>
<div class="ibox-content" style= "margin-top: 100px">
    <div class="row">
        <div class="col-sm-6 b-r"><h3 class="m-t-none m-b"> Déposer votre animal !</h3>
            <p>Sign in today for more expirience.</p>
            <form role="form">
                <div class="form-group"><label>Email</label> <input type="email" placeholder="Enter email" class="form-control"></div>
                <div class="form-group"><label>Password</label> <input type="password" placeholder="Password" class="form-control"></div>
                <div>
                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Log in</strong></button>
                    <label> <input type="checkbox" class="i-checks"> Remember me </label>
                </div>
            </form>
        </div>
        <div class="col-sm-6"><h4>Not a member?</h4>
            <p>You can cre:</p>
            <p class="text-center">
                <a href=""><i class="fa fa-sign-in big-icon"></i></a>
            </p>
        </div>
    </div>
</div>


<footer>
    <?php
    include('nousContacter.php');
    ?>
</footer>
</body>
