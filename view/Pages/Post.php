

<article class="mt-2">
    <div class="card-deck publish ">
          <?php foreach ($Post as $post) :?>
            <div class="card mb-3">
              <img class="card-img-top img-fluid" src="<?=ROOT?>/assets/_post/<?=$post->post_id?>.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?=$post->post_type?></h5>
                <p class="card-text"><?=$post->post_content?></p>
              </div>
              <div class="card-footer d-flex ">
                  <button class=" btn-outline-dark p-1 mr-1" type="button"><img class="icon" src="assets/assets-icons/coeur.png" alt="coeur"></button>
                  <button class=" btn-outline-dark p-1 mr-1" type="button"><img class="icon" src="assets/assets-icons/commentaire-alt.png" alt="com"></button>
                  <button class=" btn-outline-dark p-1 mr-1" type="button"><img class="icon" src="assets/assets-icons/panier.png" alt="panier"></button>
                  <button class=" btn-outline-dark ml-auto p-1 mr-1" type="button"><img class="icon" src="assets/assets-icons/partager.png" alt="partager"></button>
              </div>
            </div>
          <?php endforeach?>
    </div>
</article>


