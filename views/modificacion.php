<h2>Modificación de datos de la entidad <?= $entidad->getNom() ?></h2>
    <form method="POST">
        <label>Nombre:</label><br>
            <input type="text" name="nombre" value="<?= $entidad->getNom() ?>"></input><br>
        <label>Planeta de origen:</label><br>
            <input type="text" name="planetaOrigen" value="<?= $entidad->getPlanetaO() ?>"></input><br>
        <label>Nivel de estabilidad:</label><br>
            <input type="number" name="nivelEstabilidad" value="<?= $entidad->getNivelEstabilidad() ?>"></input><br>
        <label>Antigüedad:</label><br>
            <input type="text" name="antiguedad" value="<?= ($entidad instanceof ArtefactoAntiguo) ? $entidad->getAntiguedad() : "" ?>"></input><br>
        <label>Dieta:</label><br>
            <input type="text" name="dieta" value="<?= ($entidad instanceof FormaDeVida) ? $entidad->getDieta() : "" ?>"></input><br>
        <label>Dureza:</label><br>
            <input type="text" name="dureza" value="<?= ($entidad instanceof MineralRaro) ? $entidad->getDureza() : "" ?>"></input><br>
        <button type="submit">Modificar</button>
    </form>