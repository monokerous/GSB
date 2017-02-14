<?php



?>

<header class="header-fixed">
    <div class="header-limiter">

        <h1><img src="<?php echo base_url('css/logoGSB.png'); ?>" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" /></h1>


        <nav>


            <a <?php echo is_url('nouveauRapportVisiteurRegion/selectUneRegion') ? 'class="selected"' : 'class=""'; ?>  href="<?php echo site_url('nouveauRapportVisiteurRegion/selectUneRegion'); ?>" >Nouveau rapport visite par région</a>
            <a <?php echo is_url('historiqueRapportVisiteurRegion/selectUneRegion') ? 'class="selected"' : 'class=""'; ?>  href="<?php echo site_url('historiqueRapportVisiteurRegion/selectUneRegion');?>" >Historique des rapports par région</a>
            <a href="#">Comptes-Rendus</a>
            <a <?php echo is_url('nouveauRapportVisiteurRegion/selectUneRegion') ? 'class="selected"' : 'class=""'; ?> href="<?php echo site_url('nouveauRapportVisiteurRegion/selectUneRegion');?>" >Visiteur</a>

            <a <?php echo is_url('praticien/index') ? 'class="selected"' : 'class=""'; ?> href="<?php echo site_url('praticien/index'); ?>" >Praticien</a>
            <a <?php echo is_url('medicament/index') ? 'class="selected"' : 'class=""'; ?> href="<?php echo site_url('medicament/index'); ?>">Medicaments</a>
            <a href="#">Quitter</a>

        </nav>
    </div>
</header>