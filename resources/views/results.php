<main role="main" class="inner cover">
    <h1 class="cover-heading">Results</h1>
    <p class="lead">Parsing results</p>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Word</th>
            <th scope="col">Occurrences</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($results as $key => $value): ?>
            <tr>
                <th scope="row"><?php echo $key; ?></th>
                <td><?php echo $value; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</main>