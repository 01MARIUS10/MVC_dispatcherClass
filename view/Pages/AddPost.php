<div class="newPub">
        <div class=" m-4 ">
          <h2 class="text-center pt-2">add your new publication</h2>
          <form class="p-2 mb-2">
            <div class="d-flex flex-wrap row">
              <div class="col-8">
                <input type="text" class="form-control mb-2" placeholder="Title...">
                <textarea class="form-control mb-2" id="exampleFormControlTextarea1" placeholder="Content..." rows="4"></textarea>
              </div>
              <div class="col mb-2">
                <input type="text" class="form-control h-100 " placeholder="Image">           
              </div>
            </div>
            <div class="form-inline row">
              <div class="col-8">
                <select id="inputState" class="form-control w-100 mb-2">
                    <?php foreach ($post_type as $type) :?>
                    <option> <?=$type->type_name?> </option>
                    <?php endforeach; ?>
                </select>
              </div>
              <div class="col">
                <button type="button" class="btn btn-primary col mb-2">Add</button>
              </div>
            </div>
          </form>
        </div>
      </div>
