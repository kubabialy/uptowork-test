<main role="main" class="inner cover">
    <h1 class="cover-heading">Upload your file</h1>
    <p class="lead">This app was created as a recruitment task. All this app does is counting occurring words in given .srt or .txt file</p>

    <form method="post" action="<?php echo route('parserAction'); ?>" enctype="multipart/form-data">
        <label class="btn btn-lg btn-secondary">
            Browse file <input id="parsed_file" name="parsed_file[]" type="file" class="input-group" hidden>
        </label>

        <label class="btn btn-lg btn-secondary">
            Get Results <input type="submit" hidden>
        </label>
    </form>
</main>