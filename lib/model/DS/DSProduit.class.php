<?php
/**
 * Model for DSProduit
 *
 */

class DSProduit extends BaseDSProduit {

    function updateProduit($produit)
    {
        $this->produit_hash = $produit->getHash();
        $this->produit_libelle = $produit->getLibelle();
        $this->stock_initial = $produit->total;
        $this->stock_revendique = 0;
    }
}