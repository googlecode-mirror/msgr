<?php render_partial("header", null); ?>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">RSS</a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li><a href="listing"><i class="icon-home icon-white"></i> Accueil</a></li>
                    <li class="active"><a href="folders"><i class="icon-folder-open icon-white"></i> Gérer les dossiers</a></li>
                </ul>
            </div>

        <ul class="nav pull-right">
            <li class="divider-vertical"></li>
            <li><a href="/pokemon/rss/logout"><i class="icon-user icon-white"></i> Déconnexion</a></li>
          </ul>

        </div>
    </div>
</div>

<div class="container">
    <!-- Ajouter Abonnement + Recherche -->
    <div class="row">
    
    	<div class="offset2 span8">

    		<table class="table table-bordered table-striped span6">
    			<thead>
    				<tr>
    					<th class="span4" style="text-align: center;">Titre du flux</th>
    					<th class="span2" style="text-align: center;">Actions associées</th>
    				</tr>
    			</thead>

    			<tbody>
    				<!-- Liste des dossiers existants -->
	    			<?php foreach ($params as $folder) { ?>
	    			<tr>
	    				<td><?php echo $folder["titre"] ?></td>
	    				<td><a class="btn" href="delete_folder/<?php echo $folder["id"]; ?>"><i class="icon-minus-sign"></i> Supprimer</a></td>
	    			</tr>
	    			<?php } ?>

	    			<!-- Ajout d'un dossier -->
	    			<tr>
	    				<form method="POST" action="add_folder" class="form-inline">
	    					<td>
	    						<input type="text" placeholder="Nom du nouveau dossier" id="titre" name="titre" />
	    					</td>
	    					<td>
	    						<button type="submit" class="btn"><i class="icon-plus-sign"></i> Ajouter</button>
	    					</td>
	    				</form>
	    			</tr>
    			</tbody>
    		</table>
    	</div>

    </div>
</div>
<?php render_partial("footer", null); ?>
<!-- JS à la fin, après les includes de jQuery -->
<script src="/pokemon/static/javascript/listing.js"></script>