<h2>Modificación de datos de la entidad <?= $entidad->getNom() ?></h2>
    <form method="POST">
        <label>Nombre:</label>
            <input type="text" name="nombre" value="<?= $entidad->getNom() ?>"></input>
        <label>Planeta de origen:</label>
            <input type="text" name="planetaOrigen" value="<?= $entidad->getPlanetaO() ?>"></input>
        <label>Nivel de estabilidad:</label>
            <input type="number" name="nivelEstabilidad" value="<?= $entidad->getNivelEstabilidad() ?>"></input>
        <label>Antigüedad:</label>
            <input type="text" name="antiguedad" value="<?= ($entidad instanceof ArtefactoAntiguo) ? $entidad->getAntiguedad() : "" ?>"></input>
        <label>Dieta:</label>
            <input type="text" name="dieta" value="<?= ($entidad instanceof FormaDeVida) ? $entidad->getDieta() : "" ?>"></input>
        <label>Dureza:</label>
            <input type="text" name="dureza" value="<?= ($entidad instanceof MineralRaro) ? $entidad->getDureza() : "" ?>"></input>
        <button type="submit">Modificar</button>
    </form>