<?php

$topics = [
    'Deployments' => 'How do you get your code from your fingertips into production?',
    'Tools' => 'What IDE / Editor do you use?
What feaatures do you find helpful?
Database Client?
Other tools?',
];
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Burlington PHP</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">
                Burlington PHP -- (not really) JeoPHPardy
            </h3>
        </div>
    </div>
    <div class="row">
        <?php foreach ($topics as $topic => $description): ?>
<?php
$containerId = str_replace(' ', '', strtolower($topic));
?>
        <div class="col-md-4">
        <a id="modal-898836" href="#modal-container-<?= $containerId ?>" role="button" class="btn" data-toggle="modal"><?= $topic ?></a>

            <div class="modal fade" id="modal-container-<?= $containerId ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                ×
                            </button>
                            <h4 class="modal-title" id="myModalLabel">
<?= $topic ?>
                            </h4>
                        </div>
                        <div class="modal-body">
<?= nl2br($description) ?>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <?php endforeach ?>
    </div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
