<?php
use_helper('Float');
?>
<h2>10 dernières générations : </h2>
<fieldset>

    <?php
    if (count($generations) == 0):
        ?>
        Aucune génération de DS
        <?php
    else :
        ?>
        <table class="table_recap">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Statut</th>
                    <th>Type</th>
                    <th>Génération</th>
                    <th>Nb DS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($generations as $generation) :
                    $documents = $generation->value[GenerationClient::HISTORY_VALUES_DOCUMENTS];
                    ?>
                    <tr>
                        <td><?php echo GenerationClient::getInstance()->getDateFromIdGeneration($generation->key[GenerationClient::HISTORY_KEYS_TYPE_DATE_EMISSION]); ?></td>
                        <td><?php echo $generation->value[GenerationClient::HISTORY_VALUES_STATUT]; ?></td>
                        <td><?php echo 'DS'; ?></td>
                        <td><?php echo link_to($generation->key[GenerationClient::HISTORY_KEYS_TYPE_DATE_EMISSION], 'generation_view', array('type_document' => GenerationClient::TYPE_DOCUMENT_DS, 'date_emission' => $generation->key[GenerationClient::HISTORY_KEYS_TYPE_DATE_EMISSION])); ?></td>
                        <td><?php
                            echo $generation->value[GenerationClient::HISTORY_VALUES_NBDOC];
                    ?></td>
                    </tr>
    <?php endforeach; ?>
            </tbody>
        </table>
<?php
endif;
?>
</fieldset>
<div class="historique_generation_ds">
    <span>Consulter l'historique de générations DS</span>
        <a href="<?php echo url_for('generation_list',array('type_document' => 'DS')); ?>" id="historique_generation" class="btn_majeur">Consulter</a>
</div>
