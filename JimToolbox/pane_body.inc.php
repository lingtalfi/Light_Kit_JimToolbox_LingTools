<?php


$project = $conf['project'];

function getJetbrainUrl(string $path): string
{
    global $project;
    return "jetbrains://php-storm/navigate/reference?project=$project&path=$path";
}


?>

<div class="alert alert-primary" role="alert">
    Click a link below to open the corresponding file in phpStorm.
</div>


<table class="table table-sm">
    <tr>
        <td>Routes</td>
        <td class="toolbox-wordbreak">
            <a href="<?php echo htmlspecialchars(getJetbrainUrl($conf['routesPath'])); ?>">Ling.Light_EasyRoute
                master</a>
        </td>
    </tr>
</table>