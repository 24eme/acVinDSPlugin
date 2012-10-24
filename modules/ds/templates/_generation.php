<form id="generation_form" action="<?php echo url_for('ds_generation'); ?>" method="post">
<h2>Génération des formulaires de déclaration</h2>
<?php echo $generationForm->renderGlobalErrors(); ?>
<?php echo $generationForm->renderHiddenFields(); ?>
<div class="generation_facture_options">
    <ul>
        <li>
        <span>1. <?php  echo $generationForm['regions']->renderlabel(); ?></span>
              <?php echo $generationForm['regions']->renderError() ?> 
              <?php  echo $generationForm['regions']->render(); ?>        
        </li>
        
        <li>
        <span>2. <?php  echo $generationForm['operateur_types']->renderlabel(); ?></span>                
              <?php echo $generationForm['operateur_types']->renderError() ?> 
              <?php  echo $generationForm['operateur_types']->render(); ?>
        </li>
        <li>
            <div class="ligne_form champ_datepicker">
                <?php  echo $generationForm['date_declaration']->renderlabel(); ?>       
                <?php echo $generationForm['date_declaration']->renderError() ?>  
                <?php  echo $generationForm['date_declaration']->render(); ?>
            </div>
        </li>
    </ul>    
</div>
</form>

<div class="generation_ds">
    <span>Cliquer sur "Générer" pour lancer la création des formulaire</span>
        <a href="#" id="generation" class="btn_majeur btn_vert">Générer</a>
</div>
<div class="historique_generation_ds">
    <span>Consulter l'historique de générations de formulaire de la DS :</span>
        <a href="<?php echo url_for('ds_historique_generation'); ?>" id="historique_generation" class="btn_majeur btn_jaune">Consulter</a>
</div>

<script type="text/javascript">
    
    $(document).ready( function()
	{
            $('#generation').bind('click', function()
            {
                $('form#generation_form').submit();
            });
        });
    
</script>

