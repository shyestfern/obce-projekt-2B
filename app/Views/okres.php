<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>

<?= anchor('okres/'.$kodOkresu.'/strankovani/10', 'Po 10', ['class' => 'btn btn-primary m-2']) ?>
<?= anchor('okres/'.$kodOkresu.'/strankovani/20', 'Po 20', ['class' => 'btn btn-primary m-2']) ?>
<?= anchor('okres/'.$kodOkresu.'/strankovani/50', 'Po 50', ['class' => 'btn btn-primary m-2']) ?>
<?= anchor('okres/'.$kodOkresu.'/strankovani/100', 'Po 100', ['class' => 'btn btn-primary m-2']) ?>

<?php
    $table = new \CodeIgniter\View\Table();
    $table->setHeading('Název obce', 'Počet');

    foreach($obec as $row){
        $table->addRow($row->nazev, $row->pocet);
    }

    $template = array(
        'table_open'=> '<table class="table table-bordered">',
        'thead_open'=> '<thead>',
        'thead_close'=> '</thead>',
        'heading_row_start'=> '<tr>',
        'heading_row_end'=>' </tr>',
        'heading_cell_start'=> '<th>',
        'heading_cell_end' => '</th>',
        'tbody_open' => '<tbody>',
        'tbody_close' => '</tbody>',
        'row_start' => '<tr>',
        'row_end'  => '</tr>',
        'cell_start' => '<td>',
        'cell_end' => '</td>',
        'row_alt_start' => '<tr>',
        'row_alt_end' => '</tr>',
        'cell_alt_start' => '<td>',
        'cell_alt_end' => '</td>',
        'table_close' => '</table>'
    );

    $table->setTemplate($template);
    echo $table->generate();
    echo $pager->links();
?>

<?= $this->endSection(); ?>