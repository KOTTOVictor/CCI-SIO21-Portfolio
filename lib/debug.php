<!-- Permet d'afficher au cas par cas les trois tableau qui vont me permettre d'afficher toutes les variables disponible -->


<div class="row">
    <div class="">
        <h2>SERVER</h2>
        <?php
        var_dump($_SERVER);
        ?>

    </div>
    <div class="">
        <h2>CONSTANT</h2>
        <?php
        var_dump(get_defined_constants());
        ?>

    </div>
    <div class="">
        <h2>SESSION</h2>
        <?php
        var_dump($_SESSION);
        ?>

    </div>

</div>