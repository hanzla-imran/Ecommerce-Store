
<div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserFirstName">Slider Heading 1</label>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" id="modalEditUserFirstName" name="heading" class="form-control" value="<?= $row['slider_heading_1'] ?>" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLastName">Slider Heading 2</label>
            <input type="text" id="modalEditUserLastName" name="heading_2" class="form-control" value="<?= $row['slider_heading_2'] ?>" />
          </div>
          <div class="col-12">
            <label class="form-label" for="modalEditUserName">Slider Desc</label>
            <input type="text" id="modalEditUserName" name="slider_desc" class="form-control" value="<?= $row['slider_desc'] ?>" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserEmail">Background Image</label>
            <input type="file" id="modalEditUserEmail" name="background_img" class="form-control" />
          </div>

          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditTaxID">Slider Link</label>
            <input type="text" id="modalEditTaxID" name="slider_link" class="form-control modal-edit-tax-id" value="<?= $row['slider_link'] ?>" />
          </div>




          <div class="col-12 text-center">