<!DOCTYPE html>
<html>
<head>
    <title>Listado de Entidades Galácticas</title>
</head>
<body>
    <h1>Entidades</h1>

    <a href="index.php?action=registro&tipo=fdv">Registrar Forma de Vida</a><br>
    <a href="index.php?action=registro&tipo=mineral">Registrar Mineral Raro</a><br>
    <a href="index.php?action=registro&tipo=artefacto">Registrar Artefacto Antiguo</a><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>Identificador</th>
            <th>Nombre</th>
            <th>Planeta de origen</th>
            <th>Nivel de estabilidad</th>
            <th>Antigüedad</th>
            <th>Dieta</th>
            <th>Dureza</th>
            <th>Reacción</th>
            <th>Botones de edición</th>
        </tr>

        <?php foreach ($entidades as $entidad) : 
            $estiloAlerta = ($entidad->getNivelEstabilidad() < 3) ? 'style="background-color: #ffcccc; color: #990000;"' : '';
            ?>
        <tr <?= $estiloAlerta ?> >
            <td><?= $entidad->getId() ?></td>
            <td><?= $entidad->getNom() ?></td>
            <td><?= $entidad->getPlanetaO() ?></td>
            <td><?= $entidad->getNivelEstabilidad() ?></td>
            <td><?= ($entidad instanceof ArtefactoAntiguo) ? $entidad->getAntiguedad() : "N/A" ?></td>
            <td><?= ($entidad instanceof FormaDeVida) ? $entidad->getDieta() : "N/A" ?></td>
            <td><?= ($entidad instanceof MineralRaro) ? $entidad->getDureza() : "N/A" ?></td>
            <td><?= $entidad->reaccionar() ?></td>
            <td>
                <a href="index.php?action=modificacion&id=<?= $entidad->getId() ?>">Editar</a>
                |
                <a href="index.php?action=expulsion&id=<?= $entidad->getId() ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>
