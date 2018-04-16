<!DOCTYPE html>
<html>
<head>
    <title>SRT/TXT Word Counter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo url('css/cover.css', [], true); ?>" >
</head>

<body class="text-center">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <h3 class="masthead-brand">Word Counter</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="<?php echo url('', [], true); ?>">Home</a>
                <a class="nav-link" href="<?php echo url('VisualSchema.pdf') ?>">MySQL Integration Schema</a>
                <a class="nav-link" href="https://github.com/kubabialy/uptowork-test/blob/master/schema.sql">MySQL Code</a>
                <a class="nav-link" href="#">Contact</a>
            </nav>
        </div>
    </header>

    <?php if (isset($message)): ?>
        <div class="container">
            <div class="alert alert-danger">
                <strong>Oops!</strong> <?php echo $message; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (!isset($includedView)): ?>

    <main role="main" class="inner cover">
        <h1 class="cover-heading">SRT/TXT Parser</h1>
        <p class="lead">All this app does is counting occurring words in given .srt or .txt file</p>
        <p class="lead">
            <a href="https://github.com/kubabialy/uptowork-test" class="btn btn-lg btn-secondary">See GitHub repository</a>
            <a href="<?php echo route('parser'); ?>" class="btn btn-lg btn-secondary">Go to parser</a>
        </p>
    </main>

    <?php else: ?>

        <?php include $includedView . '.php'; ?>

    <?php endif; ?>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <p>Cover template based on <a href="https://twitter.com/mdo">@mdo</a> work.</p>
        </div>
    </footer>
</div>



</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</html>