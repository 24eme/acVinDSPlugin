<form action="<?php echo url_for('ds_edition_operateur_validation_visualisation',array('identifiant' => $ds->identifiant,'campagne' => $ds->campagne)); ?>" method="post" id="ds_edition_validation_form">
<fieldset id="dsRecapitulatif">
        <table id="ds_recapitulatif_table" class="table_recap">
        <thead>
            <tr>
                <th>Produits</th>
                <th>Stock initial</th>
                <th>Volume revendiqué</th>
            </tr>
        </thead>
        <tbody class="ds_recapitulatif_tableBody">
            <?php foreach ($ds->declarations as $declaration) :
            ?>
            <tr id="ds_declaration_recapitulatif">
                <td class="ds_recap_declaration_appelation">
                    <?php echo $declaration->produit_libelle; ?>
                </td>
                <td class="ds_recap_declaration_stockInitial">
                    <?php echo $declaration->stock_initial; ?>
                </td>
                <td class="ds_recap_declaration_vr">
                    <?php echo $declaration->stock_revendique; ?>
                </td>
              </tr>
            <?php
            endforeach;
            ?>
        </tbody>
        </table> 
</fieldset>
<div id="ds_recapitulatif_commentaires" class="ligne_form ligne_form_alt">
    <label>Commentaires&nbsp;: </label>
            <span style="width: 100%; height: 100%;"><?php 
        echo $ds->commentaires;
        ?></span>
    </textarea>
</div>
<div id="ligne_btn">

        <a href="<?php echo url_for('ds_edition_operateur',array('identifiant' => $ds->identifiant,'campagne' => $ds->campagne)); ?>" class="btn_etape_prec">
            <span>Etape précédente</span>
        </a> 
        <div class="btnValidation">
            <span>&nbsp;</span>
        <button type="submit" id="ds_edition_validation" class="btn_majeur btn_valider ds_declaration_validation">Terminer</button>

        </div>
</div>
    
</form>